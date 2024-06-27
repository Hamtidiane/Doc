<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Futuriste</title>
    <!-- Intégration de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Styles de base */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #1a1a1a;
            color: #fff;
            line-height: 1.6;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #77aaff 3px solid;
        }
        header h1 {
            text-align: center;
            text-transform: uppercase;
            margin: 0;
        }
        nav {
            display: flex;
            justify-content: center;
            padding: 5px;
            background: #555;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 15px;
            margin: 5px;
            border-radius: 5px;
        }
        nav a:hover {
            background: #77aaff;
        }
        .section-title {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
            text-transform: uppercase;
        }
        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .content div {
            flex: 1;
            min-width: 300px;
            margin: 20px;
            padding: 20px;
            background: #333;
            border-radius: 10px;
        }
        .content div img {
            width: 50px;
            vertical-align: middle;
        }
        .content div h2 {
            display: inline-block;
            margin-left: 15px;
            font-size: 20px;
        }
        .content div p {
            margin-top: 10px;
            font-size: 16px;
        }
        .skills, .projects {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .skills div, .projects div {
            flex: 1;
            min-width: 250px;
            margin: 10px;
            padding: 10px;
            background: #444;
            border-radius: 5px;
            text-align: center;
        }
        .skills div i, .projects div i {
            font-size: 40px;
            color: #77aaff;
        }
        footer {
            text-align: center;
            padding: 10px;
            background: #333;
            color: #fff;
            margin-top: 20px;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.5);
        }
        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
            position: relative;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

</head>
<body>

<header>
    <h1>CV Futuriste</h1>
</header>

<nav>
<button id="openModalBtn1">Informations</button>
<button id="openModalBtn2">Expériences</button>

<!-- Modale 1 -->
<div id="myModal1" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Informations Personnelles</h2>
        <p>Contenu de la modale sur les informations personnelles.</p>
    </div>
</div>

<!-- Modale 2 -->
<div id="myModal2" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Expériences</h2>
        <p>Contenu de la modale sur les expériences.</p>
    </div>
</div>
   


    <a href="#education">Éducation</a>
    <a href="#skills">Compétences</a>
    <a href="#projects">Projets</a>
</nav>

<div class="container">
    <!-- Informations personnelles -->
    <section id="personal-info">
        <h2 class="section-title">Informations personnelles</h2>
        <div class="content">
            <div>
                <img src="https://via.placeholder.com/50" alt="Photo de profil">
                <h2><?php echo $personalInfo['name']; ?></h2>
                <p><i class="fas fa-envelope"></i> <?php echo $personalInfo['email']; ?></p>
                <p><i class="fas fa-phone"></i> <?php echo $personalInfo['phone']; ?></p>
                <p><i class="fas fa-map-marker-alt"></i> <?php echo $personalInfo['address']; ?></p>
            </div>
        </div>
    </section>

    <!-- Expérience professionnelle -->
    <section id="experience">
        <h2 class="section-title">Expérience professionnelle</h2>
        <div class="content">
            <?php foreach ($experience as $exp) : ?>
            <div>
                <img src="<?php echo $exp['logo']; ?>" alt="Logo de l'entreprise">
                <h2><?php echo $exp['company']; ?></h2>
                <p><?php echo $exp['role']; ?></p>
                <p><?php echo $exp['duration']; ?></p>
                <p><?php echo $exp['description']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Éducation -->
    <section id="education">
        <h2 class="section-title">Éducation</h2>
        <div class="content">
            <?php foreach ($education as $edu) : ?>
            <div>
                <img src="<?php echo $edu['logo']; ?>" alt="Logo de l'école">
                <h2><?php echo $edu['school']; ?></h2>
                <p><?php echo $edu['degree']; ?></p>
                <p><?php echo $edu['duration']; ?></p>
                <p><?php echo $edu['description']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Compétences -->
    <section id="skills">
        <h2 class="section-title">Compétences</h2>
        <div class="skills">
            <?php foreach ($skills as $skill) : ?>
            <div>
                <i class="<?php echo $skill['icon']; ?>"></i>
                <h3><?php echo $skill['name']; ?></h3>
                <p><?php echo $skill['description']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Projets -->
    <section id="projects">
        <h2 class="section-title">Projets</h2>
        <div class="projects">
            <?php foreach ($projects as $project) : ?>
            <div>
                <i class="<?php echo $project['icon']; ?>"></i>
                <h3><?php echo $project['name']; ?></h3>
                <p><?php echo $project['description']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>

<footer>
    <p>&copy; 2024 <?php echo $personalInfo['name']; ?>. Tous droits réservés.</p>
</footer>
<script>
    // Fonction pour ouvrir une modale
    function openModal(modalId) {
        document.getElementById(modalId).style.display = "flex";
    }

    // Fonction pour fermer une modale
    function closeModal(modal) {
        modal.style.display = "none";
    }

    // Bouton pour ouvrir la modale 1
    document.getElementById("openModalBtn1").onclick = function() {
        openModal("myModal1");
    }

    // Bouton pour ouvrir la modale 2
    document.getElementById("openModalBtn2").onclick = function() {
        openModal("myModal2");
    }

    // Obtenir tous les boutons de fermeture
    var closeButtons = document.getElementsByClassName("close");

    // Ajouter des événements de clic à chaque bouton de fermeture
    for (var i = 0; i < closeButtons.length; i++) {
        closeButtons[i].onclick = function() {
            closeModal(this.parentElement.parentElement);
        }
    }

    // Fermer la modale si l'utilisateur clique en dehors de celle-ci
    window.onclick = function(event) {
        var modals = document.getElementsByClassName("modal");
        for (var i = 0; i < modals.length; i++) {
            if (event.target == modals[i]) {
                closeModal(modals[i]);
            }
        }
    }
</script>

</body>
</html>