<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page avec Modale</title>
    <!-- Intégration de Font Awesome pour les icônes (si nécessaire) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Styles de base pour le bouton et la modale */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            color: white;
        }
        /* Modale Styles */
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

<!-- Bouton pour ouvrir la modale -->
<button id="openModalBtn">Ouvrir la Modale</button>

<!-- La modale -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Voici une Modale</h2>
        <p>Contenu de la modale. Vous pouvez ajouter du texte, des images, des formulaires, etc.</p>
</div>

<!-- JavaScript pour la logique de la modale -->
<script>
    // Obtenez la modale
    var modal = document.getElementById("myModal");

    // Obtenez le bouton qui ouvre la modale
    var btn = document.getElementById("openModalBtn");

    // Obtenez l'élément <span> qui ferme la modale
    var span = document.getElementsByClassName("close")[0];

    // Lorsque l'utilisateur clique sur le bouton, ouvrez la modale
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // Lorsque l'utilisateur clique sur <span> (x), fermez la modale
    span.onclick = function() {
        modal.style.display = "none";
    }

    // Lorsque l'utilisateur clique en dehors de la modale, fermez-la
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>