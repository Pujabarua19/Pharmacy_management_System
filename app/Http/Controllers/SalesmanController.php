<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Salesman;
class SalesmanController extends Controller
{
               public function success(Request $request){

            DB::table('salesmen')->insert(
                 [
               'name'=>$request->name,
               'mobile'=>$request->mobile,
               'gender'=>$request->gender,
                'salary'=>$request->salary,
                'address'=>$request->address,

                 
                 ]
            );


        

           return redirect('/addsalesman');
        }




         public function salesman(){
        $salesmen= Salesman::all();
        return view('frontend.pages.addsalesman')->with('salesmen',$salesmen);
    // return $salesmen;

}

}
