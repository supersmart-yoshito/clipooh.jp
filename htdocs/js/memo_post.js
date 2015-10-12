$(function (){

	$(document).on('blur', 'form.memo_uploader > textarea.memo', function (){
		// テキストエリアの内容を反映
		$(this).prev().text($(this).val()) ;

		// 表示切り替え
		$(this).css('display', 'none') ;
		$(this).prev().css('display', 'block') ;
		$(this).parent().submit() ;
		return false ;
	}) ;

	$(document).on('click', 'form.memo_uploader > div.memo', function (){
		// テキストエリアに内容を反映
		$(this).next().text($(this).text()) ;

		// 表示切り替え
		$(this).css('display', 'none') ;
		$(this).next().css('display', 'block') ;
		$(this).next().focus();
		return false ;
	}) ;

	$('form.memo_uploader').submit(function (){

		// フォームデータ取得
		var data = new FormData($(this)[0]);

		// ローディング画像表示
		//$('img#upload'+image_id).attr('src', '/image/gif-load.gif') ;

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
		})
		.fail(function(data) {
		})
/*
		.always(function(data) {
		})
*/

		return false;
	}) ;
}) ;
