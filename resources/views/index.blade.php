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


                    @if(!(request()->getQueryString()))
                        <div class="panel-heading">Categories</div>

                        <div class="panel-body">
                            <div class="row">
                                <ul>
                                    @foreach($categories  as $category)
                                        <li>
                                            <a href="{{route('index', ['category'=>$category->id])}}">
                                                {{$category->category_name}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @else
                        <div class="panel-heading">Advertisements</div>

                        <div class="panel-body">
                            <div class="row">
                                <ul>
                                    @foreach($advertisements as $advertisement)
                                        <li>
                                            <a href="{{route('advertisement.show', ['id'=>$advertisement->id])}}">
                                                {{$advertisement->title}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
