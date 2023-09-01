<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Home Page</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, accusantium ut ratione distinctio ullam repellat quasi tempore placeat laborum vitae delectus, assumenda porro, dicta labore corrupti recusandae eaque sint eligendi?</p>

    <a href="/produits"><button type="button">Produits</button></a>

    <h4>Les données de la BDD</h4>
    <ul>
        <?php foreach ($users as $user) : ?>
            <li> <?php echo $user->email ?> </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>