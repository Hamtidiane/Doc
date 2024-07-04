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
            min-height: 511px;
            border-bottom: #77aaff 3px solid;
            background-image: url(assets/image/1000_F_764232615_GBOmFJQIGoWOTBRoiG6oJJX8MQjss9AV.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        header h1 {
            text-align: center;
            text-transform: uppercase;
            margin: 0;
        }
        nav {
            display: flex;
            justify-content: space-around;
            padding: 46px;
            background: #555;
        }
        nav button {
            color: #fff;
            background: #333;
            text-decoration: none;
            padding: 15px;
            margin: 5px;
            border-radius: 100%;
            border: none;
            cursor: pointer;
        }
        nav button:hover {
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
            width: 201px;
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
        i {
            padding-right: 10px;
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
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background-color: #fff;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
            position: relative;
            text-align: center;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
        }
    </style>
</head>
<body>

<header>
    <h1>CV Futuriste</h1>
</header>

<nav>
    <button id="openModalBtn1">Informations</button>
    <button id="openModalBtn2">Expériences</button>
    <button id="openModalBtn3">Éducation</button>
    <button id="openModalBtn4">Compétences</button>
</nav>

<!-- Modale 1 -->
<div id="myModal1" class="modal">
    <div class="modal-content">
        <span class="close" data-modal="myModal1">&times;</span>
        <h2>Informations Personnelles</h2>
        <p>Contenu de la modale sur les informations personnelles.</p>
    </div>
</div>

<!-- Modale 2 -->
<div id="myModal2" class="modal">
    <div class="modal-content">
        <span class="close" data-modal="myModal2">&times;</span>
        <h2>Expériences</h2>
        <p>Contenu de la modale sur les expériences.</p>
    </div>
</div>

<!-- Modale 3 -->
<div id="myModal3" class="modal">
    <div class="modal-content">
        <span class="close" data-modal="myModal3">&times;</span>
        <h2>Éducation</h2>
        <p>Contenu de la modale sur l'éducation.</p>
    </div>
</div>

<!-- Modale 4 -->
<div id="myModal4" class="modal">
    <div class="modal-content">
        <span class="close" data-modal="myModal4">&times;</span>
        <h2>Compétences</h2>
        <p>Contenu de la modale sur les compétences.</p>
    </div>
</div>

<div class="container">
    <!-- Informations personnelles -->
    <section id="personal-info">
        <h2 class="section-title">Informations personnelles</h2>
        <div class="content">
            <div>
                <img src="assets/image/Cheick-Hamadou-DIABATE.jpg" alt="Photo de profil">
                <h2><?php echo $personalInfo['name']; ?></h2>
                <p><i class="fas fa-envelope"></i> <?php echo $personalInfo['email']; ?>hamtidiane@gmail.com</p>
                <p><i class="fas fa-phone"></i> <?php echo $personalInfo['phone']; ?>06 14 80 72 90</p>
                <p><i class="fas fa-map-marker-alt"></i> <?php echo $personalInfo['address']; ?>08 Allée Auguste Rodin 74600-ANNECY</p>
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
    </