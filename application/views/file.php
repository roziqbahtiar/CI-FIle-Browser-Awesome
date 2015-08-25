<!DOCTYPE html>
<html>
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>jQuery File Browser Awesome - iBacor.com</title>
		
		<!-- Include Font Awesome -->
		<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		
		<!-- Include jQuery -->
		<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
		
		<!-- Include fba.js -->
		<script src="<?php echo base_url(); ?>asset/js/fba.js"></script>
		
		<!-- Custom Style -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>asset/css/fba.css" />
		
		<!-- Include libraries codemirror -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/codemirror.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/mode/xml/xml.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/mode/javascript/javascript.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/mode/css/css.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/mode/htmlmixed/htmlmixed.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/addon/dialog/dialog.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/addon/search/searchcursor.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/addon/search/search.min.js"></script>
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/codemirror.min.css">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/addon/dialog/dialog.min.css">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/4.3.0/theme/monokai.min.css">

	</head>
	<body>

		<!-- Display File Browser Awesome -->
		<div class="ibc_fba"></div>
		
		<!-- Read File -->
		<div id="ibc_fba_file"><div class="pan_code"><i class="fa fa-code pull-left"></i> <strong>Ctrl-F / Cmd-F:</strong> Start searching, <strong>Ctrl-G / Cmd-G:</strong> Find next, <strong>Shift-Ctrl-G / Shift-Cmd-G:</strong> Find previous, <strong>Shift-Ctrl-F / Cmd-Option-F:</strong> Replace, <strong>Shift-Ctrl-R / Shift-Cmd-Option-F:</strong> Replace all</div><textarea id="text" name="text">...</textarea><script>var editor = CodeMirror.fromTextArea(document.getElementById("text"), {	mode: "text/html", lineNumbers: true, theme: "monokai"});</script></div>

	</body>
</html>
