@extends('admin.layout.master')

@section('content')
<ol class="breadcrumb">
                  <li><a href="{{url('/backend/deshboard')}}"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="{{ url('backend/retailer') }}">Retailer</a></li>
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
                                    	  <th>Name</th>
                                        <th>Email</th>
                                        <th>Type</th>
                                        <!-- <th>Company</th> -->
                                        <!-- <th>Delete</th> -->
                                    </tr>
                            	</thead>
                                <tbody>
                                  @foreach ($retailer as $retailers)
                                	<tr>
                                    	  <td>{{ $retailers->name }}</td>
                                        <td>{{ $retailers->email }}</td>
                                        <td>{{ $retailers->type }}</td>
                                        <!-- <td>{{ $retailers->companyName }}</td> -->
                                       <!--  <td> <form class="form-inline" action="" method="post">
                      @csrf
                      <input type="hidden" name="cart_id" />
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form> </td> -->
                                    </tr>
                                    @endforeach

                                </tbody>
                          </table>
                      </div>
                    </div>
                </div><!--col-md-12 end-->
@endsection