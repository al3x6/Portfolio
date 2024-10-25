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
    <link rel="stylesheet" href="../css/styles_css.css" media="only screen and (min-width: 941px)">
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
        <h2><i class="fas fa-graduation-cap"></i> Formations</h2>
        <table class="formations_table">
            <tr>
                <td class="logo_cell">
                    <img src="../image/cv/oteria_logo.webp" alt="Logo Oteria Cyber School">
                </td>
                <td class="text_cell">
                    <h3>2027-2024 Oteria Cyber School, Bac +5</h3>
                    <p>Et oui ! Depuis septembre 2024, j'ai rejoint l'Oteria Cyber School pour me former en cybersécurité, un domaine qui me passionne depuis longtemps. Je me plonge actuellement dans l'apprentissage des fondamentaux.</p>
                    <p>Ce que je fais à l'école me plaît énormément, l'ambiance est excellente ce qui me permet chaque jour d'approfondir mes compétences.</p>
                    <p>Mon objectif est de devenir un expert capable de prévenir et contrer les cyberattaques, en m'investissant à fond dans cette discipline en constante évolution.</p>
                </td>
            </tr>
            <tr>
                <td class="logo_cell">
                    <img src="../image/cv/velizy_logo.webp" alt="Logo Iut de Vélizy">
                </td>
                <td class="text_cell">
                    <h3><i class="fas fa-graduation-cap"></i> 2024-2021 But Informatique, Bac +3</h3>
                    <p><b>Diplômé (Niveau: 6, Licence) :</b> BUT Informatique parcours parcours réalisation d'applications : conception, développement, validation. <a target="_blank" href="https://www.francecompetences.fr/recherche/rncp/35475/">ici</a></p>
                    <p>C'est au sein du Campus de Vélizy-Villacoublay que j'ai pu acquérir les compétences essentielles dans le domaine de l'informatique en général.</p>
                    <p>Durant cette formation, j'ai consolidé une base solide qui m'a permis de me spécialiser dans la cybersécurité. J'y ai découvert plusieurs aspects clés de l'informatique, notamment les systèmes et réseaux, l'architecture, la cryptographie, les bases de données, l'intelligence artificiel, le calcul distribué, ainsi que le développement web et logiciel.</p>
                    <p>Outre les compétences techniques, j'ai également développé des savoir-faire en communication professionnelle, gestion de projet, rédaction de rapports, droit informatique, qualité du code, accessibilité numérique, modélisation et structuration des données. Cet ensemble de compétences me confère une véritable base solide dans le domaine de l'informatique.</p>
                    <p>C'est donc ici, au sein de cette formation que j'ai pu être formé dans différent domaine de l'informatique</p>
                </td>
            </tr>
            <tr>
                <td class="logo_cell">
                    <img src="../image/cv/lyceejulesferry_logo.webp" alt="Logo dy Lycée Jules Ferry">
                </td>
                <td class="text_cell">
                    <h3>2021-2020 Classe Préparatoire aux Grandes Écoles (CPGE) TSI</h3>
                    <p>Je ne vais pas le cacher, mon année en CPGE TSI a été l'une des périodes les plus exigeantes de ma vie scolaire. Comme on s'y attend en prépa, la charge de travail était intense, et les attentes élevées.</p>
                    <p>Pourquoi ai-je choisi cette voie et relevé ce défi ? Dès le lycée, j'étais un excellent élève, notamment dans les matières scientifiques comme les mathématiques, la physique, la chimie, la mécanique, et l'informatique. Cette filière semblait être une continuité naturelle.</p>
                    <p>Cependant, au fil du temps, j'ai réalisé que ce parcours ne correspondait pas entièrement à mes aspirations, trop de mécanique, mathématiques, et peu d'informatique. Loin d'être un échec, cette expérience a été enrichissante. Elle m'a permis de clarifier ma véritable passion : l'informatique, rien d'autre. Travailler sans relâche 70 heures par semaine pour atteindre un objectif qui ne résonnait pas avec mes ambitions profondes n'était simplement pas fait pour moi.</p>
                    <p>Malgré tout, cette année m'a offert un aperçu de l'informatique, notamment à travers la programmation de petites fonctions. Mais l'enseignement principal que j'en retire, c'est l'importance d'une méthodologie de travail efficace et d'une organisation rigoureuse pour réussir.</p>
                    <p>Ces compétences, je les ai précieusement conservées pour les appliquer à mes projets futurs, en particulier dans ma formation en BUT Informatique. La persévérance, la rigueur, et la gestion du stress sont des qualités essentielles dans ce domaine, et cette expérience m'a permis de les développer et de mieux les maîtriser.</p>
                </td>
            </tr>
            <tr>
                <td class="logo_cell">
                </td>
                <td class="text_cell">
                    <h3><i class="fas fa-graduation-cap"></i> 2020-2018 Baccalauréat Technologique STI2D</h3>
                    <p><b>Diplômé (Niveau: BAC) :</b> BAC STI2D, mention assez bien</p>
                    <p>Les années où j'ai fait mes preuves !</p>
                    <p>Mes années de lycée ont été révélatrices et m'ont mis sur la voie du travail. Ces années en STI2D ont probablement été les meilleures de ma scolarité, tant pour les rencontres avec les autres étudiants que pour l'accompagnement des professeurs, compétents et toujours prêts à nous guider vers notre avenir.</p>
                    <p>Durant cette période, j'ai découvert des capacités insoupçonnées. Un exemple marquant : un professeur m'a écrit "excellence" sur mon bulletin scolaire après avoir obtenu une moyenne de 18 en mathématiques. Les autres matières ont également été une réussite, que ce soit dans ma spécialité ou les matières générales.</p>
                    <p>Pour mon option, j'avais choisi ITEC (axée sur la mécanique). Ce choix s'est fait par défaut, car l'établissement ne proposait pas l'option SIN (sciences de l'informatique), que j'aurais préférée. Quant à l'option EE, on ne va pas se mentir, ils avaient un volume de travail nettement moins important que nous.</p>
                    <p>Certes, j'ai obtenu mon baccalauréat l'année du Covid, et certains pourraient dire que c'était un "bac donné". Cependant, j'avais déjà accumulé les notes nécessaires tout au long de l'année pour l'obtenir, même si les examens finaux ont été annulés et qu'au moment de passer en confinement, on ne connaissait pas le sort des examens. Comme quoi, le travail régulier finit toujours par payer.</p>
                    <p>"Élève appliqué", "exemplaire" avec toujours l'ambition de bien faire, j'ai poursuivi mon projet de spécialité pendant le confinement, en restant en contact régulier avec mon professeur pour faire le point sur l'avancée. J'ai mené ce projet à terme et obtenu la meilleure note de la classe : 15/20, avec un coefficient de 32.</p>
                    <p>Mon seul regret est de n'avoir été qu'à quelques points de la mention Bien, que j'aurais probablement pu obtenir si j'avais passé les épreuves finales.</p>
                </td>
            </tr>
        </table>
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