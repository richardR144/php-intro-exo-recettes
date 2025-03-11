<?php
// Variables PHP
$loggedUser = "Richard R"; // Prénom de l'utilisateur connecté
$isProfileCompleted = true; // Indique si le profil de l'utilisateur est complété
$recipes = ["Carbonara", "Tajine", "Paëlla"]; // Tableau de recettes
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Evil" />
    <meta name="description" content="exercice float pérou" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="css/style.css" />
    <title>exo php intro recettes</title>
</head>
<body>
    <header> 
        <h1>Recettes</h1> 
    <!-- Affiche le nom de l'utilisateur connecté-->
        <p>Utilisateur connecté : <?php echo $loggedUser; ?></p> 
        <!--Affiche si le profil est complété--> 
        <p>Profil complété : <?php echo $isProfileCompleted ? 'Oui' : 'Non'; ?></p>  
        <ul>
            <li>Carbonara</li>
            <li>Tajine</li>
            <li>Paëlla</li>
        </ul>
    </header>
    <?php foreach ($recipes as $recipe): ?>       <!--je prends mon tableau et pour chaque tour de boucle(foreach=tableauet,valeur=itération) -->
                <li><?php echo $recipe; ?></li>   <!--je vais afficher la recette-->
            <?php endforeach; ?>                  <!--je ferme ma boucle-->
    <main>
        <div class="carbonara"> <!--je crée une div avec une classe carbonara-->
            <h2>Carbonara</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQj3q7sSxIxIcccSDR7CkhkggSDAUjCaowkYg&s" alt="Carbonara">
            <p>Cuire les pâtes : Dans une casserole d'eau bouillante salée, fais cuire les pâtes selon le temps indiqué sur le paquet. Réserve une petite tasse d'eau de cuisson avant de les égoutter.</p>  
        </div>
        <div class="tajine">
            <h3>Tajine</h3>
                <img src="https://png.pngtree.com/png-vector/20231229/ourmid/pngtree-tasty-tajine-dish-with-vegetables-chickpeas-meat-and-couscous-captured-on-png-image_11246279.png" alt="Tajine">
            <p>Préparer les ingrédients : Dans une grande poêle ou une poêle à paella, fais chauffer l'huile d'olive. Fais revenir les morceaux de poulet jusqu'à ce qu'ils soient dorés. Réserve.</p>
        </div>
        <div class="paella">
            <h4>Paëlla</h4>
                <img class="paella" src="https://img.freepik.com/photos-premium/paella-espagnole-traditionnelle-fruits-mer-dans-poele-frire-fond-blanc_222237-372.jpg?semt=ais_hybrid" alt="Paëlla">
                    <p>Préparer les ingrédients : Dans une grande poêle ou une poêle à paella, fais chauffer l'huile d'olive. Fais revenir les morceaux de poulet jusqu'à ce qu'ils soient dorés. Réserve.</p>
        </div>    
    </main>
    <footer>
        <h5>MIAM</h5>
    </footer>
</body>
</html>