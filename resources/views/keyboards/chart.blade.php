@extends('plantilla.dashboard')

@section('title', 'Gráfica de Teclados')

@section('content')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        Teclados registrados.
    </p>
</figure>

<figure class="highcharts-figure">
    <div id="container2"></div>
    <p class="highcharts-description">
        Teclados segun su anio.
    </p>
</figure>

<figure class="highcharts-figure">
    <div id="container3"></div>
    <p class="highcharts-description">
        Teclados por cantidad ingresada.
    </p>
</figure>

<script type="text/javascript">
    var keyboards2 = <?php echo json_encode($keyboards2) ?>;

    Highcharts.chart('container', {
        chart: {
            type: 'area'
        },
        title: {
            text: 'Teclados'
        },
        subtitle: {
            name: 'Nuevos teclados'
        },
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
        },
        yAxis: {
            title: {
                text: 'Cantidad de Teclados'
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
            name: 'Teclados',
            data: keyboards2
        }],
        responsive: {

        }
    });
</script>

{{-- Gráfica para mostrar teclados agrupados por anio --}}
<script type="text/javascript">
    var keyboards2 = <?php echo json_encode($keyboards2) ?>;

    Highcharts.chart('container2', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Teclados'
        },
        subtitle: {
            name: 'Teclados por tipo'
        },
        xAxis: {
            categories: ['Inalambrico','Inalambrico','Inalambrico', 'Analambrico', 'Inalambrico', 'Analambrico', 'Inalambrico', 
            'Analambrico', 'Inalambrico', 'Analambrico', 'Inalambrico']
        },
        yAxis: {
            title: {
                text: 'Cantidad de Teclados'
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
            name: 'Teclados',
            data: keyboards2
        }],
        responsive: {

        }
    });
</script>

{{-- Gráfica para mostrar teclados--}}
<script type="text/javascript">
    var keyboards2 = <?php echo json_encode($keyboards2) ?>;

    Highcharts.chart('container3', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Teclados'
        },
        subtitle: {
            name: 'Teclados disponibilidad'
        },
        xAxis: {
            categories: ['2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021']
        },
        yAxis: {
            title: {
                text: 'Cantidad de Teclados'
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
            name: 'Teclados',
            data: keyboards2
        }],
        responsive: {

        }
    });
</script>

@endsection