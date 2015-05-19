			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			信息浏览
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url()?>">主页</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="javascript:;">人员管理</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url()?>customer">信息浏览</a>
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
			<div class="row margin-top-20">
				<div class="col-md-12">
					<!-- BEGIN PROFILE SIDEBAR -->
					<div class="profile-sidebar">
						<!-- PORTLET MAIN -->
						<div class="portlet light profile-sidebar-portlet">
							<!-- SIDEBAR USERPIC -->
							<div class="profile-userpic">
								<img src="../../assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
							</div>
							<!-- END SIDEBAR USERPIC -->
							<!-- SIDEBAR USER TITLE -->
							<div class="profile-usertitle">
								<div class="profile-usertitle-name">
									 张三
								</div>
								<div class="profile-usertitle-job">
									 销售经理
								</div>
								<div class="profile-usertitle-job">
									 中国建设银行 四川省分行
								</div>
							</div>
							<!-- END SIDEBAR USER TITLE -->
							<!-- SIDEBAR BUTTONS -->
							<div class="profile-userbuttons">
								<button type="button" class="btn btn-circle green-haze btn-sm">关注</button>
								<button type="button" class="btn btn-circle btn-danger btn-sm">信息</button>
							</div>
							<!-- END SIDEBAR BUTTONS -->
							<!-- SIDEBAR MENU -->
							<div class="profile-usermenu">
								<ul class="nav">
									<li class="active">
										<a href="#">
										<i class="icon-home"></i>
										概述 </a>
									</li>
									<li>
										<a href="customer/edit">
										<i class="icon-settings"></i>
										帐户设置 </a>
									</li>
									<li>
										<a href="customer/task" target="_blank">
										<i class="icon-check"></i>
										任务 </a>
									</li>
									<li>
										<a href="customer/help">
										<i class="icon-info"></i>
										帮助 </a>
									</li>
								</ul>
							</div>
							<!-- END MENU -->
						</div>
						<!-- END PORTLET MAIN -->
						<!-- PORTLET MAIN -->
						<div class="portlet light">
							<!-- STAT -->
							<div class="row list-separated profile-stat">
								<div class="col-md-4 col-sm-4 col-xs-6">
									<div class="uppercase profile-stat-title">
										 37
									</div>
									<div class="uppercase profile-stat-text">
										 已结算
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-6">
									<div class="uppercase profile-stat-title">
										 51
									</div>
									<div class="uppercase profile-stat-text">
										 未结算
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-6">
									<div class="uppercase profile-stat-title">
										 12
									</div>
									<div class="uppercase profile-stat-text">
										 申请中
									</div>
								</div>
							</div>
							<!-- END STAT -->
							<div>
								<h4 class="profile-desc-title">关于 张三</h4>
								<span class="profile-desc-text"> 中国建设银行 四川省分行销售经理 负责XX大区的XX销售事务. </span>
								<div class="margin-top-20 profile-desc-link">
									<i class="fa fa-globe"></i>
									<a href="http://www.cbpm.com">www.cbpc.com</a>
								</div>
								<div class="margin-top-20 profile-desc-link">
									<i class="fa fa-weibo"></i>
									<a href="http://www.weibo.com/realeve/">@realeve</a>
								</div>
								<div class="margin-top-20 profile-desc-link">
									<i class="fa fa-qq"></i>
									<a href="javascript:;">realeve@qq.com</a>
								</div>
							</div>
						</div>
						<!-- END PORTLET MAIN -->
					</div>
					<!-- END BEGIN PROFILE SIDEBAR -->
					<!-- BEGIN PROFILE CONTENT -->
					<div class="profile-content">
						<div class="row">
							<div class="col-md-6">
								<!-- BEGIN PORTLET -->
								<div class="portlet light ">
									<div class="portlet-title">
										<div class="caption caption-md">
											<i class="icon-bar-chart theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">近期活动</span>
											<span class="caption-helper hide">周期...</span>
										</div>
										<div class="actions">
											<div class="btn-group btn-group-devided" data-toggle="buttons">
												<label class="btn btn-transparent grey-salsa btn-circle btn-sm active">
												<input type="radio" name="options" class="toggle" id="option1">今日</label>
												<label class="btn btn-transparent grey-salsa btn-circle btn-sm">
												<input type="radio" name="options" class="toggle" id="option2">本周</label>
												<label class="btn btn-transparent grey-salsa btn-circle btn-sm">
												<input type="radio" name="options" class="toggle" id="option2">本月</label>
											</div>
										</div>
									</div>
									<div class="portlet-body">
										<div class="row number-stats margin-bottom-30">
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="stat-left">
													<div class="stat-chart">
														<!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
														<div id="sparkline_bar"></div>
													</div>
													<div class="stat-number">
														<div class="title">
															 总销售量
														</div>
														<div class="number">
															 2460
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="stat-right">
													<div class="stat-chart">
														<!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
														<div id="sparkline_bar2"></div>
													</div>
													<div class="stat-number">
														<div class="title">
															 新增
														</div>
														<div class="number">
															 719
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="table-scrollable table-scrollable-borderless">
											<table class="table table-hover table-light">
											<thead>
											<tr class="uppercase">
												<th colspan="2">
													 成员
												</th>
												<th>
													 营业额
												</th>
												<th>
													 销售中
												</th>
												<th>
													 已完成
												</th>
												<th>
													 完成率
												</th>
											</tr>
											</thead>
											<tr>
												<td class="fit">
													<img class="user-pic" src="../../assets/admin/layout3/img/avatar4.jpg">
												</td>
												<td>
													<a href="javascript:;" class="primary-link">张一</a>
												</td>
												<td>
													 ￥2345
												</td>
												<td>
													 45
												</td>
												<td>
													 124
												</td>
												<td>
													<span class="bold theme-font">80%</span>
												</td>
											</tr>
											<tr>
												<td class="fit">
													<img class="user-pic" src="../../assets/admin/layout3/img/avatar5.jpg">
												</td>
												<td>
													<a href="javascript:;" class="primary-link">张二</a>
												</td>
												<td>
													 ￥2560
												</td>
												<td>
													 12
												</td>
												<td>
													 24
												</td>
												<td>
													<span class="bold theme-font">67%</span>
												</td>
											</tr>
											<tr>
												<td class="fit">
													<img class="user-pic" src="../../assets/admin/layout3/img/avatar6.jpg">
												</td>
												<td>
													<a href="javascript:;" class="primary-link">张四</a>
												</td>
												<td>
													 ￥21,345
												</td>
												<td>
													 450
												</td>
												<td>
													 46
												</td>
												<td>
													<span class="bold theme-font">98%</span>
												</td>
											</tr>
											<tr>
												<td class="fit">
													<img class="user-pic" src="../../assets/admin/layout3/img/avatar7.jpg">
												</td>
												<td>
													<a href="javascript:;" class="primary-link">张五</a>
												</td>
												<td>
													 ￥2645
												</td>
												<td>
													 50
												</td>
												<td>
													 89
												</td>
												<td>
													<span class="bold theme-font">58%</span>
												</td>
											</tr>
											</table>
										</div>
									</div>
								</div>
								<!-- END PORTLET -->
							</div>
							<div class="col-md-6">
								<!-- BEGIN PORTLET -->
								<div class="portlet light">
									<div class="portlet-title tabbable-line">
										<div class="caption caption-md">
											<i class="icon-globe theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">消息</span>
										</div>
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#tab_1_1" data-toggle="tab">
												系统 </a>
											</li>
											<li>
												<a href="#tab_1_2" data-toggle="tab">
												其它 </a>
											</li>
										</ul>
									</div>
									<div class="portlet-body">
										<!--BEGIN TABS-->
										<div class="tab-content">
											<div class="tab-pane active" id="tab_1_1">
												<div class="scroller" style="height: 320px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
													<ul class="feeds">
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 你有4笔订单需结算. <span class="label label-sm label-info">
																			处理 <i class="fa fa-share"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 刚刚
																</div>
															</div>
														</li>
														<li>
															<a href="javascript:;">
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 销售系统V1.4已发布!
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 20 分钟前
																</div>
															</div>
															</a>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-danger">
																			<i class="fa fa-bolt"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 您所提交的订单23553#已通过申请.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 24 分钟前
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 您有2笔订单需确认收货.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 30 分钟前
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 “金玉满堂(25件)”由于缺货，需重新确认.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 40 分钟前
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-warning">
																			<i class="fa fa-plus"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 信息1.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 1.5 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 信息2 <span class="label label-sm label-default ">
																			忽略 </span>
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
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-default">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 信息3.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 3 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-warning">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 信息4.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 5 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 Order payment failed.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 18 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-default">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New application received.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 21 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 Dev90 web server restarted. Pending overall system check.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 22 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-default">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New member registered. Pending approval
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 21 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 L45 Network failure. Schedule maintenance.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 22 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-default">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 Order canceled with failed payment.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 21 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 Web-A2 clound instance created. Schedule full scan.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 22 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-default">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 Member canceled. Schedule account review.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 21 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-info">
																			<i class="fa fa-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New order received. Please take care of it.
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 22 hours
																</div>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<div class="tab-pane" id="tab_1_2">
												<div class="scroller" style="height: 337px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
													<ul class="feeds">
														<li>
															<a href="javascript:;">
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New user registered
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 Just now
																</div>
															</div>
															</a>
														</li>
														<li>
															<a href="javascript:;">
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New order received
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 10 mins
																</div>
															</div>
															</a>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-danger">
																			<i class="fa fa-bolt"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 Order #24DOP4 has been rejected. <span class="label label-sm label-danger ">
																			Take action <i class="fa fa-share"></i>
																			</span>
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
															<a href="javascript:;">
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New user registered
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 Just now
																</div>
															</div>
															</a>
														</li>
														<li>
															<a href="javascript:;">
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New user registered
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 Just now
																</div>
															</div>
															</a>
														</li>
														<li>
															<a href="javascript:;">
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New user registered
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 Just now
																</div>
															</div>
															</a>
														</li>
														<li>
															<a href="javascript:;">
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New user registered
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 Just now
																</div>
															</div>
															</a>
														</li>
														<li>
															<a href="javascript:;">
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New user registered
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 Just now
																</div>
															</div>
															</a>
														</li>
														<li>
															<a href="javascript:;">
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New user registered
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 Just now
																</div>
															</div>
															</a>
														</li>
														<li>
															<a href="javascript:;">
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-sm label-success">
																			<i class="fa fa-bell-o"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			 New user registered
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	 Just now
																</div>
															</div>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<!--END TABS-->
									</div>
								</div>
								<!-- END PORTLET -->
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<!-- BEGIN PORTLET -->
								<div class="portlet light">
									<div class="portlet-title">
										<div class="caption caption-md">
											<i class="icon-bar-chart theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Customer Support</span>
											<span class="caption-helper">45 pending</span>
										</div>
										<div class="inputs">
											<div class="portlet-input input-inline input-small ">
												<div class="input-icon right">
													<i class="icon-magnifier"></i>
													<input type="text" class="form-control form-control-solid" placeholder="search...">
												</div>
											</div>
										</div>
									</div>
									<div class="portlet-body">
										<div class="scroller" style="height: 305px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
											<div class="general-item-list">
												<div class="item">
													<div class="item-head">
														<div class="item-details">
															<img class="item-pic" src="../../assets/admin/layout3/img/avatar4.jpg">
															<a href="" class="item-name primary-link">Nick Larson</a>
															<span class="item-label">3 hrs ago</span>
														</div>
														<span class="item-status"><span class="badge badge-empty badge-success"></span> Open</span>
													</div>
													<div class="item-body">
														 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</div>
												</div>
												<div class="item">
													<div class="item-head">
														<div class="item-details">
															<img class="item-pic" src="../../assets/admin/layout3/img/avatar3.jpg">
															<a href="" class="item-name primary-link">Mark</a>
															<span class="item-label">5 hrs ago</span>
														</div>
														<span class="item-status"><span class="badge badge-empty badge-warning"></span> Pending</span>
													</div>
													<div class="item-body">
														 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat tincidunt ut laoreet.
													</div>
												</div>
												<div class="item">
													<div class="item-head">
														<div class="item-details">
															<img class="item-pic" src="../../assets/admin/layout3/img/avatar6.jpg">
															<a href="" class="item-name primary-link">Nick Larson</a>
															<span class="item-label">8 hrs ago</span>
														</div>
														<span class="item-status"><span class="badge badge-empty badge-primary"></span> Closed</span>
													</div>
													<div class="item-body">
														 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.
													</div>
												</div>
												<div class="item">
													<div class="item-head">
														<div class="item-details">
															<img class="item-pic" src="../../assets/admin/layout3/img/avatar7.jpg">
															<a href="" class="item-name primary-link">Nick Larson</a>
															<span class="item-label">12 hrs ago</span>
														</div>
														<span class="item-status"><span class="badge badge-empty badge-danger"></span> Pending</span>
													</div>
													<div class="item-body">
														 Consectetuer adipiscing elit Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</div>
												</div>
												<div class="item">
													<div class="item-head">
														<div class="item-details">
															<img class="item-pic" src="../../assets/admin/layout3/img/avatar9.jpg">
															<a href="" class="item-name primary-link">Richard Stone</a>
															<span class="item-label">2 days ago</span>
														</div>
														<span class="item-status"><span class="badge badge-empty badge-danger"></span> Open</span>
													</div>
													<div class="item-body">
														 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, ut laoreet dolore magna aliquam erat volutpat.
													</div>
												</div>
												<div class="item">
													<div class="item-head">
														<div class="item-details">
															<img class="item-pic" src="../../assets/admin/layout3/img/avatar8.jpg">
															<a href="" class="item-name primary-link">Dan</a>
															<span class="item-label">3 days ago</span>
														</div>
														<span class="item-status"><span class="badge badge-empty badge-warning"></span> Pending</span>
													</div>
													<div class="item-body">
														 Lorem ipsum dolor sit amet, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</div>
												</div>
												<div class="item">
													<div class="item-head">
														<div class="item-details">
															<img class="item-pic" src="../../assets/admin/layout3/img/avatar2.jpg">
															<a href="" class="item-name primary-link">Larry</a>
															<span class="item-label">4 hrs ago</span>
														</div>
														<span class="item-status"><span class="badge badge-empty badge-success"></span> Open</span>
													</div>
													<div class="item-body">
														 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- END PORTLET -->
							</div>
							<div class="col-md-6">
								<!-- BEGIN PORTLET -->
								<div class="portlet light tasks-widget">
									<div class="portlet-title">
										<div class="caption caption-md">
											<i class="icon-bar-chart theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Tasks</span>
											<span class="caption-helper">16 pending</span>
										</div>
										<div class="inputs">
											<div class="portlet-input input-small input-inline">
												<div class="input-icon right">
													<i class="icon-magnifier"></i>
													<input type="text" class="form-control form-control-solid" placeholder="search...">
												</div>
											</div>
										</div>
									</div>
									<div class="portlet-body">
										<div class="task-content">
											<div class="scroller" style="height: 282px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
												<!-- START TASK LIST -->
												<ul class="task-list">
													<li>
														<div class="task-checkbox">
															<input type="hidden" value="1" name="test"/>
															<input type="checkbox" class="liChild" value="2" name="test"/>
														</div>
														<div class="task-title">
															<span class="task-title-sp">
															Present 2013 Year IPO Statistics at Board Meeting </span>
															<span class="label label-sm label-success">Company</span>
															<span class="task-bell">
															<i class="fa fa-bell-o"></i>
															</span>
														</div>
														<div class="task-config">
															<div class="task-config-btn btn-group">
																<a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
																<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
																</a>
																<ul class="dropdown-menu pull-right">
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-check"></i> Complete </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-pencil"></i> Edit </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-trash-o"></i> Cancel </a>
																	</li>
																</ul>
															</div>
														</div>
													</li>
													<li>
														<div class="task-checkbox">
															<input type="checkbox" class="liChild" value=""/>
														</div>
														<div class="task-title">
															<span class="task-title-sp">
															Hold An Interview for Marketing Manager Position </span>
															<span class="label label-sm label-danger">Marketing</span>
														</div>
														<div class="task-config">
															<div class="task-config-btn btn-group">
																<a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
																<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
																</a>
																<ul class="dropdown-menu pull-right">
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-check"></i> Complete </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-pencil"></i> Edit </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-trash-o"></i> Cancel </a>
																	</li>
																</ul>
															</div>
														</div>
													</li>
													<li>
														<div class="task-checkbox">
															<input type="checkbox" class="liChild" value=""/>
														</div>
														<div class="task-title">
															<span class="task-title-sp">
															AirAsia Intranet System Project Internal Meeting </span>
															<span class="label label-sm label-success">AirAsia</span>
															<span class="task-bell">
															<i class="fa fa-bell-o"></i>
															</span>
														</div>
														<div class="task-config">
															<div class="task-config-btn btn-group">
																<a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
																<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
																</a>
																<ul class="dropdown-menu pull-right">
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-check"></i> Complete </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-pencil"></i> Edit </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-trash-o"></i> Cancel </a>
																	</li>
																</ul>
															</div>
														</div>
													</li>
													<li>
														<div class="task-checkbox">
															<input type="checkbox" class="liChild" value=""/>
														</div>
														<div class="task-title">
															<span class="task-title-sp">
															Technical Management Meeting </span>
															<span class="label label-sm label-warning">Company</span>
														</div>
														<div class="task-config">
															<div class="task-config-btn btn-group">
																<a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
																<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
																</a>
																<ul class="dropdown-menu pull-right">
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-check"></i> Complete </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-pencil"></i> Edit </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-trash-o"></i> Cancel </a>
																	</li>
																</ul>
															</div>
														</div>
													</li>
													<li>
														<div class="task-checkbox">
															<input type="checkbox" class="liChild" value=""/>
														</div>
														<div class="task-title">
															<span class="task-title-sp">
															Kick-off Company CRM Mobile App Development </span>
															<span class="label label-sm label-info">Internal Products</span>
														</div>
														<div class="task-config">
															<div class="task-config-btn btn-group">
																<a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
																<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
																</a>
																<ul class="dropdown-menu pull-right">
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-check"></i> Complete </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-pencil"></i> Edit </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-trash-o"></i> Cancel </a>
																	</li>
																</ul>
															</div>
														</div>
													</li>
													<li>
														<div class="task-checkbox">
															<input type="checkbox" class="liChild" value=""/>
														</div>
														<div class="task-title">
															<span class="task-title-sp">
															Prepare Commercial Offer For SmartVision Website Rewamp </span>
															<span class="label label-sm label-danger">SmartVision</span>
														</div>
														<div class="task-config">
															<div class="task-config-btn btn-group">
																<a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
																<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
																</a>
																<ul class="dropdown-menu pull-right">
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-check"></i> Complete </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-pencil"></i> Edit </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-trash-o"></i> Cancel </a>
																	</li>
																</ul>
															</div>
														</div>
													</li>
													<li>
														<div class="task-checkbox">
															<input type="checkbox" class="liChild" value=""/>
														</div>
														<div class="task-title">
															<span class="task-title-sp">
															Sign-Off The Comercial Agreement With AutoSmart </span>
															<span class="label label-sm label-default">AutoSmart</span>
															<span class="task-bell">
															<i class="fa fa-bell-o"></i>
															</span>
														</div>
														<div class="task-config">
															<div class="task-config-btn btn-group">
																<a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
																<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
																</a>
																<ul class="dropdown-menu pull-right">
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-check"></i> Complete </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-pencil"></i> Edit </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-trash-o"></i> Cancel </a>
																	</li>
																</ul>
															</div>
														</div>
													</li>
													<li>
														<div class="task-checkbox">
															<input type="checkbox" class="liChild" value=""/>
														</div>
														<div class="task-title">
															<span class="task-title-sp">
															Company Staff Meeting </span>
															<span class="label label-sm label-success">Cruise</span>
															<span class="task-bell">
															<i class="fa fa-bell-o"></i>
															</span>
														</div>
														<div class="task-config">
															<div class="task-config-btn btn-group">
																<a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
																<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
																</a>
																<ul class="dropdown-menu pull-right">
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-check"></i> Complete </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-pencil"></i> Edit </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-trash-o"></i> Cancel </a>
																	</li>
																</ul>
															</div>
														</div>
													</li>
													<li class="last-line">
														<div class="task-checkbox">
															<input type="checkbox" class="liChild" value=""/>
														</div>
														<div class="task-title">
															<span class="task-title-sp">
															KeenThemes Investment Discussion </span>
															<span class="label label-sm label-warning">KeenThemes </span>
														</div>
														<div class="task-config">
															<div class="task-config-btn btn-group">
																<a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
																<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
																</a>
																<ul class="dropdown-menu pull-right">
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-check"></i> Complete </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-pencil"></i> Edit </a>
																	</li>
																	<li>
																		<a href="javascript:;">
																		<i class="fa fa-trash-o"></i> Cancel </a>
																	</li>
																</ul>
															</div>
														</div>
													</li>
												</ul>
												<!-- END START TASK LIST -->
											</div>
										</div>
										<div class="task-footer">
											<div class="btn-arrow-link pull-right">
												<a href="javascript:;">See All Tasks</a>
											</div>
										</div>
									</div>
								</div>
								<!-- END PORTLET -->
							</div>
						</div>
					</div>
					<!-- END PROFILE CONTENT -->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->

