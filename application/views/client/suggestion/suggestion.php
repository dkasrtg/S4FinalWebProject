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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['dayGrid'],
            defaultView: 'dayGridMonth',
            events: [
                // Liste des événements
                {
                    title: 'Événement 1',
                    start: '2023-07-11',
                    end: '2023-07-11'
                },
                {
                    title: 'Événement 2',
                    start: '2023-07-22',
                    end: '2023-07-2'
                },
                {
                    title: 'Événement 3',
                    start: '2023-07-13',
                    end: '2023-07-13'
                }
                // Ajoutez plus d'événements ici
            ]
        });

        calendar.render();
    });
</script>
