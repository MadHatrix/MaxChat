<?php session_start(); ?>
	<script>
		$(document).ready(function(){

			$('.delete').click(function() {
				var item = $(this).parent();
				var id = $(this).attr('rel');

				$.post('ajaxDelete.php', {'id' : id}, function(){
					$(item).hide();
				});
			});
		});

		$('#changeName').on('click', function() {
			$('#setName').show();
			$('#displayName').hide();
		});
	</script>
<?php
	include 'config.php';


	//$db->query('SELECT * FROM messages');

	//$data = $db->get();

	$handle = isset($_SESSION['userName']) ? $_SESSION['userName'] : '';

	$data = $db->prepare('SELECT * FROM messages');
	$data->execute();
	foreach ($data as $key => $value) {
		$user = !empty($value['user']) ? $value['user'] : 'Anonymous';
		echo '<div class="message"><strong>' . $user . '</strong> ' . $value['message'] . ' <a href="#" class="delete" rel="'.$value['id'].'">X</a></div>';
	}

?>