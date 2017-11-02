@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Search</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">
                            {!! Form::open(['method'=>'GET']) !!}
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::text('rc_number', null, ['class'=>'form-control', 'name'=>'city', 'id'=>'city', 'value'=> "{{ old('city') }}", 'placeholder'=>'City']) !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::text('advertisements', null, ['class'=>'form-control', 'placeholder'=>'Search Advertisements']) !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <a href="{{ route('index', [request()->getQueryString()]) }}">
                                        <button class="form-control btn btn-success">Search</button>
                                    </a>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
