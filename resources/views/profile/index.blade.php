@extends('templates.default')
@section('content')
    <div class="row">
        <div class="col-lg-5">
            <!--user Information and status-->
            @include('user.partials.userblock')
            <hr>
        </div>
        <div class="col-lg-4 col-lg-offset-3">
            <!-- Friends and friends requests-->
        </div>
    </div>
@endsection