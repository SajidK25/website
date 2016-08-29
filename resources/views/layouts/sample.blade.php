<?php
/**
 * Created by PhpStorm.
 * User: Md Rasel Ahmed
 * Date: 03-Aug-16
 * Time: 11:00 AM
 */
?>

@extends('layouts.master')

@section('title', 'Page Title')

@section('head_style')
    @include('layouts.dashboard.head_style')
@endsection

@section('head_script')
    @include('layouts.dashboard.head_script')
@endsection

@section('app_name_short', 'R')
@section('app_name_long', 'Project Title')

@section('admin_image',  URL::asset('ap/dist/img/avatar04.png') )
@section('admin_name', 'Rasel Ahmed')
@section('admin_email', 'ninja.rasel@gmail.com')
@section('admin_designation', 'Software Engineer')
@section('admin_contact_no', '+8801521224958')

@section('sidebar_menu')
    @include('layouts.dashboard.sidebar_menu')
@endsection

@section('content_header')
    Welcome
    <small>
        Page Title
    </small>
@endsection

@section('breadcrumb')
    <li><a href="{{ route('admin::dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Test</a></li>
    <li class="active">List</li>
    <li></li>
@endsection

@section('small_box')
    @include('layouts.dashboard.small_box')
@endsection

@section('page_content')

@endsection

@section('footer')
    @include('layouts.dashboard.footer')
@endsection

@section('body_script')
    @include('layouts.dashboard.body_script')
@endsection
