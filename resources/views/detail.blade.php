@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <a href="/"><-Go Back</a>

        <div class="col-sm-6">
            <img src="{{ $product->gallery}}" class="detail-img" alt="">
        </div>

        <div class="col-sm-6" style="margin-top: 20px">
            <h2>{{ $product->name}}</h2>
            <h3>Price:- {{ $product->price}}</h3>
            <h4>Category:- {{ $product->category}}</h4>
            <h5>Description:- {{ $product->description}}</h5>
            <br><br>
            <button class="btn btn-primary">Add to Cart</button>
            <button class="btn btn-success" style="margin-left: 10px">Buy Now</button>
            
        </div>

    </div>
</div>


@endsection