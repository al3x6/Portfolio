<?php
$page = 'Mes Services';
$titre = 'Services';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=6, user-scalable=0">-->
    <meta name="description" content="Je présente sur cette page mon Cv au complet. Il est possible d'être téléchargé">
    <meta name="author" content="Alexis Araujo">
    <title><?= $titre ?></title>

    <link rel="icon" href="/public/image/icone/favicon-48x48.webp" type="image/x-icon">

    <!-- Inclure des feuilles de style CSS ici -->
    <link rel="stylesheet" href="/public/css/styles_css_header.css">
    <link rel="stylesheet" href="../css/styles.css" media="only screen and (min-width: 941px)">
    <link rel="stylesheet" href="../css/styles_mobile.css" media="only screen and (max-width: 940px)">

    <!-- Inclure des scripts javascript -->
    <script src="/public/javascript/javascript.js" defer></script>

    <!-- Emeticones -->
    <script rel="preconnect" src="https://kit.fontawesome.com/c6abb0645d.js" crossorigin="anonymous" defer></script>
</head>

<!-- Contenu de la page -->
<body>

<!-- Header -->
<?php include("../../includes/header.php"); ?>

<main>
    <!-- titre -->
    <?php include("../../includes/titre.php"); ?>
    <h2>En développement .....</h2>

    <!--<section class="hero">
        <div class="hero_left">
            <div>
                <h2>CV</h2>
                <p>Vous pouvez Télécharger ci-dessous mon CV</p>
                <p>Vous pouvez également parcourir cette page qui transmet des informations plus précises</p>
            </div>
            <div class="div_button">
                <a href="#" class="button">Voir mon travail</a>
                <a href="mon_travail.pdf" class="button" download>Télécharger mon travail</a>
            </div>
        </div>
        <div class="hero_right">
            <img src="../image/me.webp" width="612" height="408" alt="Photo de profil">
            <?php /*__DIR__*/ ?>
        </div>
    </section>-->


    <!--<section class="services">
        <h2></h2>
        <div class="services_left">

        </div>

        <div class="services_right">
        </div>
    </section>


    <section class="portfolio">
        <h2></h2>

        </div>
    </section>-->

    <section class="contact">
        <h2>Contactez-moi</h2>
        <form action="#">
            <label for="nom" aria-label="Nom"></label><input type="text" id="nom" name="nom" placeholder="Votre nom">
            <label for="email" aria-label="email"></label><input type="email" id="email" name="email"
                                                                 placeholder="Votre adresse email">
            <label for="message" aria-label="message"></label><textarea name="message" id="message"
                                                                        placeholder="Votre message"></textarea>
            <button class="contact_valide" type="submit">Envoyer</button>
        </form>
        <button onclick="RetourHaut()" id="retour_haut_btn" title="Retour en haut de la page">↑</button>
    </section>

</main>


<!-- Footer -->
<?php include("../../includes/footer.php"); ?>

</body>
</html>
