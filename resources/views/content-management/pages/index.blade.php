@extends('lara-mvcms::layouts.application')

@section('content')
    <div class="box box-primary">
        <div class="box-header">
            <div class="row">
                <div class="col-sm-6">
                    <form action="{{ route('lara-mvcms.content-management.pages.index') }}" method="get" id="pager-form" class="form-inline">
                        <select name="size" class="form-control">
                            <option value="5" {{ request('size') && request('size') == "5" ? "selected" : "" }}>5</option>
                            <option value="25" {{ !request('size') || request('size') == "25" ? "selected" : "" }}>25</option>
                            <option value="50" {{ request('size') && request('size') == "50" ? "selected" : "" }}>50</option>
                            <option value="100" {{ request('size') && request('size') == "100" ? "selected" : "" }}>100</option>
                        </select>
                    </form>
                </div>
                <div class="col-sm-6 text-right">
                    <a class="btn btn-flat btn-primary" href="{{ route('lara-mvcms.content-management.pages.create') }}">
                        <i class="fa fa-file"></i> {{ trans('lara-mvcms::pages.buttons.create') }}
                    </a>
                </div>
            </div>
        </div><!-- /.box-header -->
        <div class="box-body no-padding">
            @include('lara-mvcms::content-management.pages._table', ['pages' => $pages])
        </div><!-- /.box-body -->
        <div class="box-footer">
            @include('lara-mvcms::partials._pager', ['items' => $pages])
        </div>
    </div>
@stop

@section('page-header')
    <h1>
        {{ trans('lara-mvcms::pages.title') }}
    </h1>
@overwrite

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('lara-mvcms.dashboard') }}"><i class="fa fa-dashboard"></i> {{ trans('lara-mvcms::dashboard.title') }}</a>
        </li>
        <li class="active"><i class="fa fa-file"></i> {{ trans('lara-mvcms::pages.title') }}</li>
    </ol>
@overwrite
