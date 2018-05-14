<?php
/* Smarty version 3.1.32, created on 2018-05-09 11:35:37
  from '/var/www/html/project_mx/templates/index/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af3073985fbf0_98718595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41265c469ebfbbb889cebda16654ec7eb93d4ec6' => 
    array (
      0 => '/var/www/html/project_mx/templates/index/index.tpl',
      1 => 1525876536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af3073985fbf0_98718595 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20887022495af3073985ab51_95647822', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13268692835af3073985d2d4_79177168', 'context');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'title'} */
class Block_20887022495af3073985ab51_95647822 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20887022495af3073985ab51_95647822',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Pagina Principal Del Sistema<?php
}
}
/* {/block 'title'} */
/* {block 'context'} */
class Block_13268692835af3073985d2d4_79177168 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'context' => 
  array (
    0 => 'Block_13268692835af3073985d2d4_79177168',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- navigations -->
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a href="index.html" class="navbar-brand">Bpubli_Health</a>

        <button type="button" class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#navbarCollapse">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="#home-section" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="#info-section" class="nav-link">Information</a>
            </li>
            <li class="nav-item">
                <a href="#contact-section" class="nav-link">Contact</a>
            </li>
            <li class="nav-item">
                <a href="#!" class="nav-link">Login</a>
            </li>
        </ul>
    </div>
</nav>
<section class="row">
    <div class="col-md-12">
        <img src="src/img/1.png" alt="" style="width: 100vw; height: 100vh; ">
    </div>
</section>
<?php
}
}
/* {/block 'context'} */
}
