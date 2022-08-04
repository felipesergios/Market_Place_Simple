<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Campaign;
class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data = Campaign::all();
        $data = Campaign::with('group')->with('products')->get();
        return ($data);
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
            'campaign_name'=>'required',
        ];
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails())
        {
            return($validator->messages());
        }else{
            $data = $request->all();
            $new_campaign = Campaign::create($data);
            return($new_campaign);
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
        $data = Campaign::with('group')->with('products')->FindOrFail($id);
        return($data);
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
        $campaign = Campaign::FindOrFail($id);
        $campaign->update($request->all());
        return $campaign;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campaign = Campaign::destroy($id);
        return(200);
    }
}
