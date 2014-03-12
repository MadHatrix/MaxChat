<?php
session_start();
//include 'config.php';
//unset($_SESSION);
$handle = isset($_SESSION['userName']) ? $_SESSION['userName'] : '';
if ($_POST) {
	$_SESSION['userName'] = $_POST['userName'];
	$handle = $_POST['userName'];
}

//echo '<span id="handlePlaceholder" style="display:none;"><strong>Handle: </strong>' . $handle . ' <a href="#" id="changeName">change</a></span>';
echo $handle;
//echo '<div id="displayName"><strong>Handle: </strong>'.$handle.' <a href="#" id="changeName">change</a></div>';
/* ?>
	<form id="setName">
		<label>Handle:</label>
		<input type="text" maxlength="30" name="userName" id="userName">
		<button type="submit" class="btn">Set Name</button>
	</form>
	<div id="displayName"><strong>Handle:</strong><?php echo $handle; ?></div>
<?php */