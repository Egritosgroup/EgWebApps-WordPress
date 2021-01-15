jQuery(document).ready(function($) {
	var editorsArray = [];
	var baseUrl = location.protocol + '//' + window.location.host + '/';

	var editors = $('.editor');

	editors.each(function() {
		var editor = $('#'+$(this).attr('id')).Editor({
			'fonts' : false,
			'styles' : false,
			'font_size' : false,
			'print' : false,
			'togglescreen' : false,
			'undo' : false,
			'redo' : false,
			'aligneffects' : false,
			'insert_image' : false,
			'insert_table' : false,
			'hr_line' : false,
			'select_all' : false,
			'splchars' : false,
			'source' : false,
			'l_align' : false,
			'r_align' : false,
			'c_align' : false,
			'justify' : false,
			'color' : false,
			'insert_img' : false
		});

		editorsArray.push($(this).attr('id'));

		var editorId = $(this).attr('id');
		var inputId = $(this).attr('id').split('_editor')[0];

		$('.'+ editorId +' .Editor-editor').html($('input#'+ inputId).val());
	});

	$('.submit-button').on('click', function(e) {
		for(var index = 0; index < editorsArray.length; index++) {
			var item = editorsArray[index];
			var editorId = item;
			var inputId = item.split('_editor')[0];

			$('input#'+ inputId).val($('.'+ editorId +' .Editor-editor').html());
		}

		if($('#egr_plugin_setting_extra_change_egwebapps').length > 0) {
			var newVal = $('#egr_plugin_setting_extra_change_egwebapps').val();
			
			$.post(baseUrl + "wp-admin/admin-ajax.php",
			{
				"action": "do_update_egwebapps_file",
				"fn": "update_egwebapps_file",
				"egwebapps_file_content" : newVal,
				cache: false,
				async: false
			},
			function(data) {
				if (!$.trim(data) || data == undefined) {
					return;
				}
			});
		}
	});
});