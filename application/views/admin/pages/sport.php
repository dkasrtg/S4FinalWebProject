<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Activites sporftifs </h3>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Liste des activites sportifs</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Nom </th>
                                        <th> Categorie </th>
                                        <th> Affectation (poids) </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($activite_sportives as $activite_sportive) { ?>
                                        <tr>
                                            <td><?=  $activite_sportive['id_activite_sportive']?></td>
                                            <td><?=  $activite_sportive['nom']?></td>
                                            <td><?=  $activite_sportive['objectif_letter']?></td>
                                            <td><?=  $activite_sportive['affectation_poids']?></td>
                                            <td>
                                                <i class="mdi mdi-delete-forever">
                                                    <a href="<?= bu('CTA_Sport/delete?id_activite_sportive='.$activite_sportive['id_activite_sportive'])?>"> Supprimer</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nouvelle Activite Sportif</h4>
                        <form action="<?= bu('CTA_Sport/store')?>" method="post" class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputName1">Nom</label>
                                <input name="nom" type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Categorie</label>
                                <select name="objectif" class="form-control" id="exampleSelectGender">
                                    <option>Augmentant</option>
                                    <option>Diminuant</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Affectation sur le poids</label>
                                <input name="affectation_poids" type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Creer</button>
                        </form>
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