<?php
require("../models/Db.class.php");
require("../config/config.php");

?>

<style>
#new{

position: absolute;
	left: 150px;
	top: 720px;
	width: 400px;
	height: 200px;
	z-index: 0;
	padding: 20px;
	background-color: rgba(51,51,51,0);
	right: 12px;

}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tourism Services | RegisterHotel </title>
	<link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../../assets/css/tourism_service.css"/>
    <link  rel="stylesheet" href="../../assets/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css"
</head>
<body>

<div class="col-md-6 col-md-offset-3 container panel panel-primary " style="margin-top:10px">
	   <div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary" style="margin-top: 10px;">
				<div class="panel-heading">
					<div class = "panel-title"> New Business Registration For Tourism Service</div>
				</div>

			</div>
		</div>

		<div class ="row">

				<form id = "register-form" class="" method="POST" action="../controllers/RegisterHotel.php">
					<div class=" col-md-6 col-md-offset-3">

						<div class = "form-group">
							<label for="hotalName">Business Name</label>
							<input type = "text" name = "hotalName" class="form-control" value="" placeholder = "BusinessName" />
						</div>

						<div class = "form-group">
							<label for="OwnerName">BusinessOwner Name</label>

							<input type = "text" name = "OwnerName" class="form-control" value="" placeholder = "BusinessOwnerName" />
						</div>

						<div class = "form-group">
							<label for="city">city</label>

							<input type = "text" name = "city" class="form-control" value="" placeholder = "city"/>
						</div>


						<div class = "form-group">
							<label for="address">Business Address</label>

							<textarea type = "textarea" rows="5" cols="40" id="address" name = "address" class="form-control"  placeholder = "address" /></textarea>
						</div>
						<div class = "form-group">
						
							
						</div>
						
						<div class = "form-group">
							<label for="address">Business Info</label>

							<textarea type = "textarea" rows="5" cols="40" id="Info" name = "Info" class="form-control"  placeholder = "Infomations About Your Business" /></textarea>
						</div>
						
							
                        <div class = "form-group">
							<label for="hotelType">Business Type</label>
							<div class = "panel panel-default">
								<span>
									<input type="radio" name="hotelType" id="hotelType" value="restaurent"/> Restaurent </label> <br/>
									<input type="radio" name="hotelType" id="hotelType" value="hotel"/> Hotel </label> <br/>
									<input type="radio" name="hotelType" id="hotelType" value="hall"/> Hall </label> 
								</span>
							</div>                            
						</div>
						
						<div class = "form-group">
							<label for="noOfRooms">NoOfRooms </label>
							<input type = "text" name = "noOfRooms" class="form-control" value="" placeholder = "noOfRooms" />
						</div>
						
					
						<div class = "form-group">
						<input type="hidden" id="demo" name="imagename" value="default.png"/>
						</div>
						
						
						
						<div class = "form-group">
						<label>Image</label>
						
							
							
						</div>
						<br>
						<br>
						<br>
							<br>
						<br>
						<br>
						<br>
						</div>
						
                                                
						
				</div>
					<br>
					<br>
					<br>
						<br>
					<br>
					<div class=" col-md-6 col-md-offset-3 text-center" >
					<button type="submit" name = "submit" class="btn btn-default">Submit</button>
					<button class="btn btn-danger" type="reset">Reset</button>
					<button type="submit" name = "singout" value = "singout" class="btn btn-default" onClick="window.open('')">Back To Login</button>
					
					</br>
						
					</br>
				</div>
				</form>
				
						<div id='new'>
										<div class="upload-wrapper">
							<div id="error_output"></div>
							<!-- file drop zone -->
							<div id="dropzone">
								<i>Drop files here</i>
								<!-- upload button -->
								<span class="button btn-blue input-file">
									Browse Files <input id="fileupload" type="file" name="files[]" multiple>
								</span>
							</div>
							<!-- The container for the uploaded files -->
							<div id="files" class="files"></div>
						</div>	
				
				
			</div>
		</div>
		
						
				
	<div class="clear"></div>

<?php include("footer.php") ?>
</body>
<script type="text/javascript" src="../../assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../assets/js/tourism_service.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="../../assets/js/validation.js"></script>

<script src="js/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="js/load-image.all.min.js"></script> 
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="js/canvas-to-blob.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/jquery.iframe-transport.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="js/cors/jquery.xdr-transport.js"></script>
<![endif]-->
<script src="js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="js/jquery.fileupload-image.js"></script>
<script src="js/jquery.fileupload-video.js"></script>
<script src="js/jquery.fileupload-audio.js"></script>
<script src="js/jquery.fileupload-validate.js"></script>
<script language="javascript">
$(function(){
	'use strict';
	var fi = $('#fileupload'); //file input 
	
	var process_url = 'upload.php'; //PHP script
	
	var progressBar = $('<div/>').addClass('progress').append($('<div/>').addClass('progress-bar')); //progress bar
	var uploadButton = $('<button/>').addClass('button btn-blue upload').text('Upload');	//upload button
	
	uploadButton.on('click', function () {
		var $this = $(this), data = $this.data();

		data.submit().always(function () {
				$this.parent().find('.progress').show();
				$this.parent().find('.remove').remove();
				$this.remove();
        });
	});

	//initialize blueimp fileupload plugin
	fi.fileupload({
		url: process_url,
		dataType: 'json',
		autoUpload: false,
		acceptFileTypes: /(\.|\/)(gif|jpe?g|png|mp4|mp3)$/i,
		maxFileSize: 104857600, //1MB
		// Enable image resizing, except for Android and Opera,
		// which actually support image resizing, but fail to
		// send Blob objects via XHR requests:
		disableImageResize: /Android(?!.*Chrome)|Opera/ 
		.test(window.navigator.userAgent),
		previewMaxWidth: 50,
		previewMaxHeight: 50,
		previewCrop: true,
		dropZone: $('#dropzone')
	});
	
	fi.on('fileuploadadd', function (e, data) {
			data.context = $('<div/>').addClass('file-wrapper').appendTo('#files');
			$.each(data.files, function (index, file){	
			var node = $('<div/>').addClass('file-row');
			var removeBtn  = $('<button/>').addClass('button btn-red remove').text('Remove');
			removeBtn.on('click', function(e, data){
				$(this).parent().parent().remove();
			});
			
			var file_txt = $('<div/>').addClass('file-row-text').append('<span>'+file.name + ' (' +format_size(file.size) + ')' + '</span>');
			
			file_txt.append(removeBtn);
			file_txt.prependTo(node).append(uploadButton.clone(true).data(data));
			progressBar.clone().appendTo(file_txt);
			if (!index){
				node.prepend(file.preview);
			}
			
			node.appendTo(data.context);
		});
	});

	fi.on('fileuploadprocessalways', function (e, data) {
		var index = data.index,
			file = data.files[index],
			node = $(data.context.children()[index]);
			if (file.preview) {
				node .prepend(file.preview);
			}
			if (file.error) {
				node.append($('<span class="text-danger"/>').text(file.error));
			}
			if (index + 1 === data.files.length) {
				data.context.find('button.upload').prop('disabled', !!data.files.error);
			}
	});
	
	fi.on('fileuploadprogress', function (e, data) {
		var progress = parseInt(data.loaded / data.total * 100, 10);
		
		if (data.context) {
			data.context.each(function () {
				$(this).find('.progress').attr('aria-valuenow', progress).children().first().css('width',progress + '%').text(progress + '%');
			});
		}
		
		
	});

	fi.on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
            if (file.url) {
                var link = $('<a>') .attr('target', '_blank') .prop('href', file.url);
				$(data.context.children()[index]).addClass('file-uploaded');
				$(data.context.children()[index]).find('canvas').wrap(link);
				$(data.context.children()[index]).find('.file-remove').hide(); 
				var done = $('<span class="text-success"/>').text('Uploaded!');
				$(data.context.children()[index]).append(done);
				document.getElementById("demo").value = file.name;
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index]).append(error);
            }
        });
    });
	
	fi.on('fileuploadfail', function (e, data) {
   	 $('#error_output').html(data.jqXHR.responseText);
	});
	
	function format_size(bytes) {
            if (typeof bytes !== 'number') {
                return '';
            }
            if (bytes >= 1000000000) {
                return (bytes / 1000000000).toFixed(2) + ' GB';
            }
            if (bytes >= 1000000) {
                return (bytes / 1000000).toFixed(2) + ' MB';
            }
            return (bytes / 1000).toFixed(2) + ' KB';
        }
});
</script>


</html>
