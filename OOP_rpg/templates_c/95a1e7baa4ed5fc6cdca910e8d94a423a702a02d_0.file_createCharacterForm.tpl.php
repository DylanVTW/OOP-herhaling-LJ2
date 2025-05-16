<?php
/* Smarty version 5.5.0, created on 2025-05-16 11:48:25
  from 'file:createCharacterForm.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_68272609ded5c8_48894328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95a1e7baa4ed5fc6cdca910e8d94a423a702a02d' => 
    array (
      0 => 'createCharacterForm.tpl',
      1 => 1747395473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68272609ded5c8_48894328 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_170668648068272609de9e92_07755247', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block "content"} */
class Block_170668648068272609de9e92_07755247 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
?>

<div class="card my-4 mx-auto" style="max-width: 500px;">
    <div class="card-header">
        <h2 class="mb-0">Create Character</h2>
    </div>
    <div class="card-body">
        <form action="index.php?page=saveCharacter" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role<span class="text-danger">*</span></label>
                <select class="form-select" id="role" name="role" required>
                    <option value="" disabled selected>Select a role</option>
                    <option value="Warrior">Warrior</option>
                    <option value="Mage">Mage</option>
                    <option value="Rogue">Rogue</option>
                    <option value="Healer">Healer</option>
                    <option value="Tank">Tank</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="health" class="form-label">Health</label>
                <input type="number" class="form-control" id="health" name="health" min="50" max="200" value="100" required>
            </div>
            <div class="mb-3">
                <label for="attack" class="form-label">Attack</label>
                <input type="number" class="form-control" id="attack" name="attack" min="10" max="50" value="20" required>
            </div>
            <div class="mb-3">
                <label for="defense" class="form-label">Defense</label>
                <input type="number" class="form-control" id="defense" name="defense" min="5" max="30" value="10" required>
            </div>
            <div class="mb-3">
                <label for="range" class="form-label">Range</label>
                <input type="number" class="form-control" id="range" name="range" min="1" max="10" value="1" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Create Character</button>
        </form>
    </div>
</div>
<?php
}
}
/* {/block "content"} */
}
