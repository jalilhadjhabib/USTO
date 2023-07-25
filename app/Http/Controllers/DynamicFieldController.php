<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DynamicField;
use Validator;
use DB;

class DynamicFieldController extends Controller
{
    function index()
    {
        $dynamic_field = DB::table('dynamic_fields')->get();
        
        return view('note.dynamic_field',['dynamic_field'=>$dynamic_field]);


    }
    public function create()
{
	        $dynamic_field = DB::table('dynamic_fields')->get();
        return view('backEnd.note.dynamic_field',['dynamic_field'=>$dynamic_field]);

}

    function insert(Request $request)
    {
     if($request->ajax())
     {
      $rules = array(
       'first_name.*'  => 'required',
       'last_name.*'  => 'required'
      );
      $error = Validator::make($request->all(), $rules);
      if($error->fails())
      {
       return response()->json([
        'error'  => $error->errors()->all()
       ]);
      }

      $first_name = $request->first_name;
      $last_name = $request->last_name;
      for($count = 0; $count < count($first_name); $count++)
      {
       $data = array(
        'first_name' => $first_name[$count],
        'last_name'  => $last_name[$count]
       );
       $insert_data[] = $data; 
      }

      DynamicField::insert($insert_data);
      return response()->json([
       'success'  => 'Data Added successfully.'
      ]);
     }
    }

    function delete_data(Request $request)
    {
        if($request->ajax())
        {
            DB::table('dynamic_fields')
                ->where('id', $request->id)
                ->delete();
            echo '<div class="alert alert-success">Data Deleted</div>';
        }
    }
}