
@extends('frontend.layouts.default')
@section('content')
 

                                                                                
  <div class="table-responsive" style="alignment: center">          
  <table class="table">
     <div class="col-md-10">
     
 
  <h3 style="text-align: center"> <small>  <strong>Category List</strong></small></h3>
</div>
    <thead>
      <tr>
        
        <th>id</th>
        <th>Category name</th>
        
         <th>Brand name</th>
          <th>Action</th>
        
      </tr>
    </thead>
    <tbody>

    @foreach($categories as $c)
      <tr>
        <td>{{$c->id }}</td>
        <td>{{$c->cat_name }}</td>
        
        <td>{{$c->brand_name}}</td>
        
      
         <td>
   <!--  <a href="#"class="btn btn-primary">Edit</a> || -->
     <a href="{{  route('categorydelete',$c->id) }}" class="btn btn-danger btn-round" >DELETE</a> 



</td> 
</tr> 



         @endforeach
        
    </tbody>
  </table>
   @if(Session::has('message'))
<div class="alert alert-success">
  {{Session::get('message')}}
  </div>
    @endif
  </div>
</div>
       
    </div>
    @stop

    