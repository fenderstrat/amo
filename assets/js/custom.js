$(function() {   
	tinyMCE.init({
	  	selector: '#editor1', 
	  	plugins: 'link image', 
	  	convert_urls: false,
		toolbar: "link | image",
		file_browser_callback: RoxyFileBrowser,
		theme: "modern",
		plugins: [
		"advlist autolink link image lists charmap print preview hr anchor pagebreak",
		"searchreplace wordcount visualblocks visualchars code insertdatetime media nonbreaking",
		"table contextmenu directionality emoticons paste textcolor"
		],
		image_advtab: true,
		toolbar: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect forecolor backcolor | link unlink anchor | image media | print preview code"
	
	}); 
	});
	function RoxyFileBrowser(field_name, url, type, win) {
	var roxyFileman = urlData;
	if (roxyFileman.indexOf("?") < 0) {     
	roxyFileman += "?type=" + type;   
	}
	else {
	roxyFileman += "&type=" + type;
	}
	roxyFileman += '&input=' + field_name + '&value=' + document.getElementById(field_name).value;
	tinyMCE.activeEditor.windowManager.open({
	file: roxyFileman,
	title: 'Roxy Fileman',
	width: 850, 
	height: 650,
	resizable: "yes",
	plugins: "media",
	inline: "yes",
	close_previous: "no"  
	}, {     window: win,     input: field_name    });
	return false; 
	}