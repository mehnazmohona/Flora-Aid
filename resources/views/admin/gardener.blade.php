@extends('admin.layout.master')

@section('content')
<ol class="breadcrumb">
                  <li><a href="{{url('/backend/deshboard')}}"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="{{ url('backend/gardener') }}">Gardener</a></li>
                </ol>
                <div class="col-md-12">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                All Gardener Information
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
                                    </tr>
                            	</thead>
                                <tbody>
                                  @foreach ($gardener as $garden)
                                	<tr>
                                    	<td>{{ $garden->name }}</td>
                                        <td>{{ $garden->email }}</td>
                                        <td>{{ $garden->type }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                          </table>
                      </div>
                    </div>
                </div><!--col-md-12 end-->
@endsection