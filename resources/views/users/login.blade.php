@extends('users.layout')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            Invalid Input Information.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    
    <form action="{{ route('users.store') }}" method="POST">
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

