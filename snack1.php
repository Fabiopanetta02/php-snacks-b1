<?php

$matches = [
	[
		"homeTeam" => "Squadra 1",
		"guestTeam" => "Squadra 2",
		"homePoints" => "55",
		"guestPoints" => "62"
	],
	[
		"homeTeam" => "Squadra 3",
		"guestTeam" => "Squadra 4",
		"homePoints" => "43",
		"guestPoints" => "60"
	],
	[
		"homeTeam" => "Squadra 5",
		"guestTeam" => "Squadra 6",
		"homePoints" => "72",
		"guestPoints" => "40"
	],
	[
		"homeTeam" => "Squadra 7",
		"guestTeam" => "Squadra 8",
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
                $matches[$i]["homeTeam"] ." - " .$matches[$i]["guestTeam"] ." | " .$matches[$i]["homePoints"] ."-" .$matches[$i]["guestPoints"];
                ?>
            </li>
        <?php endfor; ?>
        </ul>
    </div>
</body>
</html>