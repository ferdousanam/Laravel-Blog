@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <h5 class="card-header">Posts</h5>
                <ul class="list-group list-group-flush">
                    @foreach($records as $record)
                        <li class="list-group-item">
                            <a href="{{ route('posts.show', $record->id) }}">{{ $record->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
