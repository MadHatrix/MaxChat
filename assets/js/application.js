$(document).ready(function() {
	var scrollHeight = $(document).height();
	scrollHeight += 5000;
	var tid = setInterval(loadMessages, 2000);
	function abortTimer() { clearTimeout(tid); }

	function loadMessages() {
		$('#messages').load('ajaxload.php').animate({scrollTop: scrollHeight}, 'slow');
		//abortTimer(); //debug
	}

	loadMessages();

	$('#userArea').submit(function() {
		$.post('ajaxPost.php', $('#userArea').serialize(), function(data){
			$("#messages").append('<div class="message">' + data + ' <span>saving...</span></div>').animate({ scrollTop: scrollHeight }, 'slow');
			$("#messagesInput").val('');
		});
		return false;
	});

	$('#setName').submit(function() {
		var handle = $('#userName').val(); //input id=userName
		$.post('ajaxSession.php', $('#setName').serialize(), function(data) {
			$('#setName').hide();
			$('#displayName').show().html('<strong>Handle: </strong>' + data + ' <a href="#" id="changeName">change</a>');
			//$("#displayName").show().html('<strong>Handle: </strong>' + data + ' <a href="#" id="changeName">change</a>');
			//$("#displayName").show().html(data);
		});
		return false;
	});
	$('.right').on('click', '#changeName', function(){
		$('#setName').show();
		$('#displayName').hide();
		$('#sessionHandle').hide();
		//$('#displayName').show().html()
	});


});