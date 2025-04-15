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

    <style>
        .section_book {
            padding: 2rem;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .book_container {
            width: 60%; /* Augmenter la largeur */
            max-width: 1000px; /* Augmenter la largeur maximale */
            height: 500px; /* Augmenter la hauteur */
            perspective: 1500px;
            margin: 2rem 2rem 1rem 2rem;
            position: relative;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
            background: #f0e6e6; /* Couleur de fond pour le livre */
        }

        .book {
            width: 100%;
            height: 100%;
            position: relative;
            display: flex;
            background: #eee;
            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.1);
            transform-style: preserve-3d;
        }

        .page {
            width: 48%; /* Réduction de la largeur pour simuler les pages qui dépassent */
            height: 95%; /* Réduction de la hauteur pour simuler les pages qui dépassent */
            background: white;
            position: absolute;
            backface-visibility: hidden;
            transition: transform 0.6s ease-in-out;
            transform-style: preserve-3d;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            border: 1px solid #ddd; /* Ajout d'une bordure pour délimiter les pages */
        }

        .left_page {
            left: 2%; /* Décalage vers la gauche pour simuler les pages qui dépassent */
            transform-origin: right;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.2); /* Ajout une ombre à gauche */
        }

        .right_page {
            right: 2%; /* Décalage vers la droite pour simuler les pages qui dépassent */
            transform-origin: left;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2); /* Ajouter une ombre à droite */
        }

        .page_content {
            padding: 10px;
            font-size: 1rem; /* Augmenter la taille de la police */
            color: #333;
            line-height: 1.5;
            backface-visibility: hidden;
        }

        .video_container {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%; /* ratio : 16:9  */
            margin: 20px 0;
            overflow: hidden;
            border-radius: 5px;
        }

        .video_container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
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

        .page_number {
            position: absolute;
            bottom: 10px;
            right: 10px;
            font-size: 1rem; /* Augmenter la taille de la police */
            color: #777;
            font-weight: bold;
        }

        .navigation {
            display: flex;
            justify-content: space-evenly;
            width: 70%;
        }

        .nav_btn {
            background: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
        }

        .nav_btn:hover {
            background: #555;
        }

        /* Styles pour les écrans mobiles */
        @media (max-width: 940px) {
            .book_container {
                width: 90%;
                max-width: 600px;
                height: 450px;
            }

            .page {
                width: 90%;
                /*height: 90%;*/
                left: 5%;
                right: auto;
            }

            .left_page, .right_page {
                left: 5%;
                right: auto;
                box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2); /* Ombre à droite pour les pages mobiles */
            }

            .navigation {
                width: 90%;
            }
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

    <section class="section_book">
        <div class="book_container">
            <div class="book">
                <div class="page left_page" id="page1">
                    <div class="page_content">
                        <h2>Chapitre 1 : Pourquoi me choisir ?</h2>
                        <div class="video_container">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/K1j5Yut8jjM" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <p>Avec mon parcours, je peux, ou pourrais, travailler dans 6 des 10 métiers qui seront les plus recherchés d'ici 2030.</p>
                        <p></p>
                    </div>
                    <div class="page_number">1</div>
                </div>
                <div class="page right_page" id="page2">
                    <div class="page_content">
                        <h2>Chapitre 2 : La Cybersécurité pour Tous</h2>
                        <p>Dans un monde de plus en plus connecté, la cybersécurité est devenue une préoccupation majeure pour les individus et les entreprises. Protéger vos données personnelles et professionnelles est essentiel pour éviter les cyberattaques et les violations de données.</p>
                    </div>
                    <div class="page_number">2</div>
                </div>
                <div class="page left_page" id="page3">
                    <div class="page_content">
                        <h2>Chapitre 3 : Sécuriser vos Appareils</h2>
                        <p>De votre ordinateur à votre smartphone, chaque appareil connecté à Internet doit être sécurisé. Découvrez les meilleures pratiques pour protéger vos appareils.</p>
                        <a href="https://cyber.gouv.fr/bonnes-pratiques-protegez-vous">ICI</a>
                    </div>
                    <div class="page_number">3</div>
                </div>
                <div class="page right_page" id="page4">
                    <div class="page_content">
                        <h2>Chapitre 4 : La Cybersécurité</h2>
                        <p>La cybersécurité est un domaine en constante évolution. Restez informé et adoptez les meilleures pratiques pour protéger vos données et vos appareils.</p>
                        <p>Pour en savoir plus, visitez :</p>
                        <ul>
                            <li><a href="https://www.cyber.gouv.fr">Cyber.gouv.fr</a></li>
                            <li><a href="https://www.cnil.fr">CNIL</a></li>
                            <li><a href="https://www.anssi.fr">ANSSI</a></li>
                        </ul>
                    </div>
                    <div class="page_number">4</div>
                </div>
            </div>
        </div>
        <div class="navigation">
            <button class="nav_btn" onclick="prevPage()">Page Précédente</button>
            <button class="nav_btn" onclick="nextPage()">Page Suivante</button>
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

<!-- Livre -->
<script>
    const pages = document.querySelectorAll('.page');
    let currentPage = 0;

    function updateBook() {
        pages.forEach((page, index) => {
            if (window.innerWidth >= 941) {
                if (index === currentPage || index === currentPage + 1) {
                    page.style.transform = 'rotateY(0deg)';
                } else if (index < currentPage) {
                    page.style.transform = 'rotateY(-180deg)';
                } else {
                    page.style.transform = 'rotateY(180deg)';
                }
            } else {
                if (index === currentPage) {
                    page.style.transform = 'rotateY(0deg)';
                } else if (index < currentPage) {
                    page.style.transform = 'rotateY(-180deg)';
                } else {
                    page.style.transform = 'rotateY(180deg)';
                }
            }
        });
    }

    function nextPage() {
        if (window.innerWidth >= 941) {
            if (currentPage < pages.length - 2) {
                const nextPage = pages[currentPage + 1];
                if (nextPage) {
                    nextPage.style.transition = 'transform 0.6s ease-in-out';
                    nextPage.style.transform = 'rotateY(-180deg)';
                    setTimeout(() => {
                        currentPage += 2;
                        updateBook();
                        const nextNextPage = pages[currentPage + 1];
                        if (nextNextPage) {
                            nextNextPage.style.transition = 'none';
                            nextNextPage.style.transform = 'rotateY(0deg)';
                        }
                    }, 600);
                }
            }
        } else {
            if (currentPage < pages.length - 1) {
                const nextPage = pages[currentPage + 1];
                if (nextPage) {
                    nextPage.style.transition = 'transform 0.6s ease-in-out';
                    nextPage.style.transform = 'rotateY(-180deg)';
                    setTimeout(() => {
                        currentPage += 1;
                        updateBook();
                    }, 600);
                }
            }
        }
    }

    function prevPage() {
        if (window.innerWidth >= 941) {
            if (currentPage > 0) {
                const prevPage = pages[currentPage - 1];
                if (prevPage) {
                    prevPage.style.transition = 'transform 0.6s ease-in-out';
                    prevPage.style.transform = 'rotateY(0deg)';
                    setTimeout(() => {
                        currentPage -= 2;
                        updateBook();
                        const prevPrevPage = pages[currentPage - 1];
                        if (prevPrevPage) {
                            prevPrevPage.style.transition = 'none';
                            prevPrevPage.style.transform = 'rotateY(-180deg)';
                        }
                    }, 600);
                }
            }
        } else {
            if (currentPage > 0) {
                const prevPage = pages[currentPage - 1];
                if (prevPage) {
                    prevPage.style.transition = 'transform 0.6s ease-in-out';
                    prevPage.style.transform = 'rotateY(0deg)';
                    setTimeout(() => {
                        currentPage -= 1;
                        updateBook();
                    }, 600);
                }
            }
        }
    }

    updateBook();
</script>

</body>
</html>