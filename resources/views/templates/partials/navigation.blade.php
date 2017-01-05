<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a href="{{ route('home') }}" class="navbar-brand">Social Network</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            @if(Auth::check())
                <ul class="nav navbar-nav">
                    <li><a href="#">Timeline</a></li>
                    <li><a href="#">Friends</a></li>
                </ul>

                <form class="navbar-form navbar-left" role="search" action="{{ route('search.results') }}">
                    <div class="form-group">
                        <input type="text" class="form-control" name="query" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            @endif

            <ul class="nav navbar-nav navbar-right">

                @if(Auth::check())
                    <li><a href="{{ route('profile.index',['username'=> Auth::user()->username]) }}">{{ Auth::user()->getNameOrUsername() }}</a></li>
                    <li><a href="{{ route('profile.edit') }}">Profile Update</a></li>
                    <li><a href="{{ route('auth.signout') }}">Sign out</a></li>
                @else
                    <li><a href="{{ route('auth.signup') }}">Sign up</a></li>
                    <li><a href="{{ route('auth.signin') }}">Sign in</a></li>
                @endif




            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>