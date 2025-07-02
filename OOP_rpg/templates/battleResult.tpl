{extends file='layout.tpl'}

{block name="content"}
<div class="container my-5">
    <h2 class="mb-4 text-center">Battle Result</h2>
    <div class="row justify-content-center mb-4">
        <div class="col-md-5">
            <div class="card mb-3">
                <div class="card-header bg-primary text-white">
                    {$character1->getName()} ({$character1->getRole()})
                </div>
                <div class="card-body">
                    <p><strong>Health voor gevecht:</strong> {$health1_before}</p>
                    <p><strong>Health na gevecht:</strong> {$health1_after}</p>
                </div>
            </div>
        </div>
        <div class="col-md-2 d-flex align-items-center justify-content-center">
            <span class="display-6">VS</span>
        </div>
        <div class="col-md-5">
            <div class="card mb-3">
                <div class="card-header bg-success text-white">
                    {$character2->getName()} ({$character2->getRole()})
                </div>
                <div class="card-body">
                    <p><strong>Health voor gevecht:</strong> {$health2_before}</p>
                    <p><strong>Health na gevecht:</strong> {$health2_after}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="alert alert-info text-center mb-4">
        {if $winner == 'draw'}
            <strong>Het gevecht is geëindigd in een gelijkspel!</strong>
        {else}
            <strong>Winnaar: {$winner}</strong>
        {/if}
    </div>

    <div class="card">
        <div class="card-header">
            Gevechtsverslag
        </div>
        <div class="card-body">
            <pre class="mb-0">{$battleLog}</pre>
        </div>
    </div>
</div>
{/block}