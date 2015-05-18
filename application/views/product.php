			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			产品列表
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url()?>">主页</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="javascript:;">产品管理</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url()?>product">产品列表</a>
					</li>
				</ul>
				<div class="page-toolbar">
					<div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height grey-salt" data-placement="top" data-original-title="选择查询时间">
						<i class="icon-calendar"></i>&nbsp; <span class="uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
					</div>
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- END CONTENT -->
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light bordered">			
						<div class="portlet-title tabbable-line">
							<ul class="nav nav-tabs pull-left">
								<li class="active">
									<a href="#tab_1" data-toggle="tab">
									四列样式</a>
								</li>
								<li>
									<a href="#tab_2" data-toggle="tab">
									三列样式</a>
								</li>
								<li>
									<a href="#tab_3" data-toggle="tab">
									两列样式</a>
								</li>								
								<li>
									<a href="#tab_4" data-toggle="tab">
									<i class="icon-settings"></i>&nbsp;查询选项</a>
								</li>
							</ul>	
							<div class="actions">		
								<!--a href="javascript:;" class="btn btn-circle btn-default">
									<i class="fa fa-plus"></i> 新建 </a-->
								<div class="portlet-input input-inline input-medium">
									<div class="input-group">
										<input type="text" class="form-control input-circle-left" placeholder="请输入产品名...">
										<span class="input-group-btn">
										<button class="btn btn-circle-right btn-default" type="submit">搜索</button>
										</span>
									</div>
								</div>				
								<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;">
								</a>
							</div>						
						</div>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1">
								<!-- BEGIN FILTER -->
								<div class="margin-top-10">
									<ul class="mix-filter">
										<li class="filter" data-filter="all">
											 全部
										</li>
										<li class="filter" data-filter="category_1 category_2">
											 金制品
										</li>
										<li class="filter" data-filter="category_3 category_4">
											 银制品
										</li>
										<li class="filter" data-filter="category_5">
											 其它
										</li>
										<li class="filter" data-filter="category_1">
											 投资金
										</li>
										<li class="filter" data-filter="category_2">
											 工业金
										</li>
										<li class="filter" data-filter="category_3">
											 投资银
										</li>
										<li class="filter" data-filter="category_4">
											 工业银
										</li>										
									</ul>
									<div class="row mix-grid">
										<div class="col-md-3 col-sm-4 mix category_1">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img1.jpg" alt="">
												<div class="mix-details">
													<h4>商品名:名字</br>商品介绍:一些介绍</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img2.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 mix category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img2.jpg" alt="">
												<div class="mix-details">
													<h4>商品名:名字</br>商品介绍:一些介绍</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img2.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 mix">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img3.jpg" alt="">
												<div class="mix-details">
													<h4>商品名:名字</br>商品介绍:一些介绍</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img3.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 mix category_1 category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img4.jpg" alt="">
												<div class="mix-details">
													<h4>商品名:名字</br>商品介绍:一些介绍</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img4.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 mix category_5">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img5.jpg" alt="">
												<div class="mix-details">
													<h4>商品名:名字</br>商品介绍:一些介绍</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img5.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 mix category_5">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img6.jpg" alt="">
												<div class="mix-details">
													<h4>商品名:名字</br>商品介绍:一些介绍</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img6.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 mix category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img1.jpg" alt="">
												<div class="mix-details">
													<h4>商品名:名字</br>商品介绍:一些介绍</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img1.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 mix category_1 category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img2.jpg" alt="">
												<div class="mix-details">
													<h4>商品名:名字</br>商品介绍:一些介绍</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img2.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 mix category_3">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img7.jpg" alt="">
												<div class="mix-details">
													<h4>商品名:名字</br>商品介绍:一些介绍</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img4.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 mix category_4">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img8.jpg" alt="">
												<div class="mix-details">
													<h4>商品名:名字</br>商品介绍:一些介绍</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img3.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 mix category_4">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img9.jpg" alt="">
												<div class="mix-details">
													<h4>商品名:名字</br>商品介绍:一些介绍</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img3.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- END FILTER -->
							</div>
							<div class="tab-pane" id="tab_2">
								<!-- BEGIN FILTER -->
								<div class="filter-v1 margin-top-10">
									<ul class="mix-filter">
										<li class="filter" data-filter="all">
											 全部
										</li>
										<li class="filter" data-filter="category_1 category_2">
											 金制品
										</li>
										<li class="filter" data-filter="category_3 category_4">
											 银制品
										</li>
										<li class="filter" data-filter="category_5">
											 其它
										</li>
										<li class="filter" data-filter="category_1">
											 投资金
										</li>
										<li class="filter" data-filter="category_2">
											 工业金
										</li>
										<li class="filter" data-filter="category_3">
											 投资银
										</li>
										<li class="filter" data-filter="category_4">
											 工业银
										</li>	
									</ul>
									<div class="row mix-grid thumbnails">
										<div class="col-md-4 col-sm-6 mix category_1 category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img1.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img1.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 mix category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img2.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img2.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 mix category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img3.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img3.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 mix category_1 category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img4.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img4.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 mix category_5">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img5.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img5.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 mix category_5">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img6.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img6.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 mix category_2 category_1">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img1.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img1.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 mix category_1 category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img2.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img2.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 mix category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img4.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img4.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 mix category_1">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img3.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium voluptatum.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img3.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 mix category_3">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img7.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium voluptatum.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img3.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 mix category_4">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img8.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium voluptatum.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img3.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 mix category_4">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img9.jpg" alt="">
												<div class="mix-details">
													<h3>Cascusamus et iusto odio</h3>
													<p>
														 At vero eos et accusamus et iusto odio digniss imos duc sasdimus qui sint blanditiis prae sentium voluptatum.
													</p>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img3.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- END FILTER -->
							</div>
							<div class="tab-pane" id="tab_3">
								<!-- BEGIN FILTER -->
								<div class="filter-v1 margin-top-10">
									<ul class="mix-filter">
										<li class="filter" data-filter="all">
											 全部
										</li>
										<li class="filter" data-filter="category_1 category_2">
											 金制品
										</li>
										<li class="filter" data-filter="category_3 category_4">
											 银制品
										</li>
										<li class="filter" data-filter="category_5">
											 其它
										</li>
										<li class="filter" data-filter="category_1">
											 投资金
										</li>
										<li class="filter" data-filter="category_2">
											 工业金
										</li>
										<li class="filter" data-filter="category_3">
											 投资银
										</li>
										<li class="filter" data-filter="category_4">
											 工业银
										</li>	
									</ul>
									<div class="row mix-grid">
										<div class="col-md-6 col-md-6 mix category_1">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img1.jpg" alt="">
												<div class="mix-details">
													<h4>商品名:名字</br>商品介绍:一些介绍</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img2.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-md-6 mix category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img2.jpg" alt="">
												<div class="mix-details">
													<h4>商品名:名字</br>商品介绍:一些介绍</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img2.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-md-6 mix">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img3.jpg" alt="">
												<div class="mix-details">
													<h4>商品名:名字</br>商品介绍:一些介绍</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img3.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-md-6 mix category_1 category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img4.jpg" alt="">
												<div class="mix-details">
													<h4>商品名:名字</br>商品介绍:一些介绍</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img4.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-md-6 mix category_5">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img5.jpg" alt="">
												<div class="mix-details">
													<h4>商品名:名字</br>商品介绍:一些介绍</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img5.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-md-6 mix category_5">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img6.jpg" alt="">
												<div class="mix-details">
													<h4>商品名:名字</br>商品介绍:一些介绍</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img6.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-md-6 mix category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img1.jpg" alt="">
												<div class="mix-details">
													<h4>商品名:名字</br>商品介绍:一些介绍</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img1.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-md-6 mix category_1 category_2">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img2.jpg" alt="">
												<div class="mix-details">
													<h4>商品名:名字</br>商品介绍:一些介绍</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img2.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-md-6 mix category_3">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img7.jpg" alt="">
												<div class="mix-details">
													<h4>商品名:名字</br>商品介绍:一些介绍</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img4.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-md-6 mix category_4">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img8.jpg" alt="">
												<div class="mix-details">
													<h4>商品名:名字</br>商品介绍:一些介绍</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img3.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-md-6 mix category_4">
											<div class="mix-inner">
												<img class="img-responsive" src="../../assets/admin/pages/media/products/img9.jpg" alt="">
												<div class="mix-details">
													<h4>商品名:名字</br>商品介绍:一些介绍</h4>
													<a class="mix-link">
													<i class="fa fa-link"></i>
													</a>
													<a class="mix-preview fancybox-button" href="../../assets/admin/pages/media/products/img3.jpg" title="Project Name" data-rel="fancybox-button">
													<i class="fa fa-search"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- END FILTER -->
							</div>
							<div class="tab-pane" id="tab_4">
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
									<div class="form-actions pull-right">
										<button class="btn btn-success btn-circle green"><i class="icon-magnifier"></i>查询数据</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->

