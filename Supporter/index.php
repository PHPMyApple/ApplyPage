<?php include("../includes/config.php") ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../img/icon.jpg">
    <title><?php echo $SERVER_NAME ?> | Supporter</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/design.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="panel panel-application">
            <div class="panel-heading groups"></div>
    <div class="panel-body">
                <h2>Supporter</h2>
        <p>Falls du dich als Suppoerter bewerben willst, solltest du die folgenden Punkte lesen.</p>

<h3>Dein Profil</h3>
<ul>
    <li>Teamfähigkeit, großer Ehrgeiz und Flexibilität</li>
    <li>Selbstständiges und zielorientiertes Arbeiten</li>
    <li>Fähigkeit zur Erfassung von komplexeren Zusammenhängen</li>
    <li>Ausreichend Zeit um dich an Projekten beteiligen zu können</li>
    <li>Ein funktionierender TeamSpeak-Client und ein entsprechendes Mikrofon</li>
    <li>Ein Mindestalter von 15 Jahren</li>
</ul>

<h4>Anforderungen für Supporter</h4>
<ul>
    <li>Aktivität auf dem Server und Discord</li>
    <li>keine Bans in den letzten 30 Tagen</li>
    <li>Du musst dich mit dem Server und den Features auskennen</li>
</ul>



<h3>Bewerbungsprozess</h3>
<ol>
	<li>Schreibe eine <strong>aussagekräftige Bewerbung</strong> und beachte dabei die oben genannten Kriterien.</li>
	<li>Sollte deine Bewerbung angenommen werden, wirst du zu einem Gespräch auf unserem TeamSpeak (<tt><?php echo $SERVER_NAME ?></tt>) eingeladen, dort wird dein wissen auf die Probe gestellt</li>
    <li>Nach der Abgabe und auswertung dieser Aufgabe, wird entschieden ob du in die Testphase aufgenommen wirst.</li>
    <li>solltest du diese Testphase bestehen, wird entschieden ob du als Vollwertiger Supporter aufgenommen wirst.</li>
</ol>

<h3>Was wir bieten:</h3>
<ul>
    <li>Freundliches Arbeitsklima</li>
    <li>Hilfsbereites und offenes Team</li>
	<li>Aufstiegsmöglichkeiten </li>
	<li>Arbeit an einem spannenden und wachsendem Prokjekt</li>
</ul>
        <hr class="invisible" />
            <div class="alert alert-info">
    </div>
        <hr />
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">                       
			<a href="SupporterFormular.php" class="btn group-btn supporter btn-lg btn-block"><span><i class="fas fa-headset fa-fw"></i></span>Jetzt bewerben</a>	
            </div>
        </div>
    </div>
    <div class="panel-footer"></div>
    </div>
    
    <footer>
        <div class="row">
            <p class="col-sm-6">Entwickelt von <a href="Twiter.com/PHPMyApple">PHPMyApple</a>.</p>
        </div>
    </footer>
</div>

<script src="../jsjquery.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function () {
        $("[data-toggle='tooltip'], .ttp").tooltip();
    })
</script>

</body>
</html>