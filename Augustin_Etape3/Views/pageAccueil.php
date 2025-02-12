<!-- corps de la page d'accueil qui prendar place dans le main de base.php -->

<!-- !!! corriger le chemin de images ! -->

<h1>Liste des écoles répertoriées</h1>
        
<div class="flexible wrap space-around">
    <?php foreach ($schools as $school) : ?>
        <div class="border card">
            <h2 class="center"><?= $school->schoolNom?></h2>
            <div>
                <div class="flexible blocImageEcole">
                    <img src="<?= $school->schoolImage ?>" alt="photo de l'école" >
                </div>
                <div class="center">
                    <p><span><?= $school->schoolAdresse?> - </span> - <span><?= $school->schoolCodePostal . " " . $school->schoolVille?></span></p>
                    <h3><?= $school->schoolNumero?></h3>
                    <!--
                    <p><span> Rue de la pépinière 101</span> - <span>Namur</span></p>
                    <h3>081729011>
                    -->
                    <a href="voirEcole.php" class="btn btn-page">Voir l'école</a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>