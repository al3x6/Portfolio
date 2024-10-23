<?php
$page = 'Bienvenue sur mon Portfolio';
$titre='Accueil';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=6, user-scalable=0">-->
    <meta name="description"
          content="Bienvenue sur mon portfolio ! Je suis Alexis Araujo, étudiant passionné en informatique. Avec une expertise diversifiée dans plusieurs domaines, notamment le développement web, la conception graphique et la configuration de serveurs, je suis prêt à relever de nouveaux défis avec créativité et détermination. Explorez mes réalisations concrètes et découvrez comment je peux contribuer à des projets innovants en tant que développeur web passionné.">
    <title><?=$titre?></title>
    <!-- Inclure des feuilles de style CSS ici -->
    <link rel="stylesheet" href="public/css/styles.css" media="only screen and (min-width: 941px)">
    <link rel="stylesheet" href="public/css/styles_mobile_css.css" media="only screen and (max-width: 940px)">

    <!-- Emoticone -->
    <script rel="preconnect" src="https://kit.fontawesome.com/c6abb0645d.js" crossorigin="anonymous"></script>
    <!-- API -->
    <script rel="preconnect" src="https://cdn.jsdelivr.net/npm/TagCloud@2.2.0/dist/TagCloud.min.js"></script>
    <!-- Sphere -->
    <script rel="preconnect" src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> <!-- Swiper -->
</head>

<!-- Contenu de la page -->
<body>

<!-- Header -->
<?php include("includes/header.php"); ?>

<main>
    <!-- titre -->
    <?php include("includes/titre.php"); ?>

    <section class="hero">
        <div class="hero_left">
            <div>
                <h2>Alexis Araujo</h2>
                <p>Je suis un jeune étudiant en 3ème à Oteria Cyber School après avoir eu mon BUT Informatique (Niveau Licence).<br>Je passionné par
                    l’informatique et surtout la Cybersécurité.</p>
            </div>
            <div class="div_button">
                <a href="/public/pages/projets.php" class="button">Voir mon travail</a>
            </div>
        </div>
        <div class="hero_right">
            <img src="public/image/me.webp" width="612" height="408" alt="Photo de profil">
            <?php /*__DIR__*/ ?>
        </div>
    </section>


    <section class="services">
        <div class="services_left">
            <!-- Sans API Sphere -->
            <!--<div>
                <ul class="languages-list">
                    <li><i class="fab fa-html5"></i> HTML</li>
                    <li><i class="fab fa-css3-alt"></i> CSS</li>
                    <li><i class="fab fa-js"></i> JavaScript</li>
                </ul>
            </div>-->
            <div class="sphère">
                <span class="content"></span> <!-- API Sphere -->
            </div>
        </div>

        <div class="services_right">
            <div>
                <h2>About me</h2>
                <p>Je suis un étudiant passionné par le monde numérique et les nouvelles technologies. Je possède une expertise diversifiée dans plusieurs domaines, allant de la création de sites web à la conception graphique, en passant par le développement d'applications mobiles, la configuration de serveurs, l'administration des réseaux, la virtualisation, l'architecture des réseaux et l'administration bas niveau. Cette palette de compétences me rend à la fois polyvalent et adaptable.
                </p>
                <p>
                    Récemment, j'ai rejoint Oteria Cyber School pour obtenir un titre RNCP de niveau +7 et devenir un <b>Expert en Cybersécurité</b>.<br> Cette formation combinée à la précédente et la maitrise des différents langages de programmation, me permet de mener à bien une variété de projets.
                    Mes connaissances théoriques en droit numérique, en management d'équipe et en gestion de projet enrichissent également ma compréhension globale du domaine.
                </p>
                <p>En explorant mon portfolio, vous découvrirez non seulement mes réalisations concrètes, mais aussi ma
                    capacité à relever de nouveaux défis avec créativité et détermination. Je suis constamment à la
                    recherche de nouvelles opportunités pour mettre mes compétences à profit et contribuer à des projets
                    innovants.
                </p>
                <p>
                    N'hésitez pas à me contacter pour discuter de collaborations potentielles ou pour en savoir plus sur
                    mon parcours et mes compétences, voir le bouton en dessous. <br>Ensemble, nous pouvons créer quelque
                    chose d'exceptionnel !
                </p>
            </div>
            <div class="div_button">
                <a href="/public/pages/cv.php" class="button">En savoir +</a>
            </div>
        </div>
    </section>


    <section class="portfolio">
        <h2>Projets</h2>
        <div class="swiper carrousel-container">
            <div class="swiper-wrapper carrousel-wrapper">
                <div onclick="window.location.href='test.php';" class="swiper-slide projet">
                    <a href="#"
                       onclick="openPopup('public/image/simfast_accueil.png', 'Projet Simfast', 1000, 880); return false;">
                        <img src="public/image/Projet/p1/simfast_accueil.png" alt="Projet SimFast">
                    </a>
                    <h3>Projet SimFast</h3>
                    <p>Création d'un site web avec des modules de calcul (Probabilité, chiffrement RC4)</p>
                </div>
                <div class="swiper-slide projet">
                    <a href=""><img src="image2.jpg" alt="Projet 2"></a>
                    <h3>Projet 2</h3>
                    <p>Description du projet 2</p>
                </div>
                <div class="swiper-slide projet">
                    <img src="image3.jpg" alt="Projet 3">
                    <h3>Projet 3</h3>
                    <p>Description du projet 3</p>
                </div>
                <div class="swiper-slide projet">
                    <img src="image4.jpg" alt="Projet 4">
                    <h3>Projet 4</h3>
                    <p>Description du projet 4</p>
                </div>
                <div class="swiper-slide projet">
                    <img src="image5.jpg" alt="Projet 5">
                    <h3>Projet 5</h3>
                    <p>Description du projet 5</p>
                </div>
                <div class="swiper-slide projet">
                    <img src="image6.jpg" alt="Projet 6">
                    <h3>Projet 6</h3>
                    <p>Description du projet 6</p>
                </div>
                <div class="swiper-slide projet">
                    <img src="image7.jpg" alt="Projet 7">
                    <h3>Projet 7</h3>
                    <p>Description du projet 7</p>
                </div>
                <div class="swiper-slide projet">
                    <img src="image8.jpg" alt="Projet 8">
                    <h3>Projet 8</h3>
                    <p>Description du projet 8</p>
                </div>
                <div class="swiper-slide projet">
                    <img src="image9.jpg" alt="Projet 9">
                    <h3>Projet 9</h3>
                    <p>Description du projet 9</p>
                </div>
                <!-- Ajoutez plus de projets ici au besoin -->
            </div>
            <button class="swiper-button-prev prec-btn" aria-label="Précédent"><i class="fas fa-chevron-left"></i>
            </button>
            <button class="swiper-button-next next-btn" aria-label="Suivant"><i class="fas fa-chevron-right"></i>
            </button>
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
<?php include("includes/footer.php"); ?>

<!-- Inclure des scripts JavaScript ici -->
<script>
    // Fonction pour détecter si l'écran est un appareil mobile
    function isMobileDevice() {
        return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
    }
</script>

<!-- API Sphère de compétences -->
<script>
    const myTags = ['Administration Réseaux', 'Administration bas niveau', 'Architecture Réseaux', 'Virtualisation', 'PHP', 'Laravel', 'HTML', 'CSS', 'Bootstrap', 'JavaScript', 'TypeScript', 'MySQL', 'SQL', 'PL/SQL', 'Oracle Database', 'Phpmyadmin', 'JSON', 'XML', 'FIGMA', 'WordPress', 'Node.js', 'Express.js', 'Machine Learning', 'Python', 'C', 'Java', 'Jakarta EE', 'GIT', 'GitHub', 'GitLab', 'IntelliJ', 'ANGULAR', 'REACT', 'Apache', 'Bash', 'Droit informatique', 'Gestion de projet'];

    // Définition du rayon en fonction du type d'appareil
    let radius = isMobileDevice() ? 160 : 300;

    var tagCloud = TagCloud('.content', myTags, {

        radius: radius, // radius in px
        maxSpeed: 'fast', // animation speed
        initSpeed: 'fast', // slow, normal, fast

        // 0 = top
        // 90 = left
        // 135 = right-bottom
        direction: 135,

        keep: true // interact with cursor move on mouse out

    });
    // var colors = ['#34A853', '#FBBC05', '#4285F4', '#7FBC00', 'FFBA01', '01A6F0'];
    // var random_color = colors[Math.floor(Math.random() * colors.length)];
    // document.querySelector('.content').style.color = random_color;
    document.querySelector('.content').style.color = "#333";
</script>

<!-- API Swipper Projet -->
<script>
    //let nombreparview = isMobileDevice() ? 1 : 6;
    document.addEventListener('DOMContentLoaded', function () {

        // Initialise Swiper
        var mySwiper = new Swiper('.carrousel-container', {
            // Paramètres optionnels
            loop: true, // Activer le mode boucle
            navigation: {
                nextEl: '.next-btn', // Sélecteur du bouton suivant
                prevEl: '.prec-btn', // Sélecteur du bouton précédent
            },
            autoplay: {
                delay: 1000, // Délai entre chaque diapositive en millisecondes
                disableOnInteraction: true, // ne pas désactiver l'autoplay lorsque l'utilisateur interagit avec le diaporama
            },
            slidesPerView: 'auto', // Nombre de diapositives à afficher
            spaceBetween: 80, // Espacement entre les diapositives en pixels
        });
    });

    // Sans API Swiper
    /*document.addEventListener('DOMContentLoaded', function () {
        const precBtn = document.querySelector('.prec-btn');
        const nextBtn = document.querySelector('.next-btn');
        const wrapper = document.querySelector('.carrousel-wrapper');
        const projets = document.querySelectorAll('.projet');
        const totalProjets = projets.length;
        console.log(projets[0].offsetWidth);
        console.log(parseInt(getComputedStyle(projets[0]).marginRight));
        const projetWidth = projets[0].offsetWidth + parseInt(getComputedStyle(projets[0]).marginRight);
        console.log(projetWidth);
        let index_actu = 0;


        precBtn.addEventListener('click', function () {
            if (index_actu > 0) {
                index_actu--;
                wrapper.classList.add('slide-animation');
                wrapper.style.transform = `translateX(-${index_actu * projetWidth}px)`;
            }
        });

        nextBtn.addEventListener('click', function () {
            if (index_actu < totalProjets - 4) {
                index_actu++;
                wrapper.classList.add('slide-animation');
                wrapper.style.transform = `translateX(-${index_actu * projetWidth}px)`;
            } else {
                index_actu = 0; // Retourner au premier projet
            }
            updateCarrousel();
        });

        function updateCarrousel() {
            wrapper.classList.add('slide-animation');
            wrapper.style.transform = `translateX(-${index_actu * projetWidth}px)`;
        }

        // Ajoutez un événement de transition pour supprimer la classe d'animation après la fin de la transition
        wrapper.addEventListener('transitionend', function () {
            wrapper.classList.remove('slide-animation');
        });
    });*/
</script>

<!-- Image Projet -->
<script>
    /* Fenêtre clique image projet */
    function openPopup(imageURL, windowName, width, height) {
        // Calculer les coordonnées du centre de l'écran
        const left = (screen.width - width) / 2;
        const top = (screen.height - height) / 2;

        // Ouvrir la fenêtre pop-up avec les paramètres spécifiés
        window.open(imageURL, windowName, `width=${width},height=${height},left=${left},top=${top}`);
    }
</script>

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