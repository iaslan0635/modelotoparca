<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use SoapClient;

class AddressController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => 'required',
            'first_name' => 'required_if:type,==,individual',
            'last_name' => 'required_if:type,==,individual',
            'identity' => 'required_if:type,==,individual,length:11',
            'birthdate' => 'required_if:type,==,individual',
            'company_name' => 'required_if:type,==,company',
            'tax_office' => 'required_if:type,==,company',
            'tax_number' => 'required_if:type,==,company',
            'phone' => 'required',
            'city' => 'required',
            'district' => 'required',
            'address' => 'required',
        ]);

        $data['genre'] = 'address';

        if ($data["type"] == "individual") {
            $isIdValid = $this->verifyIdentity($data);
            if (!$isIdValid) {
                return back()->withErrors(['identity' => 'Kimlik bilgileri doğrulanamadı.']);
            }
        }

        auth()->user()->addresses()->create($data);

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        return view('account.edit-address', compact('address'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Address $address)
    {
        $data = $request->validate([
            'type' => 'sometimes',
            'first_name' => 'sometimes',
            'last_name' => 'sometimes',
            'identity' => 'sometimes,length:11',
            'birthdate' => 'sometimes',
            'company_name' => 'sometimes',
            'tax_office' => 'sometimes',
            'tax_number' => 'sometimes',
            'phone' => 'sometimes',
            'city' => 'sometimes',
            'district' => 'sometimes',
            'address' => 'sometimes',
        ]);

        $data['genre'] = 'address';

        if ($data["type"] == "individual") {
            $isIdValid = $this->verifyIdentity($data);
            if (!$isIdValid) {
                return back()->withErrors(['identity' => 'Kimlik bilgileri doğrulanamadı.']);
            }
        }

        $address->update($data);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        $address->delete();

        return back();
    }

    /**
     * @param array $data
     * @return void
     */
    private function verifyIdentity(array $data): bool
    {
        $client = new SoapClient("https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx?WSDL");
        try {
            $result = $client->TCKimlikNoDogrula([
                'TCKimlikNo' => $data['identity'],
                'Ad' => $data["first_name"],
                'Soyad' => $data["last_name"],
                'DogumYili' => Carbon::parse($data["birthdate"])->format('Y'),
            ]);

            return (bool)($result->TCKimlikNoDogrulaResult);
        } catch (Exception $e) {
            report($e);
        }

        return false;
    }
}
