	//信息提示框
	function infoTips(strMes,Type){    
		 switch(Type){
		 	case 1:
		 		Metronic.alert({
	            container: "", // alerts parent container(by default placed after the page breadcrumbs)
	            place: "append", // append or prepent in container 
	            type: "success",  // alert's type
	            message: strMes,  // alert's message
	            close: true, // make alert closable
	            reset: false, // close all previouse alerts first
	            focus: true, // auto scroll to the alert after shown
	            closeInSeconds: 5, // auto close after defined seconds
	            icon: "check" // put icon before the message
	        });
		 	break;
		 	default:
		 		Metronic.alert({
	            container: "", // alerts parent container(by default placed after the page breadcrumbs)  #bootstrap_alerts_demo
	            place: "append", // append or prepent in container 
	            type: "danger",  // alert's type
	            message: strMes,  // alert's message
	            close: true, // make alert closable
	            reset: false, // close all previouse alerts first
	            focus: true, // auto scroll to the alert after shown
	            closeInSeconds: 0, // auto close after defined seconds
	            icon: "warning" // put icon before the message
	        });
		 	break;
		 }
		 
	};


	function getRootPath() {
        //获取当前网址
        var curWwwPath = window.document.location.href;
        //获取主机地址之后的目录，如： /ems/Pages/Basic/Person.jsp
        var pathName = window.document.location.pathname;
        var pos = curWwwPath.indexOf(pathName);
        //获取主机地址，如： http://localhost:8080
        var localhostPath = curWwwPath.substring(0, pos);
        //获取带"/"的项目名，如：/ems
        var projectName = pathName.substring(0, pathName.substr(1).indexOf('/') + 1);
        return(localhostPath + projectName);
    };

    function ChangeMainTheme(MainTheme)
    {
    	switch(MainTheme)
       	{
          case 1:
             color_ ='default';
             break;
          case 2:
             color_ ='grey';
             break;
          case 3:
             color_ ='light';
             break;
          case 4:
             color_ ='light2';
             break;
          case 5:
             color_ ='blue';
             break;
		  /*case 6:
             color_ ='blue-steel';
             break;
		  case 7:
             color_ ='red-intense';
             break;
		  case 8:
             color_ ='red-sunglo';
             break;
		  case 9:
             color_ ='yellow-crusta';
             break;
		  case 10:
             color_ ='blue-hoki';
             break;
		  case 11:
             color_ ='green-haze';
             break;
		  case 12:
             color_ ='purple-plum';
             break;
          case 13:
             color_ ='purple-studio';
             break;		
		  case 14:
             color_ ='yellow-orange';
             break;	 */
          default:
             color_ ='darkblue';
             break;
       	}
       //切换系统主题
       $('#style_color').attr("href", Layout.getLayoutCssPath() + 'themes/' + color_ + ".css");
   	};

   function DarkInfoTheme(iStyle)
   	{
   	   if (iStyle ===1) 
   	  	{
   	  		$(".dropdown").addClass("dropdown-dark");    
   	  	}else
   	  	{
   	  		$(".dropdown").removeClass("dropdown-dark");    
   	  	}
   	};
   	function RoundedTheme(iStyle)
   	{
   	   components_  = iStyle ? 'components-rounded' : 'components'
   	   $('#style_components').attr("href", Metronic.getGlobalCssPath() + components_ + ".css");
   	};

   	function resetLayout() {
        $("body").
        removeClass("page-boxed").
        removeClass("page-footer-fixed").
        removeClass("page-sidebar-fixed").
        removeClass("page-header-fixed").
        removeClass("page-sidebar-reversed");

        $('.page-header > .page-header-inner').removeClass("container");

        if ($('.page-container').parent(".container").size() === 1) {
            $('.page-container').insertAfter('body > .clearfix');
        }

        if ($('.page-footer > .container').size() === 1) {
            $('.page-footer').html($('.page-footer > .container').html());
        } else if ($('.page-footer').parent(".container").size() === 1) {
            $('.page-footer').insertAfter('.page-container');
            $('.scroll-to-top').insertAfter('.page-footer');
        }

         $(".top-menu > .navbar-nav > li.dropdown").removeClass("dropdown-dark");

        $('body > .container').remove();
    };

    function HeadFix()
    {
       if ($(document.body).outerWidth(true)>480) {
        $(".page-sidebar-wrapper").css("margin-top","-18px");
       }else
       {
        $(".page-sidebar-wrapper").css("margin-top","0px");
       };
    };
    function fmoney(s, n)   
    { 
       n = n <= 20 ? n : 2;   
       s = parseFloat((s + "").replace(/[^\d\.-]/g, "")).toFixed(n) + "";   
       var l = s.split(".")[0].split("").reverse(),   
       r = s.split(".")[1];   
       t = "";   
       for(i = 0; i < l.length; i ++ )   
       {   
          t += l[i] + ((i + 1) % 3 == 0 && (i + 1) != l.length ? "," : "");   
       }  
       var re =  t.split("").reverse().join("");
       if(n){
        re = + "." + r; 
      }
       return re;   
    }   
    function rmoney(s)   
    {   
       return parseFloat(s.replace(/[^\d\.-]/g, ""));   
    }   
    function rdata(s)   
    {   
       return s.replace(',', '');   
    } 
    
   //将Json转换为表格控制所需的数据
   function Json2Array(strJson){
      var iCol = 0;
      var iSingle = new Array();
      for (var i = 0; i < strJson.rows; i++) {
        iCol =0;
        iSingle[i] = new Array(); //定义多维数组    
        for( var key in strJson.data[i])
        {
          iSingle[i][iCol] = strJson.data[i][key];
          iCol++;
        }
      };
      return iSingle;
   }

   //将Json转换为表格控制所需的表头
   function Json2Head(strJson){
      var strHead='',strRow;
      var strDataTitle = 'title';
      for( var key in strJson.data[0])
      {
        strRow = '{"' + strDataTitle + '":"' + key + '"},'
        strHead += strRow;            
      }
      strHead = '[' + strHead +']';
      return eval(strHead);
   }

   //读取指定URL的JSON数据
   function ReadData(strUrl){
      var Data;
      $.ajax({
      type: 'GET',
      async: false,//同步
      //async: true,
      url:strUrl, 
      success: function(data,status){    
          var obj = jQuery.parseJSON(data);
          Data = obj;
        }
      });
      return Data;
   }

 //切换开关
 function SwitchSelect(Name,ID){
   var v = 'input:radio[name='+Name+']:nth('+ID+')';
   return v;
 };
 //单选项个数
 function GetSwitchValue(Name,Num)
 {
    var v = $('input:radio[name='+Name+']:nth('+0+')').bootstrapSwitch('state');
    for (var i = 1; i <=Num && !v; i++) {
      v = $('input:radio[name='+Name+']:nth('+i+')').bootstrapSwitch('state');
    };
    return i;
 }

  //初始化标题栏时间选择器
  //YYYYMMDD,YYYY-MM-DD
 function initDashboardDaterange (YearType) {
	if (!jQuery().daterangepicker) {
		return;
	}

	$('#dashboard-report-range').daterangepicker({
			opens: (Metronic.isRTL() ? 'right' : 'left'),
			startDate: moment().subtract(2,'days'),
			endDate: moment(),
			minDate: '01/01/2009',
			maxDate: '12/31/2050',
			//dateLimit: {days: 3650},
			showDropdowns: true,
			showWeekNumbers: true,
			timePicker: false,
			timePickerIncrement: 1,
			timePicker12Hour: false,
			ranges: {
				'今天': [moment(), moment()],
				'昨天': [moment().subtract(1,'days'), moment().subtract(1,'days')],
				'过去一周': [moment().subtract(6,'days'), moment()],
				'过去三天': [moment().subtract(2,'days'), moment()],
				'过去30天': [moment().subtract(29,'days'), moment()],
				'本月': [moment().startOf('month'), moment().endOf('month')],
				'上月': [moment().subtract( 1,'month').startOf('month'), moment().subtract(1,'month').endOf('month')]
			},
			buttonClasses: ['btn btn-sm'],
			applyClass: ' green',
			cancelClass: ['btn btn-sm btn-danger'],
			format: 'MM/DD/YYYY',
			separator: ' to ',
			locale: {
				applyLabel: '确定',
				cancelLabel: '取消',
				fromLabel: '从',
				toLabel: '到',
				customRangeLabel: '时间范围选择',
				daysOfWeek: ['日', '一', '二', '三', '四', '五', '六'],
				monthNames: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
				firstDay: 1
			}
		},
		function (start, end) {
		   $('#dashboard-report-range span').html(start.format(YearType) + ' ~ ' + end.format(YearType));
		}
	);
	$('#dashboard-report-range span').html(moment().subtract(2,'days').format(YearType) + ' ~ ' + moment().format(YearType));
	$('#dashboard-report-range').show();
};

	function TimelineInit(){
		if(!$(".timeline").length){
			return;
		}
		var $warpEle = $("article"),
			$targetA = $warpEle.find("h3 a");
		
		$targetA.click(function(){
			$(this).parent().css({"position":"relative"});
			$(this).parent().siblings().slideToggle();
			$warpEle.parent().removeAttr("style");
			return false;
		});
	};