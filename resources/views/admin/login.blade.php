@extends('admin.layout.app')
@section('content')
<div class="container">
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">

        <form class="form" method="post" action="{{route('admin.login')}}">
            @csrf
            <div class="card card-login">
                <div class="card-header ">
                    <div class="card-header ">
                        <h3 class="header text-center">
                            <small>KSL Admin</small> <br>
                            Login</h3>
                    </div>
                    @include('admin.layout.message')
                </div>
                <div class="card-body ">
                    <div class="input-group">
                        <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="nc-icon nc-single-02"></i>
                      </span>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="nc-icon nc-key-25"></i>
                      </span>
                        </div>
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>

                </div>
                <div class="card-footer ">
                    <button type="submit" class="btn btn-warning btn-round btn-block mb-3">Login</button>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection
