{% extends "layout.php" %} {% block content %}

<!DOCTYPE html>
<html lang="en">


<body>



    <!-- Page Content -->
    <div class="container">

        <div id="card1" class="card card-body form-row ">
            <h1 id="nombre_puente" class="my-4">NOMBRE DE CADA PUENTE</h1>
            <div class="form-group col-md-6">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://www.eadic.com/wp-content/uploads/2016/12/FotoInicial.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://www.eadic.com/wp-content/uploads/2016/12/FotoInicial.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://www.eadic.com/wp-content/uploads/2016/12/FotoInicial.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <h2>Modern Business Features</h2>
                <p>The Modern Business template by Start Bootstrap includes:</p>

                <li>
                    <strong>Bootstrap v4</strong>
                </li>
                <li>jQuery</li>
                <li>Font Awesome</li>
                <li>Working contact form with validation</li>
                <li>Unstyled page elements for easy customization</li>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>

            <div class="form-group col-md-6">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>



    </div>


</body>

</html>

{% endblock %}