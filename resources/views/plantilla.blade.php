<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title> @yield('title') - Usuarios </title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2? family=Krub:wght@400;700&display=swap" rel="stylesheet">
    
	

</head>

<body>

	<header>
		<h1 class="titulo">SENSORES<span>PAM</span></h1>

        <p align="right ">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="44"
             height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFC107" fill="none" stroke-linecap="round" 
             stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="12" cy="11" r="3" />
                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
              </svg>
            Querétaro, Qro.
        </p>
       
	</header>
	
	<div class="nav-bg">
		<nav class="navegacionPrincipal contenedor">
			<a class="{{request()->routeIs('NEquipos') ? 'text-dark':''}}" href="/equipos">Conócenos</a>        
            <a class="{{request()->routeIs('NGenerales') ? 'text-dark':''}}" href="/generales">Objetivos Generales</a>        
            <a class="{{request()->routeIs('NEspecificos') ? 'text-dark':''}}" href="/especificos">Objetivos Especificos</a>        
            <a href="{{ route('usuarios.index') }}" >Usuarios</a>
            <a href="{{ route('usuarios.crear') }}">Crear</a>
        
		</nav>
	</div>


	<!--<img src="http://localhost/HTML/FL/images/principal.jpeg">-->

	<section class="hero">

		<div class="contenido-hero">	

		</div>

	</section>

    <br>
    <main class="p-16 flex justify-center">
        @yield('content')
    </main>

	<footer class="footer text-center">	
		<br>
		<p>Todos los derechos reservados Sensores PAM</p>
	</footer>

    <style>
        :root {/*COLORES DE TODO EL DISEÑO*/
	--blanco:#FFFFFF;
	--oscuro: #212121;
	--primario: #FFC107;
	--secundario: #0097A7;
	--gris: #757575;
	--grisClaro: #DFE9F3;
}

html {/*Tamaño del html*/
	font-size: 62.5%;
	box-sizing: border-box;/*HACE QUE SE IGNORE EL PADING DENTRO DEL TAMAÑO DE UN ELEMENTO*/
}

*, *:before, *:after{
	box-sizing: inherit;/*APLICALO A TODO EL HTML*/
}

body {/*Ajuste del cuerpo*/
	font-size: 16px;
	font-family: 'Krub', sans-serif;
	background-image: linear-gradient(to bottom, var(--grisClaro) 0%, var(--blanco) 100%);
}

h1{
	font-size: 3.8rem;
}

h2{
	font-size: 2.8rem;
}

h3{
	font-size: 1.8rem;
}

h1,h2,h3{
	text-align: center;
}

/*#################### H E A D E R ####################*/
/*
.titulo {
	text-align: center;
	font-size: 3.8rem;  1 rem  = 10 px Los rem se ajustan a las pantallas 
}*/

.titulo span {
	font-size: 2rem;
}

/*#################### N A V E G A C I Ó N ####################*/
.contenedor{
  max-width: 120rem;/*1200PX COMO MAXIMO SOLO SI ESTA DISPONIBLE, SI NO SE AJUSTA (FLUIDEZ DE NAVEGACION EN DIF PANTALLAS*/
  margin: 0 auto;
}

.nav-bg{
	background-color: var(--secundario);
}
.navegacionPrincipal {/*Mientras que la pantalla sea menor a 480px*/
	display: flex;
	flex-direction: column;
	align-items: center;
}

@media (min-width: 4.8rem) {/*Cuando la pantalla sea mayor a 480px (4.8rem)*/
	.navegacionPrincipal{
		flex-direction: row;
		justify-content: space-between;
	}
	
}

.navegacionPrincipal a{
	color: var(--blanco);
	text-decoration: none;
	font-size: 2rem;
	font-weight: 700;
	padding: 1rem;
}

.navegacionPrincipal a:hover{/*PSEUDO CLASE QUE SE DISPARA DE CSS EXISTEN VARIOS	*/
	background-color: var(--primario);
	color: var(--oscuro);
}

/*#################### S E C T I O N 1 ####################*/
.hero{
	background-image: url(SENSORES1.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	height: 45rem;
	/*padding: 2rem;*/
	position: relative;
}

.contenido-hero{
	position: absolute;
	background-color: rgba(0,0,0, .6);
	color: var(--blanco);
	/*background-color: rgb(0 0 0 / 6); NUEVA SINTAXIS PARA COLORES CON TRANSPARENCIA (SIN SOPORTE PARA ALGUNOS NAV)*/
	width: 100%;
	height: 100%;

	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;

}

.contenido-hero p{
	color: var(--blanco);

}

.sombra{
	-webkit-box-shadow: 0px 5px 15px 0px rgba(112,112,112,0.54);
	-moz-box-shadow: 0px 5px 15px 0px rgba(112,112,112,0.54);
	box-shadow: 0px 5px 15px 0px rgba(112,112,112,0.54);
	background-color: var(--blanco);
	padding: 2rem;
	margin-top: 2rem;
	border-radius: 1rem;
}





    </style>
  </body>
</html>