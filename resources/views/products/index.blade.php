@extends('layouts.master')

@section('landing')
    <div class="top-banner row m0 text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-7 split-header m-t-100 text-left">
                    <h2>Earth Kratom Rules</h2>
                    <p>Holisticly incentivize revolutionary collaboration and idea sharing before cost effective users. Actual focused services before highly efficient human capital. </p>
                    <a href="http://indegogo.com/" target="_blank" class="btn btn-indegogo btn-lg">Back us on <img src="/images/theme/indegogo.png" alt="indegogo" /></a>
                </div>

                {{-- Image Section --}}
                <div class="col-md-5">
                    <img src="/images/theme/the-watch-2.png" alt="Watch" class="img-responsive center-block m-b-50-sm" />
                </div>
            </div>

        </div>
    </div>
@endsection

@section('content')
    @foreach($products as $product)
    {{$product->name}}
    @endforeach
@endsection
