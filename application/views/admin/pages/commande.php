<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Commande </h3>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Liste des Codes Crees</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Client </th>
                                        <th> Date Commande </th>
                                        <th> Description </th>
                                        <th> Prix </th>
                                        <th> Remise </th>
                                        <th> Prix avec Remise </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    for ($i=0; $i < count($commandes); $i++) { 
                                        ?>
                                        <tr>
                                        <td><?= $i?></td>
                                        <td><?= $commandes[$i]['nom'].' '.$commandes[$i]['prenom']?></td>
                                        <td><?= $commandes[$i]['date_commande']?></td>
                                        <td><?= $commandes[$i]['description']?></td>
                                        <td><?= $commandes[$i]['prix_total']?></td>
                                        <td><?= $commandes[$i]['remise']?></td>
                                        <td><?= ($commandes[$i]['prix_total']-($commandes[$i]['remise']* $commandes[$i]['prix_total']/100))?></td>
                                        <td><form action="<?php bu2('CTA_Commande/valider')?>" method="get">
                                            <input type="hidden" name="id_commande_repas" value="<?= $commandes[$i]['id_commande_repas']?>">
                                            <input type="date" name="date">
                                            <button type="submit" class="btn btn-primary btn-fw">Valider et livrer</button>
                                        </form></td>
                                    </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>