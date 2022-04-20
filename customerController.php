<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use Illuminate\Support\Facades\DB;

class customerController extends Controller
{
    function show(){
        $data =customer::all();
        return view('lists',['customers'=>$data]);
        
        
    }

    

    function addcustomer(){
        return view('addcustomer');
    }

     function  save(Request $request)
    {
        

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',

        ]);

        $query = DB::table('customers')->insert([
            'name' =>$request->input('name'),
            'email' =>$request->input('email'),
            'phone' =>$request->input('phone'),
        ]);

        return redirect('api/lists');

        


    }

    

        function  edit($id){
            $row = DB :: table('customers')
                ->where('id', $id)
                ->first();
            $data =[
                'Info'=>$row,
                
            ];
            

            return view('edit',$data);
        }

        function update(Request $request){
            $request -> validate([
                'name'=> 'required',
                'email'=> 'required',
                'phone'=> 'required',
            ]);

            $updating = DB :: table('customers')
                ->where('id', $request->input('user_id'))
                ->update([
                    "name"=>$request->input('name'),
                    "email"=>$request->input('email'),
                    "phone"=>$request->input('phone'),
                ]);

                return redirect('api/lists');
        }

        function delete($id){
            $delete = DB::table('customers')
                ->where('id', $id)
                ->delete();
                return redirect('api/lists');
        }

    
    
}


