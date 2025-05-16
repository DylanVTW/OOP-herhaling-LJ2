{extends file='layout.tpl'}

{block name="content"}
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
{/block}