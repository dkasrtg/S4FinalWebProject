<?php if(!isset($repas)) $repas=array(); ?>
<?php if(!isset($categ)) $categ=array(); ?>
<div class="main-panel">
          <div class="content-wrapper">
          <div class="row">
             <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Insertion de nouvelle repas</h4>
                            <form class="forms-sample" action="<?php echo site_url('CTA_Repas/insert_repas');?>" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Categorie:</label>
                                    <div class="form-group">
                                        <select name="categ" class="form-control" required>
                                            <?php foreach ($categ as $c) { ?>
                                              <option value="<?= $c->id_categorie_repas ?>"><?= $c->nom_categorie ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Description</label>
                                    <input name="desc" type="text" class="form-control" id="exampleInputEmail3" placeholder="description" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Objectif </label>
                                      <select name="obj" class="form-control" required>
                                            <option value="1">Gagner</option>
                                            <option value="-1">Perdre</option>
                                        </select>
                                    </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Prix </label>
                                    <input name="prix" type="number" class="form-control" min="0" placeholder="prix" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Affectation de poids </label>
                                    <input name="poids" type="number" class="form-control" min="0" placeholder="poids" required>
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
                            <h4 class="card-title">Regime</h4>
                            <p class="card-description"> repas <code>.Regime</code>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-dark">
                                    <thead>
                                    <tr>
                                        <th>Regime</th>
                                        <th>Categorie</th>
                                        <th>Prix(Euro)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- Affichage -->
                                        <p><strong>Produit :</strong></p>
                                        <?php foreach ($repas as $repas_item) { ?>
                                                <tr>
                                                    <td><?= $repas_item->description ?></td>
                                                    <td><?= $repas_item->nom_categorie ?></td>
                                                    <td><?= $repas_item->prix ?></td>
                                                    <td><a href="<?= bu("CTA_Repas/delete_repas") ?>?repas=<?= $repas_item->id_repas ?>" alt="oups!">Supprimer</a></td>
                                                </tr>
                                            <?php } ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>


            
          </div>
  </div>
         