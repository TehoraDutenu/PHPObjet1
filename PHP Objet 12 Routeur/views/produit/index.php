<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="/"><button type="button">Utilisateurs</button></a>

    <h4>Les produits de la BDD</h4>
    <ul>
        <?php foreach ($produits as $produit) : ?>
            <li>
                <?php echo $produit->nom ?>
                <?php echo $produit->description ?>
                <?php echo $produit->prix ?>
            </li>
        <?php endforeach; ?>
    </ul>


</body>

</html>