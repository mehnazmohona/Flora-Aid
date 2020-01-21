@extends('layouts.asset-app')

@section('content')


<!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h5>{{ Auth::user()->name }}</h5>
            <h1>Your profile</h1>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Your profile</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="padding-small">
      <div class="container">
        <div class="row">
          <!-- Customer Sidebar-->
          <div class="customer-sidebar col-xl-3 col-lg-4 mb-md-5">
            @include('layouts.account-nav');
          </div>

          <div class="col-lg-8 col-xl-9 pl-lg-3">
            <div class="block-header mb-5">
              <h5>{{Auth::User()->type}} Information</h5>
            </div>
            <h5>Name:   {{Auth::user()->name}}</h5>
            <h5>Email:   {{Auth::User()->email}}</h5>
            <br>
            <br>
            <div class="block-header mb-5">
              <h5>Personal details</h5>
            </div>

            @if(Auth::user())
                    
            @if(Auth::user()->type == 'Retailer')
           
            <form class="content-block" method="post" action="{{ route('retailer-info-post') }}" >
              @csrf
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="firstname" class="form-label">Full Name</label>
                    <input id="firstname" type="text" class="form-control"  value="{{Auth::user()->name}}" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="text" class="form-control"  value="{{Auth::user()->email}}" readonly>
                  </div>
                </div>
              </div>
              <!-- /.row-->
              @if(count($datas)>0)
              @foreach($datas as $value)
              <input id="firstname" name="userID" type="text" class="form-control"  value="{{Auth::user()->id}}" style="visibility: hidden;">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="phone" class="form-label">Company/Organization</label>
                    <input id="phone" type="text" class="form-control" name="companyName" value="{{ $value->companyName }}" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input id="phone" type="number" class="form-control" name="phone" value="{{ $value->phone }}" required>
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="city" class="form-label">Division</label>
                    <input id="city" type="text" class="form-control" name="division" value="{{ $value->division }}" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="zip" class="form-label">ZIP</label>
                    <input id="zip" type="text" class="form-control" name="zipcode" value="{{ $value->zipcode }}" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="country" class="form-label">Country</label>
                    <input id="country" type="text" class="form-control" name="country" value="{{ $value->country }}" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="street" class="form-label">Street</label>
                    <input id="street" type="text" class="form-control" name="street" value="{{ $value->street }}" required>
                  </div>
                </div>
                
                <div class="col-sm-12 text-center">
                  <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-save"></i>Save changes</button>
                </div>
              </div>
              @endforeach
              @else
              <input id="firstname" name="userID" type="text" class="form-control"  value="{{Auth::user()->id}}" style="visibility: hidden;">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="phone" class="form-label">Company/Organization</label>
                    <input id="phone" type="text" class="form-control" name="companyName" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input id="phone" type="number" class="form-control" name="phone" required>
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="city" class="form-label">Division</label>
                    <input id="city" type="text" class="form-control" name="division" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="zip" class="form-label">ZIP</label>
                    <input id="zip" type="text" class="form-control" name="zipcode" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="country" class="form-label">Country</label>
                    <input id="country" type="text" class="form-control" name="country" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="street" class="form-label">Street</label>
                    <input id="street" type="text" class="form-control" name="street" required>
                  </div>
                </div>
                
                <div class="col-sm-12 text-center">
                  <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-save"></i>Save changes</button>
                </div>
              </div>
              @endif
            </form>
            @else(Auth::user()->type == 'Garderer')
            <form class="content-block" method="post" action="{{ route('gardener-info-post') }}">
              @csrf
              <input id="firstname" name="userID" type="text" class="form-control"  value="{{Auth::user()->id}}" style="visibility: hidden;">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="firstname" class="form-label">Full Name</label>
                    <input id="firstname" type="text" class="form-control" value="{{Auth::user()->name}}" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="text" class="form-control" value="{{Auth::user()->email}}" readonly>
                  </div>
                </div>
              </div>
              @if(count($datastwo)>0)
              @foreach($datastwo as $value)
              
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input id="phone" type="number" class="form-control" name="phone" value="{{ $value->phone }}" required>
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="city" class="form-label">Division</label>
                    <input id="city" type="text" class="form-control" name="division" value="{{ $value->division }}" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="zip" class="form-label">ZIP Code</label>
                    <input id="zip" type="text" class="form-control" name="zipcode" value="{{ $value->zipcode }}" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="country" class="form-label">Country</label>
                    <input id="country" type="text" class="form-control" name="country" value="{{ $value->country }}" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="street" class="form-label">Street</label>
                    <input id="street" type="text" class="form-control" name="street" value="{{ $value->street }}" required>
                  </div>
                </div>
                
                <div class="col-sm-12 text-center">
                  <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-save"></i>Save changes</button>
                </div>
              </div>
              @endforeach
              @else
              <input id="firstname" name="userID" type="text" class="form-control"  value="{{Auth::user()->id}}" style="visibility: hidden;">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="phone" class="form-label">Phone</label>
                    <input id="phone" type="number" class="form-control" name="phone" required>
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="city" class="form-label">Division</label>
                    <input id="city" type="text" class="form-control" name="division" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="zip" class="form-label">ZIP Code</label>
                    <input id="zip" type="text" class="form-control" name="zipcode" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="country" class="form-label">Country</label>
                    <input id="country" type="text" class="form-control" name="country" required>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                    <label for="street" class="form-label">Street</label>
                    <input id="street" type="text" class="form-control" name="street" required>
                  </div>
                </div>
                
                <div class="col-sm-12 text-center">
                  <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-save"></i>Save changes</button>
                </div>
              </div>
              @endif
            </form>
            @endif
            @endif

          </div>
        </div>
      </div>
    </section>

@endsection