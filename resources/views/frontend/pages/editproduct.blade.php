@extends('frontend.layouts.default')
@section('content')
                    <div class="modal fade" data-toggle="modal" id="modalAddProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header text-center" style="background-color: #0ac198;color: white">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    
                                    <h4 class="modal-title w-50 font-bold" >ADD PRODUCT</h4>

                                <!-- </div> -->

                                     <form id="login" method="post" action= "{{ URL::to('p_update', $data->id) }}">
                                {{csrf_field()}}

                                            <div class="md-form">
                                    
                                        <label data-error="wrong" data-success="right" for="defaultForm-email">Pharmacy Name</label>
                                    <select name="ph_name" class="form-control" value="{{ $product->ph_name }}">
                                      @($Pharmacy_id as $p)
                                      <option value="{{$p->id}}">{{$p->name}}</option>
                                      @end
                                    </select>
                                    </div>



                                <div class="md-form">

                                        <label data-error="wrong" data-success="right" for="defaultForm-email">District</label>
                                        <select name="c_name" class="form-control" value="{{ $product->c_name }}">
                                      @($Pharmacy_id as $p)
                                      <option value="{{$p->id}}">{{$p->city}}</option>
                                      @end
                                    </select>
                                    </div>
                                    <div class="md-form">

                                        <label data-error="wrong" data-success="right" for="defaultForm-email">Product Name</label>
                                        <input name="p_name" type="text" id="defaultId" class="form-control validate" value="{{ $product->p_name }}" >
                                    </div>
                                    <div class="md-form">
                                        <label data-error="wrong" data-success="right" for="defaultForm-email">Category</label>
                                    <select name="Category_id" class="form-control" value="{{ $product->Category_id }}">
                                      @($Category_id as $d)
                                      <option value="{{$d->id}}">{{$d->cat_name}}</option>
                                      @end
                                    </select>
                                    </div>
                                    <div class="md-form">
                                        <label data-error="wrong" data-success="right" for="defaultForm-email">Brand</label>
                                        <select name="brand" class="form-control" value="{{ $product->brand }}" >
                                    @($Category_id as $d)
                                      <option value="{{$d->id}}">{{$d->brand_name}}</option>
                                      @end
                                       </select>
                                    </div>

                                    <div class="md-form">
                                        <label data-error="wrong" data-success="right" for="defaultForm-email">Selling Price</label>
                                        <input name="selling_price" type="text" id="defaultId" class="form-control validate" value="{{ $product->selling_price }}">
                                    </div>
                                    <div class="md-form">
                                        <label data-error="wrong" data-success="right" for="defaultForm-email">Quantity</label>
                                        <input name="quantity" min="1" max="1456" type="number" id="defaultId" class="form-control validate" value="{{ $product->quantity }}">
                                    </div>

                                    <div class="md-form">
                                        <label data-error="wrong" data-success="right" for="defaultForm-email">Product Description</label>
                                        <input name="details" type="text" id="defaultId" class="form-control validate" value="{{ $product->details }}">
                                    </div>
                                </div>
                                <div class="" style="text-align: center">
                                    <button type="submit" class="btn btn-success btn-round" style="alignment: center">Add Product</button>
                                </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <a data-toggle="modal" href="" type="button" data-target="#modalAddProduct" class="btn btn-primary btn-round btn-sm" style="margin-top: 3%;alignment: center"> Add Product</a>



                </div>

        
            


@stop