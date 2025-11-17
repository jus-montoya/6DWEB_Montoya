<?php
/*Montoya, Justine S.
WD - 202*/
$title = 'Here I am';
$artist = 'Air Supply';
$mood = 'Heartbroken';
$verseCount = '3';
$preChorus_count = 2;
$repeatChorus = 2;
$outro = "1";
$totalStanzas = $verseCount + $preChorus_count + $repeatChorus + $outro; //total of 8
$nouns = ["memories", "time", "thoughts", "you", "feeling", "part", "space", "sense", "heart", "baby", "pain", "rain", "everything", "own", "good"];
$verbs = ["am", "playin'", "thought", "set", "keep", "taunting", "Holding", "outgrew", "has tried", "can fill", "pretending", "mending", "was", "could stand", "come", "crashin'", "can't go", "tried", "make", "done", "ease", "can stop", "live", "miss"];

$verse_1 ='Here I ' . $verbs[0] . ', ' . "\n" .
$verbs[1] . ' with those ' . $nouns[0] . ' again. ' . "\n" .
'And just when I ' . $verbs[2] . ' ' . $nouns[1] . ' had ' . $verbs[3] . ' me free. ' . "\n" .
'Those ' . $nouns[2] . ' of ' . $nouns[3] . ' ' . $verbs[4] . ' ' . $verbs[5] . ' me.' . "\n";

$verse_2 =$verbs[6] . ' ' . $nouns[3] . '. ' . "\n" .
'A ' . $nouns[4] . ' I never ' . $verbs[7] . '. ' . "\n" .
'Though each and every ' . $nouns[5] . ' of me ' . $verbs[8] . '. ' . "\n" .
'Only ' . $nouns[3] . ' ' . $verbs[9] . ' that ' . $nouns[6] . ' inside.' . "\n";

$pre_chorus_1 ='So there\'s no ' . $nouns[7] . ' ' . $verbs[10] . '. ' . "\n" .
'My ' . $nouns[8] . ', it\'s not ' . $verbs[11] . '.' . "\n";

$chorus_1 ='Just when I ' . $verbs[2] . ' I ' . $verbs[12] . ' over ' . $nouns[3] . '. ' . "\n" .
'And just when I ' . $verbs[2] . ' I ' . $verbs[13] . ' on my ' . $nouns[13] . '. ' . "\n" .
'Oh ' . $nouns[9] . ', those ' . $nouns[0] . ' ' . $verbs[14] . ' ' . $verbs[15] . ' through. ' . "\n" .
'And I just ' . $verbs[16] . ' on without ' . $nouns[3] . '.' . "\n";

$verse_3 ='On my ' . $nouns[13] . '. ' . "\n" .
'I\'ve ' . $verbs[17] . ' to ' . $verbs[18] . ' the best of it alone. ' . "\n" .
'I\'ve ' . $verbs[19] . ' ' . $nouns[12] . ' I can to ' . $verbs[20] . ' the ' . $nouns[10] . '. ' . "\n" .
'But only ' . $nouns[3] . ' ' . $verbs[21] . ' the ' . $nouns[11] . '.' . "\n";

$pre_chorus_2 ='I just ' . $verbs[22] . ' without ' . $nouns[3] . '. ' . "\n" .
'I ' . $verbs[23] . ' ' . $nouns[12] . ' about ' . $nouns[3] . '.' . "\n";

$chorus_2 ='Just when I ' . $verbs[2] . ' I ' . $verbs[12] . ' over ' . $nouns[3] . '. ' . "\n" .
'And just when I ' . $verbs[2] . ' I ' . $verbs[13] . ' on my ' . $nouns[13] . '. ' . "\n" .
'Oh ' . $nouns[9] . ', those ' . $nouns[0] . ' ' . $verbs[14] . ' ' . $verbs[15] . ' through. ' . "\n" .
'And I just ' . $verbs[16] . ' on without ' . $nouns[3] . '. ' . "\n" .
'Go on without ' . $nouns[3] . '. ' . "\n" .
'It\'s just no ' . $nouns[14] . ' without ' . $nouns[3] . '.' . "\n";

$outro ='(Just when I ' . $verbs[2] . ' I ' . $verbs[12] . ' over ' . $nouns[3] . '). ' . "\n" .
'Without ' . $nouns[3] . '. ' . "\n" .
'(Just when I ' . $verbs[2] . ' I ' . $verbs[13] . ' on my ' . $nouns[13] . '). ' . "\n" .
'Without ' . $nouns[3] . '. ' . "\n" .
'(Just when I ' . $verbs[2] . ' I ' . $verbs[12] . ' over ' . $nouns[3] . '). ' . "\n" .
'Without ' . $nouns[3] . '. ' . "\n" .
'(Just when I ' . $verbs[2] . ' I ' . $verbs[13] . ' on my ' . $nouns[13] . '). ' . "\n" .
'Without ' . $nouns[3] . '. ' . "\n" .
'(Just when I ' . $verbs[2] . ' I ' . $verbs[12] . ' over ' . $nouns[3] . ').' . "\n";

?>


<!DOCTYPE html>
<html>
    <style>
        body {
            background-color: #E6E6FA;
            font-family: 'Arial', sans-serif;
            color: #5D3FD3;
            margin: 0;
            padding: 20px;
            }

        h1, h2, h3, h4 {
            color:rgb(55, 46, 71);
            text-align: center;
            margin-bottom: 20px;
            text-align: center;
            margin: 0;
            padding: 20px;
            text-decoration: bold;
            }

        p {
            color:rgb(55, 46, 71);
            line-height: 1.6;
            margin-bottom: 20px;
            text-align: center;
            margin: 0;
            padding: 20px;
            font-size
            }

    </style>

    <head>
        <title>Song Lyrics</title>
    </head>
    <body>
        <h1>Title: <?= $title ?></h1>
        <h2>Artist: <?= $artist ?></h2>
        <h3>Mood: <?= $mood ?></h3>

        <h4>Lyrics:</h4>
        <p><strong>Verse 1:</strong><br><?php echo $verse_1 ?></p>
        <p><strong>Verse 2:</strong><br><?php echo $verse_2 ?></p>
        <p><strong>Pre-Chorus:</strong><br><?php echo $pre_chorus_1 ?></p>
        <p><strong>Chorus:</strong><br><?php echo $chorus_1 ?></p>
        <p><strong>Verse 3:</strong><br><?php echo $verse_3 ?></p>
        <p><strong>Pre-Chorus:</strong><br><?php echo $pre_chorus_2 ?></p>
        <p><strong>Chorus:</strong><br><?php echo $chorus_1 ?></p>
        <p><strong>Outro:</strong><br><?php echo $outro ?></p>
        <p><strong>Total Stanzas: </strong><?php echo $totalStanzas ?></p>
    </body>
</html>
