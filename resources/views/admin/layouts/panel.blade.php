@extends('admin.layouts.main')

@section('panel')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @include('admin.layouts.breadcrumbs')
                        <h4>{!! $page_title !!}</h4>
                    </div>
                    <div class="panel-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection