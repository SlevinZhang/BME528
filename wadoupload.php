<?php require_once('Connections/dose.php'); ?>
<?php require_once('function/GetSQLValueString.php');?>
<?php require_once('function/auth.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Imaging Data Uploader</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
<link href="css/body.css" rel="stylesheet" type="text/css" />
<link href="css/datepicker.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="js/jquery.plupload.queue/css/jquery.plupload.queue.css" type="text/css" media="screen" />
</head>

<body>
<div class="container">
<?php 
include "template/menu.php";
?>
<!-- Load Queue widget CSS and jQuery -->
	<h3>Log messages</h3>
	<textarea id="log" style="width: 100%; height: 150px; font-size: 11px" spellcheck="false" wrap="off"></textarea>


		<form id="main" method="post" action="function/wadoprocessdir.php" >

			<div id="uploader">

				<p>You browser doesn't have Flash, Silverlight, Gears, BrowserPlus or HTML5 support.</p>
			</div>
		<label class="">Anonymizing Patient ID<input class="input-text" type="text" name="pat_id" id="pat_id" ></label>
		<input type="button" id="clear" class="btn" value="clear" />
		<input type="submit" value="submit">
		</form>

 </div>
<?php include('template/footer.html'); ?>
</body>
<script type="text/javascript" src="js/browserplus-min.js"></script>
<script type="text/javascript" src="js/plupload.full.js"></script>
<script type="text/javascript" src="js/jquery.plupload.queue/jquery.plupload.queue.js"></script>

<script type="text/javascript">
// Convert divs to queue widgets when the DOM is ready
$(function() {
	function log() {
		var str = "";

		plupload.each(arguments, function(arg) {
			var row = "";

			if (typeof(arg) != "string") {
				plupload.each(arg, function(value, key) {
					// Convert items in File objects to human readable form
					if (arg instanceof plupload.File) {
						// Convert status to human readable
						switch (value) {
							case plupload.QUEUED:
								value = 'QUEUED';
								break;

							case plupload.UPLOADING:
								value = 'UPLOADING';
								break;

							case plupload.FAILED:
								value = 'FAILED';
								break;

							case plupload.DONE:
								value = 'DONE';
								break;
						}
					}

					if (typeof(value) != "function") {
						row += (row ? ', ': '') + key + '=' + value;
					}
				});

				str += row + " ";
			} else { 
				str += arg + " ";
			}
		});

		$('#log').val($('#log').val() + str + "\r\n");
	}

	$("#uploader").pluploadQueue({
		// General settings
		runtimes: 'html5,gears,browserplus,silverlight,flash,html4',
		url : 'function/plupload.php',
		max_file_size : '1000mb',
		max_file_count: 2000, // user can add no more then 2000 files at a time
		chunk_size : '1mb',
		unique_names : true,
		multiple_queues : true,
		multipart_params : {'StudyID' : $('#pat_id').val()},

		// Rename files by clicking on their titles
		rename: true,
		// Sort files
		sortable: true,
		// Flash settings
		flash_swf_url : '/js/plupload.flash.swf',

		// Silverlight settings
		silverlight_xap_url : '/js/plupload.silverlight.xap',

		// PreInit events, bound before any internal events
		preinit: {
			Init: function(up, info) {
				log('[Init]', 'Info:', info, 'Features:', up.features);
			},

			UploadFile: function(up, file) {
				log('[UploadFile]', file);

				// You can override settings before the file is uploaded
				// up.settings.url = 'upload.php?id=' + file.id;
				// up.settings.multipart_params = {param1: 'value1', param2: 'value2'};
			}
		},

		// Post init events, bound after the internal events
		init: {
			Refresh: function(up) {
				// Called when upload shim is moved
				log('[Refresh]');
			},

			StateChanged: function(up) {
				// Called when the state of the queue is changed
				log('[StateChanged]', up.state == plupload.STARTED ? "STARTED": "STOPPED");
			},

			QueueChanged: function(up) {
				// Called when the files in queue are changed by adding/removing files
				log('[QueueChanged]');
			},

			UploadProgress: function(up, file) {
				// Called while a file is being uploaded
				log('[UploadProgress]', 'File:', file, "Total:", up.total);
			},

			FilesAdded: function(up, files) {
				// Callced when files are added to queue
				log('[FilesAdded]');

				plupload.each(files, function(file) {
					log('  File:', file);
				});
			},

			FilesRemoved: function(up, files) {
				// Called when files where removed from queue
				log('[FilesRemoved]');

				plupload.each(files, function(file) {
					log('  File:', file);
				});
			},

			FileUploaded: function(up, file, info) {
				// Called when a file has finished uploading
				log('[FileUploaded] File:', file, "Info:", info);
			},

			ChunkUploaded: function(up, file, info) {
				// Called when a file chunk has finished uploading
				log('[ChunkUploaded] File:', file, "Info:", info);
			},

			Error: function(up, args) {
				// Called when a error has occured

				// Handle file specific error and general error
				if (args.file) {
					log('[error]', args, "File:", args.file);
				} else {
					log('[error]', args);
				}
			}
		}
	});

	$('#log').val('');
	$('#clear').click(function(e) {
		e.preventDefault();
		$("#uploader").pluploadQueue().splice();
	});
	
		// Client side form validation
	$('form').submit(function(e) {
        var uploader = $('#uploader').pluploadQueue();
		var pid=document.forms["main"]["pat_id"].value;
		if(pid.length!=9){
			alert('The Anonymizing ID must be 9 digits');
			e.preventDefault();
		}
		else
		{
        // Files in queue upload them first
			if (uploader.files.length > 0) {
				// When all files are uploaded submit form
				uploader.bind('StateChanged', function() {
					if (uploader.files.length === (uploader.total.uploaded + uploader.total.failed)) {
						$('form')[0].submit();
					}
				});
					
				uploader.start();
			} else {
				alert('You must queue at least one file.');
			}
		}
        return false;
    });
	
});

/*
$(function() {
	$("#uploader").pluploadQueue({
		// General settings
		runtimes : 'gears,silverlight,browserplus,html5',
		url : 'function/plupload.php',
		max_file_size : '1000mb',
		max_file_count: 2000, // user can add no more then 2000 files at a time
		chunk_size : '1mb',
		unique_names : true,
		multiple_queues : true,
		multipart_params : {'StudyID' : $('#StudyID').val()},

		// Rename files by clicking on their titles
		rename: true,
		// Sort files
		sortable: true,
		// Flash settings
		flash_swf_url : '/js/plupload.flash.swf',

		// Silverlight settings
		silverlight_xap_url : '/js/plupload.silverlight.xap'
	});

	// Client side form validation
	$('form').submit(function(e) {
        var uploader = $('#uploader').pluploadQueue();

        // Files in queue upload them first
        if (uploader.files.length > 0) {
            // When all files are uploaded submit form
            uploader.bind('StateChanged', function() {
                if (uploader.files.length === (uploader.total.uploaded + uploader.total.failed)) {
                    $('form')[0].submit();
                }
            });
                
            uploader.start();
        } else {
            alert('You must queue at least one file.');
        }

        return false;
    });
});
*/
</script>

</html>
