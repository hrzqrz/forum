@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Threads</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   

                    @foreach($threads as $thread)
                    <div class="card mb-2 p-2">
                    <h2><a href="{{route('threads.show', $thread->id)}}">{{$thread->title}}</a></h2>
                        <div class="card-body">{{$thread->body}}</div>
                      </div>
                    @endforeach
                      {{$threads->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
