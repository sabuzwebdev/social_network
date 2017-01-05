@extends('templates.default')
@section('content')
    <!--form for signup-->
<h3>Sign Up</h3>
<div class="row">

    <div class="col-lg-6">
        <form role="form" method="post" action="{{ route('auth.signup') }}">
            <div class="form-group {{ $errors->has('email') ? 'has-error':'' }}">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ Request::old('email') ?: '' }}">
            </div>
            @if($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
            @endif
            <div class="form-group  {{ $errors->has('username') ? 'has-error':'' }}">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="username"  value="{{ Request::old('username') ?: '' }}">
            </div>
            @if($errors->has('username'))
                <span class="help-block">{{ $errors->first('username') }}</span>
            @endif
            <div class="form-group  {{ $errors->has('password') ? 'has-error':'' }}">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            @if($errors->has('password'))
                <span class="help-block">{{ $errors->first('password') }}</span>
            @endif

            <button type="submit" class="btn btn-default">Sign up</button>
            <input type="hidden"  name="_token" value="{{ Session::token() }}">
        </form>
    </div>
</div>
@endsection