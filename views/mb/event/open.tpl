{include file="`$smarty.const.TEMPLATE_DIR`/common/header.tpl" pageTitle="イベント登録" add_js="accordion.js"}


<script>
{literal}
$(function() {

	// 初期状態ではすべての子要素は非表示状態に設定
	//$('[data-switch-target-id]').css('display', 'none') ;

	// 表示切り替えの状態が変更された場合
	$(document).on('change', '.switch', function() {

		var id = Number($(this).data('switchId')) ;

		// チェックされた場合
		if ($(this).prop('checked')) {

			// 該当子要素を表示
			$('[data-switch-target-id='+id+']')
			.prop('disabled',false) ;

			// 次の要素がある場合
			var next = $('[data-switch-target-id='+(id+1)+']') ;
			if (next) {
				next.parent().css('display', 'block') ;
			}

		} else {
			// 該当子要素を表示
			$('[data-switch-target-id='+id+']')
			.prop('disabled',true) ;

			// 次の要素がある場合
			var next = $('[data-switch-target-id='+(id+1)+']') ;
			if (next) {
				next.parent().css('display', 'none') ;
			}
		}
	}) ;

	$('.datetimepicker').datetimepicker({
		addSliderAccess: true,
		sliderAccessArgs: { touchonly: false },
		changeMonth: true,
		changeYear: true,
		showOn: "both",
		//buttonImage: "/image/calendar.png",
		//buttonImageOnly: true
		beforeShow: function(input, inst) {
			var calendar = inst.dpDiv;   // Datepicker
			var target = $(this);

			setTimeout(function() {
				calendar.css('top', target.position().top+target.outerHeight()+'px') ;
/*
				calendar.position({
					my: 'center top',     // カレンダーの右上
					at: 'left bottom',  // 表示対象の右下
					of: input            // 対象テキストボックス
				});
*/
			}, 1);
		}
	});
}) ;
{/literal}
</script>


<section>
<div id="keyvisual">
<img class="maxwidth" src="/data/common/top/ccc106.jpg" />
</div><!-- .fade_slider -->
</section>



<!-- イベント -->
<section>
<div class="center">
<form id="event-form" action="" method="post" enctype="multipart/form-data">
<table class="frame">
  <tr>
    <th>カテゴリー</th>
    <td>
    <div>
      <select name="category1">
      <option value="0" checked>選択してください</option>
      {foreach from=$categories item=category}
      <option value="{$category->getId()}">{$category->getName()}</option>
      {/foreach}
      </select>
    </div>
    <div>
      <select data-switch-target-id="1" name="category2" disabled>
      <option value="0" checked>選択してください</option>
      {foreach from=$categories item=category}
      <option value="{$category->getId()}">{$category->getName()}</option>
      {/foreach}
      </select>
      <input class="switch" data-switch-id="1" type="checkbox" />
      <label>追加</label>
    </div>
    <div style="display: none;">
      <select data-switch-target-id="2" name="category3" disabled>
      <option value="0" checked>選択してください</option>
      {foreach from=$categories item=category}
      <option value="{$category->getId()}">{$category->getName()}</option>
      {/foreach}
      </select>
      <input class="switch" data-switch-id="2" type="checkbox" />
      <label>追加</label>
    </div>
    </td>
  </tr>
  <tr>
    <th>イベント名</th>
    <td><input type="text" name="event_name" value="{$name}" placeholder="" /></td>
  </tr>
  <tr>
    <th>イベント会場</th>
    <td><input type="text" name="event_place" value="{$place}" placeholder="" /></td>
  </tr>
  <tr>
    <th>イベント日時</th>
    <td>
      <ul class="none-list">
      <li><input class="datetimepicker" type="text" name="event_start" value="{$event_start}" placeholder="" readonly="readonly" /></li>
      <li>〜</li>
      <li><input class="datetimepicker" type="text" name="event_end" value="{$event_end}" placeholder="" readonly="readonly" /></li>
      </ul>
    </td>
  </tr>
  <tr>
    <th>対象</th>
    <td>
    {include file="`$smarty.const.TEMPLATE_DIR`/common/publish.parts.tpl"}
    </td>
  </tr>
  <tr>
    <th>定員</th>
    <td>
    <input type="radio" name="event_limit_option" value="1" {if $event_limit_option != 2}checked{/if} />定員なし<br/>
    <input type="radio" name="event_limit_option" value="2" {if $event_limit_option == 2}checked{/if}/><input type="text" name="event_limit" value="{$event_limit}" placeholder="例）xx名、xx名以上"/>
    </td>
  </tr>
  <tr>
    <th>説明</th>
    <td><textarea name="event_desciption" rows="10">{$event_description}</textarea></td>
  </tr>
  <tr>
    <th>イメージ画像</th>
    <td>
      <div id="image-post">
      <ul id="images" class="none-list" data-max-list="5">
      </ul><!-- #images -->
      </div><!-- #image-post -->
    </td>
  </tr>
  <tr>
    <th>注意事項</th>
    <td><textarea name="event_notice" rows="10">{$event_notice}</textarea></td>
  </tr>
</table>
<input type="submit" name="confirm" value="確認" />
</form>
</div><!-- .center -->
</section>



{include file="`$smarty.const.TEMPLATE_DIR`/common/footer.tpl"}
