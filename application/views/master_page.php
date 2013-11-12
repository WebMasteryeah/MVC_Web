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
	<h1>Welcome to Movie World!</h1>

	<div id="body">
            <h2 id="theHeir">The heir</h2>
            <ul id ="theHeirList">
                <li><?php echo anchor('player/play/theHeir1', 'The Heir 1', 'title="theHeir1"');?></li>
                <li>Ep 2</li>
                <li>Ep 3</li>
                <li>Ep 4</li>
                <li>Ep 5</li>
            </ul>
	</div>
        <script src="<?php echo base_url();?>script/theHeir.js"></script>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>

