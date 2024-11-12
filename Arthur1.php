<!DOCTYPE html>
<html>
    <head>
        <link rel ="stylesheet"
        href="cv.css">

    </head>
    <body>
        <div class="main">

        <h1>Contactez moi </h1>
        <a href="index.php">Acceuil</a>
        <br><br>
        
        <form action="mailto:arthur.picque26@gmail.Com" method="post" name = "monform" id="form">
            
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" placeholder="nom" autofocus  >
            <br><br>
            <label for="Prénom">Prénom :</label>
            <input type="text" id="prénom" name="prénom" placeholder="Pénom" >
            <br><br>
            <label for ="mdp"> Mot De Passe</label>
            <input type="text" id ="mdp" name="mdp" placeholder="Mot De Passe" >
            <br><br>
            <label for="E-mail">E-mail :</label>
            <input type="text" id="e-mail"name="e-mail" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$" >
            <br><br>
            <label>Genre :</label>
            <input type="radio" id="homme" name="genre" value="homme">
            <label for="homme">Homme</label>
            <input type="radio" id="femme" name="genre" value="femme">
            <label for="femme">Femme</label>
            <br><br>
            Newsletter : <input type="checkbox">
            <br><br>
            Message :<textarea name = "message" id = "message" ></textarea>
            <br><br>
            <select>
            <option value="france">France</option>
            <option value="belgique">Belgique</option>
            <option value="suisse">Suisse</option>

            </select>
            <br><br>
            <input type="submit" value="Envoyer Le Message" placeholder="Tapez votre message" >
            <br><br>
        
            

            
        </form>
        </div>
        Bonjour <p id="valueNom"></p>
        <?php> echo "hello world";
        ?>
<script>
/* document.getElementById("envoie").addEventListener("click", function(event){
        event.preventDefault();
        var message = document.monform.message.value; 
    
    if (message == ""){
            alert("veuillez remplir le message");
    }
    else {
        alert("Message pret à étre envoyé")
    }
    });*/
    document.getElementById('form').addEventListener("submit", function(e){
        e.preventDefault();
        var message = document.getElementById("message").value;
        console.log(message)
        if(message == ""){
            alert("veuillez remplir le message");

        }
        else {
            alert("Message ok");
        }
    })
</script>
    </body>
</html>