<!-- Menghubungkan dengan view template master -->
@extends('layouts.master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<script src="https://code.highcharts.com/highcharts.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 

	<p style="text-align: center;">Selamat Datang</p>
	<p style="text-align: center;">Ini Adalah Halaman Home</p>
	<div id="container"></div>


<script type="text/javascript">

  var grafik = <?php echo json_encode($grafik) ?>;

	Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Jumlah Buku Berdasarkan Penerbit'
  },
  subtitle: {
    text: 'Web Perpustakaan'
  },
  xAxis: {
    categories: [
      'Jan',
      'Feb',
      'Mar',
      'Apr',
      'May',
      'Jun',
      'Jul',
      'Aug',
      'Sep',
      'Oct',
      'Nov',
      'Dec'
    ],
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Jumlah (Buku)'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
    footerFormat: '</table>',
    shared: true,
    useHTML: true
  },
  plotOptions: {
    column: {
      pointPadding: 0.2,
      borderWidth: 0
    }
  },

  series: grafik
});

</script>
@endsection
