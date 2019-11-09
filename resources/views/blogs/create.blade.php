@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Blog</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="">
                    @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Insert your title here">
                        </div>
                        <div class="form-group">
                            <label for="body">Description</label>
                            <textarea class="form-control" id="body" name="body" rows="3"></textarea>
                        </div><br>
                        <button type="submit" class="btn btn-primary mb-2">Create New</button>
                        <a href="{{ route('blog:index') }}" class="btn btn-link">Cancel</a>
                    </form
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
