@extends('layouts.asset-app')

@section('content')

<!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Your Products</h1><p class="lead">All of your products.</p>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Your Products</li>
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
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Product Type</th>
                  <th>Product Price</th>
                  <th>Product Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($ownProduct as $product)
                <tr>
                  <th>P-{{ $product->id }}</th>
                  <td>{{ $product->productName }}</td>
                  <td>{{ $product->productType }}</td>
                  <td>{{ $product->price }}</td>
                  <td><img src="{!! asset('userInterface/product/'.$product->image) !!}" alt="" style="height: 40px;"></td>
                  <td>
                    
                  <a href="#deleteModal{{ $product->id }}" data-toggle="modal" class="btn btn-danger">Delete</a></td>

                  </td>
                </tr>

                <!--delete data modal-->
                <div class="modal fade" id="deleteModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          
                          <div class="modal-body">
                            <form action="{!! route('store-product-delete', $product->id) !!}"  method="post">
                              @csrf
                              <button type="submit" class="btn btn-danger">Permanent Delete</button>
                            </form>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--data modal-->

                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

@endsection