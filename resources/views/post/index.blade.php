@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <span class="border-bottom"></span>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="GET" action="{{route('post.create')}}">
                        <button class="btn btn-primary">投稿</button>
                    </form>
                    indexです
                    <span class="border-bottom"></span>

                    @foreach($posts as $post)


                    <form method="POST" action="{{route('post.destroy',['id' => $post->id])}}">
                        @csrf
                        <h4 class="border-bottom"> {{$post->content}}</h4>
                        <input type="submit" value="削除" class="btn btn-danger btn-sm" onclick='return confirm("削除してよろしいですか？");'>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
