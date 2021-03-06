@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('barberadmin.roles.title')</h3>
    
    {!! Form::model($role, ['method' => 'PUT', 'route' => ['admin.roles.update', $role->id]]) !!}

    <div class="card card-default">
        <div class="card-header">
            @lang('barberadmin.qa_edit')
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title', 'Title*', ['class' => 'control-label']) !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('barberadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

