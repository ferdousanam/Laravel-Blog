@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <h5 class="card-header"><a href="{{ url()->previous() }}">‹Back</a> | {{$data->title}}</h5>
                <form action="{{ route('posts.update', $data->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        @include('admin.posts.form')
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
