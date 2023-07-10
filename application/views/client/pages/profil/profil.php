
<?php if(!isset($client)) $client=array(); ?>
<?php if(!isset($donnee)) $donnee=array(); ?>
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
                                            <td><?= $donnee['nom'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Taille</th>
                                            <td><?= $donnee['nom'] ?></td>
                                            <br>
                                        </tr>
                                        <tr>
                                            <th>Poids</th>
                                            <td><?= $donnee['nom'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Date d'insertion</th>
                                            <td><?= $donnee['nom'] ?></td>
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
                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">Taille</label><input type="email" name="taille"  id="hf-email" name="hf-email" class="form-control"  placeholder="Entrez votre taille"></div>
                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">Email</label><input type="email"  name="poids" id="hf-email" name="hf-email" class="form-control"  placeholder="Entrez votre poids"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Genre</label>
                                </div>
                                <div class="form-check">
                                    <div class="radio">
                                        <label for="radio1" class="form-check-label">
                                            <input type="radio" id="radio1" name="genre" value="homme" class="form-check-input"> Homme
                                        </label>
                                    </div>
                                    <hr>
                                    <div class="radio">
                                        <label for="radio2" class="form-check-label">
                                            <input type="radio" id="radio2" name="genre" value="femme" class="form-check-input"> Femme
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row form-group">
                                        <div class="col col-md-6"><label for="hf-email" class=" form-control-label">Taille</label><input type="date" name="date"  id="hf-email" name="hf-email" class="form-control"  placeholder="Entrez votre taille"></div>
                            </div>

                            <div class="form-actions form-group"><button type="submit" class="btn btn-secondary btn-sm">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>    
        </div>


        <div class="row">

        </div>


       
       
        
    <!-- /#add-category -->
    
    <!-- .animated -->
</div>
<!-- /.content -->
