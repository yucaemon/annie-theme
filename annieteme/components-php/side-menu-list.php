<div class='side-menu-list'>
<div class='side-menu-list__li'>
<p class='side-menu-list__title'>
記事
</p>
<?php wp_list_categories('title_li=&depth=1'); ?>
</div>
<div class='side-menu-list__li'>
<p class='side-menu-list__title'>
購入アイテム
</p>
<?php wp_list_categories('child_of=7&title_li='); ?>
</div>
<div class='side-menu-list__li'>
<p class='side-menu-list__title'>
日本未上陸ブランド
</p>
<?php wp_list_categories('child_of=15&title_li='); ?>
</div>
<div class='side-menu-list__li'>
<p class='side-menu-list__title'>
ポートランドブランド
</p>
<?php wp_list_categories('child_of=18&title_li='); ?>
</div>
</div>
