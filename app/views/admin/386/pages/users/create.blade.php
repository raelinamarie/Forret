@extends('Admin::layouts.default')

@section('content')
    @if(Session::has('errors'))
    <div class = 'row'>
        <div class = 'col-sm-4'>
            <div class="alert alert-danger" style="display: block;">
                <button class="close" data-close="alert"></button>
                <span>
                    @foreach($errors->all() as $message)
                        {{$message}}
                    @endforeach
                </span>
            </div>
        </div>
    </div>
    @endif
    <div class = "col-md-6">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Create User</h3>
            </div>
                @include('Admin::components.forms.createUser')
            </div>
        </div>
    </div>
@stop