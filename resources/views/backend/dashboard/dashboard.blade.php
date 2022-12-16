@extends('layout.main')

@section('backend')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $title }}</h1>
</div>
{{-- <h1 class="mx-3 border-bottom">News</h1> --}}
{{-- session alert confirm for insert this layout all my data --}}

<div class="col-md-10 mt-2">
    @if (session()->has('success'))
    <div class="alert alert-success col-md-10" role="alert">
        {{ session('success') }}
    </div>
    @endif

    {{-- session alert confirm for delete this layout all my data --}}
    @if (session()->has('delete'))
    <div class="alert alert-danger col-md-10" role="alert">
        {{ session('delete') }}
    </div>
    @endif

    {{-- session alert confirm for update this layout all my data --}}
    @if (session()->has('update'))
    <div class="alert alert-info col-md-10" role="alert">
        {{ session('update') }}
    </div>
    @endif
</div>

<div class="row row-cols-1 row-cols-md-2 g-4 mt-2">
    <div class="col">
        <div class="card h-70">
            <div class="card-body">
                <h4 class="card-title text-center mt-3">Stok Darah</h4>
                <div class="row row-cols-1 row-cols-md-4 g-4 mt-1">
                    <div class="col text-center">
                        <div class="card h-50">
                            <div class="card-body bg-danger text-light" style="border-radius: 10px">
                                <h5 class="card-title">{{ $bloodTypeA }}</h5>
                                <h5 class="card-title">A</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="card h-50">
                            <div class="card-body bg-danger text-light" style="border-radius: 10px">
                                <h5 class="card-title">{{ $bloodTypeB }}</h5>
                                <h5 class="card-title">B</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="card h-50">
                            <div class="card-body bg-danger text-light" style="border-radius: 10px">
                                <h5 class="card-title">{{ $bloodTypeAB }}</h5>
                                <h5 class="card-title">AB</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="card h-50">
                            <div class="card-body bg-danger text-light" style="border-radius: 10px">
                                <h5 class="card-title">{{ $bloodTypeO }}</h5>
                                <h5 class="card-title">O</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-70">
            <div class="card-body">
                <h4 class="card-title text-center mt-3">Tampilan</h4>
                <div class="row row-cols-1 row-cols-md-2 g-4 mt-1">
                    <div class="col text-center">
                        <div class="card h-50">
                            <div class="card-body bg-danger text-light" style="border-radius: 10px">
                                <h5 class="card-title">{{ $event }}</h5>
                                <h5 class="card-title">Event</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="card h-50">
                            <div class="card-body bg-danger text-light" style="border-radius: 10px">
                                <h5 class="card-title">{{ $news }}</h5>
                                <h5 class="card-title">Artikel</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center mt-3">Grafik Jumlah Darah Masuk</h5>
                <div id="piechart_3d" class="text-center justify-content-center mt-5"
                    style="width: 400px; height: 300px;">

                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center mt-3">Grafik Jumlah Darah Keluar</h5>
                <div id="piechart_3d2" class="text-center justify-content-center mt-5"
                    style="width: 400px; height: 300px;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Blood Type', 'Result'],
          ['A',     <?= $bloodTypeA; ?>],
          ['B',      <?= $bloodTypeB ?>],
          ['AB',    <?= $bloodTypeAB; ?>],
          ['0',     <?= $bloodTypeO; ?>],
        ]);

        var options = {
          title: 'Stok Darah',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
</script>
<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Blood Type', 'Result'],
          ['A',     11],
          ['B',      2],
          ['AB',  2],
          ['O', 2],
        ]);

        var options = {
          title: 'Permintaan Darah',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d2'));
        chart.draw(data, options);
      }
</script>