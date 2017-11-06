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

                        @include('partials.search')
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Categories</div>

                    <div class="panel-body">
                        <div class="row">

                            @if(!(request()->getQueryString()))
                                <ul>
                                    @foreach($categories  as $category)
                                        <li>
                                            <a href="{{route('index', ['category'=>$category->id])}}">
                                                {{$category->category_name}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>

                            @else

                                <ul>
                                    @foreach($advertisements as $advertisement)
                                        <li>
                                            <a href="{{route('advertisement.show', ['id'=>$advertisement->id])}}">
                                            {{$advertisement->name}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
