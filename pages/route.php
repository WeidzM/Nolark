<!doctype html>
<html lang="fr-FR">
    <head>
        <title>Casques Nolark : Casques routes</title>
        <meta charset="UTF-8" />
        <meta name="author" content="José GIL" />
        <meta name="description" content="Découvrez des casques moto dépassant même les exigences des tests de sécurité. Tous les casques Nolark au meilleur prix et avec en prime la livraison gratuite !" />
        <link rel="stylesheet" href="../css/styles.css" />
        <link rel="stylesheet" href="../css/casques.css" />
      <?php require_once '../includes/casques.inc.php'; ?>
    </head>
    <body>
        <?php include('../includes/header.html.inc.php'); ?>
        <section id="casques">
          <?php $type = 4; Affichage($type); ?>
        </section>
        <?php include('../includes/footer.inc.php'); ?>
    </body>
</html>