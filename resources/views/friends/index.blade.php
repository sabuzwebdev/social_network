@extends('templates.default')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h3>Your Friends List</h3>
            <hr>
            <!--list of friends-->
            @if(!$friends->count())
                <p>You have no friends.</p>
            @else
                @foreach($friends as $user)
                    @include('user.partials.userblock')
                @endforeach
            @endif
        </div>
        <div class="col-lg-3 col-lg-offset-3">
            <h4>Friend Requests</h4>
            <hr>
            <!--List of Friend requests-->

            @if(!$requests->count())
                <p>You have no friend requests.</p>
            @else
                @foreach($requests as $user)
                    @include('user.partials.userblock')
                @endforeach
            @endif
        </div>
    </div>
@stop


