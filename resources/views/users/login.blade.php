@extends('users.layout')

@section('content')

    @if(isset(Auth::user()->username))    
        <script>window.location="{{ url('/users/sucessLogin') }}";</script>
    @endif

    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

  

    
    <form action="{{ url('/users/store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 center">
                <div class="form-group">
                    <strong>User Name: </strong>
                    <input type="text" name="username" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 center">
                <div class="form-group center">
                    <strong>Password: </strong>
                    <input type="text" name="password" class="form-control">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Log In</button>
            </div>

           
        </div>

    </form>
@endsection

