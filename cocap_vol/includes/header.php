<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Collective Campaign for Peace(COCAP)</title>
<!--<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />-->
</head>
<body>
<link href="images/favicon.png"rel="shortcut icon"/>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="cocap_vol/css/mystyle.css"/>
<link rel="stylesheet" type="text/css" href="cocap_vol/css/style3.css"/>
<link rel="stylesheet" type="text/css" href="css/mystyle.css"/>

 <!--css for tab-->
<link rel="stylesheet" type="text/css" href="cocap_vol/css/tab_style.css"/>
<link rel="stylesheet" type="text/css" href="cocap_vol/css/tab_layout.css"/>
<link rel="stylesheet" type="text/css" href="cocap_vol/css/tab_smoothness_jquery-ui-1.8.18.custom.css"/>

<!--tab ends-->

<!--code for login fornt-->
<script type="text/javascript" src="cocap_vol/js/login_niceforms.js"></script>
<link rel="stylesheet" type="text/css" href="cocap_vol/css/login_niceforms-default.css"/>
<link rel="stylesheet" type="text/css" href="cocap_vol/css/login_style.css"/>
<!--ends-->

<title>COCAP</title>

<!--js for tab-->
<script type="text/javascript" src="cocap_vol/js/tab_jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="cocap_vol/js/tab_jquery-ui-1.8.18.custom.min.js"></script>
<script type="text/javascript" src="../js/tab_jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="../js/tab_jquery-ui-1.8.18.custom.min.js"></script>
<script>
	$(function() {
		$( "#tabs" ).tabs();
	});
</script>


<!-- --------------------code for home page slider here ---------------------->
<script type="text/javascript" src="scripts/jquery-ui-1.8.18.custom.min.js"></script>
<script>
	$(function() {
		$( "#tabs" ).tabs();
	});
</script>

<!--js for tab ends-->
<!--------------------------js for slider ---------------->
<script type="text/javascript" src="../js/sliding_jquery.easing.min.js"></script>
<script type="text/javascript" src="../js/sliding_jquery.easy-ticker.js"></script>
<script type="text/javascript" src="../js/sliding_jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){

	var dd = $('.vticker').easyTicker({
		direction: 'up',
		easing: 'easeInOutBack',
		speed: 'slow',
		interval: 4000,
		height: 'auto',
		visible: 1,
		mousePause: 1,
		controls: {
			up: '.up',
			down: '.down',
			toggle: '.toggle',
			stopText: 'Stop !!!'
		}
	}).data('easyTicker');
	
	cc = 1;
	$('.aa').click(function(){
		$('.vticker ul').append('<li>' + cc + ' Triangles can be made easily using CSS also without any images. This trick requires only div tags and some</li>');
		cc++;
	});
	
	$('.vis').click(function(){
		dd.options['visible'] = 2;
		
	});
	
	$('.visall').click(function(){
		dd.stop();
		dd.options['visible'] = 0 ;
		dd.start();
	});
	
});
</script>
<!------------- sliding ends ------------>


<!--sliding final-->
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.easy-ticker.js"></script>

<script type="text/javascript">
$(document).ready(function(){

	var dd = $('.vticker').easyTicker({
		direction: 'up',
		easing: 'easeInOutBack',
		speed: 'slow',
		interval: 2000,
		height: 'auto',
		visible: 1,
		mousePause: 0,
		controls: {
			up: '.up',
			down: '.down',
			toggle: '.toggle',
			stopText: 'Stop !!!'
		}
	}).data('easyTicker');
	
	cc = 1;
	$('.aa').click(function(){
		$('.vticker ul').append('<li>' + cc + ' Triangles can be made easily using CSS also without any images. This trick requires only div tags and some</li>');
		cc++;
	});
	
	$('.vis').click(function(){
		dd.options['visible'] = 3;
		
	});
	
	$('.visall').click(function(){
		dd.stop();
		dd.options['visible'] = 0 ;
		dd.start();
	});
	
});
</script>

<!--sliding final ends-->





</head>
