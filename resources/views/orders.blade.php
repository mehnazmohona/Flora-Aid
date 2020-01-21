@extends('layouts.asset-app')

@section('content')

<!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Your orders</h1><p class="lead">Your orders in one place.</p>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Orders</li>
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
            <table class="table table-hover table-responsive-md">
              <thead>
                <tr>
                  <th>Order ID.</th>
                  <th>Customer Name</th>
                  <th>Phone</th>
                  <th>Product Name</th>
                  <th>Product Quantity</th>
                  <th>Total</th>
                  @if(Auth::user()->type == 'Retailer')
                  <th>Action</th>
                  @endif
                </tr>
              </thead>
              <tbody>
                @foreach($orders as $order)

                <tr>
                  <td>{{ $order->order_id }}</td>
                  <td>{{ $order->name }}</td>
                  <td>{{  $order->phone_no }}</td>
                  <td>{{ $order->productName }}</td>
                  <td>{{ $order->product_quantity }}</td>
                  <td>
                    <?php
                      $price = $order->price;
                      $totalPrice = $price*$order->product_quantity;
                    ?>
                    {{ $totalPrice }}
                   BDT</td>
                   @if(Auth::user()->type == 'Retailer')
                   <!-- {{ url('/order') }} -->
                  <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                  @endif
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

@endsection