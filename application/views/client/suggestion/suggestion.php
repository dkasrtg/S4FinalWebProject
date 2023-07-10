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
                            <td>1.70 m</td>
                            <td>80 Kg</td>
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
    </div>
    <!-- .animated -->
</div>
<!-- /.content -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
<script>
$(document).ready(function() {
    $('#calendar').fullCalendar({
    // Options du calendrier
    // Par exemple :
    header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
    },
    defaultDate: moment().format('YYYY-MM-DD'),
    editable: true,
    eventLimit: true,
    events: [
        // Événements du calendrier
        // Par exemple :
        {
        title: 'Réunion',
        start: '2023-07-15T10:00:00',
        end: '2023-07-15T12:00:00'
        },
        {
        title: 'Présentation',
        start: '2023-07-18T14:00:00',
        end: '2023-07-18T16:00:00'
        }
    ]
    });
});
</script>
