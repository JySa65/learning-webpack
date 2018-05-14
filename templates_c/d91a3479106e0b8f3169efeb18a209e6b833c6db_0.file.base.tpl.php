<?php
/* Smarty version 3.1.32, created on 2018-05-06 00:55:38
  from '/var/www/html/project_mx/templates/base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5aee7cba82fc83_58775810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd91a3479106e0b8f3169efeb18a209e6b833c6db' => 
    array (
      0 => '/var/www/html/project_mx/templates/base.tpl',
      1 => 1525578011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aee7cba82fc83_58775810 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="bpublic_health somos la primer agencia de marketing digital en México 100% especializada en el sector salud" >
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3756309545aee7cba8292a8_54277551', 'title');
?>
</title>
	<link rel="stylesheet" href="static/css/main.css">
</head>
<body>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14999725965aee7cba82de52_21698959', 'context');
?>

	<?php echo '<script'; ?>
 src="static/js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'title'} */
class Block_3756309545aee7cba8292a8_54277551 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3756309545aee7cba8292a8_54277551',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php
}
}
/* {/block 'title'} */
/* {block 'context'} */
class Block_14999725965aee7cba82de52_21698959 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'context' => 
  array (
    0 => 'Block_14999725965aee7cba82de52_21698959',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		
	<?php
}
}
/* {/block 'context'} */
}
