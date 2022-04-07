
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-3 mb-3"><Details> entreprise</Details></h1>
                    <div class="form-group">
                        <label>Nom</label>
                        <p><b><?php echo $entreprises['nom_entreprise']; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Coordonnees</label>
                        <p><b><?php echo $entreprises['coordonnees']?>"</b></p>
                    </div>
                    <div class="form-group">
                        <label>NINEA</label>
                        <p><b><?php echo $entreprises['ninea']; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Registre de commerce</label>
                        <p><b><?php echo $entreprises['rccm']; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>date de Creation</label>
                        <p><b><?php echo $entreprises['date_creation']; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Page Web</label>
                        <p><b><?php echo $entreprises['page_web']?>; </b></p>
                    </div>
                    <div class="form-group">
                        <label>Nombre d'employer</label>
                        <p><b><?php echo $entreprises['nombre_employe']; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>cotisations_sociales</label>
                        <p><b><?php
                                if ($entreprises['cotisations_sociales'] == 1) {
                                echo 'OUI';
                                }elseif ($entreprises['cotisations_sociales'] == 0) {
                                echo'NON';
                                }?></b></p>
                    </div>
                    <div class="form-group">
                        <label>organigramme</label>
                        <p><b><?php if ($entreprises['organigramme'] == 1) {
                                    echo 'OUI';
                                    }elseif ($entreprises['organigramme'] == 0) {
                                    echo'NON';
                                    } ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>contrat</label>
                        <p><b><?php if ($entreprises['contrat'] == 1) {
                                    echo 'OUI';
                                    }elseif ($entreprises['contrat'] == 0) {
                                    echo'NON';
                                    } ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Repondant</label>
                        <p><b><?php echo $repondantsID['prenom_repondant'].' '. $repondantsID['nom_repondant']; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Domaine</label>
                        <p><b><?php echo $domainesID['libelle_domaine']?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Dispositif de Formation</label>
                        <p><b><?php echo $dispositifsID['libelle_dispositif']?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Quartier</label>
                        <p><b><?php echo $quartiersID['nom_quartier']?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Regime</label>
                        <p><b><?php echo $regimeID['libelle_regime']?></b></p>
                    </div>
                    <p><a href="http://localhost/PHP/app_poo_mvc_mysql/index.php?view=listes" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
