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
                    @foreach($posts as $post)
                    <div class=" border-bottom col-12">
                        {{ $post->user->name }}さん
                        <h3>{{$post->content}}</h3>

                        @auth
                        @if( ( $post->user_id ) === ( Auth::user()->id ) )
                        <form method="POST" class="row" action="{{route('post.destroy',['id' => $post->id])}}">
                            @csrf
                            <input type="submit" value="&#xf2ed;" class="fas btn btn-danger btn-lg " onclick='return confirm("削除してよろしいですか？");'>
                            @endif
                            @endauth

                            <div class="ml-2">
                                @if($post->is_liked_by_auth_user())
                                <a href="{{ route('post.unlike', ['id' => $post->id]) }}" class="btn-lg btn btn-success fas fa-heart"><span class="badge">{{ $post->likes->count() }}</span></a>
                                @else
                                <a href="{{ route('post.like', ['id' => $post->id]) }}" class="btn-lg btn btn-outline-secondary fas fa-heart"><span class="badge">{{ $post->likes->count() }}</span></a>
                                @endif
                            </div>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
