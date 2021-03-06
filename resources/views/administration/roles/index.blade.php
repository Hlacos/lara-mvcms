@extends('lara-mvcms::layouts.application')

@section('content')
    <div class="box box-primary">
        <div class="box-header">
            <div class="row">
                <div class="col-sm-6">
                    <form action="{{ route('lara-mvcms.administration.roles.index') }}" method="get" id="pager-form" class="form-inline">
                        <select name="size" class="form-control">
                            <option value="5" {{ request('size') && request('size') == "5" ? "selected" : "" }}>5</option>
                            <option value="25" {{ !request('size') || request('size') == "25" ? "selected" : "" }}>25</option>
                            <option value="50" {{ request('size') && request('size') == "50" ? "selected" : "" }}>50</option>
                            <option value="100" {{ request('size') && request('size') == "100" ? "selected" : "" }}>100</option>
                        </select>
                    </form>
                </div>
                <div class="col-sm-6 text-right">
                    <a class="btn btn-flat btn-primary" href="{{ route('lara-mvcms.administration.roles.create') }}">
                        <i class="fa fa-group"></i> {{ trans('lara-mvcms::roles.buttons.create') }}
                    </a>
                </div>
            </div>
        </div><!-- /.box-header -->
        <div class="box-body no-padding">
            @include('lara-mvcms::administration.roles._table', ['roles' => $roles])
        </div><!-- /.box-body -->
        <div class="box-footer">
            @include('lara-mvcms::partials._pager', ['items' => $roles])
        </div>
    </div>
@stop

@section('page-header')
    <h1>
        {{ trans('lara-mvcms::roles.title') }}
    </h1>
@overwrite

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('lara-mvcms.dashboard') }}"><i class="fa fa-dashboard"></i> {{ trans('lara-mvcms::dashboard.title') }}</a>
        </li>
        <li class="active"><i class="fa fa-group"></i> {{ trans('lara-mvcms::roles.title') }}</li>
    </ol>
@overwrite
