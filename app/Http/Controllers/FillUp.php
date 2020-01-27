<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StoreData;

class FillUp extends Controller
{
   public function adddata(Request $request){
       $this->validate($request, [ 
           'firstname' => 'required', 
           'lastname' => 'required',
            'address' => 'required',
            'email' => 'required|unique:userdata',
            'number' => 'required|unique:userdata|min:10',
       ]);
    $store = new StoreData();
    $store->firstname = $request->input('firstname');
    $store->lastname = $request->input('lastname');
    $store->address = $request->input('address');
    $store->email = $request->input('email');
    $store->number = $request->input('number');
    $store->save();
    return redirect('/')->with('message',"Data inserted!!!");
   } 

   public function showdata(){  
     $finddata = StoreData::all();
      return view('display')->with('savedata', $finddata);
   }

   public function  searchdata(Request $request){
    $check = $request->input('search');
    $iddata= StoreData::where('id',$check)->first();
        if($iddata){
        return view('display')->with('dataid', $iddata);
        } 
            else if(StoreData::where('firstname',$check)->get()){
            $namedata=StoreData::where('firstname',$check)->get();
            if($namedata){
                return view('display')->with('dataname', $namedata);
                      } 
            }
                else {
                    return "No data found";
                     }
    }



   public function editdata($id){
       $data =  StoreData::where('id',$id)->first();
       return view('update')->with('savedata', $data);
   }

   public function updatedata($id, Request $request){
    $this->validate($request, [ 
        'newfirstname' => 'required', 
        'newlastname' => 'required',
         'newaddress' => 'required',
         'newemail' => 'required',
         'newnumber' => 'required',
    ]);
    $data = StoreData::where('id', $id)->first();
    $data->firstname=$request->input('newfirstname');
    $data->lastname=$request->input('newlastname');
    $data->address=$request->input('newaddress');
    $data->email=$request->input('newemail');
    $data->number=$request->input('newnumber');
    $data->save(); 
    return redirect()->action('FillUp@showdata')->with('success', 'Data Updated Successfully!!!');
    // return redirect::route('Fillup.showdata')->withMessage('success', 'Data Updated Successfully');
    // return view('display')->with('success', 'Data Updated Successfully');
    }

   public function deletedata($id){
    $data = StoreData::find($id);
    $data->delete();
    return redirect()->action('FillUp@showdata')->with('delete','Data deleted Successfully!!!');
   }




}
