<?php
include("config/config.php");


?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Naiades - Ejercicio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="robots" content="noindex">
        <meta name="googlebot" content="noindex">
        <link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
        <link rel="stylesheet" href="assets/stylesheets/bootstrap.min.css" />
        <script src="assets/javascripts/modernizr.min.js"></script>
    </head>
    <body>
        <div class="container">
            <section>
                <h1 class="text-center" style="background:#000;padding:20px;">
                    <img src="assets/images/logo.png" alt="Naiades" />
                </h1>
        		<h2>Vista</h2>
            	<div class="row">
            		<div class="col-sm-12">
                        <a href="formulario.php" class="btn btn-success">Nuevo</a>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                             

                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        <script src="assets/javascripts/jquery.min.js"></script>
        <script src="assets/javascripts/bootstrap.min.js"></script>
    </body>
</html>

<script>
     let tbody = document.querySelector('tbody');
    let datos = fetch('ax/vista.php')
    .then(response => response.json())
    .then(rta => {
       
        /*
            Recorro cada elemento de la respuesta de fetch, y creo cada etiqueta tr y td para los campos
        */
        rta.forEach( usuario => {
            let tr = document.createElement('tr');

            let id = document.createElement('td');
            id.innerText = usuario.id;
            tr.appendChild(id);

            let nombre = document.createElement('td');
            nombre.innerText = usuario.nombre;
            tr.appendChild(nombre);

            let apellido = document.createElement('td');
            apellido.innerText = usuario.apellido;
            tr.appendChild(apellido);
            
            let fecha = document.createElement('td');
            fecha.innerText = usuario.fecha;
            tr.appendChild(fecha);

            tbody.appendChild(tr);
        } )
    console.log(rta)

    })

    
</script>