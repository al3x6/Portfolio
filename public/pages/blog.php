<?php
$page = 'Mon Blog';
$titre = 'Blog';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=6, user-scalable=0">-->
    <meta name="description" content="Sur cette page j'ai créé un petit Blog sur moi même.">
    <title><?= $titre ?></title>

    <link rel="icon" href="/public/image/icone/favicon-48x48.webp" type="image/x-icon">

    <!-- Inclure des feuilles de style CSS ici -->
    <link rel="stylesheet" href="/public/css/styles_css_header.css">
    <link rel="stylesheet" href="../css/styles_css.css" media="only screen and (min-width: 941px)">
    <link rel="stylesheet" href="../css/styles_mobile.css" media="only screen and (max-width: 940px)">

    <!-- Emeticones -->
    <script rel="preconnect" src="https://kit.fontawesome.com/c6abb0645d.js" crossorigin="anonymous"></script>

    <!-- PARTIE INSTA
    <script async src="//www.instagram.com/embed.js"></script>-->

    <style>
        .book-section {
            padding: 2rem;
            display: flex;
            justify-content: center;
        }

        .book-container {
            width: 80%;
            max-width: 800px;
            height: 400px;
            perspective: 1500px;
            margin: 2rem auto;
            position: relative;
        }

        .book {
            width: 100%;
            height: 100%;
            position: relative;
            display: flex;
            background: #eee;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transform-style: preserve-3d;
        }

        .page {
            width: 50%;
            height: 100%;
            background: white;
            position: absolute;
            backface-visibility: hidden;
            transition: transform 0.6s ease-in-out;
            transform-style: preserve-3d;
        }

        .left-page {
            left: 0;
            transform-origin: right;
        }

        .right-page {
            right: 0;
            transform-origin: left;
        }

        .page-content {
            padding: 1.5rem;
            font-size: 0.9rem;
            color: #333;
            line-height: 1.5;
            backface-visibility: hidden;
        }

        .page:nth-child(odd) {
            background: #fafafa;
        }

        .page:nth-child(1), .page:nth-child(2) {
            z-index: 3;
        }

        .page:nth-child(3), .page:nth-child(4) {
            z-index: 2;
        }

        .navigation {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-top: 20px;
        }

        .nav-btn {
            background: #764ba2;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
        }

        .nav-btn:hover {
            background: #5b3187;
        }

    </style>
</head>

<!-- Contenu de la page -->
<body>

<!-- Header -->
<?php include("../../includes/header.php"); ?>

<main>
    <!-- titre -->
    <?php include("../../includes/titre.php"); ?>
    <h2>En développement .....</h2>

    <section class="youtube-short">
        <h2>Mon Short YouTube</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/K1j5Yut8jjM" frameborder="0" allowfullscreen></iframe>
    </section>


    <section class="book-section">
        <div class="book-container">
            <div class="book">
                <div class="page left-page" id="page1">
                    <div class="page-content">
                        <h2>Bienvenue sur mon Blog</h2>
                        <p>Explorez des articles inspirants sur divers thèmes tels que les voyages, la productivité, et la cuisine.</p>
                        <p>Tournez les pages pour en découvrir davantage !</p>
                    </div>
                </div>
                <div class="page right-page" id="page2">
                    <div class="page-content">
                        <h2>Voyage au bout du monde</h2>
                        <p>Partez à la découverte des paysages magnifiques et des cultures enrichissantes...</p>
                    </div>
                </div>
                <div class="page left-page" id="page3">
                    <div class="page-content">
                        <h2>Les secrets de la productivité</h2>
                        <p>Apprenez comment rester concentré et motivé dans un monde plein de distractions.</p>
                    </div>
                </div>
                <div class="page right-page" id="page4">
                    <div class="page-content">
                        <h2>Cuisine : Recettes favorites</h2>
                        <p>Découvrez des recettes simples et savoureuses que j’aime préparer.</p>
                    </div>
                </div>
            </div>
            <div class="navigation">
                <button class="nav-btn" onclick="prevPage()">Page Précédente</button>
                <button class="nav-btn" onclick="nextPage()">Page Suivante</button>
            </div>
        </div>
    </section>

    <!-- PARTIE INSTAGRAM -->
    <!--<section class="hero">
        <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/DFa9QALClwL/?igsh=MTFrY2QxcDN1ODM0" data-instgrm-version="14" style="max-width: 20px; width: 100%;"></blockquote>
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

<!-- Livre -->
<script>
    const pages = document.querySelectorAll('.page');
    let currentPage = 0;

    function updateBook() {
        pages.forEach((page, index) => {
            if (index === currentPage || index === currentPage + 1) {
                page.style.transform = 'rotateY(0deg)';
            } else if (index < currentPage) {
                page.style.transform = 'rotateY(-180deg)';
            } else {
                page.style.transform = 'rotateY(180deg)';
            }
        });
    }

    function nextPage() {
        if (currentPage < pages.length - 2) {
            pages[currentPage + 1].style.transition = 'transform 0.6s ease-in-out';
            pages[currentPage + 1].style.transform = 'rotateY(-180deg)';
            setTimeout(() => {
                currentPage += 2;
                updateBook();
                pages[currentPage + 1].style.transition = 'none';
                pages[currentPage + 1].style.transform = 'rotateY(0deg)';
            }, 600);
        }
    }

    function prevPage() {
        if (currentPage > 0) {
            pages[currentPage - 1].style.transition = 'transform 0.6s ease-in-out';
            pages[currentPage - 1].style.transform = 'rotateY(0deg)';
            setTimeout(() => {
                currentPage -= 2;
                updateBook();
                pages[currentPage - 1].style.transition = 'none';
                pages[currentPage - 1].style.transform = 'rotateY(-180deg)';
            }, 600);
        }
    }

    updateBook();
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

<!-- Menu Burgers -->
<script>
    // Menu Burgers
    document.addEventListener('DOMContentLoaded', function() {
        const burgerMenu = document.querySelector('.burger');
        const navLinks = document.querySelector('.navbar-links');

        burgerMenu.addEventListener('click', function() {
            navLinks.classList.toggle('active');
            if (navLinks.classList.contains('active')) {
                setTimeout(() => {
                    navLinks.classList.add('show');
                }, 10); // Add a slight delay to ensure the active class is applied first
            } else {
                navLinks.classList.remove('show');
            }
        });
    });
</script>

</body>
</html>