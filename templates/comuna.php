{% extends "layout.php" %} {% block content %}

<div class="row">
    <div class="col-sm-6" id="comuna">
        <div class="card">
            <div class="card-body" meta name="viewport">
                <h1 class="card-title">Puentes por comuna</h1>
                <p class="card-text">aqui se activaran una serie de botones de cada comuna a elegir</p>
                <ul id="btn-comunas">
                    <li><a href="{{ url_for('comuna1')}}">COMUNA 1</a></li>
                    <li><a href="{{ url_for('comuna2')}}">COMUNA 2</a></li>
                    <li><a href="{{ url_for('comuna3')}}">COMUNA 3</a></li>
                    <li><a href="{{ url_for('comuna4')}}">COMUNA 4</a></li>
                    <li><a href="{{ url_for('comuna5')}}">COMUNA 5 </a></li>
                    <li><a href="{{ url_for('comuna6')}}">COMUNA 6</a></li>
                    <li><a href="{{ url_for('comuna7')}}">COMUNA 7</a></li>
                    <li><a href="{{ url_for('comuna8')}}">COMUNA 8</a></li>
                    <li><a href="{{ url_for('comuna9')}}">COMUNA 9</a></li>
                    <li><a href="{{ url_for('comuna10')}}">COMUNA 10</a></li>


                </ul>
                <a href="{{ url_for('listado')}}" class="btn btn-primary btn-lg active btn-block" id="btnes">abr    ir listado general</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6" id="mapa">
        <div class="card">
            <div class="card-body">
                <img id="img_comunas" src="https://upload.wikimedia.org/wikipedia/commons/3/33/Neiva-Comunas-Barrios.svg">
            </div>
        </div>
        <br><br><br><br>

    </div>
</div>
{% endblock %}