
$(document).ready(function(){
    
    console.log("jQuery est prêt !");

    var $pseudo = $('#name'),
        $mdp = $('#password'),
        $confirmation = $('#confirmation'),
        $mail = $('#email'),
        $envoi = $('#submit'),
        $reset = $('#rafraichir'),
        $erreur = $('.error'),
        $champ = $('.champ'); //qui ont une classe champ !!



//exemple mousehover
$mdp.hover(
function() {
    $( this ).append( $( "<span> ***</span>" ) );
    $('.namec').css('display', 'block');
  }, function() {
    $('.namec').hide();
  }
);


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

//simple fonction vierifier seulement est-ce les cases non vides : fonction applicated on all attributs if we wanna specifier error type handling we need to do fonction for every thing
function verifier(champ){
    if(champ.val() == ""){ // si le champ est vide
    	$erreur.css('display', 'block'); // on affiche le message d'erreur
        $erreur.html("* you have errors xjhj.");
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

//

function validate(){
    var valid = true;
    var f_name = $('#name').val();
    /*var l_name = $('#l_name').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var retype_password = $('#re_password').val();
    var gender = $('#gender').val();*/
    
    //var checkedData=[];
    $('.language').each(function(i){
        if($(this).is(':checked'))
        {
            checkedData.push($(this).val());
        }
    });

    //var country = $('#country').val();;
    //var phone = $('#phone').val();;
    
    if(f_name=='' || f_name==null)
    {
        valid=false;
        $('#f_name_error').html("* Please enter firstname."); 
    }
    else
    {
        $('#f_name_error').html("");
    }
    /*if(l_name=='' || l_name==null)
    {
        valid=false;
        $('#l_name_error').html("* Please enter lastname.");
    }
    else
    {
        $('#l_name_error').html("");
    }
    if(email=='' || email==null)
    {
        valid=false;
        $('#email_error').html("* Please enter email.");
    }
    else
    {
        $('#email_error').html(""); 
    }
    if(password=='' || password==null)
    {
        valid=false;
        $('#password_error').html("* Please enter password.");
    }
    else
    {
        $('#password_error').html("");
    }
    if(retype_password=='' || retype_password==null)
    {
        valid=false;
        $('#re_password_error').html("* Please enter retype password.");
    }
    else
    {
        $('#re_password_error').html("");
    }
    if(checkedData=='' || checkedData==null)
    {
        valid=false;
        $('#language_error').html("* Please choose any language.");
    }
    else
    {
        $('#language_error').html("");
    }
    if(country=='' || country==null)
    {
        valid=false;
        $('#country_error').html("* Please choose your country.");
    }
    else
    {
        $('#country_error').html("");
    }
    if(phone=='' || phone==null)
    {
        valid=false;
        $('#phone_error').html("* Please enter your phone number.");
    }
    else
    {
        $('#phone_error').html("");
    }
    if(phone!='')
    {
        valid = phoneNumberValidation(phone);
    }
    if(password != retype_password)
    {
        valid=false;
        $('#re_password_error').html("* Please retype password same as password.");
    }
    if(password == retype_password)
    {
        $('#re_password_error').html("");
    }   
    if(valid==false)
    {
        return false;
    }
    else
    {
        alert("You form is ready to submit.");
        return true;
    }*/ 
}

});





