@extends('master')
@section('content')

<div class="container custome-login">
  
    <div class="row justify-content-center" style="margin-top: 50px"> <!-- Added justify-content-center class -->
        <div class="col-sm-4">
        
            <form>
              
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary col-sm-12">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection