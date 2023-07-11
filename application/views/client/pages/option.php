<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Option</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-<?= $class?>">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0 text-light">
                            <p class="text-light">Vous etes dans l option <?= $option?></p>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-8" <?= $hid?>>
                <div class="card bg-warning">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0 text-light">
                            <p class="text-light">L' option Gold permet d' avoir une remose de 15% sur toutes les regimes!!!!</p>
                            <p class="text-light">Achetez une fois pour 3000 et profiter a jamais!!!!</p>
                            <footer class="blockquote-footer text-light"><form action="<?php bu2('CTC_Option/move')?>" method="get"><button class="btn btn-primary">Acheter l' option gold</button></form></footer>
                            <h6 style="color:red"><?=$error ?></h6>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div><!-- .row -->
        
    </div><!-- .animated -->
</div>