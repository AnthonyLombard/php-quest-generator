<!DOCTYPE html>
<?php include 'generate.php'; ?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quest generator in php</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="container">
<div class="quest-panel">
    <div class="title"><h1>QUEST GENERATOR</h1></div>
        <div class="quest">
            <div class="quest-title"><h2>QUEST TITLE</h2></div>
            <div class="quest-location"><p><b><?php echo $quest_1->questGalaxy; ?></b></p></div>
            <div class="quest-details">
                <p>
                There are many variations of passages of Lorem Ipsum available, 
                but the majority have suffered alteration in some form, by injected humour, 
                or randomised words which don't look even slightly believable. If you are 
                going to use a passage of Lorem Ipsum, you need to be sure there isn't anything 
                embarrassing hidden in the middle of text.
                </p>
            </div>
            <div class="quest-a-d">
                <div class="quest-accept">ACCEPT QUEST</div>
                <div class="quest-decline">DECLINE QUEST</div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
