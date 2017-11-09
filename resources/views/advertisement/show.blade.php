@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
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
        </div>
    </div>

@endsection
