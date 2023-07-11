<?php if(!isset($regime)) $regime=array(); ?>
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Composition du Régime </h3>
            </div>
             <!--body of content -->
            <div class="row">
            <?php foreach ($regime as $rg) { ?>
             
               <!-- courbe de Vente -->
                      <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card" >
                          <div class="card-body">
                            <h4 class="card-title">Categorie : <?= $rg->nom_categorie ?> </h4>
                            <p class="card-title"><?= $rg->description ?></p>
                            <p class="card-title">Date de modification  :<?= $rg->date_insertion ? $rg->date_insertion : 'Aucune mise à  jour' ?></p>
                            <form action="<?= bu("CTA_Composition/insert_composition") ?>"  method="post"> 
                            <input type="hidden" name="repas" value="<?= $rg->id_repas ? $rg->id_repas : 0 ?>" >
                            <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Volaille(%)</label>
                                    <div class="col-sm-9">
                                    <input name="volaille" min="0" step="0.01" max="100" type="text" class="form-control" id="exampleInputEmail3"  value="<?= $rg->volaille ? $rg->volaille : 0 ?>" required>
                                    </div>
                            </div>
                            <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Poisson(%)</label>
                                    <div class="col-sm-9">
                                    <input name="poisson" min="0" step="0.01" max="100" type="text" class="form-control" id="exampleInputEmail3" value="<?= $rg->poisson ? $rg->poisson : 0 ?>" required>
                                    </div>
                            </div>
                            <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Viande(%)</label>
                                    <div class="col-sm-9">
                                    <input name="viande" min="0" step="0.01" max="100" type="text" class="form-control" id="exampleInputEmail3"  value="<?= $rg->viande ? $rg->viande : 0 ?>" required>
                                    </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Date d'insertion</label>
                                <div class="col-sm-9">
                                    <input name="date" type="datetime" class="form-control" id="exampleInputEmail3" value="<?= date('Y-m-d H:i:s') ?>" required>
                                </div>
                            </div>

                          
                            <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Modifier</button></div>
                            </form>
                          </div>
                        </div>
                        
                      </div>
                      
            
               <!-- Societe et action -->
               <?php } ?>
            </div>
               <!-- Other info -->
          </div>
  </body>
</html>