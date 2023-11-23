@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Post</div>

                <div class="card-body">
                   {!! Form::open(['method' => 'POST', 'route' => 'posts.store']) !!}

                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        {!! Form::label('title', 'Title') !!}
                        {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('title') }}</small>
                    </div>

                    <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                        {!! Form::label('content', 'Content') !!}
                        {!! Form::textarea('content', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('content') }}</small>
                    </div>

                       <div class="btn-group pull-right">
                           {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
                           {!! Form::submit("Send", ['class' => 'btn btn-success']) !!}
                       </div>

                   {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

