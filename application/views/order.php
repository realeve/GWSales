			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			订单浏览
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url()?>">主页</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="javascript:;">订单管理</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url()?>order">订单浏览</a>
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
								<a href="#portlet_tab2" data-toggle="tab">
								<i class="icon-bar-chart"></i>&nbsp;订单列表</a>
							</li>
							<li>
								<a href="#portlet_tab1" data-toggle="tab">
								<i class="icon-settings"></i>&nbsp;查询选项</a>
							</li>
						</ul>	
						<div class="actions">		
							<!--a href="javascript:;" class="btn btn-circle btn-default">
								<i class="fa fa-plus"></i> 新建 </a-->
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
							<div class="tab-pane" id="portlet_tab1">
								<div class="scroller form-body" style="height: 700px;">
									<!--/row-->
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
										<!--/span-->
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
												<span class="help-block">
												(选择营销人员)</span>
											</div>
										</div>
										<!--/span-->
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
							<div class="tab-pane active container-fluid" id="portlet_tab2">
								<!-- BEGIN PAGE CONTENT-->							
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
														<a href="./order/detail" class="btn default btn-xs green-stripe">
															View </a>
														<a href="javascript:;" class="btn default btn-xs blue-stripe">
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
														<a href="./order/detail" class="btn default btn-xs blue-stripe">
															View </a>
														<a href="./order/detail" class="btn default btn-xs blue-stripe">
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
														<a href="./order/detail" class="btn default btn-xs blue-stripe">
															View </a>
														<a href="./order/detail" class="btn default btn-xs blue-stripe">
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
														<a href="./order/detail" class="btn default btn-xs red-stripe">
															View </a>
														<a href="./order/detail" class="btn default btn-xs blue-stripe">
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
														<a href="./order/detail" class="btn default btn-xs green-stripe">
															View </a>
														<a href="./order/detail" class="btn default btn-xs blue-stripe">
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
														<a href="./order/detail" class="btn default btn-xs blue-stripe">
															View </a>
														<a href="javascript:;" class="btn default btn-xs blue-stripe">
															Edit </a>
													</td>
												</tr>
												</tbody>
											</table>
										</div>	
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
	