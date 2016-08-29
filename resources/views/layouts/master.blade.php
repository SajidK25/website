<?php
/**
 * Created by PhpStorm.
 * User: Md Rasel Ahmed
 * Date: 03-Aug-16
 * Time: 11:00 AM
 */
?>

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Md Rasel Ahmed">
    <title>
        Project Title - @yield('title')
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @yield('head_style')
    @yield('head_script')
</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<body class="hold-transition skin-blue layout-boxed sidebar-mini">
<div class="wrapper">
    <header class="main-header">        <!-- Logo -->
        <a href="{{ route('admin::dashboard') }}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>@yield('app_name_short')</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>@yield('app_name_long')</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="@yield('admin_image')" class="user-image" alt="User Image" style="width: 25px; height: 25px;">
                            <span class="hidden-xs">@yield('admin_name')</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="@yield('admin_image')" class="img-circle" alt="User Image" style="width: 90px; height: 90px;">
                                <p>
                                    <small>Email: @yield('admin_email')</small>
                                    <small>Company: @yield('admin_designation')</small>
                                    <small>Contact: @yield('admin_contact_no')</small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="@yield('admin_image')" class="img-circle" alt="User Image" style="width: 45px; height: 45px;">
                </div>
                <div class="pull-left info">
                    <p>@yield('admin_name')</p>
                    <p>@yield('admin_email')</p>
                </div>
            </div>
            <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="{{ route('admin::dashboard') }}">
                        <i class="fa fa-dashboard"></i> <span>Home</span>
                    </a>
                </li>
                @yield('sidebar_menu')
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @yield('content_header')
            </h1>
            <ol class="breadcrumb">
                @yield('breadcrumb')
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            @yield('small_box')
            @yield('page_content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
        @yield('footer')
    </footer>
    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->
@yield('body_script')
</body>
</html>
