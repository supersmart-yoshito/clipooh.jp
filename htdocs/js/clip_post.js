$(function (){


	$('form#clip-post > div > a').click(function (){
		$(this).parent().parent().submit() ;
		return false ;
	}) ;


	$('form#clip-post').submit(function (){

		// フォームデータ取得
		var data = new FormData($(this)[0]);

		// アップロード
		$.ajax({
			url: $(this).prop('action'),
			type: $(this).prop('method'),
			processData: false,
			contentType: false,
			data: data,
			dataType: 'json'
		})
		.done(function(data) {

			switch (data.type) {
			case '0':
				var insertHtml = '<li><a href="/monoclip/clip/'+data.clip_id+'"><figure id="figure-'+data.clip_id+'"><figcaption>'+data.title+'</figcaption><img id="upload'+data.clip_id+'" src="http://placehold.jp/200x200.png" width="200px" /></figure></a></li><form class="image_uploader" data-image-id="'+data.clip_id+'" action="/monoclip/update/'+data.clip_id+'" method="post" enctype="multipart/form-data"><input type="file" name="clip" accept="image/*;capture=camera" style="display: none;"/><a class="image-select button" href="#">選択</a><a class="image-clip button" href="#">クリップ</a><input type="hidden" name="__time" value="{$__time}" /><input type="hidden" name="__token" value="{$__token}" /></form>' ;

				$('div#image-clips > ul ').prepend(insertHtml) ;
				break ;
			case '3':
				var insertHtml = '<li><form class="memo_uploader" action="/monoclip/update/'+data.clip_id+'" method="post"><p>'+data.title+'</p><div class="memo"></div><textarea name="text" class="memo" style="display: none;"></textarea><input type="hidden" name="__time" value="{$__time}" /><input type="hidden" name="__token" value="{$__token}" /></form></li>' ;
				$('div#memo-clips > ul ').prepend(insertHtml) ;
				break ;
			}
		})
		.fail(function(xhr, textStatus, errorThrown) {
console.log(xhr) ;
console.log(textStatus) ;
console.log(errorThrown) ;
console.log("NG:" + textStatus.status);
		})
/*
		.always(function(data) {
		})
*/

		return false;
	}) ;
}) ;
