
<!doctype html>
    <html>
    <head>
<style>    
section.login-container{
    display: flex;
    position: fixed;
    top:0;
    left: 0;
    bottom: 0;
    right: 0;
  
    background: rgba(243,156,18 ,0.8);
}

/*
  Le div directement sous la section nous permet 
  de créer une boite avec une couleur d’arrière-plan
  et une bordure.
*/
section.login-container > div{
    width: 450px;
  
    margin: auto;
  
    padding: 20px;

    text-align: center;

    background: #eee;
    border: 1px solid #ccc;

    border-radius: 5px;

}

/*
    Nous plaçons les éléments à l’intérieur du formulaire
    en « flexbox » sur une seule colonne.
*/
section.login-container form{
    display: flex;
    flex-direction: column;
}

/*
  Nous voulons que les champs du formulaire prennent 
  toute la largeur.
  Le outline: 0; empêche d’avoir un surlignement de
  l’objet au focus.
  C’est moins bon au point de vue de l’accessibilité, 
  mais plus joli du point vu du design.
*/
form input[type="password"], 
form input[type="text"], 
form button[type="submit"] {
    width: 100%;
  
    margin-bottom: 32px;
    padding: 16px;
  
    color: #333;

    border: 1px solid #ccc;
    border-radius: 5px;

    outline: 0;
}

/*
    Au survol et au focus des champs de saisie de texte,
    nous changeons la couleur d’arrière-plan.
*/
form input[type="text"]:focus,
form input[type="text"]:hover,
form input[type="password"]:focus,
form input[type="password"]:hover {
    background-color: #ccc;
}

/*
    Mises-en forme du bouton pour l’envoi du formulaire.
*/
form button[type="submit"] {
    font-weight: bold;
    color: #eee;
    text-transform: uppercase;

    background-color: #e67e22;
}

/*
    Mises-en forme du bouton pour l’envoi du formulaire au survol et au focus.
*/
form button[type="submit"]:focus,
form button[type="submit"]:hover {
    background-color: #d35400;
}





/****************************************************/







/* Styles de base pour la page Web
   Ne pas touchez */


/*------------------
   Reset
------------------*/

html{
    box-sizing: border-box;
}

*,*:before,*:after{
    box-sizing: inherit;
}

/*------------------
   Base
------------------*/

body{
    background-color: white;
    font-family: Helvetica, sans-serif;
}


/*------------------
   Mise en page
------------------*/

.wrapper{
    width: 800px;
    margin-left: auto;
    margin-right: auto;
}

</style>
</head>
<body>
<div class="wrapper">
    <h1>Exemple de formulaire de connexion</h1>
    <p>Mise en page de base d'un formulaire de connexion.</p>

    <section class="login-container">
        <div>
            <header>
                <h2>Identification</h2>
            </header>

            <form action="" method="post">
              
                <input type="text" name="username" placeholder="Nom d'utilisateur" required="required"/>
                <input type="password" name="password" placeholder="Mot de passe" required="required"/>
                <button type="submit">Connexion</button>

            </form>
        </div>
    </section>

</div>
</body>
</html>