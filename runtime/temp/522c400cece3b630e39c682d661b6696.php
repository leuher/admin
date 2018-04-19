<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:102:"D:\PHP-Environment\Apache2.4.29\htdocs\admin\public/../application/admin\view\company\account\add.html";i:1524038445;s:87:"D:\PHP-Environment\Apache2.4.29\htdocs\admin\application\admin\view\layout\default.html";i:1523111344;s:84:"D:\PHP-Environment\Apache2.4.29\htdocs\admin\application\admin\view\common\meta.html";i:1523111344;s:86:"D:\PHP-Environment\Apache2.4.29\htdocs\admin\application\admin\view\common\script.html";i:1523111344;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="/admin/public/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/admin/public/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/admin/public/assets/js/html5shiv.js"></script>
  <script src="/admin/public/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <form id="add-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">

    <div class="form-group">
        <label for="c-account" class="control-label col-xs-12 col-sm-2"><?php echo __('Account'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-account" class="form-control" name="row[account]" type="text" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="c-cid" class="control-label col-xs-12 col-sm-2"><?php echo __('Cid'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-cid" class="form-control" name="row[cid]" type="number">
        </div>
    </div>
    <div class="form-group">
        <label for="c-role" class="control-label col-xs-12 col-sm-2"><?php echo __('Role'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-role" class="form-control" name="row[role]" type="text" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="c-lastactivetime" class="control-label col-xs-12 col-sm-2"><?php echo __('Lastactivetime'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-lastactivetime" class="form-control datetimepicker" data-date-format="YYYY-MM-DD HH:mm:ss" data-use-current="true" name="row[lastactivetime]" type="text" value="<?php echo date('Y-m-d H:i:s'); ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="c-status" class="control-label col-xs-12 col-sm-2"><?php echo __('Status'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-status" class="form-control" name="row[status]" type="text" value="">
        </div>
    </div>
    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
        </div>
    </div>
</form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/admin/public/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/admin/public/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo $site['version']; ?>"></script>
    </body>
</html>