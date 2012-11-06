<?php
	$mode = isset($_GET['mode']) ? $_GET['mode'] : 'raw';
?>
<div class="well sidebar-nav">
<ul class="nav nav-list">
    <li class="nav-header">Days</li>
    <?php foreach($days as $day): ?>
    <li class="<?php if($active_report == $day) echo "active" ?>">
        <a href="<?="/logviewer/$active_month/" . substr($day, 0, 2) . "/$log_level?mode=$mode"?>"><?=$day?></a>
    </li>
    <?php endforeach;?>
</ul>
</div>
