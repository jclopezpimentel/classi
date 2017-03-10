<!DOCTYPE html>
<html>
<head>
    <title>Classi</title>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo base_url();?>css/classi_principal.css" />
    <script src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" charset="utf-8">
    $(window).load(function() {
    $('.flexslider').flexslider({
        touch: true,
        pauseOnAction: false,
        pauseOnHover: false,
    });
  });
</script>

</head>
<header>
    <div id="estilo1">
        <form meter="get" id="formulario-buscar" action="#">
            <input type="text" placeholder="Buscar..." id="s"/>
            <button type="submit" id="boton-buscar"></button>
        </form> 
        <img class="logo" style="width:250px;height:100px" src="imagenes/classi_logo.png" alt="classi">
        <nav>
            <ul>
                <li><a href= "inicio">Inicio</a>
                <li><a >Nosotros</a>
                <li><a >Registrar</a>
                <li><a >Contactos</a>
            </ul>
        </nav> 
        
    </div>
</header>