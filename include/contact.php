<?php
    $isWorkTime = \Site\SiteUtils::currentTimeInRange(
        strtotime('midnight +9 hours'),
        strtotime('midnight +18 hours'),
    );
?>

<?php if ($isWorkTime):?>
   <a href="tel:+74932336956">+7 (4932) 33-69-56</a>
<?php else:?>
   <a href="mailto:email@mail.ru">email@mail.ru</a>
<?php endif?>