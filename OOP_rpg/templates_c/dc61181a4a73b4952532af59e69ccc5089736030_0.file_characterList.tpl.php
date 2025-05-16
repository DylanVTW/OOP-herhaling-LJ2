<?php
/* Smarty version 5.5.0, created on 2025-05-16 11:44:38
  from 'file:characterList.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_68272526d66a09_25405272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc61181a4a73b4952532af59e69ccc5089736030' => 
    array (
      0 => 'characterList.tpl',
      1 => 1747393312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68272526d66a09_25405272 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_65588432668272526d43781_57599993', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block "content"} */
class Block_65588432668272526d43781_57599993 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
?>

<div class="card my-4">
    <div class="card-header">
        <h2 class="mb-0">Character List</h2>
    </div>
    <div class="card-body">
        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Health</th>
                    <th>Attack</th>
                    <th>Defense</th>
                    <th>Range</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('characters'), 'character');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('character')->value) {
$foreach0DoElse = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->getValue('character')->getName();?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('character')->getRole();?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('character')->getHealth();?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('character')->getAttack();?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('character')->getDefense();?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('character')->getRange();?>
</td>
                    <td>
                        <a href="index.php?page=viewCharacter&name=<?php echo $_smarty_tpl->getValue('character')->getName();?>
" class="btn btn-sm btn-primary">View</a>
                        <a href="index.php?page=deleteCharacter&name=<?php echo $_smarty_tpl->getValue('character')->getName();?>
" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
</div>
<?php
}
}
/* {/block "content"} */
}
