<?php
	$TestName = 'Wireless';
	$Answers = array
	(
		array
		(
			'q' => 'Si tuvieras que contarle a un extraterrestre qué es la WEP, WPA y WPA2, ¿qué le dirías?',
			'a' => 2,
			'r' => array
			(
				'Son las iniciales del protocolo que nos conecta a internet "WWW"3',
				'Son absolutamente lo mismo, se asignan una u otra dependiendo del rango de direcciones IP',
				'Son diferentes estándares de seguridad diseñados para las redes wireless'
			)
		),
		array
		(
			'q' => 'Juegas una apuesta sobre la diferencia entre "ESSID" y "BSSID" ¿qué opción eliges para ganarla?',
			'a' => 1,
			'r' => array
			(
				'Son exactamente lo mismo, solo que BSSID es la versión básica y ESSID la versión extendida',
				'Uno se refiere a la dirección MAC del AP, y el otro es el nombre que identifica ese AP',
				'Son servicios que corren en el Kernel del código fuente de SniferLabs'
			)
		),
		array
		(
			'q' => 'No te vayas, no hemos terminado con las apuestas ¿sabes qué significa poner una tarjeta en modo monitor?',
			'a' => 1,
			'r' => array
			(
				'Significa conectarle un monitor por la salida VGA a la tarjeta de red para su diagnóstico',
				'Es una forma de trabajo en las tarjetas wireless para capturar paquetes',
				'Es un método utilizado para aumentar la resolución de las pantallas de los routers'
			)
		),
		array
		(
			'q' => 'Tu chic@ está al borde de un ataque de nervios por la seguridad de su red wireless, ¿qué método le recomendarías como más efectivo para aumentarla?',
			'a' => 2,
			'r' => array
			(
				'Apagar la difusión del BSSID',
				'Activar y configurar WEP',
				'Activar y configurar WPA2',
				'Ir a la casa de los vecinos con un bate de baseball en mano y amenazarlos de forma violenta (fuerza bruta)'
			)
		),
		array
		(
			'q' => 'Eres informático, ya sabes que los vecinos piensan que debes saber y responder a todo lo relacionado con el tema (je-je) así que, cuando te preguntan, ¿en cuál de los casos el rendimiento de una red es superior? Le respondes...',
			'a' => 0,
			'r' => array
			(
				'En una red cableada',
				'En una red inálámbrica',
				'En una red DHCP'
			)
		),
		array
		(
			'q' => 'Humm intrusos ¿quién habló de intrusos?... ¿Eres capaz de encontrarlo? ¿Cuál de éstas NO es una herramienta de aircrack-ng?',
			'a' => 2,
			'r' => array
			(
				'aireplay-ng',
				'airdecloak-ng',
				'breaktun-ng',
				'airserv-ng'
			)
		),
		array
		(
			'q' => 'Trampas, ¿habéis dicho trampas? ¿Qué es un honeypot?',
			'a' => 0,
			'r' => array
			(
				'Es una técnica utilizada para atraer a los atacantes y desviar su atención',
				'Es una técnica para atraer a los usuarios inexpertos a un AP y sustraer información',
				'Todas las anteriores son correctas',
				'Trampa, ninguna es correcta'
			)
		),
		array
		(
			'q' => '¡Alto ahí! No te vayas que te espera un gran final... Y ésta es muy facil. ¿Qué entiendes por wardriving?',
			'a' => 1,
			'r' => array
			(
				'Es un juego de guerra que implica coches (recuerdas twisted metal?)',
				'Implica un coche, ordenador portatil, antenas, GPS, buscando redes vulnerables para luego registrar su geo-localización en algún website',
				'Es un conflicto de dispositivos entre los drivers de dos tarjetas inalámbricas'
			)
		),
		array
		(
			'q' => 'Resiste, resiste... Que a es@ vecin@ no puedes omitir responderle cuando te pregunta, ¿es posible utilizar el procesador gráfico de nuestra tarjeta de video para aumentar la velocidad de crackeo de un pass en algún AP?',
			'a' => 0,
			'r' => array
			(
				'Sí',
				'No',
				'Solamente en windows'
			)
		),
		array
		(
			'q' => 'Estás a punto de terminar y ver el premio por el tiempo que te has tomado. Prometemos que todo termina aquí, pero antes puedes decirnos; en la auditoría wireless, ¿qué significa "ataque por fuerza bruta"?',
			'a' => 1,
			'r' => array
			(
				'Es un método de defensa que consiste en amenazar a los vecinos con golpes y palos si se conectan a nuestra red',
				'Es un método de auditoría que consiste en recuperar una clave probando todas las combinaciones posibles hasta encontrar aquella que permite el acceso',
				'Es obligar por medio de aircrack-ng a que nuestra tarjeta se ponga en modo monitor aunque ésta no pueda'
			)
		)
	);
	include('underc0dest.php');