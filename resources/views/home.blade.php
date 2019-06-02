<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

	<title>ACNUR- La Agencia de la ONU para los Refugiados</title>
	<meta name="description" content="Estoy apoyando a los refugiados de ACNUR, ¿tú ya estás ayudando?">

	<link rel="shortcut icon" href="{{ url('/') }}/images/favicon.png">

	<!-- og tags Facebook -->
	<meta property="og:title" content="ACNUR- La Agencia de la ONU para los Refugiados">
	<meta property="og:description" content="Estoy apoyando a los refugiados de ACNUR, ¿tú ya estás ayudando?">
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://laguerratesigue.com/">
	<meta property="og:image" content="{{ url('/') }}/images/share_fb.jpg">
	<meta property="og:site_name" content="laguerratesigue.com/">

	<!-- Twitter Cards -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@ACNURamericas">
	<meta name="twitter:title" content="ACNUR- La Agencia de la ONU para los Refugiados">
	<meta name="twitter:description" content="Estoy apoyando a los refugiados de ACNUR, ¿tú ya estás ayudando?">
	<meta name="twitter:creator" content="@ACNURamericas">
	<meta name="twitter:image:src" content="{{ url('/') }}/images/share_tw.jpg">
	<meta name="twitter:domain" content="laguerratesigue.com/">

	<link rel="canonical" href="http://laguerratesigue.com/">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900" rel="stylesheet">
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>

	<header>
        <div class="container">
            <a href="{{ url('/') }}" class="content_logo">
                <img src="images/logo_acnur.png" alt="Logo UNHCR ACNUR - La agencia de la ONU para los Refugiados">
            </a>
            <div class="content_share">
                <a class="dona" href="https://donate.unhcr.org/la-es/siria-arrival" target="_blank">Quiero ayudar a un refugiado</a>
            </div>
        </div>
	</header>

	<main id="app">
		<section class="home">
			<div class="container">
				<div class="content_home">
					<div class="texto_h1"></div>
					<p>
						Los refugiados son personas que no están a salvo en su país por la guerra, persecución o violencia. <strong>La diferencia entre ellos y tú, es que sus vidas están en peligro.</strong>
					</p>
				</div>
			</div>
		</section>
		<section class="datos" id="sectionDatos">
			<div class="content_datos">
				<div class="datos_info">
					<p style="text-align: center; font-size: 24px">
						<strong>
							Más de 40,000 personas viven esta persecusión a diario, por una guerra real.
						</strong>
					</p>
					<hr>
					<p>
						En ACNUR trabajamos para garantizar que los refugiados puedan encontrar un lugar seguro.
						<br><br>
						Nuestra asistencia transforma las vidas destruidas.
						<br><br>
						Tu donación las vuelve a construir.
					</p>
					<hr>
					<p>
						En 2011 Siria se estaba convirtiendo en un importante lugar turístico, por sus playas, centros culturales y su incomparable legado histórico. Hoy, Siria tal cual la conocíamos, <strong>ya no existe</strong>.
						<br><br>
						Siria albergaba 6 lugares declarados <strong>Patrimonio de la Humanidad por</strong> la Unesco: Ciudad vieja de Damasco, Ciudad vieja de Bosra, Sitio de Palmira, Ciudad vieja de Alepo, Aldeas antiguas del norte de Siria y Crac de los Caballeros y Qal´at Salah El-Din.El número actual de desplazados por conflicto armado o persecución <strong>supera</strong> al de cualquier época posterior a <strong>la Segunda Guerra Mundial</strong>.
						<br><br>
						Más de <strong>2 millones han muerto</strong> o están heridos; entre los fallecidos hay <strong>más de 24,000 niñas y niños</strong>.
						<br><br>
						Tú puedes ayudar a cambiar una vida, puedes ayudar a una persona refugiada a escribir una historia nueva.
					</p>
					<a class="dona" href="https://donate.unhcr.org/la-es/siria-arrival" target="_blank">
						<strong>AYUDAR</strong>
						<p>
							 Tú donación hace la diferencia
						</p>
					</a>
				</div>
				<div class="bg_datos"></div>
			</div>
		</section>
		<section class="logo_footer">
			<img src="images/logo_acnur.png" alt="Logo UNHCR ACNUR - La agencia de la ONU para los Refugiados">
		</section>
	</main>

	<footer>
		<p>2018 ACNUR Todos los derechos reservados</p>
		<a href="http://www.acnur.org/es/terminos-y-condiciones-de-uso.html" target="_blank">Términos y condiciones</a>
		<a href="http://www.acnur.org/es/politica-de-privacidad.html" target="_blank">Política de privacidad</a>
	</footer>

	<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>