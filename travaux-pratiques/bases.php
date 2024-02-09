<?php $comptes = [
    [
        "prenom" => "Jean",
        "nom" => "Dupond",
        "email" => "jdupond@exemple.fr",
        "premium" => true,
    ],
    [
        "prenom" => "Pierre",
        "nom" => "Durand",
        "email" => "pdurand@exemple.fr",
        "premium" => false,
    ],
    [
        "prenom" => "Anne",
        "nom" => "Martin",
        "email" => "amartin@exemple.fr",
        "premium" => true,
    ],
    [
        "prenom" => "Pauline",
        "nom" => "Sapin",
        "email" => "psapin@exemple.fr",
        "premium" => false,
    ],
]; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../assets/css/vapor-bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gluten:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: 'Gluten', cursive;
        }
    </style>
    <title>TP - Bases</title>
</head>
<body class="bg-light">
<!--Insertion d'un menu-->
<?php include_once '../_partials/menu.php' ?>
<div class="container">
    <h1 class="my-3 text-warning text-center">Travaux pratiques - Bases</h1>

    <!--    Enoncé 1-->
    <div class="d-flex mt-5 ">
        <i class="bi bi-1-square fs-3 text-warning me-3"></i>
        <h3 class="border-bottom border-warning border-1">Enoncé</h3>
    </div>
    <div>
        <p>Soit le tableau suivant : </p>
        <div class="text-success fw-bold">
            <pre class="bg-primary border rounded-4 text-white fw-bold m-4 w-50">
                <code>
                     $comptes = [
                         [
                             "prenom" => "Jean",
                             "nom" => "Dupond",
                             "email" => "jdupond@exemple.fr",
                             "premium" => true,
                         ],
                         [
                             "prenom" => "Pierre",
                             "nom" => "Durand",
                             "email" => "pdurand@exemple.fr",
                             "premium" => false,
                         ],
                         [
                             "prenom" => "Anne",
                             "nom" => "Martin",
                             "email" => "amartin@exemple.fr",
                             "premium" => true,
                         ],
                         [
                             "prenom" => "Pauline",
                             "nom" => "Sapin",
                             "email" => "psapin@exemple.fr",
                             "premium" => false,
                         ],
                     ];
                </code>
            </pre>
        </div>
    </div>

    <div class="bg-dark p-3 shadow rounded-4">
        <p>Afficher le tableau <span class="text-success">$comptes</span> sous la forme d'une table</p>
        <div class="text-center">
            <img src="../assets/images/tp/bases-enonce-1.png" alt="tab" class="img-fluid">
        </div>
        <div class="d-flex mt-2">
            <i class="bi bi-filetype-exe fs-2 text-warning text-bold"></i>
            <div class="bg-black rounded-4 p-3 flex-fill">
                <!-- Votre code -->
                <table class="table table-primary">
                    <thead>
                    <tr>
                        <th class="text-warning">Prénom</th>
                        <th class="text-warning">Nom</th>
                        <th class="text-warning">Email</th>
                        <th class="text-warning">Premium</th>
                        <th class="text-warning">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($comptes as $compte) : ?>
                        <tr>
                            <td><?= $compte["prenom"] ?></td>
                            <td><?= $compte["nom"] ?></td>
                            <td><?= $compte["email"] ?></td>
                            <td><?= $compte["premium"] ? "oui" : "non" ?></td>
                            <td>
                                <button class="btn btn-danger">Supprimer</button>
                                <button class="btn btn-warning">Modifer</button>
                                <?php if ($compte["premium"] == false) : ?>
                                    <button class="btn btn-success">Premium</button>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--    Enoncé 2-->
    <div class="d-flex mt-5 ">
        <i class="bi bi-2-square fs-3 text-warning me-3"></i>
        <h3 class="border-bottom border-warning border-1">Enoncé</h3>
    </div>
    <div>
        <p>En utilisant le même tableau <span class="text-success">$comptes</span></p>
    </div>
    <div class="bg-dark p-3 shadow rounded-4">
        <p>Afficher le tableau <span class="text-success">$comptes</span> sous la forme de cartes (cards) </p>
        <div class="text-center">
            <img src="../assets/images/tp/bases-enonce-2.png" alt="tab" class="img-fluid">
        </div>
        <div class="d-flex mt-2">
            <i class="bi bi-filetype-exe fs-2 text-warning text-bold"></i>
            <div class="bg-black rounded-4 p-3 flex-fill">
                <!-- Votre code -->
                <?php foreach ($comptes as $compte) : ?>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body border border-1">
                            <h5><?= $compte["prenom"] ?> <?= $compte["nom"] ?></h5>
                            <p><?= $compte["email"] ?></p>
                            <p><?= $compte["premium"] ? "Premium" : "Non premium" ?></p>
                            <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                            <?php if ($compte["premium"] == false) : ?>
                                <button class="btn btn-success"><i class="bi bi-currency-euro"></i></button>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>