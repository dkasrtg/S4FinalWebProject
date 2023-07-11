<?php if(!isset($latest)) $latest=array(); ?>
<?php if(!isset($proposition)) $proposition=array(); ?>
<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <p><h3>Indice de Masse Corporelle : </h3></p>
                            </div>
                        </div>

                        <div class="stat-content">
                                <div style="margin-left: 1em;" class="text-left dib">
                                <div class="stat-heading">Taux  d'IMC  : <?= $imc ? $imc : '' ?></div>
                                    <div class="stat-heading">Votre Poids Actuel  : <?= $latest ? $latest['poids'] : '' ?>  Kg</div>
                                    <div class="stat-heading">Votre Taille Actuel : <?= $latest ? $latest['taille'] : '' ?> m</div>
                                    <div class="stat-heading"><strong>Poids idéal :</strong> <?= $idealp ? $idealp: '' ?> Kg et  <strong>IMC idéal:</strong> <?= $idealc ? $idealc: '' ?></div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- /.orders -->
        <!-- To Do and Live Chat -->
        <div class="row">
            <div class="col-lg-12">
                    <div class="card">
                            <div class="card-header">
                                <h4>IMC Tab</h4>
                            </div>
                            <div class="card-body">
                                <div class="default-tab">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Indication</a>
                                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Suggestion</a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Info </a>
                                        </div>
                                    </nav>
                                        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                            <?php if (!empty($imc)) { ?>
                                                <p>Selon votre profil actuel, votre IMC (Indice de Masse Corporelle) est de <?= $imc ? $imc : '' ?>.
                                                <p>L'IMC IDEAL se situe entre <?= $proposition ? $proposition['min'] : '' ?>   et <?= $proposition ? $proposition['max'] : '' ?>.Selon le calcul de votre indice de masse corporel (IMC) actuel, votre poids est <?= $proposition ? $proposition['position'] : '' ?> par rapport à votre taille. Si vous souhaitez  plus vous informer veuiller en parler à un  diétheticien  .
                                                Notre programme  va vous permettre d’adopter de bonnes habitudes : nutrition, activité physique et bien-être adaptées à votre rythme de vie, grâce au suivi régulier de votre coach personnel.</p>
                                            <?php } ?>
                                            </div>
                                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                <p><?= $proposition ? $proposition['conseil'] : '' ?></p>
                                            </div>
                                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                <p>L’indice de masse corporelle (IMC) permet d’évaluer rapidement votre corpulence simplement avec votre poids et votre taille, quel que soit votre sexe. Calculez rapidement votre IMC et découvrez dans quelle catégorie vous vous situez.
                                                   L’indice de masse corporelle (IMC) est le seul indice validé par l’Organisation mondiale de la santé pour évaluer la corpulence d’un individu et donc les éventuels risques pour la santé. L’IMC permet de déterminer si l’on est situation de maigreur, de surpoids ou d’obésité par exemple.
                                                   En anglais on parle de BMI pour Body Mass Index.</p>
                                            </div>
                                        </div>

                                </div>
                            </div>
                    </div>
            </div>
        </div>
      
        
    <!-- /#add-category -->
    </div>
    <!-- .animated -->
</div>
<!-- /.content -->
