<?php

/** @var array $arResult */
/** @var \CBitrixComponent $this */

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}
?>

<?php if ($arResult['ITEMS']):?>
	<ul id="site-review-list" class="site-review-list">
		<?php foreach ($arResult['ITEMS'] as $item):?>
			<?php
				$this->addEditAction($item['ID'], $item['EDIT_LINK']);
				$this->addDeleteAction($item['ID'], $item['DELETE_LINK']);
			?>
			<li class="site-review-item" id="<?=$this->getEditAreaId($item['ID'])?>">
				<div class="site-review-avatar">
					<?php if ($item['PHOTO']):?>
						<img src="<?=$item['PHOTO']['SRC']?>" alt="<?=$item['PHOTO']['ALT']?>">
					<?php else:?>
						<img src="<?=$templateFolder . '/images/no_photo.svg'?>" alt="avatar">
					<?php endif?>
				</div>
				<div class="site-review-block">
					<p>
						<div class="site-review-name"><a href="<?=$item['DETAIL_PAGE_URL']?>"><?=$item['NAME']?></a></div>
						<div class="site-review-date"><?=$item['DISPLAY_ACTIVE_FROM']?></div>
					</p>
					<p class="site-review-text">
						<?=$item['DETAIL_TEXT']?>
					</p>
				</div>
			</li>
		<?php endforeach?>
	</ul>
<?php endif?>