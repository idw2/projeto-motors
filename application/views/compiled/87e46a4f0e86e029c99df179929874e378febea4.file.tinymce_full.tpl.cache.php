<?php /* Smarty version Smarty-3.1.19, created on 2014-08-15 15:10:20
         compiled from "/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/tinymce_full.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32382340753ee4d0cb9f501-27187600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87e46a4f0e86e029c99df179929874e378febea4' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/tinymce_full.tpl',
      1 => 1408125866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32382340753ee4d0cb9f501-27187600',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ee4d0cba45a2_46168778',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ee4d0cba45a2_46168778')) {function content_53ee4d0cba45a2_46168778($_smarty_tpl) {?><script type="text/javascript" src="/web-files/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>

<script type="text/javascript">

    tinyMCE.init({
        mode: "textareas",
        theme: "advanced",
        theme_advanced_toolbar_location: "top",
        theme_advanced_statusbar_location: "bottom",
        theme_advanced_resizing: true,
        plugins: "fullpage",
        theme_advanced_buttons3_add: "fullpage",
        fullpage_fontsizes: '13px,14px,15px,18pt,xx-large',
        fullpage_default_xml_pi: false,
        fullpage_default_langcode: 'en',
        fullpage_default_title: "Editor master"
    });


</script>
<?php }} ?>
