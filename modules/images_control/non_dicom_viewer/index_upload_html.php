<!--Người viết: Trần Trương Chính-->
 
 
<style>
	.thumb {
    height: 75px;
    border: 1px solid #000;
    margin: 10px 5px 0 0;
  } 
 
</style>
<body>
<div id="progress"></div>
<div style="position: relative; float: left; width:275px;">
<div id="valuebox" style="position: relative; float: left; width:275px; border: solid #0096D6; border-width: 1px; padding: 10px;">
<H2>Step 3: Enter Value Level Data</H2>
 <form enctype="multipart/form-data">
 <span style="position: relative; float: left; display: inline-block; margin-top: 7px; font: 12px Lucida Grande,Helvetica,Arial,Verdana,sans-serif; padding-right: 60px;">
<p>Add Value Challenger Screenshot:</p>
<input id="file" type="file" name="valueimage">
</span>
<span style="float: left; clear: right; margin-top:8px; padding-top: 10px; width: 235px;">
<label class="fieldlabel"><span>Value Lift (%):</span></label></br>
 <input id="valuelift" type="text" name="valuelift" class="textfieldshadowsmall" style="width: 150px;">
</span>
<span style="position: relative; float: left; margin-top: 25px; font: 12px Lucida Grande,Helvetica,Arial,Verdana,sans-serif;">
<input id="valuesignificant" type="checkbox" name="valuesignificant" value="1">Significant?
</span>
<span style="position: relative; float: left; margin-top: 25px; font: 12px Lucida Grande,Helvetica,Arial,Verdana,sans-serif;">
<input id="valuewinningcreative" type="checkbox" name="valuewinningcreative" value="1">Winning Creative?
</span>
 </form>
</div>
<span style="position: relative; float: left; margin-top: 25px; font: 12px Lucida Grande,Helvetica,Arial,Verdana,sans-serif;">
<a href="#" id="valuesubmit" />+ add another value</a>
</span>
</form>
</div>
</div>
</body>
</html>
<script type="text/javascript">

$(document).ready(function() {	
	$(function(){
    $('#valuesubmit').click(function(event) {
        var formData = new FormData($('form')[0]); // okay I just saw the form, assuming there is only one form on the page
        $.ajax({
            url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=upload_file',  //Server script to process data
            type: 'POST',
             //This is just looks like bloat
            xhr: function() {  // Custom XMLHttpRequest
                var myXhr = $.ajaxSettings.xhr();
                if(myXhr.upload){ // Check if upload property exists
                    myXhr.upload.addEventListener('progress',progressHandlingFunction, false); // For handling the progress of the upload
                }
                return myXhr;
            }, 
            // Form data
            // enctype: 'multipart/form-data',  <-- don't do this       
            data: formData,
            //Options to tell jQuery not to process data or worry about content-type.
            //cache: false, post requests aren't cached
            contentType: false,
            processData: false
        });
    });
});
});
function upload_images(){
	var formData = new FormData($('#upload_image')[0]);
	$.ajax({
		url: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=upload_file', //server script to process data
		type: 'POST',
		xhr: function() {  // custom xhr
			myXhr = $.ajaxSettings.xhr();
			if(myXhr.upload){ // check if upload property exists
				// for handling the progress of the upload
				myXhr.upload.addEventListener('progress',progressHandlingFunction, false); 
			}
			return myXhr;
		},
		success: function(result)
		{
			console.log($.ajaxSettings.xhr().upload);
			alert(result);
		},
		// Form data
		data: formData,
		//Options to tell JQuery not to process data or worry about content-type
		cache: false,
		contentType: false,
		processData: false
	}); 
}
function progressHandlingFunction(e){
	console.log(e.loaded)
    if(e.lengthComputable){
        $("#progress").text(e.loaded + " / " + e.total);
    }
}
</script>
 
 
