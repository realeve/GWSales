			<!-- BEGIN PAGE HEADER-->
			<div id="responsive" class="modal fade" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header caption font-green">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
						
						<h3><i class="icon-pin font-green"></i>
							<span class="caption-subject bold uppercase">订单状态修改</span></h3>

					</div>		
					<div class="modal-body">
						<div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible1="1">							
								<div class="form-group form-md-line-input">									
									<div class="input-icon right">
										<input type="password" class="form-control" placeholder="在此输入确认密码">
										<div class="form-control-focus">
										</div>
										<i class="fa fa-key"></i>
									</div>
									<div class="help-block">
										 更改订单状态请输入确认密码
									</div>									
								</div>
								<div class="form-group form-md-line-input">
									<textarea class="form-control" rows="5" placeholder="在此输入留言信息"></textarea>
									<label for="form_control_1"></label>
								</div>							
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn default">关闭<i class="icon-close"></i></button>
						<button type="button" data-dismiss="modal" class="btn btn-primary" id="bs_confirmation_demo_2">提交<i class="icon-cloud-upload"></i></button>
						
					</div>
				</div>
			</div>
		</div>

			<h3 class="page-title hidden-print">订单明细</h3>
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
						<a href="<?php echo base_url()?>/order/detail">订单明细</a>
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
				<div class="col-md-12">
					<!-- Begin: life time stats -->
					<div class="portlet light" style="min-height:600px;">
						<div class="portlet-title hidden-print">
							<div class="caption">
								<i class="fa fa-shopping-cart"></i>订单编号 #12313232 <span class="hidden-480">
								| 2015年5月15日 9:16:25 </span>
							</div>
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
						<div class="portlet-body">
							<div class="tabbable">
								<ul class="nav nav-tabs nav-tabs-lg hidden-print">
									<li class="active">
										<a href="#tab_1" data-toggle="tab">
										基本信息 </a>
									</li>									
									<li>
										<a href="#tab_5" data-toggle="tab">
										发货单 </a>
									</li>
									<li>
										<a href="#tab_2" data-toggle="tab">
										物流信息 <span class="badge badge-success">
										4 </span>
										</a>
									</li>
									<li>
										<a href="#tab_3" data-toggle="tab">
                                        结算信息<span class="badge badge-danger">
										3 </span>
                                        </a>
									</li>
									<li>
										<a href="#tab_4" data-toggle="tab">
										时间轴 </a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="tab_1">
										<div class="row">
											<div class="col-md-6 col-sm-12">
												<div class="portlet yellow-crusta box">
													<div class="portlet-title">
														<div class="caption">
															<i class="fa fa-cogs"></i>订单信息
														</div>
														<div class="actions">
															<a href="javascript:;" class="btn btn-default btn-sm">
															<i class="fa fa-pencil"></i> Edit </a>
														</div>
													</div>
													<div class="portlet-body">
														<div class="row static-info">
															<div class="col-md-5 name">
																 订单编号 #:
															</div>
															<div class="col-md-7 value">
																 12313232 <span class="label label-info label-sm">
																双方电话已确认 </span>
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 订单生成时间:
															</div>
															<div class="col-md-7 value">
																 2015年5月15日 9:16:25 AM
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 订单状态:
															</div>
															<div class="col-md-7 value">
																<span class="label label-success">
																已发货 </span>
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 订单总价:
															</div>
															<div class="col-md-7 value">
																 ￥17525.00
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 付款情况:
															</div>
															<div class="col-md-7 value">
                                                                <span class="label label-success">
																 已付款</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-sm-12">
												<div class="portlet blue-hoki box">
													<div class="portlet-title">
														<div class="caption">
															<i class="fa fa-cogs"></i>客户信息
														</div>
														<div class="actions">
															<a href="javascript:;" class="btn btn-default btn-sm">
															<i class="fa fa-pencil"></i> Edit </a>
														</div>
													</div>
													<div class="portlet-body">
														<div class="row static-info">
															<div class="col-md-5 name">
																 客户名称:
															</div>
															<div class="col-md-7 value">
																 XX省工商银行省分行
															</div>
														</div>
                                                        <div class="row static-info">
                                                            <div class="col-md-5 name">
                                                                客户地址:
                                                            </div>
                                                            <div class="col-md-7 value">
                                                                XX省XX市XX路XX号
                                                            </div>
                                                        </div>
                                                        <div class="row static-info">
                                                            <div class="col-md-5 name">
                                                                联系人:
                                                            </div>
                                                            <div class="col-md-7 value">
                                                                张三
                                                            </div>
                                                        </div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 联系人Email:
															</div>
															<div class="col-md-7 value">
																 jhon@doe.com
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 联系人电话:
															</div>
															<div class="col-md-7 value">
																 12234389
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6 col-sm-12">
												<div class="portlet green-meadow box">
													<div class="portlet-title">
														<div class="caption">
															<i class="fa fa-cogs"></i>付款信息
														</div>
														<div class="actions">
															<a href="javascript:;" class="btn btn-default btn-sm">
															<i class="fa fa-pencil"></i> Edit </a>
														</div>
													</div>
                                                    <div class="portlet-body">
                                                        <div class="row static-info">
                                                            <div class="col-md-5 name">
                                                                付款账号:
                                                            </div>
                                                            <div class="col-md-7 value">
                                                                123132325733453
                                                            </div>
                                                        </div>
                                                        <div class="row static-info">
                                                            <div class="col-md-5 name">
                                                                银行名称:
                                                            </div>
                                                            <div class="col-md-7 value">
                                                                中国工商银行
                                                            </div>
                                                        </div>
														</br></br></br></br></br>
                                                    </div>
												</div>
											</div>
											<div class="col-md-6 col-sm-12">
												<div class="portlet red-sunglo box">
													<div class="portlet-title">
														<div class="caption">
															<i class="fa fa-cogs"></i>发运地址
														</div>
														<div class="actions">
															<a href="javascript:;" class="btn btn-default btn-sm">
															<i class="fa fa-pencil"></i> Edit </a>
														</div>
													</div>
                                                    <div class="portlet-body">
                                                        <div class="row static-info">
                                                            <div class="col-md-5 name">
                                                                收货人:
                                                            </div>
                                                            <div class="col-md-7 value">
                                                                张三
                                                            </div>
                                                        </div>
                                                        <div class="row static-info">
                                                            <div class="col-md-5 name">
                                                                联系人联系方式:
                                                            </div>
                                                            <div class="col-md-7 value">
                                                                Tel: 123123232
                                                            </div>
                                                        </div>
                                                        <div class="row static-info">
                                                            <div class="col-md-5 name">
                                                                发运地址:
                                                            </div>
                                                            <div class="col-md-7 value">
																四川省<br>
                                                                成都市<br>
                                                                温江区<br>
                                                                XXX路XXXX号<br>
                                                            </div>
                                                        </div>
                                                    </div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-sm-12">
												<div class="portlet grey-cascade box">
													<div class="portlet-title">
														<div class="caption">
															<i class="fa fa-cogs"></i>订单商品信息
														</div>
														<div class="actions">
															<a href="javascript:;" class="btn btn-default btn-sm">
															<i class="fa fa-pencil"></i> Edit </a>
														</div>
													</div>
													<div class="portlet-body">
														<div class="table-responsive">
															<table class="table table-hover table-bordered table-striped">
															<thead>
															<tr>
																<th>
																	 商品名称
																</th>
																<th>
																	 库存信息
																</th>
																<th>
																	 价格
																</th>
																<th>
																	 数量
																</th>
																<th>
																	 总价
																</th>
																<th>
																	 重量
																</th>
															</tr>
															</thead>
															<tbody>
															<tr>
																<td>
																	<a href="javascript:;">
																	商品 1 </a>
																</td>
																<td>
																	<span class="label label-sm label-success">
																	库存充足
																</td>
																<td>
																	 ￥345.50
																</td>
																<td>
																	 2
																</td>
																<td>
																	 ￥691.00
																</td>
																<td>
																	 2g X 2 （4g）
																</td>
															</tr>
															<tr>
																<td>
																	<a href="javascript:;">
																	商品 2 </a>
																</td>
																<td>
																	<span class="label label-sm label-warning">
																	库存紧张
																</td>
																<td>
																	 ￥500
																</td>
																<td>
																	 4
																</td>
																<td>
																	 ￥2000
																</td>
																<td>
																	 1.5g X 4 （6g）
																</td>
															</tr>
															<tr>
																<td>
																	<a href="javascript:;">
																	商品 3 </a>
																</td>
																<td>
																	<span class="label label-sm label-success">
																	库存充足
																</td>
																<td>
																	 ￥1000
																</td>
																<td>
																	 3
																</td>
																<td>
																	 ￥3000
																</td>
																<td>
																	 2g X 3 （6g）
																</td>
															</tr>
															<tr>
																<td>
																	<a href="javascript:;">
																	商品 4 </a>
																</td>
																<td>
																	<span class="label label-sm label-danger">
																	库存红线
																</td>
																<td>
																	 ￥3000
																</td>
																<td>
																	 1
																</td>
																<td>
																	 ￥3000
																</td>
																<td>
																	 8g X 1 (8g)
																</td>
															</tr>
															</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
											</div>
											<div class="col-md-6">
												<div class="well">
													<div class="row static-info align-reverse">
														<div class="col-md-8 name">
															 商品总价:
														</div>
														<div class="col-md-3 value">
															 ￥8691.00
														</div>
													</div>
													<div class="row static-info align-reverse">
														<div class="col-md-8 name">
															 运费:
														</div>
														<div class="col-md-3 value">
															 ￥200
														</div>
													</div>
													<div class="row static-info align-reverse">
														<div class="col-md-8 name">
															 保价费:
														</div>
														<div class="col-md-3 value">
															 ￥1000
														</div>
													</div>
													<div class="row static-info align-reverse">
														<div class="col-md-8 name">
															 总价:
														</div>
														<div class="col-md-3 value">
															 ￥9891.00
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab_2">
                                        <div class="note note-success">
                                            <h4 class="block">物流信息</h4>
                                            <p>
                                                此功能的信息将采用访问物流公司开放的网络接口，读取该物流单号的物流信息。
                                            </p>
                                        </div>
									</div>
									<div class="tab-pane" id="tab_3">
										<div class="table-container">
											<table class="table table-striped table-bordered table-hover" id="datatable_credit_memos">
											<thead>
											<tr role="row" class="heading">
												<th width="5%">
													 序号
												</th>
												<th width="15%">
													 结算单号
												</th>
												<th width="20%">
													 商品名称
												</th>
												<th width="5%">
													 单价
												</th>
												<th width="5%">
													 数量
												</th>
                                                <th width="10%">
                                                     总价
                                                </th>
                                                <th width="15%">
                                                     结算时间
                                                </th>
											</tr>
											</thead>
											<tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>1234567890</td>
                                                <td>商品 2</td>
                                                <td>￥500</td>
                                                <td>2</td>
                                                <td>￥1000</td>
                                                <td>2015-5-15 10:40:30 AM</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>1234567891</td>
                                                <td>商品 3</td>
                                                <td>￥1000</td>
                                                <td>2</td>
                                                <td>￥2000</td>
                                                <td>2015-5-15 10:47:30 AM</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>1234567892</td>
                                                <td>商品 2</td>
                                                <td>￥500</td>
                                                <td>2</td>
                                                <td>￥1000</td>
                                                <td>2015-5-16 10:40:30 AM</td>
                                            </tr>
											</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane" id="tab_4">
										<div class="table-container">
                                            <div class="row">												
                                                <div class="col-md-12 timeline">	
													<div class="invoice" style="width:100%">
														<div class="row invoice-logo">
															<div class="col-xs-6 invoice-logo-space">
																<img src="../../assets/admin/pages/media/invoice/logo-invert.png" class="img-responsive" alt=""/>
															</div>
															<div class="col-xs-6">
																<p>														
																	<i class="fa fa-shopping-cart"></i>订单编号 #12313232 / 05-15 2015 <span class="muted">
																	Consectetuer adipiscing elit </span>
																</p>
															</div>
														</div>
													</div>
													<hr/>
													<article>
														<h3><a>2015年5月</a></h3>
														<section>
															<span class="point-time point-yellow"></span>
															<time>
																<h4>05.04</h4>
																<span>10:30</span>
															</time>
															<aside>
																<p class="things">订单产生</p>
																<p class="brief"><span class="text-yellow">确认:</span>双方电话联系。</p>
															</aside>
														</section>
														<section>
															<span class="point-time point-red"></span>
															<time>
																<h4>05.05</h4>
																<span>10:30</span>
															</time>
															<aside>
																<p class="things">订单确认</p>
																<p class="brief">双方订单确认,长城领导<span class="text-red">审查</span>订单。</p>
															</aside>
														</section>
														<section>
															<span class="point-time point-green"></span>
															<time>
																<h4>05.16</h4>
																<span>10:30</span>
															</time>
															<aside>
																<p class="things">备货</p>
																<p class="brief">订单确认完毕,<span class="text-green">准备发货</span>中。</p>
															</aside>
														</section>
														<section>
															<span class="point-time point-green"></span>
															<time>
																<h4>05.20</h4>
																<span>10:30</span>
															</time>
															<aside>
																<p class="things">已发货</p>
																<p class="brief">发货员XX已发货。物流公司为中通，物流单号为<a><span class="text-green">028556621486</span></a></p>
															</aside>
														</section>
														<section>
															<span class="point-time point-red"></span>
															<time>
																<h4>05.28</h4>
																<span>10:30</span>
															</time>
															<aside>
																<p class="things">收货确认</p>
																<p class="brief">物流号：<a><span class="text-red">028556621486</span></a>已签收确认。</p>
															</aside>
														</section>
													</article>
													
													<article>
														<h3><a>2015年6月</a></h3>														
														<section>
															<span class="point-time point-blue"></span>
															<time>
																<h4>06.12</h4>
																<span>10:30</span>
															</time>
															<aside>
																<p class="things">结算</p>
																<p class="brief">结算单号：<a>1234567890</a><span class="text-blue">已确认</span>。</p>
															</aside>
														</section>
														<section>
															<span class="point-time point-blue"></span>
															<time>
																<h4>05.20</h4>
																<span>10:30</span>
															</time>
															<aside>
																<p class="things">结算</p>
																<p class="brief">结算单号：<a>1234567890</a><span class="text-blue">已确认</span>。</p>
															</aside>
														</section>
														<section>
															<span class="point-time point-blue"></span>
															<time>
																<h4>05.24</h4>
																<span>10:30</span>
															</time>
															<aside>
																<p class="things">结算</p>
																<p class="brief">结算单号：<a>1234567890</a><span class="text-blue">已确认</span>。</p>
															</aside>
														</section>
														<section>
															<span class="point-time point-red"></span>
															<time>
																<h4>06.04</h4>
																<span>10:30</span>
															</time>
															<aside>
																<p class="things">订单完成</p>
																<p class="brief">该笔订单所有商品均已结算<span class="text-blue">完成</span>。</p>
															</aside>
														</section>
													</article>
													<div class="pull-right">													
														<br/>
														<a class="btn btn-lg blue hidden-print margin-bottom-5" onclick="javascript:window.print();">
														打印 <i class="fa fa-print"></i>
														</a>
													</div>
                                                </div>																									
                                            </div>
										</div>
									</div>
									<div class="tab-pane" id="tab_5">										
										<div class="invoice">
											<div class="row invoice-logo">
												<div class="col-xs-6 invoice-logo-space">
													<img src="../../assets/admin/pages/media/invoice/logo-invert.png" class="img-responsive" alt=""/>
												</div>
												<div class="col-xs-6">
													<p>														
														<i class="fa fa-shopping-cart"></i>订单编号 #12313232<span class="muted" id="today">
														 </span>
													</p>
												</div>
											</div>
											<hr/>
											<div class="row">
												<div class="col-xs-4">
													<h3>客户信息:</h3>
													<ul class="list-unstyled">														
														<li>
															 客户名称：中国工商银行四川省分行
														</li>
														<li>
															 客户地址：XX省XX市XX路XX号
														</li>
														<li>
															 <i class="icon-user"></i>：张三
														</li>
														<li>
															 <i class="fa fa-qq"></i>：65432100
														</li>
														<li>
															 <i class="icon-envelope-open"></i>：jhon@doe.com</li>
														<li>
															 <i class="icon-call-end"></i>：028-82755555
														</li>
													</ul>
												</div>
												<div class="col-xs-4">
													<h3>留言:</h3>
													<ul class="list-unstyled">
														<li>
															 1.已预付24万元；
														</li>
														<li>
															 2.顺丰镖局，包好，谢谢！
														</li>
													</ul>
												</div>
												<div class="col-xs-4 invoice-payment">
													<h3>支付信息:</h3>
													<ul class="list-unstyled">
														<li>
															<strong>帐号</strong> 542554(028)78
														</li>
														<li>
															<strong>帐户:</strong> 中国工商银行四川省分行
														</li>
														<li>
															<strong>交易号:</strong> 45454DEMO545DEMO
														</li>														
													</ul>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-12">
													<table class="table table-striped table-hover">
													<thead>
													<tr>
														<th>
															 序号
														</th>
														<th>
															 商品
														</th>
														<th class="hidden-480">
															 描述
														</th>
														<th class="hidden-480">
															 数量
														</th>
														<th class="hidden-480">
															 单价
														</th>
														<th>
															 总价
														</th>
													</tr>
													</thead>
													<tbody>
													<tr>
														<td>
															 1
														</td>
														<td>
															 饰品
														</td>
														<td class="hidden-480">
															 足金黄金六字大明咒戒指女款男情侣对戒首饰品83215R
														</td>
														<td class="hidden-480">
															 32
														</td>
														<td class="hidden-480">
															 ￥1690
														</td>
														<td>
															 $215200
														</td>
													</tr>
													<tr>
														<td>
															 2
														</td>
														<td>
															 饰品
														</td>
														<td class="hidden-480">
															 足金黄金项链吊坠Amore珠宝首饰品百搭项链女款
														</td>
														<td class="hidden-480">
															 15
														</td>
														<td class="hidden-480">
															 $1391
														</td>
														<td>
															 ￥416900
														</td>
													</tr>
													<tr>
														<td>
															 3
														</td>
														<td>
															 饰品
														</td>
														<td class="hidden-480">
															 金镶玉富贵花开 女款足金天然和田玉项坠吊坠
														</td>
														<td class="hidden-480">
															 15
														</td>
														<td class="hidden-480">
															 ￥1748
														</td>
														<td>
															 ￥126000
														</td>
													</tr>
													<tr>
														<td>
															 4
														</td>
														<td>
															 饰品
														</td>
														<td class="hidden-480">
															 24K黄金吊坠项链女款 碧玉水滴金镶玉吊坠珠宝足金首饰
														</td>
														<td class="hidden-480">
															 20
														</td>
														<td class="hidden-480">
															 ￥986
														</td>
														<td>
															 ￥26600
														</td>
													</tr>
													</tbody>
													</table>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-4">
													<div class="well">
														<address>
															<strong>中钞长城贵金属有限公司</strong><br/><br/>														
															四川省 成都市 温江区 黄金路189号<br/>
															<abbr title="Phone"><i class="icon-call-end"></i></abbr> (028) 8275-6666 
															<ul class="list-unstyled"><li>
																 <i class="fa fa-weibo"></i>gwSale
															</li></ul>
														</address>														
														<address>
															<strong>联系邮件</strong><br/>
															<a>
															sale@cbpc.com </a>
														</address>
													</div>
												</div>
												<div class="col-xs-8 invoice-block">
													<ul class="list-unstyled amounts">													
														<li>
															<strong>支付金额:</strong> ￥400,000
														</li>
														<li>
															<strong>预付款:</strong> ￥240,000
														</li>
														<li>
															<strong>保价费:</strong> ￥2,000
														</li>
														<li>
															<strong>折扣:</strong> 2%
														</li>
														<li>
															<strong>税款:</strong> ￥71,000
														</li>
														<li>
															<strong>总额:</strong> ￥710,200
														</li>
													</ul>
													<br/>
													<a class="btn btn-lg default hidden-print margin-bottom-5"  data-toggle="modal" href="#responsive">
														退回申请<i class="fa fa-arrow-circle-o-left"></i>
													</a>		
													<a class="btn btn-lg green hidden-print margin-bottom-5"  data-toggle="modal" href="#responsive"><!--data-original-title="确认允许发货?" data-singleton="true" data-popout="true" data-toggle="confirmation" id="bs_confirmation_demo_1"-->
														通过申请 <i class="fa fa-check"></i>
													</a>
													<a class="btn btn-lg blue hidden-print margin-bottom-5" onclick="javascript:window.print();">
														打印 <i class="fa fa-print"></i>
													</a>	
												</div>
											</div>											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End: life time stats -->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
