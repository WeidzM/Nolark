<!doctype html>
<html lang="fr-FR">
    <head>
        <title>Casques Nolark : Casques enfants !</title>
        <meta charset="UTF-8" />
        <meta name="author" content="José GIL" />
        <meta name="description" content="Découvrez des casques moto dépassant même les exigences des tests de sécurité. Tous les casques Nolark au meilleur prix et avec en prime la livraison gratuite !" />
        <link rel="stylesheet" href="../css/styles.css" />
        <link rel="stylesheet" href="../css/casques.css" />
        <link rel="stylesheet" href="../css/enfants.css" />
      <?php require_once '../includes/casques.inc.php'; ?>
    </head>
    <body>
        <?php include('../includes/header.html.inc.php'); ?>
        <section id="video">
            <article>
                <img src="../images/attention.png" alt="Post-It : Penser à rentrer en vie" />
                <p>On est tous d'accord pour dire que la sécurité est primordiale lorsqu'on roule à deux roues. Personne n'envisagerait de rouler sans casque ! Et pourtant, certains omettent l'essentiel : Attacher son casque !</p>
                <p>C'est pourquoi Nolark vous présente cette vidéo conçue par "<a href="http://scootxperience.com" target="_blank">ScootXperience</a>" qui vous démontre que le fait d'attacher son casque peut tout changer...</p>
                <p>Rappelons l'essentiel à nos enfants et donnons leurs de bonnes habitudes.</p>
            </article>
            <iframe frameborder="0" width="480" height="270" src="http://www.dailymotion.com/embed/video/xdl390"></iframe>
        </section>
        
        <section id="casques">
          <?php $type = 2; Affichage($type);; ?>
        </section>
        <?php include('../includes/footer.inc.php'); ?>
    </body>
</html>