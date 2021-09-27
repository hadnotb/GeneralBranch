
/* Quand la page a fini de charger, lance cette fonction */
$(document).on('ready', function() {


	/* Prends la div dont la class est "center", fais-en un slider */
  	$(".center").slick({

  		//Avoir les petits points en dessous (true/false)
    	dots: true,

    	//Faire une boucle (true/false)
    	infinite: true,

    	//Que la slide que je regarde soit centrée (true/false)
    	centerMode: true,

    	//Combien de slides montrer
    	slidesToShow: 1,

    	//Vitesse de la transition
		speed:300,

		//Peut-on swiper sur mobile (true/false)
		swipe:true,

		//À activer si les slides ont une largeur différente
		variableWidth:false,

		//Pauser le slider si on survole les ronds (true/false)
		pauseOnDotsHover:true,

		//Pauser le slider si on le survole (true/false)
		pauseOnHover:true,

		//Optimiser le chargement mobile (true/false)
		mobileFirst:true,

		//À quelle slide commencer ?
		initialSlide:0,

		//Pouvoir changer les slides en cliquant et tirant (true/false)
		draggable:true,

		//Passer automatiquement (true/false)
		autoplay:true,

		//Durée qu'on passe sur chaque slide si ça tourne automatiquement (en millisecondes)
		autoplaySpeed:1000,

		//À activer si les hauteurs des slides sont différentes (true/false)
		adaptiveHeight:false
  });
}); //Fin de la fonction








