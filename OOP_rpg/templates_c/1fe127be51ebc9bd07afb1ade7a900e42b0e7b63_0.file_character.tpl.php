<?php
/* Smarty version 5.5.0, created on 2025-05-16 11:48:34
  from 'file:character.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_682726124339b3_14342775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fe127be51ebc9bd07afb1ade7a900e42b0e7b63' => 
    array (
      0 => 'character.tpl',
      1 => 1747393843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_682726124339b3_14342775 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_191194095268272612421c35_12217429', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block "content"} */
class Block_191194095268272612421c35_12217429 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
?>

    <div class="card my-4" style="max-width: 400px;">
        <div class="card-header">
            <h2 class="mb-0"><?php echo $_smarty_tpl->getValue('character')->getName();?>
</h2>
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Name:</strong> <?php echo $_smarty_tpl->getValue('character')->getName();?>
</p>
            <p class="card-text"><strong>Health:</strong> <?php echo $_smarty_tpl->getValue('character')->getHealth();?>
</p>
            <p class="card-text"><strong>Attack:</strong> <?php echo $_smarty_tpl->getValue('character')->getAttack();?>
</p>
            <p class="card-text"><strong>Defense:</strong> <?php echo $_smarty_tpl->getValue('character')->getDefense();?>
</p>
            <p class="card-text"><strong>Role:</strong> <?php echo $_smarty_tpl->getValue('character')->getRole();?>
</p>
            <p class="card-text"><strong>Range:</strong> <?php echo $_smarty_tpl->getValue('character')->getRange();?>
</p>
        </div>
        <div class="card-footer text-end">
            <a href="index.php?page=characterList" class="btn btn-secondary">Terug naar lijst</a>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
