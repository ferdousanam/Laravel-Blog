@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <h5 class="card-header"><a href="{{ route('posts.index') }}">‹Back</a> | Create Post</h5>
                <form action="{{ route('posts.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                        @include('admin.posts.form')
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
