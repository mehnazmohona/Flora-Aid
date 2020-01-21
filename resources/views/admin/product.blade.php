@extends('admin.layout.master')

@section('content')
<ol class="breadcrumb">
                  <li><a href="{{url('/backend/deshboard')}}"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="{{ url('backend/product') }}">Product</a></li>
                </ol>
                <div class="col-md-12">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                All Retailer Information View
                             </div>
                             <div class="col-md-3 text-right">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <table class="table table-responsive table-striped table-hover table_cus">
                          		<thead class="table_head">
                            		<tr>
                                    	  <th>Product Title</th>
                                        <th>Product Type</th>
                                        <th>Company/Organization</th>
                                        <th>Quentity</th>
                                        <th>Price</th>
                                        <th>Photo</th>
                                        <td>Manage</td>
                                    </tr>
                            	</thead>
                                <tbody>
                                  @foreach ($product as $products)
                                	<tr>
                                    	  <td>{{ $products->productName }}</td>
                                        <td>{{ $products->productType }}</td>
                                        <td>{{ $products->company }}</td>
                                        <td>{{ $products->productQuantity }}</td>
                                        <td>{{ $products->price }}</td>
                                        <td><img src="{!! asset('userInterface/product/'.$products->image) !!}" style="height: 50px;"></td>
                                        <td>
                                            <form class="form-inline" action="{{ route('product.delete', $products->id) }}" method="post">
                                            @csrf
                                            <input type="hidden" name="cart_id" />
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-lg"></i></button>
                                          </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                          </table>
                      </div>
                    </div>
                </div><!--col-md-12 end-->
@endsection