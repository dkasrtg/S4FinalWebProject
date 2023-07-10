
<div class="main-panel">
          <div class="content-wrapper">
          <div class="row">
             <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Insertion de nouvelle Activité</h4>
                            <form class="forms-sample" action="<?php echo site_url('CT_Entree_Sortie/insertE/');?>" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Activite:</label>
                                    <div class="form-group">
                                        <select name="xt" class="form-control" required>
                                          
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Objet</label>
                                    <input name="dateE" type="text" class="form-control" id="exampleInputEmail3" placeholder="Email" required>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Insérer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">TOous les activités</h4>
                    <p class="card-description"> Select class <code>.activités</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th>Activite</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> 1 </td>
                            <td> Herman Beck </td>
                            <td>Supprimer</td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>


        </div>
  </div>
         