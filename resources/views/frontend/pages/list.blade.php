    
@extends('frontend.layouts.default')
@section('content')




<!--  <div class="jumbotron"> -->



<!-- 
<script src="{{ asset('js/jquery-3.3.1.min.js  ')}}"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<!-- <div class="container"> -->
                                                                                      
  <div class="table-responsive" style="alignment: center">          
  <table class="table">
     <div class="col-md-10">
  <h3 style="text-align: center"> <small>  <strong>Pharmacy List</strong></small></h3>
</div>
    <thead>
      <tr>
        
        <th>id</th>
        <th>Pharmacy name</th>
        <!-- <th>Age</th> -->
        <th>Location</th>        
       <th>City</th>
      <th>Action</th>
        
      </tr>
    </thead>
    <tbody>

    @foreach($pharmacies as $pharmacy)
      <tr>
        <td>{{$pharmacy->id }}</td>
        <td>{{$pharmacy->name }}</td>
        <!-- <td>{{$pharmacy->Age }}</td> -->
        <td>{{$pharmacy->location}}</td>
        <td>{{$pharmacy->city}}</td>
      
         <td>
    <a href="{{  route('edit',$pharmacy->id) }}"class="btn btn-primary">Edit</a> ||
     <a href="{{  route('delete',$pharmacy->id) }}" class="btn btn-danger btn-round" >DELETE</a> 

<!--     <a data-toggle="modal" data-target="#{{$pharmacy->id }}" class="btn btn-danger btn-round">Delete</a>
  

   <div id="{{$pharmacy->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">delete confirmation</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this?</p>
      </div>
      <div class="modal-footer">
        <a href="{{  route('delete',$pharmacy->id) }}" class="btn btn-danger btn-round" >yes</a>

      
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> -->

</td> 
</tr> 


         @endforeach
    </tbody>
  </table>
  </div>
</div>
       
    </div>
    @stop

    