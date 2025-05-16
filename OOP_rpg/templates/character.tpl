<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <h1>Character overview - {$character->getName()}</h1>


    <h2>Character details</h2>

    <p>Name: {$character->getName()}</p>
    <p>Health: {$character->getHealth()}</p>
    <p>Attack: {$character->getAttack()}</p>
    <p>Defense: {$character->getDefense()}</p>
    <p>Role: {$character->getRole()}</p>
    <p>Range: {$character->getRange}</p>

    <h2>Character inventory</h2>

    <ul>
        {foreach from=$character->getInventory() item=item}
            <li>{$item->getName()} - {$item->getDescription()}</li>
        {/foreach}
    </ul>

    
</body>
</html>