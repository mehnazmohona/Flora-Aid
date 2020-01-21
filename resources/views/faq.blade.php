@extends('layouts.asset-app')

@section('content')

<!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Frequently asked questions</h1>
          </div>
          <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">FAQ</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- FAQ-->
    <section class="padding-small">
      <div class="container">
        <header>
          <p class="lead text-muted">
            An FAQ is a list of frequently asked questions and answers on a particular topic. The format is often used in articles, websites, email lists, and online forums where common questions tend to recur, for example through posts or queries by new users related to common knowledge gaps.                    
          </p>
        </header>
        <div class="py-4">
          <h2 class="mb-5 text-secondary">FAQ</h2>
          <div class="row">
            <div class="col-md-12">
              @foreach($faqs as $faq)
              <h5>{{$faq->title}}</h5>
              <p class="text-muted mb-6" style="text-align: justify;">{{$faq->description}}</p>
              @endforeach
            </div>
          </div>
        </div>
        <hr>
      </div>
    </section>

@endsection