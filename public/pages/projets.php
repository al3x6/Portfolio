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
    <link rel="stylesheet" href="../css/styles_css.css" media="only screen and (min-width: 941px)">
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
            z-index: 10;
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

        /* Section projets cachée au départ */
        .projects-content {
            text-align: center;
            padding: 2rem;
        }
        /* Animation d'apparition du contenu projets */
        .projects-content.animate-in {
            animation: fadeIn 1s forwards;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .timeline {
            position: relative;
            padding: 2rem 0;
            max-width: 900px;
            margin: 0 auto;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            width: 4px;
            height: 100%;
            background: white;
            transform: translateX(-50%);
        }

        .timeline-event {
            position: relative;
            margin-bottom: 3rem;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .timeline-event:nth-child(even) {
            justify-content: flex-end;
        }

        .timeline-badge {
            background: #9333ea;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            position: absolute;
            left: 50%;
            transform: translate(-50%, 0);
        }

        .timeline-content {
            background: rgba(31, 41, 55, 0.9);
            padding: 1.5rem;
            border-radius: 0.75rem;
            width: 45%;
            color: white;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
        }

        .timeline-content:hover {
            background: #1f2937;
            transition: background 0.3s;
        }

        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }
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
        <!-- Exemple de contenu projets -->
        <div class="timeline">
            <div class="timeline-event">
                <div class="timeline-badge"></div>
                <div class="timeline-content">
                    <h3>Projet 1</h3>
                    <p>Description de mon projet 1.</p>
                </div>
            </div>
            <div class="timeline-event">
                <div class="timeline-badge"></div>
                <div class="timeline-content">
                    <h3>Projet 2</h3>
                    <p>Description de mon projet 2.</p>
                </div>
            </div>
            <!-- Ajoutez d'autres projets ici -->
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
    document.addEventListener("DOMContentLoaded", function() {
        // Sélectionner la section projet
        const projectSection = document.querySelector('.projet-section');

        // Créer le canvas pour la neige
        const snowCanvas = document.createElement('canvas');
        snowCanvas.id = 'snowCanvas';

        // Positionner le canvas en absolu à l'intérieur de la section
        snowCanvas.style.position = 'absolute';
        snowCanvas.style.top = '0';
        snowCanvas.style.left = '0';
        snowCanvas.style.width = '100%';
        snowCanvas.style.height = '100%';
        snowCanvas.style.pointerEvents = 'none';
        // Ajustez le z-index si nécessaire (en fonction de vos autres éléments)
        snowCanvas.style.zIndex = '9999';

        // Ajouter le canvas à la section projet
        projectSection.appendChild(snowCanvas);

        const snowCtx = snowCanvas.getContext('2d');

        // Fonction pour redimensionner le canvas en fonction de la section
        function resizeCanvas() {
            snowCanvas.width = projectSection.clientWidth;
            snowCanvas.height = projectSection.clientHeight;
        }
        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);

        // Création et animation des flocons de neige
        let snowflakes = [];

        function createSnowflake() {
            return {
                x: Math.random() * snowCanvas.width,
                y: Math.random() * snowCanvas.height,
                radius: Math.random() * 3 + 1,
                speedX: Math.random() * 2 - 1,
                speedY: Math.random() * 2 + 1
            };
        }

        // Initialisation de 100 flocons
        for (let i = 0; i < 100; i++) {
            snowflakes.push(createSnowflake());
        }

        function drawSnowflakes() {
            snowCtx.clearRect(0, 0, snowCanvas.width, snowCanvas.height);
            snowCtx.fillStyle = 'white';
            snowflakes.forEach(flake => {
                snowCtx.beginPath();
                snowCtx.arc(flake.x, flake.y, flake.radius, 0, Math.PI * 2);
                snowCtx.fill();
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