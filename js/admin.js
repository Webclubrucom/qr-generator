$(document).ready(function () {
  $('.nav-link-collapse').on('click', function () {
    $('.nav-link-collapse').not(this).removeClass('nav-link-show');
    $(this).toggleClass('nav-link-show');
  });
});

setTimeout(function () {
  document.getElementById('message').style.display = 'none';
 
}, 5000);

$("#js-file").change(function(){
	if (window.FormData === undefined) {
		alert('В вашем браузере загрузка файлов не поддерживается');
	} else {
		var formData = new FormData();
		$.each($("#js-file")[0].files, function(key, input){
			formData.append('file', input);
		});
 
		$.ajax({
			type: 'POST',
			url: '/admin/upload_logo_black.php',
			cache: false,
			contentType: false,
			processData: false,
			data: formData,
			dataType : 'json',
			success: function(msg){
				msg.forEach(function(row) {
					if (row.error == '') {
						$('#js-file-list').html(row.data);
					} else {
						alert(row.error);
					}
				});
				$("#js-file").val(''); 
			}
		});
	}
});

$("#js-file-lite").change(function(){
	if (window.FormData === undefined) {
		alert('В вашем браузере загрузка файлов не поддерживается');
	} else {
		var formData = new FormData();
		$.each($("#js-file-lite")[0].files, function(key, input){
			formData.append('file', input);
		});
 
		$.ajax({
			type: 'POST',
			url: '/admin/upload_logo_lite.php',
			cache: false,
			contentType: false,
			processData: false,
			data: formData,
			dataType : 'json',
			success: function(msg){
				msg.forEach(function(row) {
					if (row.error == '') {
						$('#js-file-list-lite').html(row.data);
					} else {
						alert(row.error);
					}
				});
				$("#js-file-lite").val(''); 
			}
		});
	}
});

$("#js-file-main").change(function(){
	if (window.FormData === undefined) {
		alert('В вашем браузере загрузка файлов не поддерживается');
	} else {
		var formData = new FormData();
		$.each($("#js-file-main")[0].files, function(key, input){
			formData.append('file', input);
		});
 
		$.ajax({
			type: 'POST',
			url: '/admin/upload_logo_main.php',
			cache: false,
			contentType: false,
			processData: false,
			data: formData,
			dataType : 'json',
			success: function(msg){
				msg.forEach(function(row) {
					if (row.error == '') {
						$('#js-file-list-main').html(row.data);
					} else {
						alert(row.error);
					}
				});
				$("#js-file-main").val(''); 
			}
		});
	}
});

$("#js-file-instructions").change(function(){
	if (window.FormData === undefined) {
		alert('В вашем браузере загрузка файлов не поддерживается');
	} else {
		var formData = new FormData();
		$.each($("#js-file-instructions")[0].files, function(key, input){
			formData.append('file', input);
		});
 
		$.ajax({
			type: 'POST',
			url: '/admin/upload_logo_instructions.php',
			cache: false,
			contentType: false,
			processData: false,
			data: formData,
			dataType : 'json',
			success: function(msg){
				msg.forEach(function(row) {
					if (row.error == '') {
						$('#js-file-list-instructions').html(row.data);
					} else {
						alert(row.error);
					}
				});
				$("#js-file-instructions").val(''); 
			}
		});
	}
});