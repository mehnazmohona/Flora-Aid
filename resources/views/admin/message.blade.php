@extends('admin.layout.master')

@section('content')
<ol class="breadcrumb">
                    <li><a href="{{url('/backend/deshboard')}}"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="{{ url('backend/message') }}">Message</a></li>
                </ol>
                <div class="col-md-12">


                    <h3 style="text-align:center; padding-bottom:60px;">Contact Information</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($message as $allmessage)
                            <tr>
                                <th scope="row">{{ $allmessage->id }}</th>
                                <td>{{ $allmessage->name }}</td>
                                <td>{{ $allmessage->email }}</td>
                                <td>{{ $allmessage->message }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
@endsection