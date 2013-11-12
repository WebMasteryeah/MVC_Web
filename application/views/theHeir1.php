<?php echo link_tag('design/master.css') ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Movie World</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>
<body>

<div id="container">
    
    <video width="700" height="450" controls>
        <source src="<?php echo base_url();?>videos/상속자들1.mp4" type="video/mp4">
    </video>
    
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
