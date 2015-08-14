$(document).ready(function(){

	var maximo_paginas = 4;
	var pagina = 1;
	var titulos = ["1. Activar GPS","2. Inicio y Registro",
	"3. Lugares","4. Mapas"];
	var animacion = "fadeIn";

	/**
	*	evento de la flecha de adelante, oculta la pagina actual,
	*	luego calcula el siguiente numero, 
	*/
	$(".flecha_adelante").click(function(){
		$(".pagina" + pagina).removeClass("animated");
		$(".pagina" + pagina).removeClass(animacion);
		$(".pagina" + pagina).hide();
		calcularSiguiente();
		actualizarTituloPagina();
		$(".pagina" + pagina).addClass("animated");
		$(".pagina" + pagina).addClass(animacion);
		$(".pagina" + pagina).show();
	});

	$(".flecha_atras").click(function(){
		$(".pagina" + pagina).removeClass("animated");
		$(".pagina" + pagina).removeClass(animacion);
		$(".pagina" + pagina).hide();
		calcularAnterior();
		actualizarTituloPagina();
		$(".pagina" + pagina).removeClass("animated");
		$(".pagina" + pagina).removeClass(animacion);
		$(".pagina" + pagina).show();
	});

	$("#img_uno").hover(function(){
		efectoHover("entrada", "#img_uno");
	},
	function(){
		efectoHover("salida", "#img_uno");
	}
	);

	$("#img_dos").hover(function(){
		efectoHover("entrada", "#img_dos");
	},
	function(){
		efectoHover("salida", "#img_dos");
	}
	);

	$("#img_tres").hover(function(){
		efectoHover("entrada", "#img_tres");
	},
	function(){
		efectoHover("salida", "#img_tres");
	}
	);

	$("#img_cuatro").hover(function(){
		efectoHover("entrada", "#img_cuatro");
	},
	function(){
		efectoHover("salida", "#img_cuatro");
	}
	);

	$("#img_cinco").hover(function(){
		efectoHover("entrada", "#img_cinco");
	},
	function(){
		efectoHover("salida", "#img_cinco");
	}
	);

	$("#img_seis").hover(function(){
		efectoHover("entrada", "#img_seis");
	},
	function(){
		efectoHover("salida", "#img_seis");
	}
	);

	$("#img_siete").hover(function(){
		efectoHover("entrada", "#img_siete");
	},
	function(){
		efectoHover("salida", "#img_siete");
	}
	);

	$("#img_ocho").hover(function(){
		efectoHover("entrada", "#img_ocho");
	},
	function(){
		efectoHover("salida", "#img_ocho");
	}
	);

	function calcularSiguiente(){
		if(pagina == maximo_paginas)
			pagina = 1;
		else
			pagina = pagina+1;
	}

	function calcularAnterior(){
		if(pagina == 1)
			pagina = maximo_paginas;
		else
			pagina = pagina-1;
	}

	function actualizarTituloPagina(){
		//aca debemos meterle el titulo al h2
		var h2_titulo_pagina = $(".titulo_pagina");
		h2_titulo_pagina.html(titulos[pagina-1]);
	}

	/**
	*	Metodo que hace el efecto de hover en las dos imagenes
	*	tipo de efecto puede ser "entrada" o "salida"
	*	selector es el coso donde se haya hecho click
	*/
	function efectoHover(tipoEfecto, selector){

		var papa = "";
		var clase = "";

		if(selector == "#img_uno"){
			papa = ".primero"
			clase ="fondo_primero_tuto";
		}
		if(selector == "#img_dos"){
			papa = ".segundo";
			clase ="fondo_segundo_tuto";

		}
		if(selector == "#img_tres"){
			papa = ".tercero";
			clase ="fondo_tercero_tuto";
		}
		if(selector == "#img_cuatro"){
			papa = ".cuarto";
			clase ="fondo_cuarto_tuto";
		}

		if(selector == "#img_cinco"){
			papa = ".cinco";
			clase ="fondo_quinto_tuto";
		}

		if(selector == "#img_seis"){
			papa = ".seis";
			clase ="fondo_sexto_tuto";
		}

		if(selector == "#img_siete"){
			papa = ".siete";
			clase ="fondo_siete_tuto";
		}

		if(selector == "#img_ocho"){
			papa = ".ocho";
			clase ="fondo_ocho_tuto";
		}

		//ahora pregunta si fue un llamado de tipo entrada o salida
		//del hover

		if(tipoEfecto == "entrada"){
			//$(papa).addClass("animated");
			//$(papa).addClass("fadeIn");
			$(papa).fadeTo("fast",1, function(){
				//agrega la clase segun sea el celular clicado
				//si clica en el img_uno la clase que debe agregarle
				//sera fondo_primero_tuto y asi sucesivamente
				$(this).addClass(clase);

			});
			//oculata el celular en el que se hizo hover
			$(selector).fadeTo("fast", 1,  function(){
				$(selector).css("opacity",0);
			});

		}else{

			//si le quito el mouse pasa:
			//1: al papa le voy a quitar elfondo a una velocidad de 200
			$(papa).fadeTo("fast", 1, function(){

				$(this).removeClass(clase);
				
			});
			//2: llega el celuco a una velocidad de 200
			$(selector).fadeTo("slow", 1, function(){
				$(this).css("opacity", 1);
			});
		}//fin del if


	}//fin de la funcion efectoHover


});//cierra el principal (document).ready