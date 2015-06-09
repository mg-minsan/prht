@extends('app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-1">
                {!! Form::open(['method' => 'POST',
                'files'=> 'true',
                'action' => 'PlacesController@store'
                ]) !!}

                @include('places.formElements')

                {!! Form::close() !!}

                @include('errors.placeCreationError')


            </div>
        </div>
    </div>
    <br/><br/>

@endsection
