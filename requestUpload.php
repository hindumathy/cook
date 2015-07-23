<script>
var content='<br /> \
            <div class=videoList> <form name="requestForm" id="requestForm" method="POST" action="requestUploadToTable.php" > \
            <table id="request_table" class="request_upload">\
           <tr><td><input type="text" id="title" name="title" minlength="5" maxlength="100" required="required" placeholder="Give a title"  class="text_title"/></td></tr>';
 
   content+='<tr> \
            <td> <textarea name="description" id="description" cols="37" rows="4" required="required" placeholder="Provide your request please" class="textarea_text"></textarea></td></tr>\
            </table><br />\
            <div id="buttons_request" style="margin-bottom:10px;margin-left:15px">\
            <input style="margin-right:5px" type="submit" name="submit" value="Submit" />\
        	<input type="button" name="cancel" value="Cancel" onclick="window.location.assign(\'index.php\')"/>\
           </div>\
           </form></div>';
 $('#contents').append(content);
</script>
<style>
.request_upload{

width: 90%;
margin-left:5px;
padding:7px;
}

.request_upload input{
	width:90%;
	height:120%;
	
	}
.request_upload textarea{
	width:90%;
	
	}
#buttons {
	margin-left:5px;
	
	}
</style>  
