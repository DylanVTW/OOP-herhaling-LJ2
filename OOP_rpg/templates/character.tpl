{extends file='layout.tpl'}

{block name="content"}
    <div class="card my-4" style="max-width: 400px;">
        <div class="card-header">
            <h2 class="mb-0">{$character->getName()}</h2>
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Name:</strong> {$character->getName()}</p>
            <p class="card-text"><strong>Health:</strong> {$character->getHealth()}</p>
            <p class="card-text"><strong>Attack:</strong> {$character->getAttack()}</p>
            <p class="card-text"><strong>Defense:</strong> {$character->getDefense()}</p>
            <p class="card-text"><strong>Role:</strong> {$character->getRole()}</p>
            <p class="card-text"><strong>Range:</strong> {$character->getRange()}</p>
        </div>
        <div class="card-footer text-end">
            <a href="index.php?page=characterList" class="btn btn-secondary">Terug naar lijst</a>
        </div>
    </div>
{/block}