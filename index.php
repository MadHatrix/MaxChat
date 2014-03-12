<?php //session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="">
	<meta name="author" content="Chris Hattery">
	<title>MaxChat</title>

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/application.css">
	<!--<link rel="stylesheet" href="assets/css/styles.css">-->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
	<div class="container">
		<div class="left">
			<!-- Display -->
			<div id="messages"></div>

			<!-- Post -->
			<form id="userArea">
				<label>Chat:</label> <input type="text" maxlength="255" name="messages" id="messagesInput">
				<button type="submit" class="btn">Post Message</button>
			</form>
		</div><!--left-->

		<div class="right">
			<div id="sessionUserName" style="display:none;"><?php include 'ajaxSession.php'; ?></div>
			<?php
				$updateStyle ='';
				if (!empty($handle)) {
					echo '<div id="sessionHandle"><strong>Handle: </strong>'. $handle .' <a href="#" id="changeName">change</a></div>';
					$updateStyle = 'style="display:none;"';
				}
			?>
			<form id="setName"<?php echo $updateStyle; ?>>
				<label>Handle:</label>
				<input type="text" maxlength="30" name="userName" id="userName">
				<button type="submit" class="btn">Set Name</button>
			</form>
			<div id="displayName"></div>
			<!--<div id="displayName"><strong>Handles:</strong><?php echo $handle; ?></div>-->

		</div><!--right-->
	</div>
	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
	<script src="assets/js/application.js"></script>
</body>
</html>
<pre>
<?php
	//include 'ajaxSession.php';

	print_r($_SESSION);
?>
</pre>