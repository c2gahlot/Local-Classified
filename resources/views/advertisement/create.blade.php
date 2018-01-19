@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Create An Ad</div>

                    <div class="panel-body">
                        {!! Form::open(['route'=> ['advertisement.store'], 'method' => 'POST']) !!}
                        <div class="row">

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
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div id="imagePreview1"></div>
                                    {!! Form::file('image1', ['class'=>'img', 'name'=>'image1', 'id'=>'uploadImage_1']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div id="imagePreview2"></div>
                                    {!! Form::file('image2', ['class'=>'img', 'name'=>'image2', 'id'=>'uploadImage_2']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div id="imagePreview3"></div>
                                    {!! Form::file('image3', ['class'=>'img', 'name'=>'image3', 'id'=>'uploadImage_3']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div id="imagePreview4"></div>
                                    {!! Form::file('image4', ['class'=>'img', 'name'=>'image4', 'id'=>'uploadImage_4']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    {{ Form::submit('POST THIS AD', null, ['class'=>'form-control']) }}
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('scripts')

@endsection