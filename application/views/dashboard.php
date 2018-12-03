<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Grafik Penjualan Barang</li>
    </ol>
    <!-- Icon Cards-->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                        <div class="alert alert-success">
                           Welcome : <?php echo $this->session->userdata('username') ?>
                        </div>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-white o-hidden h-100">
                <h5 class="card-title">Grafik Penjualan Barang sesi</h5>
                <canvas id="myChart" width="400" height="400"></canvas>
            </div>
        </div>
  </div>
</div>
<?php foreach($grafik as $trans)
    {
         $grafiks[]=$trans->nama_barang;
    }
?>
<?php foreach($grafik as $count)
    {
         $counts[]=$count->jumlah;
    }
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels:<?php echo json_encode($grafiks) ?>,
        datasets: [{
            label: '# of Votes',
            data:<?php echo json_encode($counts) ?>,
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
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>