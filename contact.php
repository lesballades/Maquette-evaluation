<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=sarl_gaumart', 'root', 'phoenixwillneverdie21');
}
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
}
?>

<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Version XS</title>
    <meta name="description" content="Le site de la maison de l'architecture">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" type="text/css" rel="stylesheet">
      
    </head>
    
    <body>
        
        <header>
            
            <nav class="navbar navbar-default" role="navigation">
    	  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
                <div class="navbar-brand navbar-brand-centered"><div class="col-xs-12"><a href="index.php"><img id="logo" src="assets/img/logo_gaumart.png"/></a></div></div>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="navbar-brand-centered">
		      <ul class="nav navbar-nav">
		        <li><a href="reception.php">Réception d'entreprise</a></li>
		        <li><a href="evenements.php">Evènements privés</a></li>
		       
                  </ul>
                
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="traiteur.php">Traiteur</a></li>
		        <li><a href="reference.php">Nos références</a></li>
                <li><a href="contact.php">Nous contacter</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
          
        </header>
        
          <div class="hidden-xs"  id="trait1"></div>
         <div class="hidden-xs" id="trait2"></div>
        
          
        <div id="textegauche">
        
        <br/>
        <br/>
        <center><h3><b id="color">GAUMART</b></h3></center><br/>
        
        <p id="textestyle1"><b>Tél : 01 45 83 78 78</b><br/>
        <br/>
            <b>Email : </b><b id="color1">gaumart75@orange.fr</b></p>
        
        </div>
    
        <div id="img6">
           <div class="hidden-xs"> <img src="assets/img/7.contact" class="img-responsive"/></div>
        </div>
        
        <div id="formulaire">
        
        <form name="monFormulaire" id="monFormulaire" method="POST" required="required" >
            
        <input name="nom" id="nom" size="80" placeholder="NOM" required="required" ><br/>
            
        <input name="societe" id="societe" size="80" placeholder="SOCIETE" required="required" >*<br/>
            
        <input name="mail" id="mail" size="80" placeholder="EMAIL" required="required">*<br/>
            
        <input name="tel" id="tel" size="80" placeholder="TEL" required="required" ><br/>
       
       <textarea name="msg" id="msg" placeholder="MESSAGE" required="required" ></textarea>
            
        <div>
            <button type="submit" name="valider"><b>ENVOYER</b></button>
</div>

            
            </form>
<?php
    if (isset ($_POST['valider'])) {
        $nom=$_POST['nom'];
        $societe=$_POST['societe'];
        $mail=$_POST['mail'];
        $tel=$_POST['tel'];
        $msg=$_POST['msg'];

        $bdd->exec('INSERT INTO contact VALUES(NULL, "'.$nom.'", "'.$societe.'", "'.$mail.'", "'.$tel.'", "'.$msg.'")');
}
?>
            
        </div>
        
           <div id="footer">
        <center><p id="ligne1"><b>Gaumart traiteur Paris</b></p></center>
        <center><p id="ligne2">Mentions légales || Gateartproject © 2015 </p></center>
        </div>
       
        
        
          <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Javascript de Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      
    <script src="bootstrap/js/jquery-3.2.1.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
        
        

    </body>
    
    
    
</html>