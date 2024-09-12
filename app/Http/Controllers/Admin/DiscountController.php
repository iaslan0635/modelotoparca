<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $discounts = Discount::orderByDesc('id')->get();

        return view('admin.discount.index', compact('discounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.discount.store');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->rules($request);

        Discount::create($data);

        return redirect()->route('admin.discounts.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Discount $discount)
    {
        return view('admin.discount.edit', compact('discount'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Discount $discount)
    {
        $data = $this->rules($request);

        $discount->update($data);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Discount $discount)
    {
        $discount->delete();

        return back();
    }

    /**
     * @param Request $request
     * @return array
     */
    protected function rules(Request $request): array
    {
        $data = $request->validate([
            "rule" => ['required'],
            'type' => ['required'],
            'name' => ['required'],
            'amount' => ['required'],
            'customer_group_id' => ['required'],
            'coupon' => ['required'],
            'starts_at' => ['required'],
            'ends_at' => ['required'],
            'max_uses' => ['required'],
            "active" => ['required'],
        ]);

        if ($request->has('product_id')) {
            $data['data']['product_id'] = $request->input('product_id');
        } elseif ($request->has('categories')) {
            $data['data']['categories'] = $request->input('categories');
        } elseif ($request->has('brand_id')) {
            $data['data']['brand_id'] = $request->input('brand_id');
        }
        return $data;
    }
}
