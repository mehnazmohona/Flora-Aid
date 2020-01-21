<div class="customer-profile"><a href="#" class="d-inline-block"><img src="{{asset('userInterface/img/person-3.jpg')}}" class="img-fluid rounded-circle customer-image"></a>
  <h5>{{ Auth::user()->name }}</h5>
  <p class="text-muted text-small">{{ Auth::user()->type }}</p>
</div>
<nav class="list-group customer-nav">
	<a href="{{ url('/orders') }}" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="icon icon-bag"></span>Orders</span></a>
	
	<a href="{{ url('/home') }}" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="icon icon-profile"></span>Profile</span></a>
	 		@if(Auth::user())
                    
            @if(Auth::user()->type == 'Retailer')
	<a href="{{ url('/own-product') }}" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="icon icon-map"></span>Product View</span></a>
	
	<a href="{{ url('/store-product') }}" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="icon icon-map"></span>Store Product</span></a>
			@endif
			@endif
	<a class="list-group-item d-flex justify-content-between align-items-center" href="{{ route('logout') }}"
 onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
  {{ __('Logout') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>

</nav>