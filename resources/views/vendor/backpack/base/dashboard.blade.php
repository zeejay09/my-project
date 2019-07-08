@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <!-- <h1>
        {{ trans('backpack::base.dashboard') }}<small>{{ trans('backpack::base.first_page_you_see') }}</small>
      </h1> -->
      <h1>
        Strategic Performance Management System<small>SPMS</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ backpack_url() }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title"><i class="fa fa-th-large" aria-hidden="true"></i> App Modules</div>
                </div>

                <!-- <div class="box-body">{{ trans('backpack::base.logged_in') }}</div> -->
                <div class="box-body">
                  <a href="{{ backpack_url('opcr') }}" class="btn btn-xs btn-default" style="font-size: 15px; height: 100%; width: 71.25px;"><i class="fa fa-users" style="padding: 15px 15px 0px 15px;font-size: 30px;"></i> </br> OPCR</a>
                  <a href="{{ backpack_url('opcr') }}" class="btn btn-xs btn-default" style="font-size: 15px; height: 71.25px; width: 71.25px;"><i class="fa fa-user" style="padding: 15px 15px 0px 15px;font-size: 30px;"></i> </br> IPCR</a>
                </div>
            </div>
        </div>
    </div>
@endsection
