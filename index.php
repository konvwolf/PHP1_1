<?php
    $months = [
        'января',
        'февраля',
        'марта',
        'апреля',
        'мая',
        'июня',
        'июля',
        'августа',
        'сентября',
        'октября',
        'ноября',
        'декабря'
    ];

    $curDate = date('j').' '.$months[date('n') - 1].' '.date('Y').' года, '.date('W').'-я неделя';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Страничка с датой</title>
</head>
<body>
    <h1>
        Сегодня:
    </h1>
    <h2>
        <?=
            $curDate
        ?>
    </h2>
</body>
</html>