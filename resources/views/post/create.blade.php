@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    createです
                    <form method="POST" action="{{route('post.store')}}">
                        @csrf
                        内容
                        <input type="text" name="content">
                        <input type="submit" value="投稿する" class="btn btn-primary">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
