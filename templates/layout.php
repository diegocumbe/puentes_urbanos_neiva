<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale =1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="shortcut icon" href="https://www.usco.edu.co/imagen-institucional/favicon.ico" type="image/x-icon" />
    <title> PUENTES NEIVA</title>




    <!-- bootstrap 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- font awesome 5-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">



</head>

<body>

    <ul class="topnav">
        <li><a href="{{ url_for('inicio')}}">INICIO</a></li>
        <li><a href="{{ url_for('listado')}}">LISTADO GENERAL</a></li>
        <li><a href="{{ url_for('P_peatonal')}}">PUENTES PEATONALES</a></li>
        <li><a href="{{ url_for('P_vehicular')}}">PUENTES VEHICULARES</a></li>
        <li><a href="{{ url_for('comuna')}}">PUENTES POR COMUNA</a></li>
        <link href="{{ url_for('static',filename='css/main.css') }}" rel="stylesheet" type="text/css">
        <img id="logo_usco" src="https://www.usco.edu.co/imagen-institucional/ocre/universidad-surcolombiana-p.png">

    </ul>


    <br>


    <!-- scripts-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    {% block content %}


</body><br><br> {% endblock %}

<!-- <footer class="py-2 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white"> Copyright &copy;Diego Cumbe</p>
    </div>
    
</footer> -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



</html>