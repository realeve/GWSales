			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			订单添加向导
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
						<a href="<?php echo base_url()?>order/add">订单添加</a>
					</li>
				</ul>
				<div class="page-toolbar">
					<div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height grey-salt" data-placement="top" data-original-title="Change dashboard date range">
						<i class="icon-calendar"></i>&nbsp; <span class="uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
					</div>
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<div class="portlet box purple" id="form_wizard_1">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i> 订单添加向导 - <span class="step-title">
								Step 1 of 3 </span>
							</div>
							<div class="tools hidden-xs">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<form action="#" class="form-horizontal" id="submit_form" method="POST">
								<div class="form-wizard">
									<div class="form-body">
										<ul class="nav nav-pills nav-justified steps">
											<li>
												<a href="#tab1" data-toggle="tab" class="step">
												<span class="number">
												1 </span>
												<span class="desc">
												<i class="fa fa-check"></i> 订单商品添加 </span>
												</a>
											</li>
											<li>
												<a href="#tab2" data-toggle="tab" class="step">
												<span class="number">
												2 </span>
												<span class="desc">
												<i class="fa fa-check"></i> 订单货运信息 </span>
												</a>
											</li>
											<li>
												<a href="#tab3" data-toggle="tab" class="step active">
												<span class="number">
												3 </span>
												<span class="desc">
												<i class="fa fa-check"></i> 订单信息确认 </span>
												</a>
											</li>
										</ul>
										<div id="bar" class="progress progress-striped" role="progressbar">
											<div class="progress-bar progress-bar-success">
											</div>
										</div>
										<div class="tab-content">
											<div class="alert alert-danger display-none">
												<button class="close" data-dismiss="alert"></button>
												您输入有错误。请仔细检查。
											</div>
											<div class="alert alert-success display-none">
												<button class="close" data-dismiss="alert"></button>
												表格验证通过。
											</div>
											<div class="tab-pane active" id="tab1">										
												<h3 class="block">请输入订单中商品信息</h3>	
												<div style="margin-top:-40px;margin-left:93%;">
													<a href="javascript:;" id="delProduct" class="btn btn-icon-only btn-circle red" >
														<i class="fa fa-minus"></i>
													</a>
													<a href="javascript:;" id="addProduct" class="btn btn-icon-only btn-circle green">
														<i class="fa fa-plus"></i>
													</a>
												</div>
	
												<div class="row ProductList">
													<div class="col-md-6" style="margin-top:25px;">														
														<div class="form-group">															
															<label class="control-label col-md-3">商品类别 <span class="required">
															* </span>
															</label>
															<div class="col-md-4">																
																	<select  id="select2_sample_modal_2" class="bs-select form-control">
																		<option value="">-请选择商品的类别-</option>
																		<optgroup label="金">
																			<option>工业金</option>
																			<optgroup label="投资金">
																				<option>项链</option>
																				<option>戒指</option>
																			</optgroup>
																		</optgroup>
																		<optgroup label="银">
																			<optgroup label="工业银">
																				<option>银粉</option>
																			</optgroup>
																			<optgroup label="投资银">
																				<option>手镯</option>
																				<option>银制工艺品</option>
																			</optgroup>
																		</optgroup>
																		<optgroup label="其它">
																			<option>类别A</option>
																			<option>类别B</option>
																		</optgroup>				
																	</select>
															</div>											
																<!--span class="help-block">
																请选择商品的种类 </span-->															
														</div>
														<div class="form-group">
															<a class="btn btn-circle btn-default" style="margin-left:40px;" id="ProductID">1</a>
															<label class="control-label col-md-3">商品名称 <span class="required">
															* </span>
															</label>
															<div class="col-md-4">
																<select name="product_name" class="form-control">
																	<option value="">-请选择商品的名称-</option>
																	<option value="1">商品A</option>
																	<option value="2">商品B</option>
																	<option value="3">商品C</option>
																	<option value="4">商品D</option>
																	<option value="5">商品E</option>
																	<option value="6">商品F</option>
																	<option value="7">商品G</option>
																</select>
																<!--span class="help-block">
																请选择商品的名称 </span-->
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-3">商品数量 <span class="required">
															* </span>
															</label>
															<div class="col-md-4">
																<input type="text" class="form-control" name="product_num"/>
																<span class="help-block">
																请输入该商品的数量 </span>
															</div>
														</div>
													</div>
													</hr>
												</div>
											</div>
											<div class="tab-pane" id="tab2">
												<h3 class="block">请输入订单的客户以及发运信息</h3>
												<div class="form-group">
													<label class="control-label col-md-3">客户名称 <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
                                                        <select name="customer_name" class="form-control">
                                                            <option value="">Select...</option>
                                                            <option value="1">客户A</option>
                                                            <option value="2">客户B</option>
                                                            <option value="3">客户C</option>
                                                            <option value="4">客户D</option>
                                                        </select>
														<span class="help-block">
														请选择客户的名称 </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Phone Number <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="phone"/>
														<span class="help-block">
														Provide your phone number </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gender <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<div class="radio-list">
															<label>
															<input type="radio" name="gender" value="M" data-title="Male"/>
															Male </label>
															<label>
															<input type="radio" name="gender" value="F" data-title="Female"/>
															Female </label>
														</div>
														<div id="form_gender_error">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Address <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="address"/>
														<span class="help-block">
														Provide your street address </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">City/Town <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="city"/>
														<span class="help-block">
														Provide your city or town </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Country</label>
													<div class="col-md-4">
														<select name="country" id="country_list" class="form-control">
															<option value=""></option>
															<option value="AF">Afghanistan</option>
															<option value="AL">Albania</option>
															<option value="DZ">Algeria</option>
															<option value="AS">American Samoa</option>
															<option value="AD">Andorra</option>
															<option value="AO">Angola</option>
															<option value="AI">Anguilla</option>
															<option value="AR">Argentina</option>
															<option value="AM">Armenia</option>
															<option value="AW">Aruba</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Remarks</label>
													<div class="col-md-4">
														<textarea class="form-control" rows="3" name="remarks"></textarea>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab3">
												<h3 class="block">Confirm your account</h3>
												<h4 class="form-section">Account</h4>
												<div class="form-group">
													<label class="control-label col-md-3">Username:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="username">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Email:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="email">
														</p>
													</div>
												</div>
												<h4 class="form-section">Profile</h4>
												<div class="form-group">
													<label class="control-label col-md-3">Fullname:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="fullname">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gender:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="gender">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Phone:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="phone">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Address:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="address">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">City/Town:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="city">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Country:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="country">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Remarks:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="remarks">
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-actions">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<a href="javascript:;" class="btn default button-previous">
												<i class="m-icon-swapleft"></i> 返回 </a>
												<a href="javascript:;" class="btn blue button-next">
												继续 <i class="m-icon-swapright m-icon-white"></i>
												</a>
												<a href="javascript:;" class="btn green button-submit">
												提交 <i class="m-icon-swapright m-icon-white"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
