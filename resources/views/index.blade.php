@extends('main')
@section('content')
<section class="padding-top">
    <div class="container">
       <header class="section-heading">
          <h3 class="section-title">New products</h3>
       </header>
       <div class="row">
          @foreach($products as $product)
          <div class="col-lg-3 col-md-6 col-sm-6">
             <figure class="card card-product-grid">
                <a href="#" class="img-wrap"> 
                <span class="topbar"> <b class="badge bg-success"> Offer </b> </span>
                <img src="{{ url('/') }}/api/storage/{{ $product->first_picture }}"> 
                </a>
                <figcaption class="info-wrap border-top">
                   <a href="#" class="float-end btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                   <a href="#" class="title text-truncate">{{ $product->title }}</a>
                   {{-- <small class="text-muted">Sizes: S, M, XL</small> --}}
                   <div class="price-wrap">
                      <span class="price">${{$product->price}}</span> 
                      {{-- <del class="price-old">$20</del> --}}
                   </div>
                </figcaption>
             </figure>
          </div>
          @endforeach
       </div>
    </div>
</section>
@endsection