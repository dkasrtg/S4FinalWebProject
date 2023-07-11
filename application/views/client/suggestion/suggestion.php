<link rel="stylesheet" href="<?= base_url('assetsClient/ncss/suggestion.css')?>">

<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-left my__title">User information</h4>
                <form action="<?= bu('CTC_Suggestion/new_suggest')?>" method="post">
                    <table class="table my__table">
                        <tr>
                            <th>Taille</th>
                            <th>Poids</th>
                            <th>IMC</th>
                            <th>Poids voulus</th>
                            <th>Quand</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td><?= $donnees_client['taille']?> m</td>
                            <td><?= $donnees_client['poids']?> Kg</td>
                            <td>0.0012</td>
                            <td>
                                <input class="form-input" type="text" name="target" placeholder="... Kg">
                            </td>
                            <td>
                                <input class="form-input" type="date" name="date_debut" placeholder="Date de debut">
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
    <!-- .animated -->
</div>
<!-- /.content -->


<script src='<?= base_url('assetsClient/dist/index.global.js')?>'></script>

<script>

    document.addEventListener('DOMContentLoaded', function() 
    {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            left: 'prevYear,prev,next,nextYear today',
            center: 'title',
            right: 'dayGridMonth,dayGridWeek,dayGridDay'
        },
        <?php if(isset($date_debut)) { ?>
            initialDate: '<?= $date_debut?>',
        <?php } ?>
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        dayMaxEvents: true, // allow "more" link when too many events

        events: [
            <?php if(isset($suggestions)) { ?>
                <?php foreach($suggestions as $suggestion) { ?>
                    <?php foreach($suggestion->_categories_repas as $_categorie_repas) { ?>
                        {
                            title: '<?= $_categorie_repas->_repas['description'];?>',
                            start: '<?= $suggestion->_date->format('Y-m-d');?>T<?= $_categorie_repas->time_;?>',
                        },                    
                        {
                            title: '<?= $_categorie_repas->_activite_sportive['nom'];?>',
                            start: '<?= $suggestion->_date->format('Y-m-d');?>T<?= $_categorie_repas->time_;?>',
                            backgroundColor: 'green',
                            borderColor: 'green'
                        },
                    <?php } ?>
                <?php } ?>
            <?php } ?>
            {
                title: 'Click for Google',
                url: 'http://google.com/',
                start: '2023-01-28'
            }
        ]
        });
        calendar.render();
    });

</script>
