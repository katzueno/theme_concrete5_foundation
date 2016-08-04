<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!doctype html>
<html class="no-js" lang="<?php echo Localization::activeLanguage()?>">
<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php Loader::element('header_required', array(
        'pageTitle' => isset($pageTitle) ? $pageTitle : '',
        'pageDescription' => isset($pageDescription) ? $pageDescription : '',
        'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''
        ));?>
    <link rel="stylesheet" href="<?php echo $view->getThemePath();?>/css/app.css">
</head>
<body>
<div class="<?php echo $c->getPageWrapperClass()?>">
    <div class="row">
        <div class="large-12 columns">
            <?php View::element('system_errors', array('format' => 'block', 'error' => isset($error) ? $error : null, 'success' => isset($success) ? $success : null, 'message' => isset($message) ? $message : null)); ?>
            <?php print $innerContent; ?>
        </div>
    </div>
</div>
<?php Loader::element('footer_required'); ?>
<script src="<?php echo $view->getThemePath();?>/bower_components/jquery/dist/jquery.js"></script>
<script src="<?php echo $view->getThemePath();?>/bower_components/what-input/what-input.js"></script>
<script src="<?php echo $view->getThemePath();?>/bower_components/foundation-sites/dist/foundation.js"></script>
<script src="<?php echo $view->getThemePath();?>/js/app.js"></script>
</body>
</html>
