<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;

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
            'identity' => 'required_if:type,==,individual',
            'company_name' => 'required_if:type,==,company',
            'tax_office' => 'required_if:type,==,company',
            'tax_number' => 'required_if:type,==,company',
            'phone' => 'required',
            'city' => 'required',
            'district' => 'required',
            'address' => 'required',
        ]);
        $data['genre'] = 'address';

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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        $address->delete();

        return back();
    }
}
