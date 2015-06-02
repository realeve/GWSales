<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.7.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>长城销售系统</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<!--link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/-->
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/pages/controller/livecss.js"></script>
<link href="<?php echo base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/css/datepicker.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-select/bootstrap-select.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/jquery-multi-select/css/multi-select.css"/>
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN PAGE STYLES -->
<link href="<?php echo base_url();?>assets/admin/pages/css/invoice.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/admin/layout/css/custom/timeline.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->

<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url();?>assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo base_url();?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-md page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo ">
<!-- BEGIN HEADER -->
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="<?php echo site_url('main'); ?>">
			<img src="<?php echo base_url();?>assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler hide">
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" src="<?php echo base_url()?>assets/admin/layout/img/avatar12_small.jpg"/>
					<span class="username username-hide-on-mobile">
					<?php echo $username?> </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="extra_profile.html">
							<i class="icon-user"></i> 个人信息 </a>
						</li>
						<li>
							<a href="page_calendar.html">
							<i class="icon-calendar"></i> 日历 </a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="#">
							<i class="icon-lock"></i> 注销 </a>
						</li>
						<li>
							<a href="#">
							<i class="icon-key"></i> 退出 </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
				<!-- BEGIN QUICK SIDEBAR TOGGLER -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-quick-sidebar-toggler">
					<a href="javascript:;" class="dropdown-toggle">
					<i class="icon-logout"></i>
					</a>
				</li>
				<!-- END QUICK SIDEBAR TOGGLER -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>

<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
					<form class="sidebar-search " action="extra_search.html" method="POST">
						<a href="javascript:;" class="remove">
						<i class="icon-close"></i>
						</a>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li>
                    <a href="<?php echo site_url('main');?>">
                        <i class="icon-home"></i>
                        <span class="title">主页</span>
                    </a>
                </li>
                <li class="active open">
                    <a href="javascript:;">
                        <i class="icon-basket"></i>
                        <span class="title">订单管理</span>
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="active">
                            <a href="<?php echo site_url('order/index')?>">
                                <i class="icon-magnifier"></i>
                                订单浏览</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('order/add')?>">
                                <i class="icon-basket"></i>
                                订单添加</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('order/detail')?>">
                                <i class="icon-tag"></i>
                                订单明细</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="icon-handbag"></i>
                        <span class="title">产品管理</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?php echo site_url('product/index')?>">
                                <i class="icon-list"></i>
                                产品列表</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('product/add')?>">
                                <i class="icon-plus"></i>
                                产品添加</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="icon-diamond"></i>
                        <span class="title">客户管理</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?php echo site_url('customer/index')?>">
                                <i class="icon-grid"></i>
                                <span class="badge badge-roundless badge-success">new</span>信息浏览</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('customer/edit')?>">
                                <i class="icon-note"></i>
                                <span class="badge badge-roundless badge-danger">new</span>信息维护</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="icon-puzzle"></i>
                        <span class="title">价格管理</span>
                        <span class="arrow "></span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="icon-drawer"></i>
                        <span class="title">库存管理</span>
                        <span class="arrow "></span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="icon-credit-card"></i>
                        <span class="title">销售结算</span>
                        <span class="arrow "></span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="icon-paper-plane"></i>
                        <span class="title">退货管理</span>
                        <span class="arrow "></span>
                    </a>
                </li>
                <li class="heading">
                    <h3 class="uppercase">Features</h3>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="icon-graph"></i>
                        <span class="title">报表</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="charts_amcharts.html">
                                <i class="icon-pie-chart"></i>
                                报表1</a>
                        </li>
                        <li>
                            <a href="charts_flotcharts.html">
                                <i class="icon-bar-chart"></i>
                                报表2</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="icon-docs"></i>
                        <span class="title">数据导出</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="javascript:;">
                                <i class="icon-paper-plane"></i>
                                <span class="badge badge-warning">2</span>导出格式1</a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-user-following"></i>
                                <span class="badge badge-success badge-roundless">new</span>导出格式2</a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-envelope"></i>
                                <span class="badge badge-danger">4</span>导出格式3</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
			<div class="theme-panel hidden-xs hidden-sm">
				<div class="toggler">
				</div>
				<div class="toggler-close">
				</div>
				<div class="theme-options">
				   <div class="theme-option theme-colors clearfix">
					  <span>
					  风格 </span>
					  <ul>
						 <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
						 </li>
						 <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue">
						 </li>
						 <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
						 </li>
						 <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
						 </li>
						 <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
						 </li>
						 <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2">
						 </li>
					  </ul>
				   </div>
				   <div class="theme-option">
					  <span>
					  样式 </span>
					  <select class="layout-style-option form-control input-sm">
						 <option value="square" selected="selected">方角</option>
						 <option value="rounded">圆角</option>
					  </select>
				   </div>
				   <div class="theme-option">
					  <span>
					  布局 </span>
					  <select class="layout-option form-control input-sm">
						 <option value="fluid" selected="selected">填满</option>
						 <option value="boxed">固定</option>
					  </select>
				   </div>
				   <div class="theme-option">
					  <span>
					  顶部 </span>
					  <select class="page-header-option form-control input-sm">
						 <option value="fixed" selected="selected">固定</option>
						 <option value="default">浮动</option>
					  </select>
				   </div>
				   <div class="theme-option">
					  <span>
					  顶部下拉菜单</span>
					  <select class="page-header-top-dropdown-style-option form-control input-sm">
						 <option value="light" selected="selected">淡色系</option>
						 <option value="dark">深色系</option>
					  </select>
				   </div>
				   <div class="theme-option">
					  <span>
					  侧边栏</span>
					  <select class="sidebar-option form-control input-sm">
						 <option value="fixed">固定</option>
						 <option value="default" selected="selected">默认</option>
					  </select>
				   </div>
				   <div class="theme-option">
					  <span>
					  侧边栏菜单 </span>
					  <select class="sidebar-menu-option form-control input-sm">
						 <option value="accordion" selected="selected">折叠</option>
						 <option value="hover">浮动</option>
					  </select>
				   </div>
				   <div class="theme-option">
					  <span>
					  侧边栏样式 </span>
					  <select class="sidebar-style-option form-control input-sm">
						 <option value="default" selected="selected">默认</option>
						 <option value="light">浅色</option>
					  </select>
				   </div>
				   <div class="theme-option">
					  <span>
					  侧边栏位置 </span>
					  <select class="sidebar-pos-option form-control input-sm">
						 <option value="left" selected="selected">左</option>
						 <option value="right">右</option>
					  </select>
				   </div>
				   <div class="theme-option">
					  <span>
					  底部 </span>
					  <select class="page-footer-option form-control input-sm">
						 <option value="fixed">固定</option>
						 <option value="default" selected="selected">浮动</option>
					  </select>
				   </div>
				</div>
			 </div>
			<!-- END STYLE CUSTOMIZER -->
			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			订单浏览
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url('main');?>">主页</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="javascript:;">订单管理</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url('order');?>">订单浏览</a>
					</li>
				</ul>
				<div class="page-toolbar">
					<div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height grey-salt" data-placement="top" data-original-title="选择查询时间">
						<i class="icon-calendar"></i>&nbsp; <span class="uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
					</div>
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<!-- BEGIN Portlet PORTLET-->
				<div class="portlet light bordered">			
					<div class="portlet-title tabbable-line">
						<ul class="nav nav-tabs pull-left">
							<li class="active">
								<a href="#portlet_tab1" data-toggle="tab">
								<i class="icon-bar-chart"></i>&nbsp;订单列表</a>
							</li>
							<li>
								<a href="#portlet_tab2" data-toggle="tab">
								<i class="icon-settings"></i>&nbsp;查询选项</a>
							</li>
						</ul>	
						<div class="actions">		
							<div class="portlet-input input-inline input-medium">
								<div class="input-group">
									<input type="text" class="form-control input-circle-left" placeholder="请输入订单号...">
									<span class="input-group-btn">
									<button class="btn btn-circle-right btn-default" type="submit">搜索</button>
									</span>
								</div>
							</div>				
							<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;">
							</a>
						</div>						
					</div>

					<div class="portlet-body form">
						<div class="tab-content">
                            <div class="tab-pane active container-fluid" id="portlet_tab1">
                                <div class="row">
                                    <div class="col-md-12 form-body">
                                        <div class="table-scrollable">
                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                <thead>
                                                <tr>
                                                    <th width="15%">
                                                        <i class="fa fa-briefcase"></i>  订单编号 #
                                                    </th>
                                                    <th class="hidden-xs" width="15%">
                                                        <i class="fa fa-user"></i>  客户
                                                    </th>
                                                    <th width="15%">
                                                        <i class="fa fa-shopping-cart"></i>  订单总价
                                                    </th>
                                                    <th width="15%">
                                                        <i class="fa fa-note"></i>  订单状态
                                                    </th>
                                                    <th class="hidden-xs" width="20%">
                                                        <i class="fa fa-calendar"></i>  最新订单状态修改日期
                                                    </th>
                                                    <th width="8%">
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            201505110001</a>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        客户A
                                                    </td>
                                                    <td>
                                                        ￥52560.00
                                                    </td>
                                                    <td align="center">
                                                        <span class="label label-sm label-success label-mini"> 已付款 </span>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        2015-05-12 12:21:21
                                                    </td>
                                                    <td align="center">
                                                        <a href="<?php echo site_url('order/detail');?>" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                        <a href="<?php echo site_url('order/detail');?>" class="btn default btn-xs blue-stripe">
                                                            Edit </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            201505110002</a>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        客户B
                                                    </td>
                                                    <td>
                                                        ￥5760.00
                                                    </td>
                                                    <td align="center">
                                                        <span class="label label-sm label-warning label-mini"> 正在审核 </span>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        2015-05-14 12:21:21
                                                    </td>
                                                    <td align="center">
                                                        <a href="<?php echo site_url('order/detail');?>" class="btn default btn-xs blue-stripe">
                                                            View </a>
                                                        <a href="<?php echo site_url('order/detail');?>" class="btn default btn-xs blue-stripe">
                                                            Edit </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            201505110003</a>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        客户C
                                                    </td>
                                                    <td>
                                                        ￥12400.00
                                                    </td>
                                                    <td align="center">
                                                        <span class="label label-sm label-success label-mini"> 备货完成 </span>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        2015-05-15 12:21:21
                                                    </td>
                                                    <td align="center">
                                                        <a href="<?php echo site_url('order/detail');?>" class="btn default btn-xs blue-stripe">
                                                            View </a>
                                                        <a href="<?php echo site_url('order/detail');?>" class="btn default btn-xs blue-stripe">
                                                            Edit </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            201505150001</a>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        客户B
                                                    </td>
                                                    <td>
                                                        ￥6100.00
                                                    </td>
                                                    <td align="center">
                                                        <span class="label label-sm label-warning label-mini"> 正在备货 </span>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        2015-05-16 15:31:21
                                                    </td>
                                                    <td align="center">
                                                        <a href="<?php echo site_url('order/detail');?>" class="btn default btn-xs red-stripe">
                                                            View </a>
                                                        <a href="<?php echo site_url('order/detail');?>" class="btn default btn-xs blue-stripe">
                                                            Edit </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            201505160001</a>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        客户D
                                                    </td>
                                                    <td>
                                                        ￥5200.00
                                                    </td>
                                                    <td align="center">
                                                        <span class="label label-sm label-danger label-mini"> 未审核 </span>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        2015-05-15 10:51:21
                                                    </td>
                                                    <td align="center">
                                                        <a href="<?php echo site_url('order/detail');?>" class="btn default btn-xs green-stripe">
                                                            View </a>
                                                        <a href="<?php echo site_url('order/detail');?>" class="btn default btn-xs blue-stripe">
                                                            Edit </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:;">
                                                            201505160002</a>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        客户C
                                                    </td>
                                                    <td>
                                                        ￥5760.00
                                                    </td>
                                                    <td align="center">
                                                        <span class="label label-sm label-success label-mini"> 已付款 </span>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        2015-05-16 09:45:21
                                                    </td>
                                                    <td align="center">
                                                        <a href="<?php echo site_url('order/detail');?>" class="btn default btn-xs blue-stripe">
                                                            View </a>
                                                        <a href="<?php echo site_url('order/detail');?>" class="btn default btn-xs blue-stripe">
                                                            Edit </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="tab-pane" id="portlet_tab2">
								<div class="scroller form-body" style="height: 700px;">
									<h4 class="form-section font-blue-hoki">1.人员</h4>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">i.客户</label>									
												<select class="select2_category bs-select form-control select2me"  data-placeholder="请选择客户名...">
													<option value=""></option>												
													<option value="1">客户A</option>
													<option value="2" selected>客户B</option>																					
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">ii.营销员</label>									
												<select class="select2_category bs-select form-control select2me"  data-placeholder="请选择营销人员...">
													<option value=""></option>
													<optgroup label="建行">
														<option value="1">张三</option>
														<option value="2">张四</option>
														<option value="3">张五</option>
														<option value="4">张六</option>
													</optgroup>
													<optgroup label="工行">
														<option value="6">张七</option>
														<option value="7">张八</option>
														<option value="8">张九</option>
													</optgroup>
												</select>
												<span class="help-block">(选择营销人员)</span>
											</div>
										</div>
									</div>							
									<h4 class="form-section font-blue-hoki">2.状态</h4>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">i.物流</label>									
												<select class="select2_category bs-select form-control select2me"  data-placeholder="请选择物流状态..">
													<option value=""></option>												
													<option value="1">未发货</option>
													<option value="2">已发货</option>		
													<option value="3" selected>已签收</option>																					
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">ii.资金流</label>									
												<select class="select2_category bs-select form-control select2me"  data-placeholder="请选择资金状态..">
													<option value=""></option>	
													<option value="1">未付款</option>
													<option value="2">已付款</option>																															
												</select>
											</div>
										</div>				
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">iii.信息流</label>									
												<select class="select2_category bs-select form-control select2me"  data-placeholder="请选择订单状态..">
													<option value="1" selected>未审批</option>		
													<option value="2">已审批</option>																	
												</select>
											</div>
										</div>									
									</div>
									<div class="form-actions right">
										<button class="btn btn-success btn-circle green"><i class="icon-magnifier"></i>查询数据</button>
									</div>
								</div>
							</div>
						</div>
					<!-- END Portlet PORTLET-->
					</div>
					<!-- END PAGE CONTENT-->
				</div>
			</div>
			<!-- END CONTENT -->
		</div>
	</div>
    <!-- END CONTENT -->
</div>

<!-- BEGIN QUICK SIDEBAR -->
<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
<div class="page-quick-sidebar-wrapper">
      <div class="page-quick-sidebar">
         <div class="nav-justified">
            <ul class="nav nav-tabs nav-justified">
               <li class="active">
                  <a href="#quick_sidebar_tab_4" data-toggle="tab">
                  查询 <span class="badge badge-info">2</span>
                  </a>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  更多<i class="fa fa-angle-down"></i>
                  </a>
                  <ul class="dropdown-menu pull-right" role="menu">
                     <li>
                        <a href="#quick_sidebar_tab_3" data-toggle="tab">
                        <i class="icon-bell"></i> 提醒 </a>
                     </li>
                     <li>
                        <a href="#quick_sidebar_tab_3" data-toggle="tab">
                        <i class="icon-info"></i> 消息 </a>
                     </li>
                     <li class="divider">
                     </li>
                     <li>
                        <a href="#quick_sidebar_tab_3" data-toggle="tab">
                        <i class="icon-settings"></i> 系统设置 </a>
                     </li>
                  </ul>
               </li>
            </ul>
            <div class="tab-content">
                <!--TAB SETTINGS START-->
               <div class="tab-pane  active page-quick-sidebar-settings" id="quick_sidebar_tab_4">
                  <div class="page-quick-sidebar-settings-list">
                     <h3 class="list-heading">通用设置</h3>
                     <ul class="list-items borderless">
                        <li>
                            自动刷新<input id="AutoRefresh" type="checkbox" class="make-switch" checked data-on-color="success" data-on-text="是" data-off-color="danger" data-off-text="否">
                        </li>
                         <li>
                            刷新间隔
                           <select id="RefreshTime" class="form-control input-inline input-sm input-small" data-placeholder="刷新间隔...">
                              <option value=""></option>
                              <option value="30">30S</option>
                              <option value="60">1分钟</option>
                              <option value="300">5分钟</option>
                              <option value="600">10分钟</option>
                           </select>
                        </li
                        <li>
                            每次加载
                           <select id="LoadingNum" class="form-control input-inline input-sm input-small" data-placeholder="刷新条数...">
                              <option value=""></option>
                              <option value="1">20条</option>
                              <option value="2">30条</option>
                              <option value="3">40条</option>
                              <option value="4">50条</option>
                           </select>
                        </li>
                     </ul>
                     <h3 class="list-heading">查询选项</h3>
                     <ul class="list-items borderless">
                        <li>
                            处理状态
                           <select id="ProStatus" class="form-control input-inline input-sm input-small" data-placeholder="处理状态...">
                              <option value=""></option>
                              <option value="1">已处理</option>
                              <option value="2">未处理</option>
                              <option value="3" selected>所有日志</option>
                           </select>
                        </li>
                        <li>
                            当前ID<input id="LogID" class="form-control input-inline input-sm input-small" disabled value="0"/>
                        </li>                       
                     </ul>
                     <div class="containt row">
                        <div class="inner-content col-md-4" style="margin:10px 10px 0 20px">
                           <button id="SaveSettings" class="btn btn-success btn-circle purple-studio"><i class="icon-settings"></i>保存设置</button>
                        </div>
                        <div class="inner-content col-md-4" style="margin:10px 10px 0 20px">
                           <button id="QueryData" class="btn btn-success btn-circle green-seagreen"><i class="icon-magnifier"></i>查询数据</button>
                        </div>
                     </div>
                  </div>
               </div>
               <!--TAB SETTINGS END-->
                  <div class="page-quick-sidebar-alerts-list">
                     <h3 class="list-heading">General</h3>
                     <ul class="feeds list-items">
                        <li>
                           <div class="col1">
                              <div class="cont">
                                 <div class="cont-col1">
                                    <div class="label label-sm label-info">
                                       <i class="fa fa-check"></i>
                                    </div>
                                 </div>
                                 <div class="cont-col2">
                                    <div class="desc">
                                        You have 4 pending tasks. <span class="label label-sm label-warning ">
                                       Take action <i class="fa fa-share"></i>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col2">
                              <div class="date">
                                  Just now
                              </div>
                           </div>
                        </li>
                        <li>
                           <a href="#">
                           <div class="col1">
                              <div class="cont">
                                 <div class="cont-col1">
                                    <div class="label label-sm label-success">
                                       <i class="fa fa-bar-chart-o"></i>
                                    </div>
                                 </div>
                                 <div class="cont-col2">
                                    <div class="desc">
                                        Finance Report for year 2013 has been released.
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col2">
                              <div class="date">
                                  20 mins
                              </div>
                           </div>
                           </a>
                        </li>
                        <li>
                           <div class="col1">
                              <div class="cont">
                                 <div class="cont-col1">
                                    <div class="label label-sm label-danger">
                                       <i class="fa fa-user"></i>
                                    </div>
                                 </div>
                                 <div class="cont-col2">
                                    <div class="desc">
                                        You have 5 pending membership that requires a quick review.
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col2">
                              <div class="date">
                                  24 mins
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="col1">
                              <div class="cont">
                                 <div class="cont-col1">
                                    <div class="label label-sm label-info">
                                       <i class="fa fa-shopping-cart"></i>
                                    </div>
                                 </div>
                                 <div class="cont-col2">
                                    <div class="desc">
                                        New order received with <span class="label label-sm label-success">
                                       Reference Number: DR23923 </span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col2">
                              <div class="date">
                                  30 mins
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="col1">
                              <div class="cont">
                                 <div class="cont-col1">
                                    <div class="label label-sm label-success">
                                       <i class="fa fa-user"></i>
                                    </div>
                                 </div>
                                 <div class="cont-col2">
                                    <div class="desc">
                                        You have 5 pending membership that requires a quick review.
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col2">
                              <div class="date">
                                  24 mins
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="col1">
                              <div class="cont">
                                 <div class="cont-col1">
                                    <div class="label label-sm label-info">
                                       <i class="fa fa-bell-o"></i>
                                    </div>
                                 </div>
                                 <div class="cont-col2">
                                    <div class="desc">
                                        Web server hardware needs to be upgraded. <span class="label label-sm label-warning">
                                       Overdue </span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col2">
                              <div class="date">
                                  2 hours
                              </div>
                           </div>
                        </li>
                        <li>
                           <a href="#">
                           <div class="col1">
                              <div class="cont">
                                 <div class="cont-col1">
                                    <div class="label label-sm label-default">
                                       <i class="fa fa-briefcase"></i>
                                    </div>
                                 </div>
                                 <div class="cont-col2">
                                    <div class="desc">
                                        IPO Report for year 2013 has been released.
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col2">
                              <div class="date">
                                  20 mins
                              </div>
                           </div>
                           </a>
                        </li>
                     </ul>
                     <h3 class="list-heading">System</h3>
                     <ul class="feeds list-items">
                        <li>
                           <div class="col1">
                              <div class="cont">
                                 <div class="cont-col1">
                                    <div class="label label-sm label-info">
                                       <i class="fa fa-check"></i>
                                    </div>
                                 </div>
                                 <div class="cont-col2">
                                    <div class="desc">
                                        You have 4 pending tasks. <span class="label label-sm label-warning ">
                                       Take action <i class="fa fa-share"></i>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col2">
                              <div class="date">
                                  Just now
                              </div>
                           </div>
                        </li>
                        <li>
                           <a href="#">
                           <div class="col1">
                              <div class="cont">
                                 <div class="cont-col1">
                                    <div class="label label-sm label-danger">
                                       <i class="fa fa-bar-chart-o"></i>
                                    </div>
                                 </div>
                                 <div class="cont-col2">
                                    <div class="desc">
                                        Finance Report for year 2013 has been released.
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col2">
                              <div class="date">
                                  20 mins
                              </div>
                           </div>
                           </a>
                        </li>
                        <li>
                           <div class="col1">
                              <div class="cont">
                                 <div class="cont-col1">
                                    <div class="label label-sm label-default">
                                       <i class="fa fa-user"></i>
                                    </div>
                                 </div>
                                 <div class="cont-col2">
                                    <div class="desc">
                                        You have 5 pending membership that requires a quick review.
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col2">
                              <div class="date">
                                  24 mins
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="col1">
                              <div class="cont">
                                 <div class="cont-col1">
                                    <div class="label label-sm label-info">
                                       <i class="fa fa-shopping-cart"></i>
                                    </div>
                                 </div>
                                 <div class="cont-col2">
                                    <div class="desc">
                                        New order received with <span class="label label-sm label-success">
                                       Reference Number: DR23923 </span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col2">
                              <div class="date">
                                  30 mins
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="col1">
                              <div class="cont">
                                 <div class="cont-col1">
                                    <div class="label label-sm label-success">
                                       <i class="fa fa-user"></i>
                                    </div>
                                 </div>
                                 <div class="cont-col2">
                                    <div class="desc">
                                        You have 5 pending membership that requires a quick review.
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col2">
                              <div class="date">
                                  24 mins
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="col1">
                              <div class="cont">
                                 <div class="cont-col1">
                                    <div class="label label-sm label-warning">
                                       <i class="fa fa-bell-o"></i>
                                    </div>
                                 </div>
                                 <div class="cont-col2">
                                    <div class="desc">
                                        Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
                                       Overdue </span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col2">
                              <div class="date">
                                  2 hours
                              </div>
                           </div>
                        </li>
                        <li>
                           <a href="#">
                           <div class="col1">
                              <div class="cont">
                                 <div class="cont-col1">
                                    <div class="label label-sm label-info">
                                       <i class="fa fa-briefcase"></i>
                                    </div>
                                 </div>
                                 <div class="cont-col2">
                                    <div class="desc">
                                        IPO Report for year 2013 has been released.
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col2">
                              <div class="date">
                                  20 mins
                              </div>
                           </div>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <!--TAB SETTINGS START-->
               <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                  <div class="page-quick-sidebar-settings-list">
                     <h3 class="list-heading">General Settings</h3>
                     <ul class="list-items borderless">
                        <li>
                            Enable Notifications <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                        </li>
                        <li>
                            Allow Tracking <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                        </li>
                        <li>
                            Log Errors <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                        </li>
                        <li>
                            Auto Sumbit Issues <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                        </li>
                        <li>
                            Enable SMS Alerts <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                        </li>
                     </ul>
                     <h3 class="list-heading">System Settings</h3>
                     <ul class="list-items borderless">
                        <li>
                            Security Level
                           <select class="form-control input-inline input-sm input-small">
                              <option value="1">Normal</option>
                              <option value="2" selected>Medium</option>
                              <option value="e">High</option>
                           </select>
                        </li>
                        <li>
                            Failed Email Attempts <input class="form-control input-inline input-sm input-small" value="5"/>
                        </li>
                        <li>
                            Secondary SMTP Port <input class="form-control input-inline input-sm input-small" value="3560"/>
                        </li>
                        <li>
                            Notify On System Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                        </li>
                        <li>
                            Notify On SMTP Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                        </li>
                     </ul>
                     <div class="inner-content">
                        <button class="btn btn-success"><i class="icon-settings"></i> Save Changes</button>
                     </div>
                  </div>
               </div>
               <!--TAB SETTINGS END-->
            </div>
         </div>
      </div>
<!-- END QUICK SIDEBAR -->

<!-- END CONTAINER -->

<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2015 &copy; 中钞长城贵金属有限公司.
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo base_url();?>assets/global/plugins/respond.min.js"></script>
<script src="<?php echo base_url();?>assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?php echo base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url();?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<?php
  function today($type){
    date_default_timezone_set ("Asia/Chongqing");
    $a=date("Y");
    $b=date("m");
    $c=date("d");
    $d=date("G");
    $e=date("i");
    $f=date("s");
    $output;
    switch($type)
    {
      case 0:
        $output = $a.'年'.$b.'月'.$c.'日';
        break;
      case 1:
        $output = $a.'-'.$b.'-'.$c.'  '.$d.':'.$e.':'.$f;
        break;
      case 2:
        $output = $a.'年'.$b.'月'.$c.'日'.$d.'时'.$e.'分'.$f.'秒';
        break;
      case 3:
        $output = $a.'-'.$b.'-'.$c.'  '.$d.':'.$e;
        break;
      case 4:
        $output = $a.'年'.$b.'月'.$c.'日  '.$d.'时'.$e.'分';
        break;
	  case 5:
        $output = $a.'年'.$b.'月'.$c.'日  '.$d.':'.$e;
        break;
	  case 6:
        $output = $a.'年'.$b.'月';
        break;
    };
  return $output;
}
?>

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/pages/scripts/form-wizard.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/pages/controller/CommonFunctions.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	QuickSidebar.init(); // init quick sidebar
	Demo.init(); // init demo features
	FormWizard.init();
   //ComponentsDropdowns.init();	
	$("#today").text('<?php echo today(5);?>');
	initDashboardDaterange('YYYY-MM-DD');   
	TimelineInit();

});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>