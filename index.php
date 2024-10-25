
<?php include("includes/config.php") ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="phpmyapple">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/icon.jpg">
    <title><?php echo $SERVER_NAME ?> | Bewerbungen</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/Design.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <header class="row table-row">



    </header>

    <div class="panel panel-application">
        <div class="panel-heading groups">
    <div class="row">
        <div class="col-sm-6">
            <a href="Supporter/" class="btn group-btn supporter btn-lg btn-block"><span><i class="fas fa-headset fa-fw"></i></span>Supporter</a>
        </div>
        <div class="col-sm-6">
            <a href="Developer/" class="btn group-btn developer btn-lg btn-block"><span><i class="fas fa-code fa-fw"></i></span>Developer</a>
        </div>
        <div class="col-sm-6">
            <a href="Builder/" class="btn group-btn builder btn-lg btn-block"><span><i class="fas fa-cubes fa-fw"></i></span>Builder</a>
        </div>
          <div class="col-sm-6">
            <a href="Youtuber/" class="btn group-btn vip btn-lg btn-block"><span><i class="fas fa-video-camera fa-fw"></i></span>Youtuber</a>
        </div>
    </div>
</div>
<div class="panel-body">
        <h2><?php echo $SERVER_NAME ?> Bewerbungsportal</h2>
    <p>Herzlich Willkommen in den Bewerbungsportal von Name.de. Hier findest du alle Voraussetzungen und kannst dich für den jeweiligen Rang bewerben.</p>
    <p>Falls du Fehler in unserem Portal findest, kontaktiere uns <a href="#">Web-Entwickler</a>.</p>

    <div class="item-list">
        <div class="item">
            <div class="page-header">
                <h3>Achtung, Wir suchen Supporter!</h3>

            </div>
            

            <h4 style="margin-top: 15px;">Link für den Supporter-Rang</h4>
            <ul class="list-unstyled list-margin">
                <li><i class="fas fa-headset fa-fw"></i>&nbsp; <a href="Supporter.php">Supporter</a></li>
            </ul>
        </div>
        <div class="item">
            <div class="page-header">
                <h3>Builder</h3>

            </div>
            

            <h4 style="margin-top: 15px;">Link für den Builder-Rang</h4>
            <ul class="list-unstyled list-margin">
                <li><i class="fas fa-cubes fa-fw"></i>&nbsp; <a href="Builder.php">Builder</a></li>
            </ul>
        </div>
		
		
		        <div class="item">
            <div class="page-header">
                <h3>Developer</h3>

            </div>
            

            <h4 style="margin-top: 15px;">Link für den Builder-Rang</h4>
            <ul class="list-unstyled list-margin">
                <li><i class="fas fa-code fa-fw"></i>&nbsp; <a href="Developer.php">Developer</a></li>
            </ul>
        </div>
		
		
		
		
        <div class="item">
            <div class="page-header">
                <h3>Youtuber</h3>

            </div>
            

            <h4 style="margin-top: 15px;">Link für den Youtuber-Rang</h4>
            <ul class="list-unstyled list-margin">
                <li><i class="fas fa-video-camera fa-fw"></i>&nbsp; <a href="Youtuber.php">Youtuber</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="panel-footer"></div>
    </div>

    <footer>
        <div class="row">
            <p class="col-sm-6">Entwickelt von <a href="https://Twitter.com/PHPMyApple">PHPMyApple.</a>
        </div>
    </footer>
</div>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function () {
        $("[data-toggle='tooltip'], .ttp").tooltip();
    })
</script>

</body>
</html>