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
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
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
<?php include('FooterResource/'.$resource.'.php');?>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>