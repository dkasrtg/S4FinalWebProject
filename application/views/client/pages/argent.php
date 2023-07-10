<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Argent</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Solde : <?= $solde['montant']?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <?php
            for ($i = 0; $i < count($liste_code); $i++) {
            ?>
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <strong class="card-title text-light"><?= $liste_code[$i]['code'] ?></strong>
                        </div>
                        <div class="card-body text-white bg-danger">
                            <p class="card-text text-light"><?= $liste_code[$i]['argent'] ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Rechargement <span style="color:red;font-weight:bolder;font-family:Arial;font-size:small"><?= $error ?></span></div>
                    <div class="card-body card-block">
                        <form action="<?php bu('CTC_Argent/recharger') ?>" method="get" class="">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" id="username" name="code" placeholder="Code" class="form-control">
                                </div>
                            </div>
                            <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Recharger</button></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Rechargement en attente</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">Montant</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < count($rechargement_en_attente); $i++) {
                                ?>
                                    <tr>
                                        <th scope="row"><?= $rechargement_en_attente[$i]['id_recharge_client'] ?></th>
                                        <td><?= $rechargement_en_attente[$i]['code'] ?></td>
                                        <td><?= $rechargement_en_attente[$i]['argent'] ?></td>
                                        <td><?= $rechargement_en_attente[$i]['date_demande'] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Mes Transactions</strong>
                    </div>
                    <div class="card-body">
                        <div id="bootstrap-data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="bootstrap-data-table_length"><label>Show <select name="bootstrap-data-table_length" aria-controls="bootstrap-data-table" class="form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="50">50</option>
                                                <option value="-1">All</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="bootstrap-data-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="bootstrap-data-table"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 152.2px;">Date</th>
                                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 251.2px;">Description</th>
                                                <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 107.2px;">Valeur</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            for ($i = 0; $i < count($transactions); $i++) {
                                            ?>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1"><?= $transactions[$i]['date_transaction']?></td>
                                                    <td><?= $transactions[$i]['description']?></td>
                                                    <td><?= $transactions[$i]['montant']?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="bootstrap-data-table_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="bootstrap-data-table_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="bootstrap-data-table_previous"><a href="#" aria-controls="bootstrap-data-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                            <li class="paginate_button page-item active"><a href="#" aria-controls="bootstrap-data-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="bootstrap-data-table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="bootstrap-data-table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="bootstrap-data-table" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="bootstrap-data-table" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="bootstrap-data-table" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                            <li class="paginate_button page-item next" id="bootstrap-data-table_next"><a href="#" aria-controls="bootstrap-data-table" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div><!-- .row -->
</div><!-- .animated -->