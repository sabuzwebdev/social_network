@extends('templates.default')
@section('content')
    <div class="row">
        <div class="col-lg-5">
            <!--user Information and status-->
            @include('user.partials.userblock')
            <hr>
        </div>
        <div class="col-lg-3 col-lg-offset-4">
            <!-- Friends and friends requests-->
            <h4>{{ $user->getFirstNameOrUsername() }}'s friend.</h4>
            @if(!$user->friends()->count())
                <p>{{ $user->getFirstNameOrUsername() }} has no friends now.</p>
            @else
                @foreach($user->friends() as $user)
                    @include('user.partials.userblock')
                @endforeach
            @endif
        </div>
    </div>
@endsection