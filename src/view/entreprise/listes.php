<?php require('view/template/header.php'); 
echo(isset($_POST['modifier']));
?>


<h1 id="index-text">Welcome, <?php if(isset($_SESSION['username'])){
        echo explode(" ", $_SESSION['username'])[0];
    }else{
        echo 'Guest';
    } 
    ?> </h1>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">IDENTIFICATION DE L’ENTREPRISE</h2>
                        <a href="index.php?view=ajout" class="btn btn-success pull-right"><i class="fa fa-plus"></i> AJOUTER NOUVEAU L’ENTREPRISE</a>
                    </div>
                    

                           <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>date de création</th>
                                        <th>registre de commerce</th>
                                        <th>NINEA</th>
                                        <th>Page Web</th>
                                        <th>Nombre employer</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($entreprises as $entreprise){
                                    echo "<tr>";
                                        echo "<td>" . $entreprise['id_entreprise'] . "</td>";
                                        echo "<td>" . $entreprise['nom_entreprise'] . "</td>";
                                        echo "<td>" . $entreprise['date_creation'] . "</td>";
                                        echo "<td>" . $entreprise['rccm'] . "</td>";
                                        echo "<td>" . $entreprise['ninea'] . "</td>";
                                        echo "<td>" . $entreprise['page_web'] . "</td>";
                                        echo "<td>" . $entreprise['nombre_employe'] . "</td>";
                                        echo "<td>" . $entreprise['id_regime'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="read.php?id='. $entreprise['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="index.php?view=modification&id='. $entreprise['id_entreprise'] .'" class="mr-3" title="Modification" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="index.php?action=supprimer&id='. $entreprise['id_entreprise'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                                               ?>
                </div>
            </div>        
        </div>
    </div>
    <?php require('view/template/footer.php'); ?>