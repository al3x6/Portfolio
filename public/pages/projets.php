<?php
$page = 'Mes Projets';
$titre = 'Projets';
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

    <style>
        /* Styles de la section d'accueil */
        .projet-section {
            min-height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('https://source.unsplash.com/1600x900/?universe,space') no-repeat center center;
            background-size: cover;
            position: relative;
            text-align: center;
            animation: fadeIn 3s ease-in-out;
        }
        .projet-section::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #004080;
        }
        .projet-section .projet-content {
            position: relative;
            text-align: center;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.8);
            z-index: 2;
        }
        .text-6xl {
            font-size: 4rem;
            font-weight: 800;
        }
        .text-xl {
            font-size: 1.25rem;
        }
        .mb-4 {
            margin-bottom: 1rem;
        }
        .mb-8 {
            margin-bottom: 2rem;
        }
        .magic-button {
            background: linear-gradient(90deg, #3b82f6, #9333ea);
            padding: 12px 24px;
            font-size: 18px;
            color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s;
            text-transform: uppercase;
            font-weight: bold;
        }
        .magic-button:hover {
            transform: scale(1.1);
            box-shadow: 0px 4px 20px rgba(147, 51, 234, 0.5);
        }

        /* Animation de disparition de la section d'accueil */
        .projet-section.animate-out {
            animation: fadeOutUp 1s forwards;
        }
        @keyframes fadeOutUp {
            from {
                opacity: 1;
                transform: translateY(0);
            }
            to {
                opacity: 0;
                transform: translateY(-50px);
            }
        }
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        /*//////////////////////////////////////////////// */

        /* Section projets cachée au départ */
        .projects-content {
            padding: 2rem;
        }
        .projects-content h2 {
            text-align: center;
            font-size: 50px;
        }

        /* Animation d'apparition du contenu projets */
        .projects-content.animate-in {
            animation: fadeIn 1s forwards;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(0);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .projects-content .timeline {
            position: relative;
            padding: 2rem 0;
            margin: 0 auto;
        }

        /* Animation d'apparition du contenu timeline */
        .projects-content  .timeline.animate-in {
            animation: fadetimeline 1s forwards;
        }
        @keyframes fadetimeline {
            from {
                opacity: 0;
                transform: translateY(0);
            }
            to {
                opacity: 1;
                transform: translateY(-50px);
            }
        }

        .projects-content .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            width: 4px;
            height: 90%;
            background: #1f2937;
            transform: translateX(-50%);
        }

        .projects-content .timeline .timeline-event {
            position: relative;
            margin-bottom: 2rem;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .projects-content .timeline .timeline-event:nth-child(even) {
            justify-content: flex-end;
        }

        .projects-content .timeline .timeline-event .timeline-badge {
            background: #9333ea;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            position: absolute;
            left: 50%;
            transform: translate(-50%, 0);
        }

        /*//////////////////////////////////////////////// */

        .projects-content .timeline .timeline-event .timeline-content {
            background: rgba(31, 41, 55, 0.9);
            padding: 1rem;
            border-radius: 1rem;
            width: 45%;
            color: white;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
        }

        .projects-content .timeline .timeline-event .timeline-content:hover {
            background: #1f2937;
            transition: background 0.3s;
        }

        .projects-content .timeline .timeline-event .timeline-content .project-header {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .projects-content .timeline .timeline-event .timeline-content .project-header h3 {
            font-size: 1.5rem;
            color: #ffffff;
        }

        .projects-content .timeline .timeline-event .timeline-content .project-header .project-date {
            font-size: 0.9rem;
            color: #e3dede;
        }

        .projects-content .timeline .timeline-event .timeline-content .project-description {
            font-size: 1.3rem;
            color: #f1f1f1;
            margin-top: 0;
            margin-left: 1rem;
            margin-bottom: 0.5rem;
        }

        /* project info*/
        .projects-content .timeline .timeline-event .timeline-content .project-info {
            margin-top : 1rem;
            display: flex;
            align-items: center;
        }
        .projects-content .timeline .timeline-event .timeline-content .project-info .img-left{
            width: 40%;
            display: flex;
            justify-content: center;
        }
        .projects-content .timeline .timeline-event .timeline-content .project-info .img-left img{
            max-width: 100%;
            height: auto;
        }
        .projects-content .timeline .timeline-event .timeline-content .project-info .info-right{
            width: 60%;
            padding : 1rem;
        }
        .projects-content .timeline .timeline-event .timeline-content .project-info .info-right .info-right-top {
            text-align : center;
        }
        .projects-content .timeline .timeline-event .timeline-content .project-info .info-right .info-right-top p{
            font-size : 1.1rem;
        }
        .projects-content .timeline .timeline-event .timeline-content .project-info .info-right .info-right-bottom {
            display: flex;
            justify-content: space-around;
            width: 100%;
        }

        .projects-content .timeline .timeline-event .timeline-content .project-info .info-right .info-right-bottom p, .projects-content .timeline .timeline-event .timeline-content .project-info .info-right .info-right-bottom div {
            padding: 0.5rem;
            flex: 1;
        }
        .projects-content .timeline .timeline-event .timeline-content .project-info .info-right .info-right-bottom ul {
            padding-left: 1rem;
            margin: 0;
        }

        .projects-content .timeline .timeline-event .timeline-content .project-info .info-right .info-right-bottom ul li {
            margin-bottom: 0.5rem;
        }

        /* *** */
    </style>
</head>

<!-- Contenu de la page -->
<body>

<!-- Header -->
<?php include("../../includes/header.php"); ?>

<main>

    <section class="projet-section">
        <canvas class="particles" id="particleCanvas"></canvas>
        <div class="projet-content">
            <h1 class="text-6xl font-bold mb-4">Bienvenue sur ma page de projets</h1>
            <p class="text-xl mb-8">Explorez mes créations et innovations !</p>
            <button class="magic-button">Découvrir</button>
        </div>
    </section>
    <!--<? //php include("../../includes/titre.php"); ?>
    <h2>En développement .....</h2>-->

    <!-- Section des projets (initialement cachée) -->
    <section class="projects-content" id="projectsContent" style="display: none; opacity: 0;">
        <h2>Mes Projets</h2>
        <p>Page en développement</p>

        <!-- Exemple de contenu projets -->
        <div class="timeline">
            <div class="timeline-event">
                <div class="timeline-badge"></div>
                <div class="timeline-content">
                    <div class="project-header">
                        <h3>Projet Portfolio</h3>
                        <p class="project-date">Janvier 2023</p>
                    </div>
                    <div>
                        <p class="project-description">
                            Le voici !!! Un Portfolio créé de A à Z par moi où je me présente.
                        </p>
                    </div>
                    <div class="project-info">
                        <div class="img-left">
                            <img src="../image/Projet/p1/portfolio_acceuil.webp" alt="Projet Portfolio" title="Projet Portfolio">
                        </div>
                        <div class="info-right">
                            <div class="info-right-top">
                                <h4>Introduction</h4>
                                <p> Dans le cadre d'un projet personnelle, j'ai voulu mettre en avant mes compétences sur un site web réalisé par moi de A à Z.</p>
                            </div>
                            <div class="info-right-bottom">
                                <p><strong>Équipe :</strong><br> 1 personne</p>
                                <div><p><strong>Environnement :</strong></p>
                                    <ul>
                                        <li>Développement dans mon local</li>
                                        <li>Transfert de fichier</li>
                                        <li>Utilisation de Xampp (Apache)</li>
                                    </ul>
                                </div>
                                <p><strong>Délai :</strong><br> 2 ans</p>
                                <!--<p><strong>Technologies :</strong><br> HTML, CSS, JavaScript</p>-->
                            </div>
                        </div>
                    </div>

                    <div class="project-details">
                        <h4>Tâches réalisées</h4>
                        <ul>
                            <li>Gestion de projet</li>
                            <li>Développement du site Web</li>
                            <li>Mise en place du serveur LAMP</li>
                            <li>Rédaction de rapport</li>
                        </ul>
                        <h4>Modules intégrés</h4>
                        <ul>
                            <li>Calcul des “n” nombres premiers</li>
                            <li>Calcul d’amortissement</li>
                            <li>Calcul probabilité</li>
                            <li>Chiffrement (Crypto)</li>
                        </ul>
                        <h4>Événements notables</h4>
                        <ul>
                            <li>Départ d’un développeur</li>
                            <li>Ajout de modules supplémentaires</li>
                        </ul>
                        <h4>Compte Rendu</h4>
                        <ul>
                            <li>Retour positif du client</li>
                            <li>Rendu des livrables et du projet dans les temps</li>
                            <li>Amélioration possible : Développeur plus de module de calculs</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="timeline-event">
                <div class="timeline-badge"></div>
                <div class="timeline-content">
                    <h3>Projet NIDS</h3>
                    <p>Création d'un système de détection d'intrusion réseau pour analyser le trafic et détecter des activités suspectes.</p>
                </div>
            </div>
            <div class="timeline-event">
                <div class="timeline-badge"></div>
                <div class="timeline-content">
                    <h3>Projet NIDS</h3>
                    <p>Création d'un système de détection d'intrusion réseau pour analyser le trafic et détecter des activités suspectes.</p>
                </div>
            </div>

            <div class="timeline-event">
                <div class="timeline-badge"></div>
                <div class="timeline-content">
                    <h3>Projet SIMFAST</h3>
                    <p>Création d'un site web hebergé sur Raspberry Pi avec des modules de calcul (Probabilité, chiffrement RC4).</p>
                </div>
            </div>

            <div class="timeline-event">
                <div class="timeline-badge"></div>
                <div class="timeline-content">
                    <h3>Projet Arduino Badgeuse</h3>
                    <p>Création d'un système de contrôle d'accès basé sur Arduino, permettant de gérer l'accès à d'un bâtiment via des badges RFID.</p>
                </div>
            </div>

            <div class="timeline-event">
                <div class="timeline-badge"></div>
                <div class="timeline-content">
                    <h3>Projet DNS</h3>
                    <p>Création de site Web sur un serveur Apache et Nginx sur machine virtuelle et en intégrant un serveur de DNS.</p>
                </div>
            </div>

            <div class="timeline-event">
                <div class="timeline-badge"></div>
                <div class="timeline-content">
                    <h3>Projet Réseau</h3>
                    <p>Création d'un réseau d'entreprise.</p>
                </div>
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
            <button class="contact_valide" type="submit"><i class="fas fa-check"></i> Envoyer</button>
        </form>
        <button onclick="RetourHaut()" id="retour_haut_btn" title="Retour en haut de la page">↑</button>
    </section>

</main>

<!-- Footer -->
<?php include("../../includes/footer.php"); ?>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const projectSection = document.querySelector('.projet-section');
        const projetContent = document.querySelector('.projet-content');

        // Créez le canvas et configurez ses styles
        const snowCanvas = document.createElement('canvas');
        snowCanvas.id = 'snowCanvas';
        snowCanvas.style.position = 'absolute';
        snowCanvas.style.top = '0';
        snowCanvas.style.left = '0';
        snowCanvas.style.width = '100%';
        snowCanvas.style.height = '100%';
        snowCanvas.style.pointerEvents = 'none';
        snowCanvas.style.zIndex = '1'; // Devant le background bleu
        projectSection.appendChild(snowCanvas);

        const snowCtx = snowCanvas.getContext('2d');

        function resizeCanvas() {
            snowCanvas.width = projectSection.clientWidth;
            snowCanvas.height = projectSection.clientHeight;
        }

        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);

        const words = ["Portfolio", "Réseaux", "Cyber", "IA", "Système", 'Web', 'Logiciel', 'Développement', 'BD'];
        let snowflakes = [];

        function createSnowflake() {
            return {
                x: Math.random() * snowCanvas.width,
                y: Math.random() * snowCanvas.height,
                text: words[Math.floor(Math.random() * words.length)],
                speedX: Math.random() * 2 - 1,
                speedY: Math.random() * 2 + 1,
                fontSize: Math.random() * 12 + 18
            };
        }

        for (let i = 0; i < 40; i++) {
            snowflakes.push(createSnowflake());
        }

        function drawSnowflakes() {
            snowCtx.clearRect(0, 0, snowCanvas.width, snowCanvas.height);
            snowflakes.forEach(flake => {
                snowCtx.font = `${flake.fontSize}px Arial`;
                snowCtx.fillStyle = "white";
                snowCtx.fillText(flake.text, flake.x, flake.y);
            });
        }

        function updateSnowflakes() {
            snowflakes.forEach(flake => {
                flake.x += flake.speedX;
                flake.y += flake.speedY;
                if (flake.y > snowCanvas.height) {
                    flake.y = 0;
                    flake.x = Math.random() * snowCanvas.width;
                }
                if (flake.x > snowCanvas.width || flake.x < 0) {
                    flake.x = Math.random() * snowCanvas.width;
                }
            });
        }

        function animateSnow() {
            drawSnowflakes();
            updateSnowflakes();
            requestAnimationFrame(animateSnow);
        }

        animateSnow();
    });
</script>

<!-- Script pour déclencher l'animation au clic sur "Découvrir" -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const discoverButton = document.querySelector('.magic-button');
        const projetSection = document.querySelector('.projet-section');
        const projectsContent = document.getElementById('projectsContent');

        discoverButton.addEventListener('click', function() {
            // Lancer l'animation de disparition de la section d'accueil
            projetSection.classList.add('animate-out');

            // Une fois l'animation terminée, masquer la section d'accueil et afficher le contenu projets
            setTimeout(function() {
                projetSection.style.display = 'none';
                projectsContent.style.display = 'block';
                // Forcer le recalcul pour l'animation (si nécessaire)
                projectsContent.offsetWidth;
                projectsContent.classList.add('animate-in');
            }, 1000); // délai en ms = durée de l'animation de fadeOutUp
        });
    });
</script>

</body>
</html>