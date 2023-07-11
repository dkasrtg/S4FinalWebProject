<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class=row>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Insertion.</strong> Commande
                </div>
                <div class="card-body card-block">
                    <form action="<?= bu('CTC_Commande/NewCommande')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-2"><label class=" form-control-label">Régime</label></div>
                            <div class="col-12 col-md-12">
                                <select name="id_repas" class="form-control">
                                    <?php foreach($repass as $repas){ ?>
                                        <option value="<?= $repas->id_repas; ?>"><?= $repas->description; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-2"><label class=" form-control-label">Date</label></div>
                            <div class="col-12 col-md-12"><input type="date" name="date_commande" class="form-control"></div>
                        </div>
                        <br>
                        <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Valider</button></div>
                    </form>
                </div>
            </div>   
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Suivi de Commande</strong>
                </div>
                <div class="table-stats order-table ov-h">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th class="serial">#</th>
                                <th>#Commande</th>
                                <th>Regime</th>
                                <th>Datede Commande</th>
                                <th>Etat </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="serial">1.</td>
                                <td> #5469 </td>
                                <td>  <span class="name">Louis Stanley</span> </td>
                                <td> <span class="product">iMax</span> </td>
                                <td>
                                    <span class="badge badge-complete">payement</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="serial">2.</td>
                                <td> #5468 </td>
                                <td>  <span class="name">Gregory Dixon</span> </td>
                                <td> <span class="product">iPad</span> </td>
                                <td>
                                        <span class="badge badge-pending">En attente</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- /.table-stats -->
            </div>
        </div>
    </div>
    <!-- .animated -->
</div>
<!-- /.content -->
