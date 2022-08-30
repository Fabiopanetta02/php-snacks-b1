<?php

$matches = [
	[
		"hometeam" => "Squadra 1",
		"guesteam" => "Squadra 2",
		"homePoints" => "55",
		"guestPoints" => "62"
	],
	[
		"hometeam" => "Squadra 3",
		"guesteam" => "Squadra 4",
		"homePoints" => "43",
		"guestPoints" => "60"
	],
	[
		"hometeam" => "Squadra 5",
		"guesteam" => "Squadra 6",
		"homePoints" => "72",
		"guestPoints" => "40"
	],
	[
		"hometeam" => "Squadra 7",
		"guesteam" => "Squadra 8",
		"homePoints" => "56",
		"guestPoints" => "55"
	]
]; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Snack 1</h2>
        <ul>
        <?php for($i=0; $i < count($matches); $i++) :?>
            <li>
                <?= 
                $matches[$i]["hometeam"] ." - " .$matches[$i]["guesteam"] ." | " .$matches[$i]["homePoints"] ."-" .$matches[$i]["guestPoints"];
                ?>
            </li>
        <?php endfor; ?>
        </ul>
    </div>
</body>
</html>