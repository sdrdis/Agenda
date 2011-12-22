<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <?php echo Asset::css('screen.css'); ?>
    <?php echo Asset::css('print.css'); ?>
    <!--[if IE]>
    <?php echo Asset::css('ie.css'); ?>
    <![endif]-->
    <?php echo Asset::css('agenda.css'); ?>
    <?php echo Asset::js('jquery-1.7.1.min.js'); ?>
</head>
<body>
<div id="main">
    <div id="header">
        Agenda
    </div>
    <?php echo render('_menu'); ?>
    <div id="content">
        <?php if (Session::get_flash('error')): ?>
        <div class="error"><?php echo implode('<br/>', (array) Session::get_flash('error')); ?></div>
        <?php endif; ?>
        <?php if (Session::get_flash('success')): ?>
        <div class="success"><?php echo implode('<br/>', (array) Session::get_flash('error')); ?></div>
        <?php endif; ?>
        <div id="list_zone">
            <?php echo $list; ?>
        </div>
        <div id="view_zone">
            <div class="inside">
                <?php echo $view; ?>
            </div>
        </div>
    </div>
    <div id="footer">
        <a href="http://fuelphp.com">Fuel</a> is released under the MIT license.<br />Page rendered in {exec_time}s using {mem_usage}mb of memory.
    </div>
</div>
</body>
</html>
