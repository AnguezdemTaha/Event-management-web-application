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
            'gethint.php', // Un script PHP que l'on va créer juste après
            {
                username : $("#username").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
                password : $("#password").val()
            },
 
            function(data){
 
                alert(data.title);

                var jsonData = JSON.parse(data);
                alert(jsonData.title);


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
