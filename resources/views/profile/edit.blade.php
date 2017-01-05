@extends('templates.default')
@section('content')
    <h3>Update Your Profile</h3>
    <div class="row">

        <div class="col-lg-6">
            <form role="form" method="post" action="{{ route('profile.edit') }}">
                <div class="form-group {{ $errors->has('first_name') ? 'has-error':'' }}">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="first_name" value="{{ Request::old('first_name') ?: Auth::user()->first_name }}">
                </div>
                @if($errors->has('first_name'))
                    <span class="help-block">{{ $errors->first('first_name') }}</span>
                @endif
                <div class="form-group {{ $errors->has('last_name') ? 'has-error':'' }}">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="last_name" value="{{ Request::old('last_name') ?:  Auth::user()->last_name }}">
                </div>
                @if($errors->has('last_name'))
                    <span class="help-block">{{ $errors->first('last_name') }}</span>
                @endif
                <div class="form-group {{ $errors->has('location') ? 'has-error':'' }}">
                    <label for="location">Location</label>
                    <input type="text" name="location" class="form-control" id="location" value="{{ Request::old('location') ?:  Auth::user()->location }}">
                </div>
                @if($errors->has('location'))
                    <span class="help-block">{{ $errors->first('location') }}</span>
                @endif


                <button type="submit" class="btn btn-default">Update Profile</button>
                <input type="hidden"  name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@endsection