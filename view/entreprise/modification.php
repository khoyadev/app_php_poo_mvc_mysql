<?php require('view/template/header.php'); 
//var_dump($entreprises);
echo(isset($_POST['modifier']));
?>
 

      <div class="col-6 m-5">
        <form method="POST" action="index.php?action=modification" >
            <div class="mb-3">
            <input type="hidden" name="id_entreprise" id="" value="<?= $entreprises['id_entreprise']?>">
              <label for="exampleInputEmail1" class="form-label">Nom de l'entreprise</label>

              <input type="text" class="form-control" id="nometreprise" name="nom_entreprise" value="<?= $entreprises['nom_entreprise']?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Coordonnees</label>
                <input type="text" class="form-control" id="coordonnees" name="coordonnees" value="<?= $entreprises['coordonnees']?>" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NINEA</label>
                <input type="text" class="form-control" id="Telephoneetreprise" name="ninea" value="<?= $entreprises['ninea']?>" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Registre de commerce</label>
                <input type="text" class="form-control" id="siegeetreprise" value="<?= $entreprises['rccm']?>"  name="rccm" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">date de Creation</label>
                <input type="date" class="form-control" id="siegeetreprise" value="<?= $entreprises['date_creation']?>" name="date_creation" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Page Web</label>
                <input type="text" class="form-control" id="siegeetreprise"  name="page_web" value="<?= $entreprises['page_web']?>" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre d'employer</label>
                <input type="number"  class="form-control" id="siegeetreprise" name="nombre_employe" value="<?= $entreprises['nombre_employe']?>" aria-describedby="emailHelp">
              </div>
            <div class="mb-3 form-check">
            <?php
                if ($entreprises['cotisations_sociales'] == 1) {
                echo '<input type="checkbox" class="form-check-input" name="cotisations_sociales" id="cotisations_sociales" checked>';
                }elseif ($entreprises['cotisations_sociales'] == 0) {
                echo'<input type="checkbox" class="form-check-input" name="cotisations_sociales" id="cotisations_sociales">';
                }
            ?>
              <label class="form-check-label" for="exampleCheck1">Votre entreprise prend-elle en compte les cotisations sociales et patronale?</label>
            </div>
            <div class="mb-3 form-check">
            <?php
                if ($entreprises['organigramme'] == 1) {
                echo '<input type="checkbox" class="form-check-input" name="organigramme" id="organigramme" checked>';
                }elseif ($entreprises['organigramme'] == 0) {
                echo'<input type="checkbox" class="form-check-input" name="organigramme" id="organigramme">';
                }
            ?>
                <label class="form-check-label" for="exampleCheck1">Avez-vous un organigramme ?</label>
              </div>
              <div class="mb-3 form-check">
                  <?php
                          if ($entreprises['contrat'] == 1) {
                        echo '<input type="checkbox" class="form-check-input" name="contrat" id="contrat" checked>';
                        }elseif ($entreprises['contrat'] == 0) {
                        echo'<input type="checkbox" class="form-check-input" name="contrat" id="contrat">';
                        }
                  ?>
                <label class="form-check-label" for="exampleCheck1">Avez-vous des contrat ?</label>
              </div>

              <select class="form-select mb-3" name="id_quartier" aria-label="Default select example">
                <option selected>Selectionner un quartier</option>
                <?php foreach ($quartiers as $quartier) {
                echo "<option value=".$quartier['id_quartier'].">".$quartier['nom_quartier']."</option>";}?>               
              </select>

              <select class="form-select mb-3" name="id_domaine" aria-label="Default select example">
                <option selected>Selectionner un domaine</option>
                <?php foreach ($domaines as $domaine) {
                    
                echo "<option value=".$domaine['id_domaine'].">".$domaine['libelle_domaine']."</option>";}?>               
              </select>

              <select class="form-select mb-3" name="id_repondant" aria-label="Default select example">
                <option selected>Selectionner un repondant</option>
                <?php foreach ($repondants as $repondant) {
                  echo "<option value=".$repondant['id_repondant'].">".$repondant['prenom_repondant']."</option>";}?>               
              </select>

              <select class="form-select mb-3" name="id_dispositif" aria-label="Default select example">
                <option selected>Selectionner un dispositif</option>
                <?php foreach ($dispositifs as $dispositif) {
                echo "<option value=".$dispositif['id_dispositif'].">".$dispositif['libelle_dispositif']."</option>";}?>               
              </select>

              <select class="form-select mb-3" name="id_regime" aria-label="Default select example">
                <option selected>Selectionner un regime</option>
                <?php foreach ($regimes as $regime) {
                echo "<option value=".$regime['id_regime'].">".$regime['libelle_regime']."</option>";}?>               
              </select>

              <input type="submit" class="button" value="modifier" name="modifier">
          </form>
      </div>
      <div class="col-6">
      <a href="index.php?view=listes" class="btn btn-success pull-right"><i class="fa fa-plus"></i> LISTES DES ENTREPRISE</a>
      </div>
      <?php require('view/template/footer.php');
      ?>