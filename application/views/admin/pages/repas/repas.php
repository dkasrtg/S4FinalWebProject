<?php if(!isset($repas)) $repas=array(); ?>
<?php if(!isset($categ)) $categ=array(); ?>
<div class="main-panel">
    <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Régime alimentaire </h3>
          </div>
          <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Insertion de Nouvelle Régime</h4>
                                        <form class="forms-sample" action="<?php echo site_url('CTA_Repas/insert_repas');?>" method="POST">
                                            <div class="form-group row">
                                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Catégorie</label>
                                                <div class="col-sm-9">
                                                    <select name="categ" class="form-control" required>
                                                            <?php foreach ($categ as $c) { ?>
                                                                <option value="<?= $c->id_categorie_repas ?>"><?= $c->nom_categorie ?></option>
                                                            <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Description</label>
                                                <div class="col-sm-9">
                                                <input name="desc" type="text" class="form-control" id="exampleInputEmail3" placeholder="description" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Objectif</label>
                                                <div class="col-sm-9">
                                                    <select name="obj" class="form-control" required>
                                                            <option value="1">Gagner</option>
                                                            <option value="-1">Perdre</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Prix</label>
                                                <div class="col-sm-9">
                                                <input name="prix" type="number" class="form-control" min="0" placeholder="prix" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label>
                                                <div class="col-sm-9">
                                                <input name="poids" type="number" class="form-control" min="0" placeholder="poids" required>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Insérer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Séléction de régime</h4>
                                        <form class="forms-sample" action="<?php echo site_url('CTA_Repas/select_repas');?>" method="POST">
                                            <div class="form-group row">
                                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Catégorie</label>
                                                <div class="col-sm-9">
                                                    <select name="categ" class="form-control" required>
                                                            <?php foreach ($categ as $c) { ?>
                                                                <option value="<?= $c->id_categorie_repas ?>"><?= $c->nom_categorie ?></option>
                                                            <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Objectif</label>
                                                <div class="col-sm-9">
                                                    <select name="obj" class="form-control" required>
                                                            <option value="1">Gagner</option>
                                                            <option value="-1">Perdre</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Prix</label>
                                                <div class="col-sm-9">
                                                <input name="prix" type="number" class="form-control" min="0" placeholder="prix" required>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Sélectionnez</button>
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
         