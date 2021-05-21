@extends('plantilla.dashboard')

@section('title', 'Gráfica de Audifonos')

@section('content')

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <figure class="highcharts-figure">
        <div id="container"></div>
        <p class="highcharts-description">
            Audifonos registrados.
        </p>
    </figure>

    <figure class="highcharts-figure">
        <div id="container2"></div>
        <p class="highcharts-description">
            Audifonos segun su anio.
        </p>
    </figure>

    <figure class="highcharts-figure">
        <div id="container3"></div>
        <p class="highcharts-description">
            Audifonos por cantidad ingresada.
        </p>
    </figure>

    <script type="text/javascript">
        var headsets2 = <?php echo json_encode($headsets2)?>;

        Highcharts.chart('container', {
            chart: {
                type: 'area'
            },
            title: {
                text: 'Audifonos'
            },
            subtitle: {
                name: 'Nuevos audifonos'
            },
            xAxis: {
                categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre', 'Enero']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de audifonos'
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
                name: 'audifonos',
                data: headsets2
            }],
            responsive: {

            }
        });
    </script>

 {{-- Gráfica para mostrar audifonos agrupados por anio --}}
    <script type="text/javascript">
        var headsets2 = <?php echo json_encode($headsets2)?>;

        Highcharts.chart('container2', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Audifonos'
            },
            subtitle: {
                name: 'Audifonos por anio'
            },
            xAxis: {
                categories: ['Inalambrico','Inalambrico','Inalambrico','Inalambrico','Inalambrico', 'Analambrico', 'Inalambrico', 'Analambrico', 'Inalambrico', 
            'Analambrico', 'Inalambrico', 'Analambrico', 'Inalambrico']},
            yAxis: {
                title: {
                    text: 'Cantidad de Audifonos'
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
                name: 'Audifonos',
                data: headsets2
            }],
            responsive: {

            }
        });
    </script>

    {{-- Gráfica para mostrar audifonos--}}
    <script type="text/javascript">
        var headsets2 = <?php echo json_encode($headsets2)?>;

        Highcharts.chart('container3', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Audifonos'
            },
            subtitle: {
                name: 'Audifonos por cantidad'
            },
            xAxis: {
                categories: ['2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de audifonos'
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
                name: 'Audifonos',
                data: headsets2
            }],
            responsive: {

            }
        });
    </script>

@endsection
