$(function (){


	$(document).on('click', 'form.image_uploader > a.image-select', function (){
		$(this).parent().children('input[name=clip]').click() ;
		return false ;
	}) ;

	$(document).on('click', 'form.image_uploader > a.image-clip', function (){
		$(this).parent().submit() ;
		return false ;
	}) ;

	$(document).on('submit', 'form.image_uploader', function (){

		// 画像指定なし
		if ($(this).children('input[name=clip]').val() == '') {
			return false ;
		}

		// フォームデータ取得
		var data = new FormData($(this)[0]);

		// 更新画像ID取得
		var image_id = $(this).data('image-id') ;

		// 元画像取得
		var origin_image = $('img#upload'+image_id).attr('src') ;

		// ローディング画像表示
		$('img#upload'+image_id).attr('src', '/image/gif-load.gif') ;

		// 画像アップロード
		$.ajax({
			url: $(this).prop('action'),
			type: $(this).prop('method'),
			processData: false,
			contentType: false,
			data: data,
			dataType: 'json'
		})
		.done(function(data) {
			$('img#upload'+image_id).attr('src', '/monoclip/imageapi/'+data.image_id) ;
		})
		.fail(function(data) {
			$('img#upload'+image_id).attr('src', origin_image) ;
		})
/*
		.always(function(data) {
		})
*/

		return false;
	}) ;
}) ;
