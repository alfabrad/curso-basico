@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
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

                    {!! Form::open( array( 'url' => '/auth/register', 'class' => 'form-horizontal', 'role' => 'form' ) ) !!}
                        <div class="form-group">
                            {!! Form::label( 'name', 'Name', array( 'class' => 'col-md-4 control-label' ) ) !!}
                            <div class="col-md-6">
                                {!! Form::text( 'name', old( 'name' ), array( 'class' => 'form-control' ) ) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label( 'email', 'E-Mail Address', array( 'class' => 'col-md-4 control-label' ) ) !!}
                            <div class="col-md-6">
                                {!! Form::email( 'email', old( 'email' ), array( 'class' => 'form-control' ) ) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label( 'password', 'Password', array( 'class' => 'col-md-4 control-label' ) ) !!}
                            <div class="col-md-6">
                                {!! Form::password( 'password', array( 'class' => 'form-control' ) ) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label( 'password_confirmation', 'Confirm Password', array( 'class' => 'col-md-4 control-label' ) ) !!}
                            <div class="col-md-6">
                                {!! Form::password( 'password_confirmation', array( 'class' => 'form-control' ) ) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit( 'Register', array( 'class' => 'btn btn-primary' ) ) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
