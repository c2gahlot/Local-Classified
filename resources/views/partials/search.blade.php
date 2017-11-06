<div class="row">
    {!! Form::open(['route'=> ['index'], 'method' => 'GET']) !!}
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::text('city', null, ['class'=>'form-control', 'name'=>'city', 'id'=>'city', 'value'=> "{{ old('city') }}", 'placeholder'=>'City']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::select('category', categories(), null, ['class'=>'form-control', 'name'=>'category', 'id'=>'category', 'value'=>'Search Category']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::text('advertisement', null, ['class'=>'form-control', 'placeholder'=>'Search Advertisement']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <a href="{{ route('index', [request()->getQueryString()]) }}">
                <button class="form-control btn btn-success">Search</button>
            </a>
        </div>
    </div>
    {!! Form::close() !!}
</div>