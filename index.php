<?php
include 'layout.php'
?>
<script>
/*
* div to display the popular and recent videos

*/
	
	var content = "<div class=videoList style='padding-bottom:10px' >"
	content+="<div>";
	
	content+="<div id=popular_video style='transform:translateY(-4px);margin-left:10px; float:left;width:20px;font-size:25px' >+</div>"
	content+= "<div style='color:rgb(51, 51, 51); font-size:18px; font-weight:bold'>Popular Videos </div>"
	content+="</div>";
	content+= "<div id=popular_video_contents></div></div>";

	content+= "<div class=videoList style='padding-bottom:10px' >"
	content+="<div>";
	
	content+="<div id=recent_video style='transform:translateY(-4px);margin-left:10px; float:left;width:20px;font-size:25px' >+</div>"
	content+= "<div style='color:rgb(51, 51, 51); font-size:18px; font-weight:bold'>Recent Videos </div>"
	content+="</div>";
	content+= "<div id=recent_video_contents></div></div>";
	
	/*content+= "<div id=popular_video_contents></div></div>";
	content+= "<div id=recent_video class=videoList>+ Recent Videos </div>";
	content+= "<div id=recent_video_contents></div>";*/

	$("#contents").append(content);

	// styling the twisties
	$(".twistie").css({
	"border":"1px solid grey",
	"height":"30px",
	"border-radius":"5px"
	});
	
	
	//hard code to display the recent and popular video
	
		$("#popular_video_contents").css("display","none");
		$("#recent_video_contents").css("display","none");

	
	startSearchByValue('chicken','#popular_video_contents');
	getVideoList('getRecentVideos.php','#recent_video_contents')

	

	
/*
* to create the collapsible content.. this collapse_click() will change the + into - sign when the contents
* are open and - into + when closed. on page load the collapsible contents are closed.
*/
	function collapse_click() {
		var id = event.currentTarget.id;
	
		var text = $('#' + id).text();

		if (text.indexOf('+') >= 0) {
			var newtext = text.replace("+","-");		
			$('#' + id).html(newtext);		
			$('#' + id + '_contents').css("display","block");
		} else {
			var newtext = text.replace("-","+");
			$('#' + id).html(newtext);
			$('#' + id + '_contents').css("display","none");			
		}

	}

	$('#recent_video').click(collapse_click);
	
	$('#popular_video').click(collapse_click);
	
function getVideoList(serverPage, parent){

	console.log("Contacting Page " + serverPage);

	$.ajax({
		type:"POST",
		url:serverPage,
		data: "",
		cache:false,
		success: function(data)
		{ 
			console.log("Ajax success : " +data);
			var arr = JSON.parse(data);
			var content;
			var id="";
			$(parent).text("");
			create_video_list(parent,arr);

		}
	});

}
	
</script>	
</html>
