 <!-- jQuery -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <!-- Bootstrap 4 -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
 <!-- ChartJS -->
 <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->
     <div class="content">
         <div class="container-fluid">
             <div class="row" style="padding: 5% 0 0 13%; ">
                 <div class="col-md-10">
                     <!-- DONUT CHART -->
                     <div class="card card-danger">
                         <div class="card-header">
                             <h3 class="card-title">Eğitimi Uygulayacak Birimin Kaç Kere Eğitim Düzenlediği</h3>
                             <div class="card-tools">
                                 <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                 <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                             </div>
                         </div>
                         <div class="card-body">
                             <canvas id="egitimBirimiChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                         </div>
                         <!-- /.card-body -->

                     </div>
                     <!-- /.card -->

                     <!-- PIE CHART -->
                     <div class="card card-danger">
                         <div class="card-header">
                             <h3 class="card-title">Eğitim Yapılan İllerin Dağılımı</h3>
                             <div class="card-tools">
                                 <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                 <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                             </div>
                         </div>
                         <div class="card-body">
                             <canvas id="ilDağılımChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                         </div>
                         <!-- /.card-body -->
                     </div>
                     <!-- /.card -->

                     <!-- BAR CHART -->
                     <div class="card card-danger">
                         <div class="card-header">
                             <h3 class="card-title">Online vs. Yüz Yüze Eğitim Dağılımı</h3>
                             <div class="card-tools">
                                 <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                 <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                             </div>
                         </div>
                         <div class="card-body">
                             <canvas id="egitimTürüChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                         </div>
                         <!-- /.card-body -->
                     </div>
                     <!-- /.card -->
                 </div>
             </div>
         </div>
     </div>
 </div>

 <script>
     $(function() {
         // Verileri burada tanımlayabilirsiniz.
         var egitimBirimiData = {
             labels: ['Eğitim Birimi 1', 'Eğitim Birimi 2', 'Eğitim Birimi 3', 'Eğitim Birimi 4'],
             datasets: [{
                 data: [10, 15, 8, 12], // Verilerinize göre güncellenecek.
                 backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
             }]
         };

         var ilDağılımData = {
             labels: ['İl 1', 'İl 2', 'İl 3', 'İl 4', 'İl 5'],
             datasets: [{
                 data: [30, 20, 15, 10, 25], // Verilerinize göre güncellenecek.
                 backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc'],
             }]
         };

         var egitimTürüData = {
             labels: ['Online', 'Yüz Yüze'],
             datasets: [{
                 label: 'Eğitim Türü Dağılımı',
                 backgroundColor: ['rgba(60,141,188,0.9)', 'rgba(210, 214, 222, 1)'],
                 borderColor: ['rgba(60,141,188,0.8)', 'rgba(210, 214, 222, 1)'],
                 pointRadius: false,
                 pointColor: ['#3b8bba', 'rgba(210, 214, 222, 1)'],
                 pointStrokeColor: ['rgba(60,141,188,1)', '#c1c7d1'],
                 pointHighlightFill: ['#fff', '#fff'],
                 pointHighlightStroke: ['rgba(60,141,188,1)', 'rgba(220,220,220,1)'],
                 data: [70, 30] // Verilerinize göre güncellenecek.
             }]
         };

         // Eğitim Birimi Donut Chart
         var egitimBirimiChartCanvas = $('#egitimBirimiChart').get(0).getContext('2d');
         var egitimBirimiOptions = {
             maintainAspectRatio: false,
             responsive: true,
         };
         var egitimBirimiChart = new Chart(egitimBirimiChartCanvas, {
             type: 'doughnut',
             data: egitimBirimiData,
             options: egitimBirimiOptions
         });

         // İl Dağılımı Pie Chart
         var ilDağılımChartCanvas = $('#ilDağılımChart').get(0).getContext('2d');
         var ilDağılımOptions = {
             maintainAspectRatio: false,
             responsive: true,
         };
         var ilDağılımChart = new Chart(ilDağılımChartCanvas, {
             type: 'pie',
             data: ilDağılımData,
             options: ilDağılımOptions
         });

         // Eğitim Türü Bar Chart
         var egitimTürüChartCanvas = $('#egitimTürüChart').get(0).getContext('2d');
         var egitimTürüOptions = {
             responsive: true,
             maintainAspectRatio: false,
             datasetFill: false
         };
         var egitimTürüChart = new Chart(egitimTürüChartCanvas, {
             type: 'bar',
             data: egitimTürüData,
             options: egitimTürüOptions
         });
     });
 </script>