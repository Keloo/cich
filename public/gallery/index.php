<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
  <?php
  error_reporting(0);
    if (isset($_GET['album'])) {
	  echo $_GET['album'];
	} else {
	  echo 'Photo Gallery';
	}
  ?>
</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../assets/css/bootstrap.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="../assets/js/bootstrap.js"></script><!-- -->

<script src="../packages/fancybox/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="../packages/fancybox/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

<script type="text/javascript" src="../packages/fancybox/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>

<link rel="stylesheet" type="text/css" href="../packages/fancybox/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<!-- start gallery header --> 
<link rel="stylesheet" type="text/css" href="folio-gallery.css" />
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="colorbox/colorbox.css" />
<!--<link rel="stylesheet" type="text/css" href="fancybox/fancybox.css" />-->
<script type="text/javascript" src="colorbox/jquery.colorbox-min.js"></script>
<!--<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.1.min.js"></script>-->
<script type="text/javascript">
$(document).ready(function() {	
	
	// colorbox settings
	$(".albumpix").colorbox({rel:'albumpix'});
	
	// fancy box settings
	/*
	$("a.albumpix").fancybox({
		'autoScale	'		: true, 
		'hideOnOverlayClick': true,
		'hideOnContentClick': true
	});
	*/
});
</script>
<!-- end gallery header -->
</head>
<body>

 <p>&nbsp;</p>  


<div class="container">
    <div class="row">
        <div class="gallery">
            <?php include "folio-gallery.php"; ?>
        </div>
    </div>
</div>


</body>
</html>