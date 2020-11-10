<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Un formulaire de connexion en AJAX</title>
</head>

<body>

    <h1>Un formulaire de connexion en AJAX</h1>

    <form>
    <p>
        Nom d'utilisateur : <input type="text" id="username" />
        Mot de passe : <input type="password" id="password" />
        <input type="submit" id="submit" value="Se connecter !" />
        <p id="resultat"></p>
    </p>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

    <script>
 
$(document).ready(function(){
 
    $("#submit").click(function(e){
        e.preventDefault();
 
        $.post(
            '../../Controllers/Ctlr.php', // Un script PHP que l'on va créer juste après
            {
                //test to mvc
                action : "showme",

                username : $("#username").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
                password : $("#password").val()
            },
 
            function(data){
 
                alert(data);
                

                var jsonData = JSON.parse(data);
                //how to parcour list json elemt i dont know even if its a json too bcs no particulare indices mybe numbres ???
                //var jsonData2 =JSON.parse(jsonData[4]);
                //alert(jsonData[0].user_mail);
            

                if(data.Success == 1){
                     // Le membre est connecté. Ajoutons lui un message dans la page HTML.
 
                     $("#resultat").html("<p>Vous avez été connecté avec succès !</p>");
                }
                else{
                     // Le membre n'a pas été connecté. (data vaut ici "failed")
 
                     $("#resultat").html("<p>Erreur lors de la connexion...</p>");
                }
         
            },
            'text'
         );
    });
});
 
</script>
</body>
</html>
