<?php
/* Smarty version 3.1.29, created on 2016-05-23 06:04:55
  from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\phpstudy\tpl\test.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574281673b5e48_68690884',
  'file_dependency' => 
  array (
    '98d13d2474950fb4e29ea70d945a34bbd27755b4' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\phpstudy\\tpl\\test.tpl',
      1 => 1463975824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574281673b5e48_68690884 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1168357428167302128_70462859';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Title</title>
    <link rel="stylesheet" href="css/foundation.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="js/vendor/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/vendor/fastclick.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/foundation.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).foundation();
    <?php echo '</script'; ?>
>
</head>
<body>
<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <h1><a href="#"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a></h1>
        </li>
    </ul>
    <section class="top-bar-section">
        <ul class="right">
            <li class="active"><a href="#">Right Button Active</a></li>
            <li class="has-dropdown">
                <a href="#">Right Button Dropdown</a>
                <ul class="dropdown">
                    <li><a href="#">First link in dropdown</a></li>
                    <li class="active"><a href="#">Active link in dropdown</a></li>
                </ul>
            </li>
        </ul>
        <ul class="left">
            <li><a href="#">Left Nav Button</a></li>
        </ul>
    </section>
</nav>
<div class="content">
</div>
</body>
</html><?php }
}
