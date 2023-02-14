<?php
$countries = [
        [
            "name" => "Belgique",
            "slug" => "belgique",
            "capitale" => "Bruxelles",
        ],
        [
            "name" => "France",
            "slug" => "france",
            "capitale" => "Paris",
        ],
        [
            "name" => "Italie",
            "slug" => "italie",
            "capitale" => "Rome",
        ],
        [
            "name" => "Espagne",
            "slug" => "espagne",
            "capitale" => "Madrid",
        ],
        [
            "name" => "Allemagne",
            "slug" => "allemagne",
            "capitale" => "Berlin",
        ],
        [
            "name" => "Portugal",
            "slug" => "portugal",
            "capitale" => "Lisbonne",
        ],
        [
            "name" => "Pays-bas",
            "slug" => "pays-bas",
            "capitale" => "Amsterdam",
        ],
        [
            "name" => "Suisse",
            "slug" => "suisse",
            "capitale" => "Berne",
        ],
        [
            "name" => "Royaume-uni",
            "slug" => "royaume-uni",
            "capitale" => "Londres",
        ],
        [
            "name" => "Autriche",
            "slug" => "autriche",
            "capitale" => "Vienne",
        ],
        [
            "name" => "Danemark",
            "slug" => "danemark",
            "capitale" => "Copenhague",
        ],
        [
            "name" => "Suede",
            "slug" => "suede",
            "capitale" => "Stockholm",
        ],
        [
            "name" => "Norvege",
            "slug" => "norvege",
            "capitale" => "Oslo",
        ],
        [
            "name" => "Finlande",
            "slug" => "finlande",
            "capitale" => "Helsinki",
        ],
        [
            "name" => "Islande",
            "slug" => "islande",
            "capitale" => "Reykjavik",
        ]
    ];
global $selected;

if (!isset($__GET['country']) && count($_GET)>0){
    $selected = array_filter($countries, fn ($country)=> $country['slug'] === $_GET['country']);
    $selection = array_shift($selected);
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Capitales</title>
</head>
<body>
<h1>Capitales</h1>
<?php if (!empty($selection)):?>
<p>La capitale de <?= $selection['name'] ?> est <?= $selection['capitale'] ?></p>
<?php endif; ?>
<div>
    <form method="get" name="country" id="country">
        <label for="pet-select">selectionnez un pays</label>
        <select name="country" id="country">
            <datalist id="ice-cream-flavors">
                <?php foreach ($countries as $country): ?>
                <option value="<?= $country['slug']; ?>"><?= $country['name']; ?></option>
                <?php endforeach; ?>
            </datalist>
        </select>
        <button type="submit">Envoyer</button>
    </form>
</div>
</body>
</html>