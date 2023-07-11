<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Tableau de bord et Statistiques </h3>
        </div>
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nombre d utilisateurs : 100</h4>
                        <canvas id="user" style="height:250px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Solde : 4000</h4>
                        <canvas id="solde" style="height:250px"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Credits vendus par mois (2023)</h4>
                        <canvas id="credit" style="height:250px"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Commandes recus par mois (2023)</h4>
                        <canvas id="commande" style="height:250px"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<script src="<?= base_url("assets_admin/js/jquery/jquery.js") ?>"></script>
<script src="<?= base_url("assets_admin/js/chart.js") ?>"></script>

<script src="<?= base_url("assets_admin/vendors/chart.js/Chart.min.js") ?>"></script>
<script>
    var userdata = {
        datasets: [{
            data: [60, 40],
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
        }],
        labels: [
            'Augmentation',
            'Reduction',
        ]
    };
    var useroption = {
        responsive: true,
        animation: {
            animateScale: true,
            animateRotate: true
        }
    };
    var pieChartCanvas = document.getElementById("user");
    var pieChart = new Chart(pieChartCanvas, {
        type: 'pie',
        data: userdata,
        options: useroption
    });
</script>
<script>
    var soldedata = {
        datasets: [{
            data: [2000, 5000, 1000],
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 159, 64, 0.5)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
        }],
        labels: [
            'Credits vendus',
            'Commandes payes',
            'Sortie'
        ]
    };
    var soldeoption = {
        responsive: true,
        animation: {
            animateScale: true,
            animateRotate: true
        }
    };
    var doughnutChartCanvas = document.getElementById("solde");
    var doughnutChart = new Chart(doughnutChartCanvas, {
        type: 'doughnut',
        data: soldedata,
        options: soldeoption
    });
</script>
<script>
    var creditdata = {
    labels: ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre"],
    datasets: [{
      label: '# of Votes',
      data: [10, 19, 3, 5, 2, 3,5,0,0,0,0,0],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1,
      fill: false
    }]
  };
  var creditoptions = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        },
        gridLines: {
          color: "rgba(204, 204, 204,0.1)"
        }
      }],
      xAxes: [{
        gridLines: {
          color: "rgba(204, 204, 204,0.1)"
        }
      }]
    },
    legend: {
      display: false
    },
    elements: {
      point: {
        radius: 0
      }
    }
  };
  var lineChartCanvas = document.getElementById("credit");
    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: creditdata,
      options: creditoptions
    });
</script>
<script>
    var commandedata = {
    labels: ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre"],
    datasets: [{
      label: '# of Votes',
      data: [5, 4, 2, 5, 1, 2,1,0,0,0,0,0],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1,
      fill: false
    }]
  };
  var commandeoptions = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        },
        gridLines: {
          color: "rgba(204, 204, 204,0.1)"
        }
      }],
      xAxes: [{
        gridLines: {
          color: "rgba(204, 204, 204,0.1)"
        }
      }]
    },
    legend: {
      display: false
    },
    elements: {
      point: {
        radius: 0
      }
    }
  };
  var lineChartCanvas = document.getElementById("commande");
    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: commandedata,
      options: commandeoptions
    });
</script>