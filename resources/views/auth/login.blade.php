@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {!! Form::open( array( 'url' => '/auth/login', 'role' => 'form', 'class' => 'form-horizontal' ) ) !!}
                        <div class="form-group">
                            {!! Form::label( 'email', 'E-Mail Address', array( 'class' => 'col-md-4 control-label' ) ) !!}
                            <div class="col-md-6">
                                {!! Form::text( 'email', null, [ 'class' => 'form-control', 'type' => 'email' ] ) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label( 'password', 'Password', array( 'class' => 'col-md-4 control-label' ) ) !!}
                            <div class="col-md-6">
                                {!! Form::password( 'password', [ 'class' => 'form-control' ] ) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox( 'remember' ) !!}Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit( 'Login', array( 'class' => 'btn btn-primary', 'style' => 'margin-right: 15px;' ) ) !!}

                                <a href="{{ url( '/password/email' ) }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
