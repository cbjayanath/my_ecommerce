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
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            <button class="btn btn-success" style="margin-left: 10px">Buy Now</button>
            
        </div>

    </div>
</div>


@endsection