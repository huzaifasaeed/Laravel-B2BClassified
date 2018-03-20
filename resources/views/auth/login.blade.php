@extends('layouts.app')

@section('content')
<div class="main-container">
<div class="container">
<div class="row">
<div class="col-sm-5 login-box">
<div class="panel panel-default">
<div class="panel-intro text-center">
<h2 class="logo-title">
<span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo shape-0"></i> </span> BOOT<span>CLASSIFIED </span>
</h2>
</div>
<div class="panel-body">
                    <form  role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           <label for="sender-email" class="control-label">E-Mail Address:</label>
                            <div class="input-icon"><i class="icon-user fa"></i>
                                <input id="email" type="email" class="form-control email" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="user-pass" class="control-label">Password:</label>
                                <div class="input-icon"><i class="icon-lock fa"></i>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <div class="form-group">

                                <button type="submit" class="btn btn-primary  btn-block">
                                    Login
                                </button>
                                </div>
                        
                    </form>

</div>


                    <div class="panel-footer">
                    <div class="checkbox pull-left">
                    
                                
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                    </div>

<p class="text-center pull-right">
<a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
</p>
<div style=" clear:both"></div>
</div>
</div>
<div class="login-box-btm text-center">
<p> Don't have an account? <br>
<a href="register"><strong>Sign Up !</strong> </a></p>
</div>
                </div>
            </div>
        </div>
    </div>


@endsection
