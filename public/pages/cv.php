<?php
$page = 'Mon Curriculum Vitae';
$titre = 'CV';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=6, user-scalable=0">-->
    <meta name="description" content="Je présente sur cette page mon Cv au complet. Il est possible d'être téléchargé">
    <title><?= $titre ?></title>
    <!-- Inclure des feuilles de style CSS ici -->
    <link rel="stylesheet" href="../css/styles.css" media="only screen and (min-width: 941px)">
    <link rel="stylesheet" href="../css/styles_mobile_css.css" media="only screen and (max-width: 940px)">

    <!-- Emeticones -->
    <script rel="preconnect" src="https://kit.fontawesome.com/c6abb0645d.js" crossorigin="anonymous"></script>
</head>

<!-- Contenu de la page -->
<body>

<!-- Header -->
<?php include("../../includes/header.php"); ?>

<main>
    <!-- titre -->
    <?php include("../../includes/titre.php"); ?>

    <section class="hero">
        <div class="hero_left">
            <div>
                <h2>CV</h2>
                <p>Vous pouvez Télécharger ci-dessous mon CV.<br>Vous pouvez également parcourir cette page qui transmet des informations plus précises.</p>
            </div>
            <div class="div_button">
                <a href="/public/image/cv/CV_Alexis_ARAUJO.pdf" class="button" download>Télécharger mon CV</a>
            </div>
        </div>
        <div class="hero_right">
            <img src="/public/image/cv/CV_Alexis_ARAUJO.webp" width="700" height="990" alt="Photo de mon CV">
            <?php /*__DIR__*/ ?>
        </div>
    </section>



    <section class="services">
        <div class="services_left">

        </div>

        <div class="services_right">
        </div>
    </section>

    <section class="formations">
        <h2>Formations</h2>
        <div class="formations_conteneur">
            <div class="formations_left">
                <img src="../image/cv/oteria_logo.webp" width="600" height="273" alt="Logo Oteria Cyber School">
                <img src="../image/cv/velizy_logo.webp" width="600" height="110" alt="Logo Iut de Vélizy">
            </div>

            <div class="formations_right">
                <h3>2024-2027 Oteria Cyber School</h3>
                <p>Et oui ! Depuis septembre 2024, j'ai rejoint l'Oteria Cyber School pour me former en cybersécurité, un domaine qui me passionne depuis longtemps. Je me plonge actuellement dans l'apprentissage des fondamentaux.</p>
                <p>Ce que je fais à l'école me plaît énormément, l'ambiance est excellente ce qui me permet chaque jour d'approfondir mes compétences.</p>
                <p>Mon objectif est de devenir un expert capable de prévenir et contrer les cyberattaques, en m'investissant à fond dans cette discipline en constante évolution.</p>
            </div>
        </div>
    </section>

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

<!-- Bouton Retour haut -->
<script>
    window.addEventListener('scroll', function () {
        let retour_haut_btn = document.getElementById("retour_haut_btn");
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            retour_haut_btn.style.display = "block";
        } else {
            retour_haut_btn.style.display = "none";
        }
    });

    // Scroll to the top of the page
    function RetourHaut() {
        //document.body.scrollTop = 0; // For Safari
        //document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        window.scrollTo({
            top: 0,
            behavior: 'smooth' //transition douce
        })
    }
</script>

<script>
    // Menu Burger
</script>


</body>
</html>