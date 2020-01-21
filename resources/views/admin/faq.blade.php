@extends('admin.layout.master')

@section('content')
<ol class="breadcrumb">
                    <li><a href="{{url('/backend/deshboard')}}"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="{{ url('backend/faq') }}">FAQ</a></li>
                </ol>
                <div class="col-md-12"> 
                	<h2>FAQ Post</h2>
	   <form action="{{ url('backend/faq/post')}}" method="post">
	   	@csrf
		  <div class="form-group">
		    <label for="exampleFormControlInput1">FAQ Title</label>
		    <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="Question FAQ Title" required>
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Description</label>
		    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required></textarea>
		  </div>
		   <button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>
		<br>
		<br>
</div>
@endsection