
<?php include("../includes/config.php") ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../img/icon.jpg">
    <title><?php echo $SERVER_NAME ?> | Youtuber</title>
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/design.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="panel panel-application">
            <div class="panel-heading groups"></div>
    <div class="panel-body">
                <h2>Youtuber</h2>
        <p>Der Yotuber-Rang sorgt für Promotion für den Server. Es freut uns, dass du dich für diesen Rang bewerben möchtest. Jedoch gibt es ein paar Dinge zu beachten.</p>
<p>Folgende Anforderungen sind ausschalggebend:</p>
<p>YouTube (gemessen wird anhand der Daten auf <a href="https://socialblade.com/youtube/"><b>Socialblade</b></a>):</p>
<li>Mindestens 3.000 Klicks im Monat</li>
<li>Mindestens 500 Abonnenten</li>
<li>Innerhalb des letzten Monats muss 1 Video auf dem Server aufgenommen worden sein</li>
<p></p>
<p>Twitch (gemessen wird anhand der Daten auf <a href="http://www.twinge.tv"><b>Twinge</b></a>):</p>
<li>Mindestens 30 Avg. Viewers</li>
<li>Mindestens 1 Stream pro Woche</li>
<p></p>

        <hr class="invisible" />

        <h3>Information</h3>
            <div class="alert alert-info">
        <p style="color: black">Die Bewerbung für diesen Rang findet im TeamSpeak statt!</p>
    </div>
        <hr />
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <a href="ts3server://<?php echo $SERVER_NAME ?>?port=9987" class="btn group-btn vip btn-lg btn-block"><span><i class="fa fa-video-camera fa-fw"></i></span>Jetzt bewerben</a>
            </div>
        </div>
    </div>
    <div class="panel-footer"></div>
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