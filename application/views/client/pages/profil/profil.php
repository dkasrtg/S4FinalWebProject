
<?php if(!isset($client)) $client=array(); ?>
<?php if(!isset($donnee)) $donnee=array(); ?>
<?php if(!isset($latest)) $latest=array(); ?>
<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-user"></i><strong class="card-title pl-2">Information personnelle</strong>
                    </div>
                    <div class="card-body">
                            <div class="mx-auto d-block">
                                <img class="rounded-circle mx-auto d-block" src="<?= base_url("assetsClient/images/admin.jpg") ?>" alt="Card image cap">
                                        <h5 class="text-sm-center mt-2 mb-1">Info : <?= $client['nom'] ?>  <?= $client['prenom'] ?></h5>
                                        <hr>
                                        <h5 class="text-sm-center mt-2 mb-1">Date de naissance : <?= $client['date_de_naissance'] ?></h5>
                                        <hr>
                                        <h5 class="text-sm-center mt-2 mb-1">Adresse : <?= $client['mail'] ?></h5>
                                        <hr>
                                        <h5 class="text-sm-center mt-2 mb-1">Contact : <?= $client['tel'] ?></h5>
                            </div>
                            <hr>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Donnée Actuelle</strong>
                        </div>
                        <br>
                        <div class="card-body">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th>Genre</th>
                                            <td><?= $latest ? $latest['genre'] : '' ?></td>
                                        </tr>
                                        <tr>
                                            <th>Taille ( métre)</th>
                                            <td><?= $latest ? $latest['taille'] : '' ?></td>
                                            <br>
                                        </tr>
                                        <tr>
                                            <th>Poids (Kilos)</th>
                                            <td><?= $latest ? $latest['poids'] : '' ?></td>
                                        </tr>
                                        <tr>
                                            <th>Date d'insertion</th>
                                            <td><?= $latest ? $latest['date_donnees'] : '' ?></td>
                                        </tr>
                                        <br>
                                    </tbody>
                                </table>
                         </div>
                </div>
            </div>            
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                                <strong>Formulaire </strong>d'Insertion
                    </div>
                    <div class="card-body card-block">
                        <form action="<?= bu("CTC_Donnee_Client/insert_donnee") ?>" method="post" class="form-horizontal">
                            <div class="row form-group">
                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">Taille</label><input type="number" name="taille" step="0.01" min="1" id="hf-email" name="hf-email" class="form-control"  placeholder="Entrez votre taille" value="<?= $latest ? $latest['taille'] : '' ?>"></div>
                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">Poids</label><input type="number"  name="poids" min="20" id="hf-email" name="hf-email" class="form-control"  placeholder="Entrez votre poids"  value="<?= $latest ? $latest['poids'] : '' ?>"></div>
                            </div>

                            <div class="row form-group">
                                    <div class="col col-md-6">
                                            <label for="hf-email" class=" form-control-label">Taille</label>
                                            <select name="genre" class="form-control" required>
                                                    <option value="1" <?= ($latest && $latest['genre'] == 1) ? 'selected' : '' ?>>Homme</option>
                                                    <option value="2" <?= ($latest && $latest['genre'] == 2) ? 'selected' : '' ?>>Femme</option>
                                            </select>
                                    </div>
                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">Date</label><input type="date" name="date"  id="hf-email" name="hf-email" class="form-control"  value="<?= $latest ? $latest['date_donnees'] : '' ?>"></div>
                            </div>

                            <div class="form-actions form-group"><button type="submit" class="btn btn-secondary btn-sm">Inserer</button></div>
                        </form>
                    </div>
                </div>
            </div>    
        </div>


        <div class="row">
        <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Table de suivi:</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                      <th scope="col">Taille</th>
                                      <th scope="col">Poids</th>
                                      <th scope="col">Période</th>
                                      <th></th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($donnee as $d) { ?>
                                    <tr>
                                        <th scope="row"><?= $d->taille ?></th>
                                        <td><?= $d->poids ?></td>
                                        <td><?= $d->date_donnees ?></td>
                                        <td><a  style="color:blue" href="<?= bu("CTC_Donnee_Client/load_update") ?>?donnee=<?= $d->id_donnees_client ?>" alt="oups!">Modifier</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
        </div>  


       
       
        
    <!-- /#add-category -->
    
    <!-- .animated -->
</div>
<!-- /.content -->
