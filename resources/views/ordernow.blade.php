@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <h4 class="container" style="color:green">Order Details</h4> <br>
        <table class="container table" style="margin-left: 10%">
            <tbody>
                <tr>

                    <td>Amout</td>
                    <td>Rs. {{ $total }}</td>

                </tr>
                <tr>

                    <td>Tax</td>
                    <td>Rs. 0</td>

                </tr>
                <tr>

                    <td>Delivery Fee</td>
                    <td>Rs. 350</td>
                </tr>
                <tr>

                    <td>Total Amount</td>
                    <td>Rs. {{ $total+350 }}</td>
                </tr>
            </tbody>
        </table>

        <div class="container"  style="margin-left: 10%">
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="address" placeholder="enter your address" class="form-control"></textarea> <br>
                </div>
                <div class="form-group">
                    <label for="pwd">Payment Method</label> <br> <br>
                    <input type="radio" value="cash" name="payment"> <span>Online Payment</span> <br> <br>
                    <input type="radio" value="cash" name="payment"> <span>Cash on Delivery</span> <br> <br>

                </div>
                <button type="submit" class="btn btn-primary col-sm-3">Order Now</button>
            </form>
        </div>

    </div>
</div>
@endsection