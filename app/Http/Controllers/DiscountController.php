<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Discounts = Discount::with('campaing')->get();
        return ($Discounts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            'discount_size'=>'required',
            'discount_campaing'=>'required',
        ];
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails())
        {
            return($validator->messages());
        }else{
            $data = $request->all();
            $new_product = Discount::create($data);
            return($new_product);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Discount = Discount::with('campaing')->findOrFail($id);
        return($Discount);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Discount = Discount::findOrFail($id);
        $Discount->update($request->all());
        return($Discount);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Discount = Discount::destroy($id);
        return(200);
    }
}
