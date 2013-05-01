$(document).ready(function()
{
	$('#play_video').click(function(e)
	{
		e.preventDefault();
		$('video').get(0).play();
	});

	$('button#set-color-btn').click(function(e)
	{
		$('body').css('background-color', $('#set-color').val() );
	});
});