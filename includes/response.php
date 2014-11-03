<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#wrapper
{
	width:601px;
	height:500px;
	margin:0 auto;
	/*background:#CCC;*/
	margin-top:100px;
	
}
.success{
	width:600px;
	height:46px;
	text-align:center;
	border:1px solid red;
	-moz-border-radius:15px;
		-webkit-border-radius:15px;
		border-radius:15px;
	
color:#30765A;
font-family:Tahoma, Geneva, sans-serif;
font-size:16px;	
}
.error{
		width:600px;
	height:46px;
	text-align:center;
	border:1px solid red;
	-moz-border-radius:15px;
		-webkit-border-radius:15px;
		border-radius:15px;
color:#DE140A;
font-family:Tahoma, Geneva, sans-serif;
font-size:16px;	
}
</style>
</head>

<body>
<div id="wrapper">
<?php if (isset($_GET['sucess'])){ ?>
	<div class="success"><?php echo base64_decode($_GET['sucess']); ?></div>
    <?php 
    header('Refresh: 3;url=http://'.$_SERVER['HTTP_HOST'].'/'.$_SESSION['root_site'].'/admin/index.php?page=view_all_vol_contribution');?>
    <?php 
	}
	?>
    <?php if (isset($_GET['error'])){ ?>
	<div class="error"><?php echo base64_decode($_GET['error']); ?></div>
    
    <?php 
	}
	?>
</div>
</body>
</html>