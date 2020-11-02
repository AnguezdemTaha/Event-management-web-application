
$(document).ready(function(){
    
    console.log("jQuery est prêt !");

    var $pseudo = $('#name'),
        $mdp = $('#password'),
        $confirmation = $('#confirmation'),
        $mail = $('#email'),
        $envoi = $('#submit'),
        $reset = $('#rafraichir'),
        $erreur = $('#erreur'),
        $champ = $('.champ'); //qui ont une classe champ !!


// le code précédent se trouve ici

$champ.keyup(function(){
    if($(this).val().length < 5){ // si la chaîne de caractères est inférieure à 5
        $(this).css({ // on rend le champ rouge
            borderColor : 'red',
	    color : 'red'
        });
     }
     else{
         $(this).css({ // si tout est bon, on le rend vert
	     borderColor : 'green',
	     color : 'green'
	 });
     }
});


$confirmation.keyup(function(){
    if($(this).val() != $mdp.val()){ // si la confirmation est différente du mot de passe
        $(this).css({ // on rend le champ rouge
	    borderColor : 'red',
	    color : 'red'
        });
    }
    else{
	$(this).css({ // si tout est bon, on le rend vert
	    borderColor : 'green',
	    color : 'green'
	});
    }
});

//simple fonction vierifier seulement est-ce les cases non vides
function verifier(champ){
    if(champ.val() == ""){ // si le champ est vide
    	$erreur.css('display', 'block'); // on affiche le message d'erreur
        champ.css({ // on rend le champ rouge
    	    borderColor : 'red',
    	    color : 'red'
    	});
    }
}


$envoi.click(function(e){
    e.preventDefault(); // on annule la fonction par défaut du bouton d'envoi

    // puis on lance la fonction de vérification sur tous les champs :
    verifier($pseudo);
    verifier($mdp);
    verifier($confirmation);
    verifier($mail);
});


});





