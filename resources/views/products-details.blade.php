@extends('layouts.asset-app')

@section('content')

<!-- Hero Section-->

    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>{{ $products->productName }}</h1>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('/products')}}">Products</a></li>
              <li class="breadcrumb-item active">Product ID "{{ $products->id }}"</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="product-details">
      <div class="container">
        <div class="row">
          <div class="product-images col-lg-6">
            <div class="ribbon-info text-uppercase">Super</div>
            <div class="ribbon-primary text-uppercase">Sale</div>
            <div data-slider-id="1" class="owl-carousel items-slider owl-drag">
              <div class="item"><img src="{!! asset('userInterface/product/'.$products->image) !!}" alt="shirt"></div>
              <div class="item"><img src="{!! asset('userInterface/product/'.$products->image) !!}" alt="shirt"></div>
              <div class="item"><img src="{!! asset('userInterface/product/'.$products->image) !!}" alt="shirt"></div>
              <div class="item"><img src="{!! asset('userInterface/product/'.$products->image) !!}" alt="shirt"></div>
            </div>
            <div data-slider-id="1" class="owl-thumbs">
              <button class="owl-thumb-item"><img src="{!! asset('userInterface/product/'.$products->image) !!}" alt="shirt"></button>
              <button class="owl-thumb-item active"><img src="{!! asset('userInterface/product/'.$products->image) !!}" alt="shirt"></button>
              <button class="owl-thumb-item"><img src="{!! asset('userInterface/product/'.$products->image) !!}" alt="shirt"></button>
              <button class="owl-thumb-item"><img src="{!! asset('userInterface/product/'.$products->image) !!}" alt="shirt"></button>
            </div>
          </div>
          <div class="details col-lg-6">
            <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row">
              <ul class="price list-inline no-margin">
                <li class="list-inline-item current">Price: {{ $products->price }} Taka</li>
                <!-- <li class="list-inline-item original">$90.00</li> -->
              </ul>
            </div>
            <p>Product Type: {{ $products->productType }}</p>
            <p>Product Quentity: {{ $products->productQuentity }}</p>
            <p>Contact Number: {{ $products->phone }}</p>
            <p>Owner Company/Organization: {{ $products->company }}</p>
            <ul class="CTAs list-inline">
              <li class="list-inline-item"><a href="#" class="btn btn-template wide"><form action="{{ route('carts.store') }}" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{ $products->id }}">
                <button type="submit" class="add-to-cart"><i class="icon-cart"></i>Add to Cart</button>
              </form></a></li>

              <!-- <li class="list-inline-item"><a href="#" class="btn btn-template-outlined wide"> <i class="fa fa-heart-o"></i>Add to wishlist</a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="product-description no-padding">
      <div class="container">
        <ul role="tablist" class="nav nav-tabs flex-column flex-sm-row">
          <li class="nav-item"><a data-toggle="tab" href="#description" role="tab" class="nav-link active">Description</a></li>
          <li class="nav-item"><a data-toggle="tab" href="#additional-information" role="tab" class="nav-link">Additional Information</a></li>
          <li class="nav-item"><a data-toggle="tab" href="#reviews" role="tab" class="nav-link">Reviews</a></li>
        </ul>
        <div class="tab-content">
          <div id="description" role="tabpanel" class="tab-pane active">
            <p>{{$products->description}}</p>
          </div>
          <div id="additional-information" role="tabpanel" class="tab-pane">
            <table class="table">
              <tbody>
                <tr>
                  <th class="border-0">Name: </th>
                  <th class="border-0">{{ $products->productName }}</th>
                </tr>
                <tr>
                  <th>Type: </th>
                  <td>{{ $products->productType }}</td>
                </tr>
                <tr>
                  <th>Quentity: </th>
                  <td>{{ $products->productQuentity }}</td>
                </tr>
                <tr>
                  <th>Company/Organization:</th>
                  <td>{{ $products->company }}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div id="reviews" role="tabpanel" class="tab-pane">
            <div class="row">
              <div class="col-xl-9">

                  

                  <div id="disqus_thread"></div>
                  <script>

                  /**
                  *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                  *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                  /*
                  var disqus_config = function () {
                  this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                  this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                  };
                  */
                  (function() { // DON'T EDIT BELOW THIS LINE
                  var d = document, s = d.createElement('script');
                  s.src = 'https://floraaid.disqus.com/embed.js';
                  s.setAttribute('data-timestamp', +new Date());
                  (d.head || d.body).appendChild(s);
                  })();
                  </script>
                  <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                              

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection