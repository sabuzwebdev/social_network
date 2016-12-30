@extends('templates.default')
@section('content')
        <!--form for signup-->
<div class="row">
    <h3>Sign In</h3>
    <div class="col-lg-6">
        <form role="form" method="post" action="{{ route('auth.signin') }}">
            <div class="form-group {{ $errors->has('email') ? 'has-error':'' }}">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ Request::old('email') ?: '' }}">
            </div>
            @if($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
            @endif

            <div class="form-group  {{ $errors->has('password') ? 'has-error':'' }}">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            @if($errors->has('password'))
                <span class="help-block">{{ $errors->first('password') }}</span>
            @endif
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember">Remember Me
                </label>
            </div>
            <button type="submit" class="btn btn-default">Sign in</button>
            <input type="hidden"  name="_token" value="{{ Session::token() }}">
        </form>
    </div>
</div>
@endsection