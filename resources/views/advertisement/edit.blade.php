@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit This Ad</div>

                    <div class="panel-body">
                        <div class="row">
                            {{ Form::model($advertisement, ['method' =>'PUT' , 'route' => ['advertisement.update',$advertisement->id]])}}

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
                                    {!! Form::text('city', null, ['class'=>'form-control', 'name'=>'city', 'id'=>'city', 'value'=> "{{ old('city') }}", 'placeholder'=>'City']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::select('category', array_except(categories(),0), $advertisement->category_id, ['class'=>'form-control', 'name'=>'category', 'id'=>'category', 'value'=>'Search Category']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::text('price', null, ['class'=>'form-control', 'name'=>'price', 'id'=>'price', 'placeholder'=>'Price']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::select('price_type', price_type(), $advertisement->price_type, ['class'=>'form-control', 'name'=>'price_type', 'id'=>'price_type', 'placeholder'=>'Price Type']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    {{ Form::submit('UPDATE', null, ['class'=>'form-control']) }}
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
