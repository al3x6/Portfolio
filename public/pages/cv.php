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
    <link rel="stylesheet" href="../css/styles_css_css_css.css" media="only screen and (min-width: 941px)">
    <link rel="stylesheet" href="../css/styles_mobile.css" media="only screen and (max-width: 940px)">

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
                <a href="/public/image/cv/CV_Alexis_ARAUJO01.pdf" class="button" download>Télécharger mon CV</a>
            </div>
        </div>
        <div class="hero_right">
            <img src="/public/image/cv/CV_Alexis_ARAUJO1.webp" width="700" height="990" alt="Photo de mon CV">
            <?php /*__DIR__*/ ?>
        </div>
    </section>
    <section class="mini_menu">
        <h2>Sommaire</h2>
        <!-- Mini Menu -->
        <nav class="mini-menu">
            <ul>
                <li><a href="#profil" class="button">Profil</a></li>
                <li><a href="#formations" class="button">Formations</a></li>
                <li><a href="#competences" class="button">Compétences</a></li>
                <!--<li><a href="#outils" class="button">Outils</a></li>-->
                <li><a href="#experiences" class="button">Expériences</a></li>
                <li><a href="#suivi" class="button">Suivi</a></li>
                <li><a href="#langues" class="button">Langues</a></li>
                <li><a href="#centres_interets" class="button">Centres d'intérêts</a></li>
                <li><a href="#projets" class="button">Projets</a></li>
            </ul>
        </nav>
    </section>

    <section id="profil" class="profil">
        <h2><i class="fas fa-user"></i> Profil</h2>
        <div class="profil_container">
            <div class="profil_left">
                <p><b>"Enthousiaste, curieux et doté d'un fort esprit d'équipe,<br> je combine autonomie et joie de vivre pour apporter des solutions <br>innovantes et efficaces qui répondent aux exigences de votre entreprise."</b></p>
            </div>

            <div class="profil_right">
                <p>Bien sûr c'est ce qu'il a marqué sur mon CV. Mais je suis plus que ça. Plus qu'un étudiant en informatique, je suis une personne sociable et motivée par l'envie de toujours apprendre. Mon parcours m'a permis de forger une expertise technique tout en restant très accessible. J'aime échanger, j'inspire confiance et joie de vivre, une qualité qui me permet de bien m'intégrer dans une équipe et de favoriser un environnement de travail collaboratif.</p>
            </div>
        </div>
    </section>

    <section id="formations" class="formations">
        <h2><i class="fas fa-graduation-cap"></i> Formations</h2>
        <table class="formations_table">
            <tr>
                <td class="logo_cell">
                    <a href="https://www.oteria.fr/"><img src="../image/cv/oteria_logo.webp" alt="Logo Oteria Cyber School" title="Site Web Oteria Cyber School"></a>
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
                    <a href="https://www.iut-velizy-rambouillet.uvsq.fr/"><img src="../image/cv/velizy_logo.webp" alt="Logo Iut de Vélizy" title="Site Web Iut de Vélizy"></a>
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
                    <img src="../image/cv/lyceejulesferry_logo.webp" alt="Logo du Lycée Jules Ferry">
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

    <section id="competences" class="competences">
        <h2><i class="fas fa-star"></i> Compétences</h2>

        <!-- Mini Menu -->
        <nav class="mini-menu">
            <ul>
                <li><a href="#systèmes-et-réseaux" class="button">Systèmes et Réseaux</a></li>
                <li><a href="#cyber" class="button"> Cybersécurité</a></li>
                <li><a href="#web" class="button">Web et Mobile</a></li>
                <li><a href="#bd" class="button">Base de données</a></li>
                <li><a href="#ml" class="button">Machine Learning (IA)</a></li>
                <li><a href="#devlogiciel" class="button">Développement Logiciel</a></li>
                <li><a href="#gestionprojet" class="button">Gestion de projet</a></li>
                <li><a href="#qualitecode" class="button">Qualité de code</a></li>
                <li><a href="#droit" class="button">Droit de l'informatique</a></li>
            </ul>
        </nav>

        <div class="competences_container">
            <h3 id="systèmes-et-réseaux"><i class="fas fa-network-wired"></i> Systèmes et Réseaux</h3>
            <p>Depuis plus de 3 ans, je travaille dans les systèmes et réseaux, ce qui m'a permis d'acquérir une expérience solide pour mener à bien des projets de grande envergure. Le réseau est essentiel pour la cybersécurité, et je suis passionné par l'optimisation des systèmes pour assurer leur sécurité et leur performance.</p>
            <div class="sous_competences_container">
                <h4>Langages</h4>
                <p>Je connais une variété de langage pour le réseaux</p>

                <div class="languages">
                    <img src="../image/cv/python_logo.webp" alt="Python" title="Python logo">
                    <img src="../image/cv/c_logo.webp" alt="C" title="C logo">
                    <img src="../image/cv/bash_logo.webp" alt="Bash" title="Bash logo">
                </div>
            </div>

            <div class="sous_competences_container">
                <h4>Administration Réseaux</h4>
                <p>J'ai une forte expérience dans l'administration de réseaux, où j'assure la configuration, la gestion et la sécurité des réseaux. J'ai travaillé sur des projets de mise en place de réseaux locaux.</p>
                <ul>
                    <li>Linux (CentOS, Debian, Ubuntu, Kali Linux)</li>
                    <li>Connexion SSH pour l'accès distant sécurisé</li>
                    <li>Tunnel sécurisé pour la protection des données</li>
                    <li>Installation et configuration de serveur Apache de type LAMP pour héberger des applications web</li>
                </ul>

                <div class="languages">
                    <img src="../image/cv/linux_logo.webp" alt="Linux" title="Linux logo">
                    <img src="../image/cv/centos_logo.webp" alt="CentOS" title="CentOS logo">
                    <img src="../image/cv/debian_logo.webp" alt="Debian" title="Debian logo">
                    <img src="../image/cv/ubuntu_logo.webp" alt="Ubuntu" title="Ubuntu logo">
                    <img src="../image/cv/kalilinux_logo.webp" alt="Kali Linux" title="Kali Linux logo">
                    <img src="../image/cv/apache_logo.webp" alt="Apache" title="Apache logo">
                </div>
            </div>

            <div class="sous_competences_container">
                <h4>Architecture Réseaux</h4>
                <p>J'ai une compréhension approfondie des architectures réseau, y compris la conception et la mise en oeuvre de réseaux locaux et étendus. J'ai participé à la configuration de systèmes IP et à l'installation de systèmes dans des environnements.</p>
                <ul>
                    <li>LAN : conception et configuration de réseaux locaux</li>
                    <li>WAN : interconnexion de réseaux sur de grandes distances</li>
                    <li>Analyse et dépannage des réseaux à l'aide de Cisco Packet Tracer</li> <!-- gns3 -->
                    <li>Programmation des commutateurs (switch) et routeurs Cisco via CLI (IOS, IOS-XE)</li>
                    <li>Configuration VLAN, routage, et sécurité des interfaces</li>
                    <li>Paramétrage IP pour assurer une communication efficace</li>
                    <li>Installations système et déploiement dans des environnements divers</li>
                </ul>

                <div class="languages">
                    <img src="../image/cv/vmware_logo.webp" alt="VMware" title="VMware logo">
                    <img src="../image/cv/vbox_logo.webp" alt="Virtual Box" title="Virtual Box logo">
                    <img src="../image/cv/cisco_logo.webp" alt="Cisco" title="Cisco logo">
                </div>
            </div>

            <div class="sous_competences_container">
                <h4>Outils de réseau</h4>
                <p></p>
                <div class="languages">
                    <img src="../image/cv/powershell_logo.webp" alt="Powershell" title="Powershell logo">
                    <img src="../image/cv/bash_logo.webp" alt="Bash" title="Bash logo">
                    <img src="../image/cv/vscode_logo.webp" alt="Visual Studio Code" title="Visual Studio Code logo">
                    <img src="../image/cv/pycharm_logo.webp" alt="PyCharm" title="Pycharm logo">
                    <img src="../image/cv/nano_logo.webp" alt="Nano" title="Nano logo">
                    <img src="../image/cv/gedit_logo.webp" alt="Gedit" title="Gedit logo">
                    <img src="../image/cv/winscp_logo.webp" alt="WinSCP" title="WinSCP logo">
                    <img src="../image/cv/putty_logo.webp" alt="PuTTY" title="PuTTY logo">
                    <img src="../image/cv/packettracer_logo.webp" alt="Cisco Packet Tracer" title="Cisco Packet Tracer logo">
                </div>
            </div>

            <div class="sous_competences_container">
                <h4>Administration bas niveau</h4>
                <p>Je suis compétent dans la gestion des composants matériels et des systèmes d'exploitation. Mon expérience inclut l'optimisation des performances du système et le dépannage des problèmes matériels.</p>
                <ul>
                    <li>Gestion du noyau Linux pour des performances optimisées</li>
                    <li>Gestion de la mémoire et des partitions</li>
                    <li>Création et gestion de modules pour l'extension des fonctionnalités</li>
                    <li>Composants hardware (Ordinateur, Raspberry Pi, Arduino) pour des projets IoT</li>
                    <li>Gestion des releases et versioning des projets pour assurer la traçabilité</li>
                    <li>Configuration de Systemd pour la gestion des services et des processus</li>
                </ul>

                <div class="languages">
                    <img src="../image/cv/raspberrypi_logo.webp" alt="Raspberry Pi" title="Raspberry Pi logo">
                    <img src="../image/cv/arduino_logo.webp" alt="Arduino" title="Arduino logo">
                </div>
            </div>

            <div class="sous_competences_container">
                <h4>Virtualisation</h4>
                <p>Je maîtrise les technologies de virtualisation, qui sont essentielles pour le déploiement d'applications dans des environnements isolés. J'utilise ces technologies pour optimiser l'utilisation des ressources pour lancer des applications Web.</p>
                <ul>
                    <li>Docker pour la conteneurisation des applications</li>
                    <li>Docker Swarm pour l'orchestration de conteneurs</li>
                    <li>Création et gestion de Dockerfiles pour automatiser les déploiements</li>
                </ul>

                <div class="languages">
                    <img src="../image/cv/docker_logo.webp" alt="Docker" title="Docker logo">
                </div>

            </div>
        </div>

        <div class="competences_container">
            <h3 id="cyber"><i class="fas fa-user-shield"></i> Cybersécurité</h3>
            <p></p>

            <div class="sous_competences_container">
                <h4>Outils</h4>
                <p>En développement....</p>
                <div class="languages">
                    <img src="../image/cv/wireshark_logo.webp" alt="Wireshark" title="Wireshark logo">
                    <img src="../image/cv/nmap_logo.webp" alt="Nmap" title="Nmap logo">
                    <img src="../image/cv/burpsuite_logo.webp" alt="BurpSuite" title="BurpSuite logo">
                    <img src="../image/cv/nuclei_logo.webp" alt="Nuclei" title="Nuclei logo">
                    <img src="../image/cv/maltego_logo.webp" alt="Maltego" title="Maltego logo">
                </div>
            </div>
        </div>

        <div class="competences_container">
            <h3 id="web"><i class="fas fa-globe"></i> Web et Mobile</h3>
            <p>Depuis également plus de 3 ans, je travaille dans la réalisation, la correctivité et l'évolutivité d'applications et d'outils Web et mobiles, ce qui m'a permis d'acquérir une expérience solide pour mener à bien des projets de grande envergure que par ailleurs j'ai fait partie durant mes stages.<br> Le Web représente l'une des principales causes d'attaques en cybersécurité, et je suis passionné par l'optimisation des systèmes pour assurer leur sécurité et leur performance.<br> Avoir un passif web me permet d'avoir une importe connaissance sur les failles d'un site web, en connaissant toutes les petites subtilités de performance au network d'un site, ou encore le stockage local.</p>

            <div class="sous_competences_container">
                <h4>Langages</h4>
                <p>Je connais une variété de langage et de framework pour la programmation et la protection de site Web et d'applications mobiles</p>

                <div class="languages">
                    <img src="../image/cv/python_logo.webp" alt="Python" title="Python logo">
                    <img src="../image/cv/html_logo.webp" alt="HTML" title="HTML logo">
                    <img src="../image/cv/css_logo.webp" alt="CSS" title="CSS logo">
                    <img src="../image/cv/bootstrap_logo.webp" alt="Bootstrap" title="Bootstrap logo">
                    <img src="../image/cv/js_logo.webp" alt="JavaScript" title="JavaScript logo">
                    <img src="../image/cv/php_logo.webp" alt="PHP" title="PHP logo">
                    <img src="../image/cv/laravel_logo.webp" alt="Laravel" title="Laravel logo">
                    <img src="../image/cv/zend_logo.webp" alt="Zend" title="Zend logo">
                    <img src="../image/cv/ajax_logo.webp" alt="Ajax" title="Ajax logo">
                    <img src="../image/cv/ionic_logo.webp" alt="Ionic" title="Ionic logo">
                    <img src="../image/cv/angular_logo.webp" alt="Angular" title="Angular logo">
                    <img src="../image/cv/typescript_logo.webp" alt="TypeScript" title="TypeScript logo">
                    <img src="../image/cv/react_logo.webp" alt="React" title="React logo">
                    <img src="../image/cv/nodejs_logo.webp" alt="NodeJs" title="NodeJs logo">
                    <img src="../image/cv/java_logo.webp" alt="Java" title="Java logo">
                    <img src="../image/cv/jakartaee_logo.webp" alt="Jakarta EE" title="Jakarta EE logo">
                    <img src="../image/cv/android_logo.webp" alt="Android" title="Android logo">
                </div>
            </div>

            <div class="sous_competences_container">
                <h4>Accessibilité Numérique</h4>
                <p>Dans tous mes projets, j'ai veillé à intégrer les principes d'accessibilité numérique en respectant les normes W3C, notamment les directives WCAG (Web Content Accessibility Guidelines). J'ai conçu des interfaces inclusives pour garantir l'accès aux personnes en situation de handicap, qu'il s'agisse de déficiences visuelles, auditives, motrices ou cognitives.</p>
                <p>Je m'efforce de rendre mes projets non seulement conformes aux standards, mais aussi agréables et pratiques pour tous les utilisateurs, quelles que soient leurs capacités.</p>
                <p>Notamment ce portfolio à un score de 100 d'accessibilité sur Page Speed (Google Insight)</p>
                <div class="perf">
                    <img src="../image/cv/perf.webp" alt="Image de Performance site" title="Image de Performance site">
                </div>
            </div>

            <div class="sous_competences_container">
                <h4>Outils de développement Web et mobile</h4>
                <p></p>
                <div class="languages">
                    <img src="../image/cv/vscode_logo.webp" alt="Visual Studio Code" title="Visual Studio Code logo">
                    <img src="../image/cv/pycharm_logo.webp" alt="PyCharm" title="PyCharm logo">
                    <img src="../image/cv/webstorm_logo.webp" alt="WebStorm" title="WebStorm logo">
                    <img src="../image/cv/phpstorm_logo.webp" alt="PhpStorm" title="PhpStorm logo">
                    <img src="../image/cv/androidstudio_logo.webp" alt="Android Studio" title="Android Studio logo">
                    <img src="../image/cv/xampp_logo.webp" alt="Xampp" title="Xampp logo">
                    <img src="../image/cv/wamp_logo.webp" alt="Wamp" title="Wamp logo">
                    <img src="../image/cv/postman_logo.webp" alt="Postman" title="Postman logo">
                </div>
            </div>
        </div>

        <div class="competences_container">
            <h3 id="bd"><i class="fas fa-database"></i> Base de données</h3>
            <p>Depuis plus de 3 ans, j'ai acquis des compétences solides en bases de données grâce à mes cours et mes stages. Je possède des connaissances approfondies sur les bases de données relationnelles (SGBDR), NoSQL, en mémoire (In-Memory), orientées graphes et de type XML/JSON, me permettant de m'adapter à divers besoins en gestion et manipulation de données.</p>
            <p>Dans un contexte où le nombre d'attaques augmente, il est essentiel de sécuriser les données et de garantir leur confidentialité, intégrité et disponibilité. Mon expérience inclut non seulement la manipulation des données, mais aussi la mise en place de bonnes pratiques de sécurité pour les bases de données, telles que le chiffrement, le contrôle des accès et la surveillance des activités suspectes, afin de prévenir les risques de fuites ou d'intrusions. L'objectif principal d'un hacker est souvent de trouver une faille permettant un accès à la base de données, un point crucial pour la protection de toute donnée sensible.</p>

            <div class="sous_competences_container">
                <h4>Bases de Données Relationnelles (SGBDR)</h4>
                <p>Les bases de données relationnelles stockent les données sous forme de tables composées de lignes et de colonnes, se basant sur le modèle relationnel. Les tables sont liées entre elles par des clés primaires et étrangères, ce qui garantit l'intégrité des données et facilite les requêtes SQL.</p>
                <p>Niveau : Je maîtrise très bien les bases de données relationnelles et leur utilisation avancée dans le développement d’applications ou pour un structure.</p>
                <div class="languages">
                    <h5>Langages</h5>
                    <img src="../image/cv/sql_logo.webp" alt="SQL" title="SQL logo">
                    <img src="../image/cv/plsql_logo.webp" alt="PL/SQL" title="PL/SQL logo">
                </div>
                <div class="languages">
                    <h5>Base de données</h5>
                    <img src="../image/cv/mysql_logo.webp" alt="MySQL" title="MySQL logo">
                    <img src="../image/cv/postgresql_logo.webp" alt="PostgreSQL" title="PostgreSQL logo">
                    <img src="../image/cv/oracle_logo.webp" alt="Oracle" title="Oracle logo">
                </div>
            </div>

            <div class="sous_competences_container">
                <h4>Bases de Données de type XML/JSON</h4>
                <p>Les bases de données de type XML/JSON sont conçues pour stocker des données structurées, telles que des documents XML ou JSON, souvent utilisées pour les applications nécessitant un échange de données dans ces formats standardisés.</p>
                <p>Niveau : Je maîtrise des bases de données XML/JSON, particulièrement utiles pour les échanges de données dans des applications web.</p>
                <div class="languages">
                    <h5>Langages</h5>
                    <img src="../image/cv/xml_logo.webp" alt="XML" title="XML logo">
                    <img src="../image/cv/json_logo.webp" alt="JSON" title="JSON logo">
                    <img src="../image/cv/js_logo.webp" alt="JavaScript" title="JavaScript logo">
                    <img src="../image/cv/nodejs_logo.webp" alt="Node.js" title="Node.js logo">
                </div>

                <div class="languages">
                    <h5>Bases de données</h5>
                    <img src="../image/cv/mongodb_logo.webp" alt="MongoDB" title="MongoDB logo">
                </div>
            </div>

            <div class="sous_competences_container">
                <h4>Bases de Données NoSQL</h4>
                <p>Les bases de données NoSQL stockent les données de manière flexible, souvent sous forme de documents, de paires clé-valeur, ou de colonnes, ce qui les rend idéales pour des applications nécessitant une grande scalabilité et un schéma de données variable.</p>
                <p>Niveau : Je possède une bonne compréhension des bases de données NoSQL et de leurs cas d'usage en entreprise.</p>
                <div class="languages">
                    <h5>Langages</h5>
                    <img src="../image/cv/python_logo.webp" alt="Python" title="Python logo">
                    <img src="../image/cv/js_logo.webp" alt="JavaScript" title="JavaScript logo">
                </div>

                <div class="languages">
                    <h5>Bases de données</h5>
                    <img src="../image/cv/mongodb_logo.webp" alt="MongoDB" title="MongoDB logo">
                    <img src="../image/cv/redis_logo.webp" alt="Redis" title="Redis logo">
                </div>
            </div>

            <div class="sous_competences_container">
                <h4>Bases de Données en mémoire (In-Memory)</h4>
                <p>Les bases de données en mémoire stockent les données directement en RAM, offrant ainsi des performances très élevées et des temps d'accès rapides. Elles sont particulièrement adaptées aux applications en temps réel.</p>
                <p>Niveau : J'ai une connaissance de base des bases de données en mémoire et de leur utilisation pour améliorer la rapidité d'accès aux données.</p>
                <div class="languages">
                    <h5>Langages</h5>
                    <img src="../image/cv/python_logo.webp" alt="Python" title="Python logo">
                    <img src="../image/cv/js_logo.webp" alt="JavaScript" title="JavaScript logo">
                </div>

                <div class="languages">
                    <h5>Bases de données</h5>
                    <img src="../image/cv/redis_logo.webp" alt="Redis" title="Redis logo">
                </div>
            </div>

            <div class="sous_competences_container">
                <h4>Bases de Données orientées graphes</h4>
                <p>Les bases de données orientées graphes permettent de modéliser les données sous forme de nœuds et d’arêtes, ce qui est idéal pour des applications ayant des relations complexes, telles que les réseaux sociaux ou les analyses de réseau.</p>
                <p>Niveau : J'ai récemment acquis des connaissances pratiques en bases de données orientées graphe et je continue à renforcer mes compétences dans ce domaine.</p>
                <div class="languages">
                    <h5>Langage</h5>
                    <img src="../image/cv/cypher_logo.webp" alt="Cypher" title="Cypher logo">
                </div>
                <div class="languages">
                    <h5>Base de données</h5>
                    <img src="../image/cv/neo4j_logo.webp" alt="Neo4j" title="Neo4j logo">
                </div>
            </div>

            <div class="sous_competences_container">
                <h4>Statistique</h4>
                <p>Je maîtrise également un autre langage destiné au statistique.</p>

                <div class="languages">
                    <img src="../image/cv/r_logo.webp" alt="R" title="R logo">
                </div>
            </div>

            <div class="sous_competences_container">
                <h4>Outils de base de données</h4>
                <p></p>
                <div class="languages">
                    <img src="../image/cv/phpmyadmin_logo.webp" alt="PhpMyAdmin" title="PhpMyAdmin logo">
                    <img src="../image/cv/sqldeveloppeur_logo.webp" alt="SqlDeveloppeur" title="SqlDeveloppeur logo">
                    <img src="../image/cv/rstudio_logo.webp" alt="R studio" title="R studio logo">
                    <img src="../image/cv/neo4j_logo.webp" alt="Neo4j" title="Neo4j logo">
                </div>
            </div>
        </div>

        <div class="competences_container">
            <h3 id="ml"><i class="fas fa-brain"></i> Machine Learning (IA)</h3>
            <p>Depuis maintenant 1 an, j'ai découvert durant mes cours une véritable passion pour l'intelligence artificielle et son sous-domaine, le Machine Learning. Ce domaine repose sur une solide base de savoirs en mathématiques et en informatique.</p>
            <p>Pour les non-initiés, je vais vous donner une brève explication de ce qu'est le Machine Learning et son impact sur notre monde actuel en cybersécurité. Aujourd'hui, l'intelligence artificielle occupe une place importante dans notre quotidien, notamment avec l'arrivée de ChatGPT, qui a révolutionné notre façon de vivre. Cependant, il est important de reconnaître que ces intelligences artificielles, bien que plus "intelligentes" que les humains dans certains contextes, peuvent être utilisées pour des usages bien veillant tout comme pour des usages malveillants. Cela est particulièrement pertinent dans le domaine de la cybersécurité, où nous devons nous préparer à des attaques potentielles réalisées par des intelligences artificielles.</p>
            <p>Bien que je m'intéresse à l'intelligence artificielle dans son ensemble, je me suis spécialise particulièrement dans le Machine Learning. Mais en quoi cela consiste-t-il ? Le Machine Learning est une branche de l'intelligence artificielle qui permet aux systèmes d'apprendre et de s'améliorer automatiquement à partir de données. Grâce à des algorithmes et à des modèles statistiques, les machines peuvent analyser des ensembles de données, identifier des motifs et faire des prédictions. Cela a des applications dans de nombreux domaines, allant de la reconnaissance d'image à la détection de fraudes en passant par l'analyse des sentiments.</p>
            <p>En tant qu'étudiant en cybersécurité, il est essentiel pour moi et pour les acteurs de ce domaine de se former à cette nouvelle technologie. Mon atout est d'être en école et d'avoir eu l'opportunité d'apprendre dans ce domaine.</p>
            <!--<p>En tant qu'étudiant en cybersécurité, j'explore également comment le Machine Learning peut renforcer la sécurité des systèmes d'information. Par exemple, les algorithmes de Machine Learning peuvent être utilisés pour détecter des comportements anormaux dans les réseaux, identifier des menaces en temps réel et automatiser des réponses aux incidents. En intégrant ces technologies avancées dans la cybersécurité, nous pouvons mieux protéger nos données et infrastructures contre les cyberattaques de plus en plus sophistiquées.</p>-->
            <div class="sous_competences_container">
                <h4>Langage</h4>
                <p>Je connais un langage de programmation utilisé pour réaliser des algorithmes d'apprentissage, notamment Python. Python est particulièrement utilisé dans le domaine du machine learning en raison de ses différentes librairies qui simplie les tâches.</p>
                <div class="languages">
                    <img src="../image/cv/python_logo.webp" alt="Python" title="Python logo">
                </div>
            </div>
            <div class="sous_competences_container">
                <h4>Librairies</h4>
                <p>Dans le domaine du machine learning, plusieurs bibliothèques Python sont incontournables.</p>
                <ul>
                    <li><strong>Scikit-learn</strong> est essentielle pour l'apprentissage supervisé et non supervisé qui offre divers algorithmes pour la classification, la régression et le clustering.</li>
                    <li><strong>TensorFlow</strong> est un framework puissant pour l'apprentissage profond, facilitant la création de réseaux neuronaux.</li>
                    <!--<li><strong>PyTorch</strong> est apprécié pour sa flexibilité et sa simplicité, étant particulièrement utilisé dans la recherche.</li>-->
                    <li><strong>Pandas</strong> permet une manipulation efficace des données dans un trainset et un testset</li>
                    <li><strong>NumPy</strong> est une bibliothèque mathématiques.</li>
                    <li><strong>Matplotlib</strong> est une bibliothèque pour représenter graphiquement les résultats des analyses</li>
                </ul>

                <div class="languages">
                    <img src="../image/cv/scikitlearn_logo.webp" alt="Scikit-learn" title="Scikit-learn logo">
                    <img src="../image/cv/tensorflow_logo.webp" alt="TensorFlow" title="TensorFlow logo">
                    <img src="../image/cv/pandas_logo.webp" alt="Pandas" title="Pandas logo">
                    <img src="../image/cv/numpy_logo.webp" alt="Numpy" title="Numpy logo">
                    <img src="../image/cv/matplotlib_logo.webp" alt="Matplotlib" title="Matplotlib logo">
                </div>
            </div>

            <div class="sous_competences_container">
                <h4>Outils de développement (IDE) ML</h4>
                <div class="languages">
                    <img src="../image/cv/pycharm_logo.webp" alt="PyCharm" title="PyCharm logo">
                    <img src="../image/cv/vscode_logo.webp" alt="Visual Studio Code" title="Visual Studio Code logo">
                    <img src="../image/cv/jupyter_logo.webp" alt="Jupyter" title="Jupyter logo">
                    <img src="../image/cv/anaconda_logo.webp" alt="Anaconda" title="Anaconda logo">
                </div>
            </div>
        </div>

        <div class="competences_container">
            <h3 id="devlogiciel"><i class="fas fa-laptop-code"></i> Développement Logiciel</h3>
            <p>Depuis 3 ans, j'ai conçu et développé divers logiciels en suivant des processus rigoureux de programmation, de tests et d'optimisation. Cela inclut la création d'algorithmes, le développement de fonctionnalités et la mise en œuvre de tests pour garantir la qualité et la performance des solutions logicielles avant leur mise en production.</p>

            <div class="sous_competences_container">
                <h4>Langages</h4>
                <p>Je maîtrise plusieurs langages adaptés au développement logiciel.</p>

                <div class="languages">
                    <img src="../image/cv/python_logo.webp" alt="Python" title="Python logo">
                    <img src="../image/cv/java_logo.webp" alt="Java" title="Java logo">
                    <img src="../image/cv/c_logo.webp" alt="C" title="C logo">
                </div>
            </div>
            <div class="sous_competences_container">
                <h4>Outils de développement Logiciel(IDE)</h4>
                <div class="languages">
                    <img src="../image/cv/pycharm_logo.webp" alt="PyCharm" title="PyCharm logo">
                    <img src="../image/cv/vscode_logo.webp" alt="Visual Studio Code" title="Visual Studio Code logo">
                    <img src="../image/cv/intellij_logo.webp" alt="Intellij" title="Intellij logo">
                    <img src="../image/cv/processing_logo.webp" alt="Processing" title="Processing logo">
                </div>
            </div>
        </div>


        <div class="competences_container">
            <h3 id="gestionprojet"><i class="fas fa-tasks"></i> Gestion de projet</h3>
            <p>Depuis plusieurs années, je mène avec succès des projets académiques et personnels dans divers domaines, tels que le développement d’applications, de logiciels, ainsi que la gestion de systèmes et de réseaux. Cette expérience m'a permis d'acquérir une solide maîtrise de la gestion de projets de grande envergure, notamment pour des clients externes.</p>
            <p>Je place l’organisation au coeur de mon travail, veillant à ce que chaque étape soit bien coordonnée pour atteindre les objectifs fixés avec efficacité.</p>
            <div class="sous_competences_container">
                <h4>Projet Informatique</h4>
                <p>Durand ces années là j'ai moi même gérer ma propre équipe d'informaticien et moi-même mené à bien plusieurs projets, j'ai pu développer des compétences approfondies en suivi, en coordination et en contrôle de qualité.</p>
                <p>Je maîtrise également diverses méthodologies de gestion de projet, notamment les <b>méthodes Agiles</b>, qui favorisent une adaptabilité et une réactivité accrues face aux changements. Je suis particulièrement à l'aise avec <b>Scrum</b>, une approche qui structure le travail en itérations (ou <b>sprints</b>) pour une livraison continue de valeur.</p>
                <p>En plus des méthodes Agiles, j'ai également une bonne connaissance des <b>cycles de développement en V</b> et des <b>cycles incrémentaux</b>, qui permettent de structurer le projet en étapes successives (Analyse, Spécification, Conception, Développement, Test), assurant une validation à chaque phase du processus et une meilleure gestion des risques. Ces cycles sont adaptés pour des projets où les besoins sont bien définis dès le départ, mais nécessitent un contrôle qualité strict à chaque étape.</p>
                <p>En termes de gestion du temps, je sais réaliser des <b>diagrammes de Gantt</b> et des <b>diagrammes d'ordonnancement</b> pour planifier et suivre efficacement les étapes.</p>
                <p><b>"Je me considère comme un bon manager, capable de gérer une équipe autour d'objectifs communs et de maintenir un environnement de travail positif et productif."</b></p>
            </div>
            <div class="sous_competences_container">
                <h4>Création d'entreprise/Entrepreneuriat</h4>
                <p>En plus de mes compétences en gestion de projet informatique, je suis passionné par l'entrepreneuriat. Cette passion m'a amené à explorer différents aspects de la création d’entreprise.</p>
                <p>Grâce à mes cours, j’ai eu l'opportunité de réaliser un projet de création d'entreprise, comprenant la conception d’un <b>Business Plan</b> détaillé. Ce projet m’a permis de développer mes compétences en planification stratégique, en analyse de marché et en modélisation financière.</p>
            </div>
            <div class="sous_competences_container">
                <h4>Comptabilité</h4>
                <p>La comptabilité est un aspect essentiel pour déterminer la faisabilité d'un projet ou d'une entreprise. Cette compétence, que j'ai pu renforcer notamment lors de la réalisation de business plans, m'a permis d'acquérir une bonne compréhension des <b>bilans financiers</b>, des <b>comptes de résultat</b>, ainsi que des <b>plans de trésorerie</b> et de <b>financement</b>.</p>
                <p>Je suis capable de dresser et d'analyser des <b>bilans comptables</b> et d'évaluer la santé financière d'un projet ou d'une entreprise, ce qui est crucial pour une gestion efficace et éclairée.</p>
            </div>
            <div class="sous_competences_container">
                <h4>Gestion et Étude de Risque</h4>
                <p>La gestion des risques est primordiale dans tout projet pour anticiper et minimiser les imprévus. Je suis formé à l'identification, l'évaluation et la hiérarchisation des risques, ainsi qu'à la mise en place de stratégies de mitigation pour réduire leur impact.</p>
                <p>Mon approche consiste à mener des analyses de risques approfondies, en tenant compte des variables financières, opérationnelles et stratégiques. En intégrant ces pratiques dès la phase de planification, j'assure une gestion proactive des projets.</p>
            </div>
            <div class="sous_competences_container">
                <h4>Communication Professionnelle</h4>
                <p>La communication est un élément clé de la réussite de tout projet, et j'accorde une grande importance à la clarté et à l'efficacité de mes échanges professionnels. Que ce soit dans la transmission d'instructions, le suivi des avancées ou la gestion des attentes, je veille à ce que les informations soient communiquées de manière précise et adaptée à chaque interlocuteur.</p>
                <p>J'ai développé des compétences en communication orale et écrite, en particulier pour la rédaction de documents projet tels que des <b>comptes-rendus</b>, <b>des rapports d'avancement</b> et des <b>documentations techniques</b> (<b>Markdown</b>).</p>
                <p>Mon approche consiste à établir une communication proactive et transparente, afin de maintenir une dynamique positive au sein d'une l'équipe et d'assurer une compréhension commune des objectifs et des étapes du projet.</p>
            </div>
            <div class="sous_competences_container">
                <h4>Outils de Gestion</h4>
                <p>J'utilise de nombreux outils pour la gestion et la rédaction de rapport.</p>
                <div class="languages">
                    <img src="../image/cv/jira_logo.webp" alt="Jira Software Manager" title="Jira Software Manager logo">
                    <img src="../image/cv/slack_logo.webp" alt="Slack" title="Slack logo">
                    <img src="../image/cv/gantt_logo.webp" alt="Gantt" title="Gantt logo">
                    <img src="../image/cv/word_logo.webp" alt="Word" title="Word logo">
                    <img src="../image/cv/excel_logo.webp" alt="Excel" title="Excel logo">
                    <img src="../image/cv/powerpoint_logo.webp" alt="Powerpoint" title="Powerpoint logo">
                    <img src="../image/cv/googlesheets_logo.webp" alt="Google Sheets" title="Google Sheets logo">
                    <img src="../image/cv/googledocs_logo.webp" alt="Google Docs" title="Google Docs logo">
                    <img src="../image/cv/googleslides_logo.webp" alt="Google Slides" title="Google Slides logo">
                    <img src="../image/cv/canva_logo.webp" alt="Canva" title="Canva logo">
                </div>
            </div>
        </div>

        <div class="competences_container">
            <h3 id="qualitecode"><i class="fas fa-project-diagram"></i> Qualité de code</h3>
            <p>J'accorde une importance à la qualité du code, car elle est essentielle pour assurer la <b>robustesse</b>, la <b>maintenabilité</b> et la <b>performance</b> des applications.</p>
            <p>Mon approche repose sur des bonnes pratiques de développement, incluant la <b>modélisation</b>, le <b>contrôle de version</b> et une <b>rigueur technique</b> à chaque étape du processus de développement.</p>
            <p>Je maîtrise les techniques de <b>modélisation UML</b>, qui me permettent de concevoir des architectures logicielles claires et adaptées aux besoins du projet.</p>
            <p>Pour le contrôle de version et la collaboration en équipe, j'utilise <b>Git</b>, garantissant ainsi un suivi précis des modifications et une gestion optimale du code.</p>
            <p>Ma démarche inclut également des étapes essentielles du <b>génie logiciel</b> : <b>analyse des besoins</b>, <b>spécification</b>, <b>conception</b>, <b>développement</b> et <b>tests</b>, afin de garantir un cycle de développement complet et de haute qualité.</p>
            <p>L'<b>algorithmique</b> et le <b>calcul distribué</b> sont également des domaines que j'intègre dans mes projets lorsque la performance et l'efficacité sont importantes.</p>
            <div class="sous_competences_container">
                <h4>Outils  utilisés</h4>
                <p>J'utilise de nombreux.</p>
                <div class="languages">
                    <img src="../image/cv/drawio_logo.webp" alt="drawio" title="drawio logo">
                    <img src="../image/cv/staruml_logo.webp" alt="STARUML" title="STARUML logo">
                    <img src="../image/cv/git_logo.webp" alt="Git" title="Git logo">
                    <img src="../image/cv/github_logo.webp" alt="GitHub" title="GitHub logo">
                    <img src="../image/cv/githubdesktop_logo.webp" alt="GitHub Desktop" title="GitHub Desktop logo">
                    <img src="../image/cv/gitlab_logo.webp" alt="Gitlab" title="Gitlab logo">
                </div>
            </div>
        </div>

        <div class="competences_container">
            <h3 id="droit"><i class="fas fa-balance-scale"></i> Droit de l'informatique</h3>
            <p>Mon parcours ma permis de me former au droit de l'informatique depuis plusieurs années. Cette aspect est très important dans la réalisations de logiciel ou dans le secteur de la cybersécurité.</p>
        </div>

    </section>

    <!--<section class="outils">

    </section>-->

    <section id="experiences" class="experiences">
        <h2><i class="fas fa-briefcase"></i> Expériences</h2>
        <table class="experiences_table">
            <tr>
                <td class="logo_cell">
                    <a href="https://www.iut-velizy-rambouillet.uvsq.fr/"><img src="../image/cv/velizy_logo.webp" alt="Logo Iut de Vélizy" title="Site Web Iut de Vélizy"></a>
                </td>
                <td class="text_cell">
                    <h3>
                        <span class="periode">
                            <time datetime="2025">En Cours</time> -
                            <time datetime="2024">Décembre 2024</time>
                        </span>
                        <span class="poste">Alternance Administration Sécurité et Réseaux, IUT de Vélizy</span>
                    </h3>
                    <p>J'ai récemment intégré l'équipe de l'Université de Vélizy, où je participe activement à la sécurisation, à la gestion et à la maintenance du parc informatique de l'établissement avec ses différents départements.</p>
                    <p>Mes principales missions incluent :</p>
                    <ul>
                        <li>Installation, configuration et maintenance des équipements informatiques et réseaux.</li>
                        <li>Supervision de la sécurité des systèmes, incluant la mise en oeuvre de politiques de protection des données sensibles.</li>
                        <li>Assistance technique auprès des utilisateurs pour résoudre les problèmes matériels et logiciels.</li>
                        <li>Participation à des projets d'amélioration des infrastructures réseau pour garantir leur fiabilité et performance.</li>
                    </ul>
                    <!--<p>Cette alternance me permet de développer des compétences techniques approfondies dans l'administration des systèmes et réseaux, tout en renforçant mes capacités d'analyse et de résolution de problèmes en contexte réel. Elle constitue également une excellente opportunité pour mettre en pratique mes apprentissages académiques au sein d'un environnement professionnel stimulant.</p>-->
                </td>
            </tr>
            <tr>
                <td class="logo_cell">
                    <a href="https://www.alphalives.com/"><img src="../image/cv/alphalives_logo.webp" alt="Logo d'Alphalives" title="Site Web d'Alphalives"></a>
                </td>
                <td class="text_cell">
                    <h3>
                        <span class="periode">
                            <time datetime="2024-07">Juillet 2024</time> -
                            <time datetime="2024-03">Mars 2024</time>
                        </span>
                        <span class="poste">Stage Développement Web, Alphalives</span>
                    </h3>
                    <p>Après une première expérience chez Alphalives, j'ai eu l'opportunité de réintégrer cette équipe dynamique et bienveillante pour un second stage. Ce nouveau stage m'a permis de consolider mes compétences en développement web et de participer à des projets pour des entreprises de grande envergure.</p>
                    <p>Au cours de ce stage, j'ai eu l'occasion de :</p>
                    <ul>
                        <li>Participer au développement et à la maintenance corrective et évolutive d’applications et d'outils web.</li>
                        <li>Contribuer à la mise en œuvre de solutions techniques innovantes pour des projets à fort impact, notamment pour des clients issus de secteurs variés.</li>
                        <li>Me former à de nouveaux outils et technologies, en approfondissant notamment la performance des sites web ainsi que d'autres technologies mentionnées dans la partie "Compétences".</li>
                        <li>Collaborer avec une équipe pour définir et atteindre les objectifs des projets.</li>
                    </ul>
                    <p>Cette expérience a également renforcé mes compétences humaines, telles que le travail en équipe, la gestion des priorités et l'adaptabilité face à des défis techniques complexes.</p>
                    <p>J'ai particulièrement apprécié la convivialité de l'entreprise Alphalives, qui favorise l'entraide et l'esprit d'équipe.</p>
                    <p>Enfin, ce stage a été une étape décisive dans mon parcours. Il m'a permis de mieux comprendre les aspects techniques du web, tout en approfondissant mes connaissances sur les technologies et les spécificités du secteur. Cela m'a également aidé à mieux appréhender les enjeux du web dans le secteur de la cybersécurité.</p>
                </td>
            </tr>
            <tr>
                <td class="logo_cell">
                    <a href="https://www.alphalives.com/"><img src="../image/cv/alphalives_logo.webp" alt="Logo d'Alphalives" title="Site Web d'Alphalives"></a>
                </td>
                <td class="text_cell">
                    <h3>
                        <span class="periode">
                            <time datetime="2024-07">Juillet 2023</time> -
                            <time datetime="2024-04">Avril 2023</time>
                        </span>
                        <span class="poste">Stage Développement Web, Alphalives</span>
                    </h3>
                    <p>Ma première expérience professionnelle en tant qu'informaticien s'est déroulée chez Alphalives, une petite entreprise à taille humaine. J'y ai occupé le poste de développeur web, ce qui m’a permis de découvrir l'univers du développement.</p>
                    <p>Durant ce stage, j'ai eu l’occasion de :</p>
                    <ul>
                        <li>Participer à plusieurs projets web et mobiles, en utilisant divers langages de programmation.</li>
                        <li>Conduire de manière autonome un projet pour l'un des clients d'Alphalives, comprenant :
                            <ul>
                                <li>La conception et le développement de la solution technique.</li>
                                <li>La participation à des réunions de suivi pour présenter l'avancement du projet et les livrables.</li>
                                <li>La gestion des retours clients pour ajuster et améliorer le produit final.</li>
                            </ul>
                        </li>
                    </ul>
                    <p>Cette expérience m'a permis de développer des compétences techniques solides en développement web tout en renforçant mes capacités de gestion de projet et de communication.</p>
                </td>
            </tr>
        </table>
    </section>

    <section id="suivi" class="suivi">
        <h2><i class="fa-solid fa-address-card"></i> Suivi</h2>
        <div class="suivi_container">
            <a href="https://www.root-me.org/hehealex" target="_blank" class="suivi_container_logo">
                <div class="suivi_logo">
                    <img src="../image/cv/rootme_logo.webp" alt="Logo RootMe" title="Logo RootMe">
                </div>
                <p>hehealex</p>
            </a>
            <a href="https://tryhackme.com/r/p/alexisar" target="_blank" class="suivi_container_logo">
                <div class="suivi_logo">
                    <img src="../image/cv/tryhackme_logo.webp" alt="Logo TryHackMe" title="Logo TryHackMe">
                </div>
                <p>alexisar</p>
            </a>
            <a href="https://www.linkedin.com/in/alexis-araujo-b7333822a/" target="_blank" class="suivi_container_logo">
                <div class="suivi_logo">
                    <img src="../image/cv/linkedin_logo.webp" alt="Logo LinkedIn" title="Logo LinkedIn">
                </div>
                <p>Alexis Araujo</p>
            </a>
            <a href="https://github.com/al3x6" target="_blank" class="suivi_container_logo">
                <div class="suivi_logo">
                    <img src="../image/cv/github_logo_suivi.webp" alt="Logo GitHub" title="Logo GitHub">
                </div>
                <p>al3x6</p>
            </a>
        </div>
    </section>

    <section class="langues" id="langues">
        <h2><i class="fas fa-briefcase"></i> Langues</h2>
        <table class="langues_table">
            <tr>
                <td class="text_cell">
                    <h3>Français, Langue natale</h3>
                    <p>Le français est ma langue maternelle. La compréhension orale, l'écriture et l'expression orale sont pour moi des compétences naturelles et très maîtrisées.</p>
                </td>
                <td class="logo_cell">
                    <img src="../image/cv/drapeau_france.webp" alt="Drapeau Français" title="Drapeau Français">
                </td>
            </tr>
            <tr>
                <td class="text_cell">
                    <h3>Espanol, Nivel C1</h3>
                    <p>Aunque no soy bilingue, el espanol es un idioma que disfruto especialmente. Tengo una buena comprension oral, una buena expresion escrita y me siento comodo participando en conversaciones en espanol.</p>
                    <p>Sigo mejorando mi nivel gracias a mis viajes y a la lectura de medios de comunicacion en espanol.</p>
                </td>
                <td class="logo_cell">
                    <img src="../image/cv/drapeau_espagne.webp" alt="Drapeau Espagnol" title="Drapeau Espagnol">
                </td>
            </tr>
            <tr>
                <td class="text_cell">
                    <h3>Portugues, Nivel C1</h3>
                    <p>O portugues faz parte das minhas raizes familiares, o que me permitiu adquirir um bom nivel do idioma. Aprendi esta lingua crescendo em um ambiente familiar portugues.</p>
                    <p>Embora nao tenha frequentado cursos formais, continuo a melhorar constantemente gracas as leituras, aos meios de comunicacao portugueses e as minhas viagens a Portugal.</p>
                </td>
                <td class="logo_cell">
                    <img src="../image/cv/drapeau_portugal.webp" alt="Drapeau Portugais" title="Drapeau Portugais">
                </td>
            </tr>
            <tr>
                <td class="text_cell">
                    <h3>English, Level B2</h3>
                    <p>Although learning English has been a challenge for me, I can hold a conversation and understand written texts in English. My level allows me to interact in both professional and informal settings.</p>
                    <p>I am committed to becoming bilingual in English by engaging in daily practices and immersive experiences.</p>
                </td>
                <td class="logo_cell">
                    <img src="../image/cv/drapeau_ru.webp" alt="Drapeau Royaume-Uni" title="Drapeau Royaume-Uni">
                </td>
            </tr>
        </table>
    </section>

    <section class="centres_interets">
        <h2><i class="fas fa-briefcase"></i> Centres d'intérêts</h2>
        <table class="centres_interets_table">
            <tr>
                <td class="logo_interet_cell">
                    <img src="../image/cv/linkedin_logo.webp" alt="Drapeau Français" title="Drapeau Français">
                </td>
                <td class="logo_interet_cell">
                    <img src="../image/cv/linkedin_logo.webp" alt="Drapeau Français" title="Drapeau Français">
                </td>
                <td class="logo_interet_cell">
                    <img src="../image/cv/linkedin_logo.webp" alt="Drapeau Français" title="Drapeau Français">
                </td>
                <td class="logo_interet_cell">
                    <img src="../image/cv/linkedin_logo.webp" alt="Drapeau Français" title="Drapeau Français">
                </td>
                <td class="logo_interet_cell">
                    <img src="../image/cv/linkedin_logo.webp" alt="Drapeau Français" title="Drapeau Français">
                </td>
            </tr>
            <tr>
                <td class="text_interet_cell">
                    <h3>laaaa</h3>
                    <p>laaa</p>
                </td>
                <td class="text_interet_cell">
                    <h3>laaa</h3>
                    <p>laaaa</p>
                </td>
                <td class="text_interet_cell">
                    <h3>laaa</h3>
                    <p>laaaa</p>
                </td>
                <td class="text_interet_cell">
                    <h3>laaa</h3>
                    <p>laaaa</p>
                </td>
                <td class="text_interet_cell">
                    <h3>laaa</h3>
                    <p>laaaa</p>
                </td>
            </tr>
        </table>
    </section>

    <section class="projets_cv">

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

<!-- Bouton mini menu défilement fluide -->
<script>
    document.querySelectorAll('.mini-menu a').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 100, // Ajustez le décalage si nécessaire
                    behavior: 'smooth' // Défilement fluide
                });
            }
        });
    });
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