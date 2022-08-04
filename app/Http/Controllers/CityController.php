<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::with('group')->get();
        return($cities);
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
            'city_name'=>'required',
            'city_simbol'=>'required',
            'city_state'=>'required',
            'city_group_id'=>'required',
        ];
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails())
        {
            return($validator->messages());
        }else{
            $data = $request->all();
            $new_city = City::create($data);
            return($new_city);
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
        $city = City::with('group')->findOrFail($id);
        return ($city);
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
        $city = City::findOrFail($id);
        $city->update($request->all());
        return($city);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::destroy($id);
        return(200);
    }
}
