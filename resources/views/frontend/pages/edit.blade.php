@extends('frontend.layouts.default')
@section('content')

 <!-- <div class="jumbotron"> -->
<div class="container">
  <div class="panel panel-default">
    <div  class="panel heading">
      <h2 class="panel tittle"> Create Pharmacy</h2>
      
           </div>
           <style>
             
.container button 
{
height: 35px;
margin-top: -20px;
color: black;
background-color:#0000ff ;
}

</style>
    <div class="panel-body">
      
  <div class="container">

    <div class="form-group">    
      <form id="login" method="post" action={{ URL::to('/update', $pharmacy->id)}}>
        {{csrf_field()}}

       <div class="col-sm-7">
        <input type="text" class="form-control" value="{{ $pharmacy->name }}" id="name" placeholder="Enter name" name="name" >
      </div>
            </div>
<!--           <div class="form-group">
              <div class="col-sm-7">
        <input type="text" class="form-control" id="Age" placeholder="Enter Age" name="Age" >
      </div> -->
            
          <div class="form-group">
            <div class="col-sm-7">
        <input type="text" class="form-control" value="{{ $pharmacy->location }}" id="location" placeholder="Enter location" name="location" >
      </div>
    </div>
        <div class="form-group">
         <div class="col-sm-7">
        <input type="test" class="form-control" value="{{ $pharmacy->city }}" id="city" placeholder="Enter City" name="city">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-4">
        <button type="submit" class="btn btn-default">Save
        </button>
      </div>
    </div>
    
 
    
 
    </div>


  </div>
</div>
@stop