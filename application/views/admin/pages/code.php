<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Code </h3>
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
                                        <th> Code </th>
                                        <th> Montant </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> 1 </td>
                                        <td> 101232141041 </td>
                                        <td> 20 </td>
                                        <td><i class="mdi mdi-check">Vendre</i></td>
                                    </tr>
                                    <tr>
                                        <td> 1 </td>
                                        <td> 101232141041 </td>
                                        <td> 20 </td>
                                        <td><i class="mdi mdi-check">Vendre</i></td>
                                    </tr>
                                    <tr>
                                        <td> 1 </td>
                                        <td> 101232141041 </td>
                                        <td> 20 </td>
                                        <td><i class="mdi mdi-check">Vendre</i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Liste des Codes Valables</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Code </th>
                                        <th> Montant </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> 1 </td>
                                        <td> 101232141041 </td>
                                        <td> 20 </td>
                                        <td><i class="mdi mdi-delete-forever">Supprimer</i></td>
                                    </tr>
                                    <tr>
                                        <td> 1 </td>
                                        <td> 101232141041 </td>
                                        <td> 20 </td>
                                        <td><i class="mdi mdi-delete-forever">Supprimer</i></td>
                                    </tr>
                                    <tr>
                                        <td> 1 </td>
                                        <td> 101232141041 </td>
                                        <td> 20 </td>
                                        <td><i class="mdi mdi-delete-forever">Supprimer</i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Liste des Codes Achetes par les Clients</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Code </th>
                                        <th> Montant </th>
                                        <th> Client </th>
                                        <th> Date </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> 1 </td>
                                        <td> 101232141041 </td>
                                        <td> 20 </td>
                                        <td> Rakoto Koto </td>
                                        <td> 2022-02-02 </td>
                                        <td><i class="mdi mdi-check">Valider</i></td>
                                    </tr>
                                    <tr>
                                        <td> 1 </td>
                                        <td> 101232141041 </td>
                                        <td> 20 </td>
                                        <td> Rakoto Koto </td>
                                        <td> 2022-02-02 </td>
                                        <td><i class="mdi mdi-check">Valider</i></td>
                                    </tr>
                                    <tr>
                                        <td> 1 </td>
                                        <td> 101232141041 </td>
                                        <td> 20 </td>
                                        <td> Rakoto Koto </td>
                                        <td> 2022-02-02 </td>
                                        <td><i class="mdi mdi-check">Valider</i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Generer des codes</h4>
                        <form class="forms-sample" action="<?php bu('CTA_Code/creer')?>" method="get">
                            <div class="form-group">
                                <label for="exampleInputName1">Nombre</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Nombre" name="nombre">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Montant</label>
                                <select class="form-control" id="exampleSelectGender" name="montant">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Generer</button>
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