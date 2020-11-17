
@extends('frontend.layouts.default')
@section('content')
    	

        <div class="right_col" role="main">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">

                        <!-- MODAL ADD PRODUCT -->

                        <div class="modal fade" data-toggle="modal" id="modalAddProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center" style="background-color: #0ac198;color: white">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title w-50 font-bold" >ADD Salesman</h4>

                                    </div>
                                     <form id="login" method="post" action= "{{ URL::to('/s_update', $salesmen->id) }}">
                                {{csrf_field()}}
                                       <div class="modal-body mx-3">

                                            <div class="md-form">
                                                <label data-error="wrong" data-success="right" for="defaultForm-email">Name</label>
                                                <input name="name" type="text" id="defaultId" class="form-control validate" value="{{ $salesmen->name }}" >
                                            </div>
                                            <div class="md-form">
                                                <label data-error="wrong" data-success="right" for="defaultForm-email">Mobile</label>
                                                <input name="mobile" type="text" id="defaultId" class="form-control validate" value="{{ $salesmen->mobile }}">
                                            </div>
                                            <div class="md-form">
                                                <label data-error="wrong" data-success="right" for="defaultForm-email">Gender</label>
                                                <select name="gender" class="form-control" value="{{ $salesmen->gender }}">
                                                        <option  value="male">Male</option>
                                                        <option value="female">Female</option>
                                                </select>
                                            </div>


                                            <div class="md-form">
                                                <label data-error="wrong" data-success="right" for="defaultForm-email">Salary</label>
                                                <input name="salary" type="number" id="defaultId" class="form-control validate" value="{{ $salesmen->salary }}">
                                            </div>
                                            <div class="md-form">
                                                <label data-error="wrong" data-success="right" for="defaultForm-email">Address</label>
                                                <input name="address" type="text" id="defaultId" class="form-control validate" value="{{ $salesmen->address }}">
                                            </div>
<!--                                             <div class="md-form">
                                                <label data-error="wrong" data-success="right" for="defaultForm-email">Password</label>
                                                <input name="password" type="password" id="defaultId" class="form-control validate">
                                            </div> -->
                                        </div>
                                        <div class="" style="text-align: center">
                                            <button type="submit" class="btn btn-success btn-round" style="alignment: center">Add Salesman</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <a data-toggle="modal" href="" type="button" data-target="#modalAddProduct" class="btn btn-primary btn-round btn-sm" style="margin-top: 3%;alignment: center"> Add Salesman</a>



                    </div>
                    <div class="col-md-4">
                        <h3 style="text-align: center"> <small>  <strong>Salesman List</strong></small></h3>
                    </div>

                </div>
                <table class="table table-bordered" style="alignment: center">
                    <tr>
                         <th>id</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Gender</th>
                        <th>Salary</th>
                        <th>Address</th>
                        <th style="text-align: center">Action</th>

                    </tr>

                    <tr >
                        @foreach($salesmen as $s)

                            <td>{{$s->id}}</td>
                            <td>{{$s->name}}</td>
                            <td>{{$s->mobile}}</td>
                            <td>{{$s->gender}}</td>
                            <td>{{$s->salary}}</td>
                            <td>{{$s->address}}</td>
                            <td ><a href="{{ URL::to('editsalesman/'.$salesmen->id)}}">Edit</a> ||<a href="{{  route('deletesalesman',$salesmen->id) }}" class="btn btn-danger btn-round" >DELETE</a> 

<!--     <a data-toggle="modal" data-target="#" class="btn btn-danger btn-round">Delete</a>
  

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

@stop