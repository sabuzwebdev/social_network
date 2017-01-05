@extends('templates.default')
@section('content')
    <h3>You search for "{{ Request::input('query') }}"</h3>
    <div class="row">
        <div class="col-lg-12">
            @if(!$users->count())
                <p>No Results Found !! <a href="{{ route('home') }}">Go Back</a> </p>
            @else
                @foreach($users as $user)
                    @include('user.partials.userblock');
                @endforeach
            @endif


        </div>
    </div>
@endsection