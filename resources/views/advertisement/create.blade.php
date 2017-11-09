@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Create An Ad</div>

                    <div class="panel-body">
                        <div class="row">
                            {!! Form::open(['route'=> ['advertisement.store'], 'method' => 'POST']) !!}
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::text('title', null, ['class'=>'form-control', 'name'=>'title', 'id'=>'title', 'placeholder'=>'Title']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::text('description', null, ['class'=>'form-control', 'name'=>'description', 'id'=>'description', 'placeholder'=>'Description']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::text('price', null, ['class'=>'form-control', 'name'=>'price', 'id'=>'price', 'placeholder'=>'Price']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::select('price_type', price_type(), null, ['class'=>'form-control', 'name'=>'price_type', 'id'=>'price_type']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::text('city', null, ['class'=>'form-control', 'name'=>'city', 'id'=>'city', 'value'=> "{{ old('city') }}", 'placeholder'=>'City']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::select('category', array_except(categories(),0), null, ['class'=>'form-control', 'name'=>'category', 'id'=>'category']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    {{ Form::submit('POST THIS AD', null, ['class'=>'form-control']) }}
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
