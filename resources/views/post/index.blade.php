@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">一覧ページ</div>
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


                    @foreach($posts as $post)
                    <div class=" border-bottom">
                        {{ $post->user->name }}さん
                        <h3>{{$post->content}}</h3>

                        @auth
                        @if( ( $post->user_id ) === ( Auth::user()->id ) )
                        <form method="POST" action="{{route('post.destroy',['id' => $post->id])}}">
                            @csrf


                            <input type="submit" value="削除" class="btn btn-danger btn-sm" onclick='return confirm("削除してよろしいですか？");'>
                            @endif
                            @endauth
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
