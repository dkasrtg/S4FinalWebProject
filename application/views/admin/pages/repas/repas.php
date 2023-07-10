<?php if(!isset($repas)) $repas=array(); ?>
<div class="main-panel">
          <div class="content-wrapper">
          <div class="row">
             <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Insertion de nouvelle repas</h4>
                            <form class="forms-sample" action="<?php echo site_url('CT_Entree_Sortie/insertE/');?>" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Categorie:</label>
                                    <div class="form-group">
                                        <select name="xt" class="form-control" required>
                                          
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Description</label>
                                    <input name="dateE" type="text" class="form-control" id="exampleInputEmail3" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Objectif </label>
                                    <input name="qtt" type="number" min="0" class="form-control" id="exampleInputPassword4" placeholder="Quantite" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Prix </label>
                                    <input name="prix" type="number" class="form-control" min="0" placeholder="prix" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Affectation de poids </label>
                                    <input name="prix" type="number" class="form-control" min="0" placeholder="prix" required>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Insérer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Historique</h4>
                            <p class="card-description"> histS <code>.Société</code>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-dark">
                                    <thead>
                                    <tr>
                                        <th>Repas</th>
                                        <th>Categorie</th>
                                        <th>Prix</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- Apres selection -->
                                        <p><strong>Produit :</strong></p>
                                        <?php foreach ($repas as $repas_item) { ?>
                                                <tr>
                                                    <td><?= $repas_item->description ?></td>
                                                    <td><?= $repas_item->nom_categorie ?></td>
                                                    <td><?= $repas_item->prix ?></td>
                                                    <td><a href="" alt="oups!">Supprimer</a></td>
                                                </tr>
                                            <?php } ?>
                                    <!-- Initial -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>


            
          </div>
  </div>
         