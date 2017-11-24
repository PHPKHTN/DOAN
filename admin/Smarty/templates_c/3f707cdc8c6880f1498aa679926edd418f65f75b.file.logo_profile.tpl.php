<?php /* Smarty version Smarty-3.1.14, created on 2017-11-24 10:38:54
         compiled from "Smarty\templates\logo_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:325525a0ad43cdb4f13-35405804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f707cdc8c6880f1498aa679926edd418f65f75b' => 
    array (
      0 => 'Smarty\\templates\\logo_profile.tpl',
      1 => 1511270304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325525a0ad43cdb4f13-35405804',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a0ad43cdb8d99_75717555',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0ad43cdb8d99_75717555')) {function content_5a0ad43cdb8d99_75717555($_smarty_tpl) {?><a href="quantri.php">
<img id="logo" src="public/layout/resources/images/alphatek.png" alt="Simpla Admin logo" /></a> 
<!-- Sidebar Profile links -->
<div id="profile-links"> Chào, <a href="#" title="Edit your profile">
<?php echo $_SESSION['fullname'];?>

</a><br />
  <br />
  <a href="#" title="View the Site">View the Site</a> | 
  <a href="quantri.php?func=exit" title="Sign Out">Sign Out</a> </div>
<?php }} ?>