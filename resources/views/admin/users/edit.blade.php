@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Usuario: {{ $user->first_name }}</div>

                <div class="panel-body">
                    {!! Form::model( $user, [ 'route' => [ 'admin.users.update', $user ], 'method' => 'PUT' ] ) !!}
                        @include( 'admin.users.partials.fields' )
                        {!! Form::submit( 'Editar usuario', [ 'class' => 'btn btn-default' ] ) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
