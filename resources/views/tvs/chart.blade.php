@extends('plantilla.dashboard')

@section('title', 'Gráfica de Monitores')

@section('content')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        Monitores registrados.
    </p>
</figure>

<figure class="highcharts-figure">
    <div id="container2"></div>
    <p class="highcharts-description">
        Monitores segun su anio.
    </p>
</figure>

<figure class="highcharts-figure">
    <div id="container3"></div>
    <p class="highcharts-description">
        Monitores por cantidad ingresada.
    </p>
</figure>

<script type="text/javascript">
    var tvs2 = <?php echo json_encode($tvs2) ?>;

    Highcharts.chart('container', {
        chart: {
            type: 'area'
        },
        title: {
            text: 'Cantidad'
        },
        subtitle: {
            name: 'Nuevos Monitores'
        },
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre','Enero']
        },
        yAxis: {
            title: {
                text: 'Cantidad de Monitores'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'monitores',
            data: tvs2
        }],
        responsive: {

        }
    });
</script>

{{-- Gráfica para mostrar teclados agrupados por anio --}}
<script type="text/javascript">
    var tvs2 = <?php echo json_encode($tvs2) ?>;

    Highcharts.chart('container2', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Monitores'
        },
        subtitle: {
            name: 'Monitores Por Tasa de Refresco (hz)'
        },
        xAxis: {
            categories: ['60hz','120hz','144hz','60hz','120hz', '60hz','144hz', '60hz', '60hz', '120hz', '120hz', '144hz', '144hz']
        },
        yAxis: {
            title: {
                text: 'Cantidad de Monitores'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Monitores',
            data: tvs2
        }],
        responsive: {

        }
    });
</script>

{{-- Gráfica para mostrar teclados--}}
<script type="text/javascript">
    var tvs2 = <?php echo json_encode($tvs2) ?>;

    Highcharts.chart('container3', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Monitores'
        },
        subtitle: {
            name: 'Monitores por Anio'
        },
        xAxis: {
            categories: ['2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021']
        },
        yAxis: {
            title: {
                text: 'Cantidad de Monitores'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Monitores',
            data: tvs2
        }],
        responsive: {

        }
    });
</script>

@endsection