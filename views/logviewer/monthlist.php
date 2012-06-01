<?php
	$mode = isset($_GET['mode']) ? $_GET['mode'] : 'raw';
?>
<div class="subnav subnav-fixed">
    <ul class="nav nav-pills">
    <?php foreach($months as $month): ?>
    <li class="<?php if($active_month == $month) echo "active" ?>">
        <a href="/logviewer/<?=$month?>/01/<?=$log_level?>?mode=<?=$mode?>"><?=$month?></a>
    </li>
    <?php endforeach ?>
    </ul>
</div>

 
