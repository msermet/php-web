<?php
// Récupère le paramètre d'URL 'prenom'
// Tester la présence du paramètre
$prenom = null;
$nom = null;
if (isset($_GET["prenom"])) {
    $prenom = $_GET["prenom"];
}
if (isset($_GET["nom"])) {
    $nom = $_GET["nom"];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Récupération des paramètres d'URL</h1>
<?php if ($prenom && $nom): ?>
    <p>Le paramètre est égal à <?= $prenom . " " . strtoupper($nom); ?></p>
<?php else : ?>
    <p>Les paramètres nom et prénom sont obligatoires</p>
<?php endif; ?>
</body>
</html>