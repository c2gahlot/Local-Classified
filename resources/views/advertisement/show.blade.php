@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-7 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $advertisement->title }}</div>

                    <div class="panel-body">
                        <div class="row">
                            <ul>
                                <li>{{ $advertisement->title }}</li>
                                <li>{{ $advertisement->description }}</li>
                                <li>{{ $advertisement->city }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $advertisement->user->name }}</div>

                    <div class="panel-body">
                        @guest

                        @else
                            @if ($advertisement->user->id == auth()->user()->id)
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{route('advertisement.edit', ['id'=>$advertisement->id])}}" class="btn btn-success">Edit Advertisement</a>
                                    </div>
                                </div>
                            @else
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{route('message.read', ['id'=>$advertisement->user->id])}}" class="btn btn-success">Send Message</a>
                                    </div>
                                </div>
                            @endif
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
