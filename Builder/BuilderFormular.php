
<?php include("../includes/config.php") ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../img/icon.jpg">
    <title><?php echo $SERVER_NAME ?> | Builder-Bewerbung</title>
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/design.css" rel="stylesheet">
</head>
<body>

<?php
    if(isset($_POST["submit"])){
      mail("apply@name.de", "Builder Bewerbung", 'Name: '.$_POST["deinname"].' Alter: '.$_POST["deinalter"].' E-Mail-Adresse: '.$_POST["deineemail"].' Erfahrungen: '.$_POST["erfahrungen"].' Kompetenzen: '.$_POST["kompetenzen"].' Referenzen: '.$_POST["referenzen"].' Schlusswort: '.$_POST["schluss"]);
      ?>
      <h1 style="color: darkgreen; background-color: white;">Deine Bewerbung wurde erfolgreich versendet!</h1>
      <?php
    }
     ?>


<div class="container">

    <div class="panel panel-application">
            <div class="panel-heading groups"></div>
    <form action="BuilderFormular.php" method="post" class="form-horizontal">
        <div class="panel-body">
                        <h2>Builder - Bewerbungsformular</h2>
            <hr />
                <div class="form-group">
                    <label  for="deinname" class="col-sm-3 control-label">Dein Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="deinname" class="form-control" id="field165" required> 
						<span class="help-block">Gebe hier deinen Ingame-name an</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="deinalter" class="col-sm-3 control-label">Dein Alter</label>
                    <div class="col-sm-9">
                        <input type="text" name="deinalter" class="form-control" id="field177"min="0" required>   
						<span class="help-block">Das Alter bitte in Jahren z.B. 17</span>
                    </div>
                </div>
                <hr class="invisible small-divider" />                <div class="form-group">
                    <label for="deineemail" class="col-sm-3 control-label">E-Mail-Adresse</label>
                    <div class="col-sm-9">
                        <input type="email" name="deineemail" class="form-control" id="field173" required>
					<span class="help-block">Deine E-Mail z.b. mail@example.com</span>                        
                    </div>
                </div>
                <hr />                
                <div class="form-group">
                </div>
                <div class="form-group">
                    <label for="erfahrungen" class="col-sm-3 control-label">Erfahrungen und Charaktereigenschaften</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="erfahrungen" class="form-control" id="field168"rows="8" required></textarea>                        
                        <span class="help-block">Welche Erfahrungen hast du im Builder Bereich schon gemacht und warum sollten wir ausgerechnet dich einstellen? Was kannst du, was kannst du nicht so gut?</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="kompetenzen" class="col-sm-3 control-label">Kompetenzen</label>
                    <div class="col-sm-9">
                        <textarea name="kompetenzen" class="form-control" id="field169"rows="8" required></textarea>                        
                        <span class="help-block">Welche Erfahrungen hast du mit Bauteams?</span>
                    </div>
                </div>
				<div class="form-group">
                    <label for="referenzen" class="col-sm-3 control-label">Referenzen</label>
                    <div class="col-sm-9">
                        <textarea name="referenzen" class="form-control" id="field170"rows="4" required></textarea>                        
                        <span class="help-block">Liste hier einige Projekte von <strong>dir</strong> auf, an denen wir deine Erfahrung erkennen können.</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="schluss" class="col-sm-3 control-label">Schlusswort</label>
                    <div class="col-sm-9">
                       <textarea name="schluss" class="form-control" id="field171"rows="3" required></textarea>                        
                    </div>
                </div>
        </div>
        <div class="panel-footer">
            <div class="row">
                <div class="col-sm-offset-3 col-sm-9">
                    <p class="text-muted"><small>Überprüfe vor dem Abschicken noch einmal alle deine angegebenen Daten. Nach dem Absenden kannst du sie nicht mehr ändern!</small></p>
                    <button type="submit" name="submit" class="btn btn-primary" style="margin-right: 10px;" value="save">Abschicken</button>
                </div>
            </div>
        </div>
    </form>
    </div>

    <footer>
        <div class="row">
            <p class="col-sm-6">Entwickelt von <a href="Twitter.com/PHPMyApple">PHPMyApple</a>.</p>
        </div>
    </footer>
</div>

<script src="../js/jquery.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function () {
        $("[data-toggle='tooltip'], .ttp").tooltip();
    })
</script>

</body>
</html>