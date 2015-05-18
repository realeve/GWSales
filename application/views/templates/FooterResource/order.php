<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="../../assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="../../assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="../../assets/admin/pages/scripts/form-wizard.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
<script src="../../assets/global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js" type="text/javascript"></script>
<script src="../../assets/admin/pages/controller/CommonFunctions.js"></script>
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
	
	//订单详情
	var UIConfirmations = function () {
		var handleSample = function () {			
			$('#bs_confirmation_demo_2').on("click",function(){
				infoTips('订单状态已成功提交',1);
			});					
		}		
		return {
			//main function to initiate the module
			init: function () {
			   handleSample();
			}
		};		
	}();	
	UIConfirmations.init();
	
	//追加商品
	var AddCart = function () {
		var handleRequest = function () {			
			$('#addProduct').on("click",function(){
				var iLen = $('.ProductList .col-md-6').length+1;			
				$('.ProductList').append($('.ProductList .col-md-6').first().clone());
				$('.ProductList .col-md-6 #ProductID').last().text(iLen);
			});		
			$('#delProduct').on("click",function(){
				var iLen = $('.ProductList .col-md-6').length;
				if(iLen>1)
				{
					$('.ProductList .col-md-6').last().detach();
				}
				else
				{
					infoTips('警告：不允许删除!</br>原因：每份订单中必须至少选择一件商品',0);
				}
				
			});	
		}		
		return {
			//main function to initiate the module
			init: function () {
			   handleRequest();
			}
		};		
	}();	
	AddCart.init();
});
</script>

