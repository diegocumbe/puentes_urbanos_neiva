{% extends "layout.php" %} {% block content %}
<div class="container col-8">

    <div class="row col-30">

        <div class="container  card card-body" style="overflow-x:auto;">


            <table class="table table-bordered ">
                <thead>
                    <h1>Comuna 7</h1>
                    <tr class="thead-dark">
                        <br>
                        <th>Fecha</th>
                        <th>Desigación</th>
                        <th>Dirección</th>
                        <th>Comuna</th>
                        <th></th>
                    </tr>

                </thead>
                <tbody>
                    <!--debes de ingresar la opcion que quieres en numero-->
                    {% for row in registro_de_puentes %}
                    <tr>
                        <td>{{row.0}}</td>
                        <td>{{row.4}}</td>
                        <td>{{row.5}}</td>
                        <td>{{row.6}}</td>
                        <td>

                            <a href="{{ url_for('ver')}}" class="btn btn-secondary">
                                <i class="fas fa-eye"> ver</i>
                                <!--boton-->
                        </td>

                    </tr>



                    {% endfor %}


                    </tr>


                </tbody>
            </table>
            <a href="{{ url_for('inicio')}}" class="btn btn-primary btn-lg active" id="btnes"> VOLVER AL INICIO</a>
        </div>
    </div>

</div>

{% endblock %}