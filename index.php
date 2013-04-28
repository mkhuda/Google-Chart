<!DOCTYPE html>
<html>
<head>
<title>Chart Kuesioner</title>
<!-- Meng-embed Google API -->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<!-- Mengembed Jquery -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
// Meload paket API dari Google Chart
google.load('visualization', '1', {'packages':['corechart']});
// Membuat Callback yang meload API visualisasi Google Chart
google.setOnLoadCallback(drawChart);
function drawChart() {
var json = $.ajax({
url: 'json.php', // file json hasil query database
dataType: 'json',
async: false
}).responseText;
// Mengambil nilai JSON
var data = new google.visualization.DataTable(json);
var options = {
title: 'Hasil Kuesioner Fakultas',
colors: ['#e6693e'],
width: 800,
height: 600
};
// API Chart yang akan menampilkan ke dalam div id
var chart = new google.visualization.BarChart(document.getElementById('tampil_chart'));
chart.draw(data, options);
}
</script>
</head>
<body>
<!-- Menampilkan dalam bentuk chart dengan ukuran yang telah disesuaikan -->
<div id="tampil_chart" style="width: 500px; height: 500px;"></div>
</body>
</html>