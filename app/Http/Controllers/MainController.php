<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Input;
use Session;
use DB; 
use App\user;
use App\pharmacy;
use App\Salesman;
use App\Category;
use App\Product;


class MainController extends Controller
{
    

     public function default(){
        return view('frontend.layouts.default');
    }


     public function addcompany(){
        return view('frontend.pages.addcompany');

    }
    // public function addsalesman(){
    //     return view('frontend.pages.addsalesman');

    // }
    public function productlist(){
               $products = DB::table('products')
               ->join('pharmacies', 'pharmacies.id','=','products.ph_name')
               ->join('categories', 'categories.id', '=','products.brand')
               // ->join('pharmacies', 'products.ph_name', 'pharmacies.id')
               // ->join('pharmacies', 'products.c_name', 'pharmacies.id')
               ->select('products.id', 'pharmacies.city as c_name', 'pharmacies.name as ph_name', 'categories.cat_name as Category_id','categories.brand_name as brand','products.p_name', 'products.selling_price','products.quantity')
               ->get();
               return view('frontend.pages.productlist',compact('products'));


        //         $products= Product::all();
        // return view('frontend.pages.productlist',compact('products'));

    }
      public function addcategory(){

     $data=DB::table('categories')->get();
         $pharmacy=DB::table('pharmacies')->get();
     return view('frontend.pages.addcategory')->with('Category_id',$data)->with('Pharmacy_id',$pharmacy);;
        

    }



    
    
     public function login(){
    	return view('login');
    }


         public function loginstore(Request $request){
    	$email  =$request->email;
    	$password  =$request->password;

$user     = User::where('email','=',$email)

           ->where('password','=',$password)

           ->first();


        if($user)

        {

            Session::put('userid',$user->id);
            Session::put('u_email',$user->email);
            Session::put('role',$user->role);
            return redirect('/default');

        }


    	   else{
    	   return view('/login');
    	   }
    }

    
         public function store(Request $request){



            DB::table('pharmacies')->insert(
                 [
               'name'=>$request->name,
                'location'=>$request->location,
                'city'=>$request->city,


                 ]
            );
        

           return redirect('/addcompany')->with('message','successfully Inserted.');
        }

         public function list(){
        $pharmacies= pharmacy::all();
        return view('frontend.pages.list',compact('pharmacies'));
    }
            public function edit($id){
            $pharmacy=pharmacy::find($id);
        return view('frontend.pages.edit',compact('pharmacy'));
    }

    
            public function delete($id){
                $pharmacies=pharmacy::find($id);
                if($pharmacies->delete()){
                    return redirect('/list');
                }
            }
        

    
 public function update(Request $request , $id){


        $this->validate($request, [
         'name' =>'required',
         
         'location' =>  'required',
         'city' =>  'required'
        ]);
         $pharmacy =pharmacy::find($id);
         $pharmacy->name=$request->name;
        
         $pharmacy->location=$request->location;
         $pharmacy->city=$request->city;
         $pharmacy->save();
         return redirect('/list');

    }
                 public function logout(Request $request){

                    if($request->session()->has('useremail')){
                        echo 'user found';
                    $request->session()->flush();
                    }
                    else{
                        echo 'user not found';
                    }
                

                 }
           public function save(Request $request){



            DB::table('categories')->insert(
                 [
               'cat_name'=>$request->cat_name,
                'brand_name'=>$request->brand_name,
                


                 ]
            );
        

                return redirect('/categorylist')->with('message','successfully Inserted.');
        }


           public function submit(Request $request){

            DB::table('products')->insert(
                 [
               'ph_name'=>$request->ph_name,
                'c_name'=>$request->c_name,
               'p_name'=>$request->p_name,
                'Category_id'=>$request->Category_id,
               

                 
                'brand'=>$request->brand,
                'selling_price'=>$request->selling_price,
                'quantity'=>$request->quantity,
                 'details'=>$request->details,
                 
                 ]
            );


        

           return redirect('/productlist')->with('message','successfully Inserted.');
        }





            public function edit_p($id){
            $product=Product::find($id);
            $pharm = pharmacy::find($id);
            $category = Category::find($id);
            $data['product'] = $product;
            $data['pharmacy'] = $pharm;
            $data['category'] = $category;
         return view('frontend.pages.editproduct',compact('data'));
            // return $data;
    }



public function p_update(Request $request , $id){


        $this->validate($request, [
        'ph_name' =>'required',
        'c_name' =>'required',
         'p_name' =>'required',
        'Category_id' =>'required',
         'brand' =>'required',
         'selling_price' =>  'required',
         'quantity' =>  'required',
        'details' =>  'required'
        ]);
         $p =Product::find($id);
        $p->ph_name=$request->ph_name;
        $p->c_name=$request->c_name;
         $p->p_name=$request->p_name;
        
        $p->Category_id=$request->Category_id;
        $p->brand=$request->brand;
         $p->selling_price=$request->selling_price;
         $p->details=$request->details;
         $p->save();
         return redirect('/productlist');

    }


    
                public function productdelete($id){
                $products=Product::find($id);
                if($products->delete()){
                    return redirect('/productlist');
                // echo "done";
                }

            }
        



                public function categorydelete($id){
                $categories=Category::find($id);
                if($categories->delete()){
                    return redirect('/categorylist');
                // echo "done";
                }




}





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


        

           return redirect('/salesman')->with('message','successfully Inserted.');
        }


          public function salesman(){
        $salesmen= Salesman::all();
        return view('frontend.pages.addsalesman')->with('salesmen',$salesmen);
    // return $salesmen;

}
                public function addsalesman($id){
                $salesmen=Salesman::find($id);
                if($salesmen->delete()){
                      
                     return redirect('/salesman');
                }
            }




public function s_update(Request $request , $id){


        $this->validate($request, [
        'name' =>'required',
        'mobile' =>'required',
         'gender' =>'required',
        'salary' =>'required',
         'address' =>'required',

        ]);
         $s =Salesman::find($id);
        $s->name=$request->name;
        $s->mobile=$request->mobile;
         $s->gender=$request->gender;
        
        $s->salary=$request->salary;
        $s->address=$request->address;

         $s->save();
         return redirect('/salesman');

    }

            public function edit_s ($id){
            $salesmen=Salesman::find($id);
               return view('frontend.pages.editsalesman')->with('salesmen',$salesmen);
           // return $salesmen;
    }


     public function Home(){
        return view('backend.layouts.Home');

    }

     public function details(){
        return view('backend.pages.details');

    }

public function search(Request $request){
             $searched_key=$request->c_name;               
              $data = DB::table('pharmacies')
                    ->join('products', 'pharmacies.id','=','products.ph_name')
                    ->join('categories', 'categories.id', '=','products.brand')
                   ->where('pharmacies.city', 'like' ,'%'. $searched_key.'%')
                   ->select('products.id' ,'pharmacies.name as ph_name','products.p_name', 'categories.cat_name as Category_id','categories.brand_name as brand', 'products.selling_price','products.quantity')
             ->get();
                     return view('backend.pages.details',compact('data'));
               // return $data;
    // return $searched_key;
}



// $q=Input::get('q');
// if($q!=" "){

//     $products= Product::where('c_name', 'LIKE', '%', $q, '%')
//                         ->get();
//          if(count($products)>0)
//          return view('Home') ;              
// }
// echo "not found";
// }
// public function details(){
//         return view('backend.pages.details');

// }
         public function categorylist(){
        $categories= Category::all();
        return view('frontend.pages.categorylist',compact('categories'));
    }
}




    