<?php
$page = 'Bienvenue sur mon Portfolio'
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titre de la page</title>
    <!-- Inclure des feuilles de style CSS ici -->
    <link rel="stylesheet" href="public/css/styles_css.css">
    <link rel="stylesheet" href="public/css/styles_mobile_css.css">

    <!-- API -->
    <script src="https://kit.fontawesome.com/c6abb0645d.js" crossorigin="anonymous"></script> <!-- Emoticone -->
    <script src="https://cdn.jsdelivr.net/npm/TagCloud@2.2.0/dist/TagCloud.min.js"></script>  <!-- Sphere -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> <!-- Swiper -->

</head>

<body>
<!-- Contenu de la page -->

<!-- Header -->
<?php include("includes/header.php"); ?>

<main>
    <!-- titre -->
    <?php include("includes/titre.php"); ?>


    <section class="hero">
        <div class="hero_left">
            <div>
                <h2>Alexis Araujo</h2>
                <p>Je suis un jeune étudiant en 3ème année d'un BUT informatique (licence) passionné par
                    l’informatique.</p>
            </div>
            <div class="div_button">
                <a href="#" class="button">Voir mon travail</a>
            </div>
        </div>
        <div class="hero_right">
            <img src="public/image/accueil.jpg" height="800" alt="Photo de profil">
            <? /*__DIR__*/ ?>
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
                <p>Je suis un étudiant passionné par le monde numérique, doté d'une expertise diversifiée dans plusieurs
                    domaines. De la création de sites web à la conception graphique, en passant par le développement
                    d'applications mobiles et la configuration de serveurs, je possède une palette de compétences
                    polyvalente et adaptable.
                </p>
                <p>Ma maîtrise de différents langages de programmation me permet de mener à bien une variété de projets,
                    tandis que mes connaissances théoriques en droit numérique, en management d'équipe et en gestion de
                    projet enrichissent ma compréhension globale du domaine.
                </p>
                <p>En explorant mon portfolio, vous découvrirez non seulement mes réalisations concrètes, mais aussi ma
                    capacité à relever de nouveaux défis avec créativité et détermination. Je suis constamment à la
                    recherche de nouvelles opportunités pour mettre mes compétences à profit et contribuer à des projets
                    innovants.
                </p>
                <p>
                    N'hésitez pas à me contacter pour discuter de collaborations potentielles ou pour en savoir plus sur
                    mon parcours et mes compétences, voir le bouton en dessous. Ensemble, nous pouvons créer quelque chose d'exceptionnel !
                </p>
            </div>
            <div class="div_button">
                <a href="#" class="button">En savoir +</a>
            </div>
        </div>
    </section>


    <section class="portfolio">
        <h2>Portfolio</h2>
        <div class="swiper carrousel-container">
            <div class="swiper-wrapper carrousel-wrapper">
                <div onclick="window.location.href='test.php';" class="swiper-slide projet">
                    <a href="#"
                       onclick="openPopup('public/image/simfast_accueil.png', 'Projet Simfast', 1000, 880); return false;">
                        <img src="public/image/simfast_accueil.png" alt="Projet SimFast">
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
    //API Sphère de compétences
    const myTags = ['PHP', 'Laravel', 'HTML', 'CSS', 'Bootstrap', 'JavaScript', 'TypeScript', 'MySQL', 'SQL', 'PL/SQL', 'Oracle Database', 'Phpmyadmin', 'JSON', 'XML', 'FIGMA', 'WordPress', 'Node.js', 'Express.js', 'Machine Learning', 'Python', 'C', 'Java', 'Jakarta EE', 'GIT', 'GitHub', 'GitLab', 'IntelliJ', 'ANGULAR', 'REACT', 'Apache', 'Bash', 'Droit informatique', 'Gestion de projet'];
    var tagCloud = TagCloud('.content', myTags, {

        // radius in px
        radius: 300,

        // animation speed
        // slow, normal, fast
        maxSpeed: 'fast',
        initSpeed: 'fast',

        // 0 = top
        // 90 = left
        // 135 = right-bottom
        direction: 135,

        // interact with cursor move on mouse out
        keep: true

    });
    // var colors = ['#34A853', '#FBBC05', '#4285F4', '#7FBC00', 'FFBA01', '01A6F0'];
    // var random_color = colors[Math.floor(Math.random() * colors.length)];
    // document.querySelector('.content').style.color = random_color;
    document.querySelector('.content').style.color = "#333";
</script>

<script>
    //API Swipper
    document.addEventListener('DOMContentLoaded', function () {
        // Initialise Swiper
        var mySwiper = new Swiper('.carrousel-container', {
            // Paramètres optionnels
            loop: true, // Activer le mode boucle
            navigation: {
                nextEl: '.next-btn', // Sélecteur du bouton suivant
                prevEl: '.prec-btn', // Sélecteur du bouton précédent
            },
            slidesPerView: 6, // Nombre de diapositives à afficher
            spaceBetween: 80, // Espacement entre les diapositives en pixels
            // Ajoutez d'autres options
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
<script>
    /* Fenêtre image */
    function openPopup(imageURL, windowName, width, height) {
        // Calculer les coordonnées du centre de l'écran
        const left = (screen.width - width) / 2;
        const top = (screen.height - height) / 2;

        // Ouvrir la fenêtre pop-up avec les paramètres spécifiés
        window.open(imageURL, windowName, `width=${width},height=${height},left=${left},top=${top}`);
    }
</script>

<script>
    // Button retour en haut
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
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>

<script>
    /* A faire */
    window.addEventListener('scroll', function () {
        const parallax = document.querySelector('.parallax');
        let scrollPosition = window.pageYOffset;
        parallax.style.backgroundPositionY = scrollPosition * 0.7 + 'px';
    });
</script>
</body>
</html>