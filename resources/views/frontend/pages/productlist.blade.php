@extends('frontend.layouts.default')
@section('content')

<!-- 
 <div class="jumbotron">

<div class="container"> -->
                                                                                      
  <div class="table-responsive">          
  <table class="table">
  
                    </div>
                <div class="col-md-10">
                    <h3 style="text-align: center"> <small>  <strong>Product List</strong></small></h3>
                </div>

            </div>
                <tr>
                    <th>Id</th>
                    <th>Pharmacy Name</th>
                    <th>District Name</th>
                    <th>Product Name</th>
                     <th>Category</th>
                    <th>Brand Name</th>
                    <th>Price</th>
                
                    <th>Quentity</th>
                    
                    <th>Action</th>
                </tr>


                    <tr>
                      @foreach($products as $p)
                            <td>{{$p->id}}</td>
                            <td>{{$p->ph_name}}</td>
                            <td>{{$p->c_name}}</td>
                            <td>{{$p->p_name}}</td>
                            <td>{{$p->Category_id}}</td>

                            <td>{{$p->brand}}</td>
                              <td>{{$p->selling_price}}</td>
                            <td>{{$p->quantity}}</td>
                            
                            <td >
                <!--  <a href="{{  URL::to('edit_p/'.$p->id) }}" class="btn btn-primary">Edit</a>|| -->
                  <a href="{{  URL::to('productdelete/'.$p->id) }}" class="btn btn-danger btn-round" >DELETE</a> 

                 <!-- a data-toggle="modal" data-target="#" class="btn btn-danger btn-round">Delete</a>
  

   <div id="#" class="modal fade" role="dialog">
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
        <a href="#" class="btn btn-danger btn-round" >yes</a>

      
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> -->

                            </td>
                        </tr>
                        @endforeach
                        @if(Session::has('message'))
<div class="alert alert-success">
  {{Session::get('message')}}
  

</div>
@endif
   
  
@stop