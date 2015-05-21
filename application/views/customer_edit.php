			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			信息编辑
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
						<a href="javascript:;">信息编辑</a>
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
										<a href="./">
										<i class="icon-home"></i>
										概述 </a>
									</li>
									<li>
										<a href="javascript:;">
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
							<div class="col-md-12">
								<div class="portlet light">
									<div class="portlet-title tabbable-line">
										<div class="caption caption-md">
											<i class="icon-globe theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">帐户资料</span>
										</div>
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#tab_1_1" data-toggle="tab">个人信息</a>
											</li>
											<li>
												<a href="#tab_1_2" data-toggle="tab">更换头像</a>
											</li>
											<li>
												<a href="#tab_1_3" data-toggle="tab">更改密码</a>
											</li>
											<li>
												<a href="#tab_1_4" data-toggle="tab">权限设置</a>
											</li>
										</ul>
									</div>
									<div class="portlet-body">
										<div class="tab-content">
											<!-- PERSONAL INFO TAB -->
											<div class="tab-pane active" id="tab_1_1">
												<form role="form" action="#">
													<div class="form-group">
														<label class="control-label">姓</label>
														<input type="text" placeholder="王" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">名</label>
														<input type="text" placeholder="宝强" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">移动电话</label>
														<input type="text" placeholder="186-028-12345" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">工作电话</label>
														<input type="text" placeholder="028-8275-0000" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">职务</label>
														<input type="text" placeholder="中国建设银行 四川省分行 销售经理" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">说明</label>
														<textarea class="form-control" rows="3" placeholder="Don't forget your dreams!!!"></textarea>
													</div>
													<div class="form-group">
														<label class="control-label">网址</label>
														<input type="text" placeholder="http://www.cbpc.com" class="form-control"/>
													</div>
													<div class="margiv-top-10">
														<a href="javascript:;" class="btn green-haze">
														保存设置 </a>
														<a href="javascript:;" class="btn default">
														取消 </a>
													</div>
												</form>
											</div>
											<!-- END PERSONAL INFO TAB -->
											<!-- CHANGE AVATAR TAB -->
											<div class="tab-pane" id="tab_1_2">
												<p>
													 只支持JPG、PNG、GIF，大小不超过5M.
												</p>
												<form action="#" role="form">
													<div class="form-group">
														<div class="fileinput fileinput-new" data-provides="fileinput">
															<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
																<img src="../../assets/admin/pages/media/profile/Avatar_none.gif" alt=""/>
															</div>
															<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
															</div>
															<div>
																<span class="btn default btn-file">
																<span class="fileinput-new">
																选择图像 </span>
																<span class="fileinput-exists">
																更换图像 </span>
																<input type="file" name="...">
																</span>
																<a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput">
																移除 </a>
															</div>
														</div>
														<div class="clearfix margin-top-10">
															<span class="label label-danger">注意! </span>
															<span style="padding-left:1em;">仅在最新版的 Firefox, Chrome, Opera, Safari and Internet Explorer 10 浏览器中支持缩略图显示功能 </span>
														</div>
													</div>
													<div class="margin-top-10">
														<a href="javascript:;" class="btn green-haze">
														提交 </a>
														<a href="javascript:;" class="btn default">
														取消 </a>
													</div>
												</form>
											</div>
											<!-- END CHANGE AVATAR TAB -->
											<!-- CHANGE PASSWORD TAB -->
											<div class="tab-pane" id="tab_1_3">
												<form action="#">
													<div class="form-group">
														<label class="control-label">当前密码</label>
														<input type="password" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">新密码</label>
														<input type="password" class="form-control"/>
													</div>
													<div class="form-group">
														<label class="control-label">重试新密码</label>
														<input type="password" class="form-control"/>
													</div>
													<div class="margin-top-10">
														<a href="javascript:;" class="btn green-haze">
														更新密码 </a>
														<a href="javascript:;" class="btn default">
														取消 </a>
													</div>
												</form>
											</div>
											<!-- END CHANGE PASSWORD TAB -->
											<!-- PRIVACY SETTINGS TAB -->
											<div class="tab-pane" id="tab_1_4">
												<form action="#">
													<table class="table table-light table-hover">
													<tr>
														<td>
															 描述1 ..
														</td>
														<td>
															<label class="uniform-inline">
															<input type="radio" name="optionsRadios1" value="option1"/>
															是 </label>
															<label class="uniform-inline">
															<input type="radio" name="optionsRadios1" value="option2" checked/>
															否 </label>
														</td>
													</tr>
													<tr>
														<td>
															 描述2
														</td>
														<td>
															<label class="uniform-inline">
															<input type="checkbox" value=""/> 是 </label>
														</td>
													</tr>
													<tr>
														<td>
															 描述3
														</td>
														<td>
															<label class="uniform-inline">
															<input type="checkbox" value=""/> 是 </label>
														</td>
													</tr>
													<tr>
														<td>
															 描述4
														</td>
														<td>
															<label class="uniform-inline">
															<input type="checkbox" value=""/> 是 </label>
														</td>
													</tr>
													</table>
													<!--end profile-settings-->
													<div class="margin-top-10">
														<a href="javascript:;" class="btn green-haze">
														更新设置 </a>
														<a href="javascript:;" class="btn default">
														取消 </a>
													</div>
												</form>
											</div>
											<!-- END PRIVACY SETTINGS TAB -->
										</div>
									</div>
								</div>
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
