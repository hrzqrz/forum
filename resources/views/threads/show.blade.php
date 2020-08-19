@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$thread->title}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  

                    
                    <div class="card mb-2 p-2">
                        <div class="card-body">{{$thread->body}}</div>
                      </div>
                   
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
