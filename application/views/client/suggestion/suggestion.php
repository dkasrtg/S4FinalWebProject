<link rel="stylesheet" href="<?= base_url('assetsClient/ncss/suggestion.css') ?>">

<!-- Content -->
<div class="content">

    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <strong class="card-title pl-2">User information</strong>
            </div>
            <div class="card-body">
                    <div class="stat-content">
                        <div style="margin-left: 1em;" class="text-left dib">
                            <div class="stat-heading"><p>Taux  d'IMC  : <?= $imc ? $imc : '' ?></p></div>
                                <div class="stat-heading"><strong>Poids idéal :</strong> <?= $idealp ? $idealp: '' ?> Kg et  <strong>IMC idéal:</strong> <?= $idealc ? $idealc: '' ?> </div>
                            </div>
                        </div>
                    </div>
            <br>
                <form action="<?= bu('CTC_Suggestion/new_suggest')?>" method="post" class="form-horizontal">
                    <table class="table my__table">
                        <tr>
                            <th>Taille</th>
                            <th>Poids</th>
                            <th>IMC</th>
                            <th>Poids voulus</th>
                            <th>Débuter le</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td><?= $donnees_client['taille'] ?> m</td>
                            <td><?= $donnees_client['poids'] ?> Kg</td>
                            <td>0.0012</td>
                            <td>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" name="target"  class="form-control">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="date" name="date_debut"  class="form-control">
                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-primary" type="submit">Suggérer</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="card">
                <div class="card-body">
                    <!-- <div class="container mt-5"> -->
                        <div class="row">
                            <div class="col-md-12">
                                <form action="<?php bu2('CTC_Pdf') ?>" method="get"><button type="submit" class="btn btn-primary" style="float:right">Exporter en pdf</button></form>
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->


        <script src='<?= base_url('assetsClient/dist/index.global.js') ?>'></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');

                <?php if (isset($suggestionsGson)) { ?>
                    var event1 = <?= json_encode($suggestionsGson) ?>;
                <?php } else { ?>
                    var event1 = [];
                <?php } ?>

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    headerToolbar: {
                        left: 'prevYear,prev,next,nextYear today',
                        center: 'title',
                        right: 'dayGridMonth,dayGridWeek,dayGridDay'
                    },

                    <?php if (isset($date_debut)) { ?>
                        initialDate: '<?= $date_debut; ?>',
                    <?php } ?>

                    navLinks: true, // can click day/week names to navigate views
                    editable: true,
                    dayMaxEvents: true, // allow "more" link when too many events

                    events: event1
                });
                calendar.render();
            });
        </script>