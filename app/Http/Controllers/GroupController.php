<?php

namespace App\Http\Controllers;
use App\Models\Group;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::with('campain')->get();
        return($groups);
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
            'group_name'=>'required',
            'group_campaing'=>'required',
        ];
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails())
        {
            return($validator->messages());
        }else{
            $data = $request->all();
            $new_group = Group::create($data);
            return($new_group);
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
        $group = Group::with('campain')->findOrFail($id);
        return($group);
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
        $group = Group::findOrFail($id);
        $group->update($request->all());
        return($group);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group = Group::destroy($id);
        return(200);
    }
}
