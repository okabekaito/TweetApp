@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ランキング</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">順位</th>
                                <th scope="col">氏名</th>
                                <th scope="col">内容</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($posts as $key=>$post)
                            <tr>
                                <td>{{$key+1}}</td>

                                <td>{{ $post->user->name }}さん</td>
                                <td>
                                    <h3>{{$post->content}}</h3>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection
