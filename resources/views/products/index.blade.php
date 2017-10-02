@extends('layouts.secondary')

@section ('meta-title')
    Products | EarthKratom.com
@endsection

@section('content')

    {{--==========Page Header==========--}}
    <section class="row page-header">
        <div class="container">
            <div class="row">
                <h2>PRODUCTS</h2>
                <h4>Purchase one of our many kratom strains today!</h4>
            </div>
        </div>
    </section>

    <section class="row our-collection products-index">
        <div class="container">
            <div class="row collections">
                @foreach ($products as $product)
                    <div class="col-sm-6 col-md-3 item wow fadeIn">
                        <div class="row m0 featured-img">
                            <img src="{{$product->img_url}}" alt="{{$product->name}}">
                        </div>
                        <h4 class="title">{{$product->name}}</h4>
                        <h5 class="category text-uppercase">
                            @foreach($product->categories as $key => $category)
                                @if($key) ,&nbsp; @endif
                                {{$category->name}}
                            @endforeach
                        </h5>
                        <h4 class="price">${{$product->price}}</h4>
                        <a href="/products/{{$product->slug}}" class="btn">VIEW DETAILS</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
