<?php if(!isset($latest)) $latest=array(); ?>
<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                                <strong>Formulaire </strong>d'Insertion
                    </div>
                    <div class="card-body card-block">
                        <form action="<?= bu("CTC_Donnee_Client/update_donnee") ?>" method="post" class="form-horizontal">
                            <input type="hidden" name="update" value="<?= $update ? $update['id_donnees_client'] : 0 ?>" >
                            <div class="row form-group">
                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">Taille</label><input type="number" name="taille" step="0.01" min="1" id="hf-email" name="hf-email" class="form-control"  placeholder="Entrez votre taille" value="<?= $update ? $update['taille'] : '' ?>"></div>
                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">Poids</label><input type="number"  name="poids" min="20" id="hf-email" name="hf-email" class="form-control"  placeholder="Entrez votre poids"  value="<?= $update ? $update['poids'] : '' ?>"></div>
                            </div>

                            <div class="row form-group">
                                    <div class="col col-md-6">
                                            <label for="hf-email" class=" form-control-label">Taille</label>
                                            <select name="genre" class="form-control" required>
                                                    <option value="1" <?= ($update && $update['genre'] == 1) ? 'selected' : '' ?>>Homme</option>
                                                    <option value="2" <?= ($update && $update['genre'] == 2) ? 'selected' : '' ?>>Femme</option>
                                            </select>
                                    </div>
                                    <div class="col col-md-6"><label for="hf-email" class=" form-control-label">Date</label><input type="date" name="date"  id="hf-email" name="hf-email" class="form-control"  value="<?= $update ? $update['date_donnees'] : '' ?>"></div>
                            </div>

                            <div class="form-actions form-group"><button type="submit" class="btn btn-secondary btn-sm">Modifier</button></div>
                        </form>
                    </div>
                </div>
            </div>    
        </div>
    <!-- /#add-category -->
    
    <!-- .animated -->
</div>
<!-- /.content -->
