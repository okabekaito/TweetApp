@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">投稿</div>

                <div class="card-body d-flex justify-content-center">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{route('post.store')}}">
                        @csrf
                        内容
                        <input type="text" name="content">
                        <input type="submit" value="ツイート" class="btn btn-primary">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
