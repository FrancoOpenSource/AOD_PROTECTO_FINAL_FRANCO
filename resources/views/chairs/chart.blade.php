@extends('plantilla.dashboard')

@section('title', 'Gráfica de Sillas Gamer')

@section('content')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        Sillas Gamer registrados.
    </p>
</figure>

<figure class="highcharts-figure">
    <div id="container2"></div>
    <p class="highcharts-description">
        Sillas Gamer segun su anio.
    </p>
</figure>

<figure class="highcharts-figure">
    <div id="container3"></div>
    <p class="highcharts-description">
        Sillas Gamer por cantidad ingresada.
    </p>
</figure>

<script type="text/javascript">
    var chairs2 = <?php echo json_encode($chairs2) ?>;

    Highcharts.chart('container', {
        chart: {
            type: 'area'
        },
        title: {
            text: 'Cantidad'
        },
        subtitle: {
            name: 'Nuevos Sillas Gamer'
        },
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre','Enero']
        },
        yAxis: {
            title: {
                text: 'Cantidad de Sillas Gamer'
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
            data: chairs2
        }],
        responsive: {

        }
    });
</script>

{{-- Gráfica para mostrar teclados agrupados por anio --}}
<script type="text/javascript">
    var chairs2 = <?php echo json_encode($chairs2) ?>;

    Highcharts.chart('container2', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Sillas Gamer'
        },
        subtitle: {
            name: 'Sillas Gamer Por Peso Soportado en Kg'
        },
        xAxis: {
            categories: ['110kg','120kg','130kg','140kg','90kg', '80kg','70kg', '60kg', '50kg', '40kg']
        },
        yAxis: {
            title: {
                text: 'Cantidad de Sillas Gamer'
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
            name: 'Sillas Gamer',
            data: chairs2
        }],
        responsive: {

        }
    });
</script>

{{-- Gráfica para mostrar teclados--}}
<script type="text/javascript">
    var chairs2 = <?php echo json_encode($chairs2) ?>;

    Highcharts.chart('container3', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Sillas Gamer'
        },
        subtitle: {
            name: 'Sillas Gamer por Anio'
        },
        xAxis: {
            categories: ['2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021']
        },
        yAxis: {
            title: {
                text: 'Cantidad de Sillas Gamer'
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
            name: 'Sillas Gamer',
            data: chairs2
        }],
        responsive: {

        }
    });
</script>

@endsection