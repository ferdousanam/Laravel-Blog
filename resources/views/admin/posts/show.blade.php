@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <h5 class="card-header"><a href="{{ url()->previous() }}">‹Back</a> | {{ $data->title }}</h5>
                <div class="card-body">
                    <p class="card-text" style="white-space: pre-wrap">{!! $data->body !!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
