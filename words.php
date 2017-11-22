<?php
$glyphs = glob("word-glyphs/*.svg");

/*
 // This is how I generated the initial word list.
$words = [];
foreach ($glyphs as $glyph) {
    $word = pathinfo($glyph, PATHINFO_FILENAME);
    $words[$word] = '';
}
var_export($words);
 */

$words = array (
    'self' => [
        'sijelo' => 'body',
        'lawa' => 'head',
        'luka' => 'hand',
        'noka' => 'foot',
        'oko' => 'eye',
        'uta' => 'mouth',
    ],
    'tribe' => [
        'mi' => 'I, we',
        'sina' => 'you',
        'ona' => 'she/he/they',
        'jan' => 'person',
        'meli' => 'female',
        'mije' => 'male',
        'mama' => 'parent',
        'kulupu' => 'group',
    ],
    'village' => [
        'esun' => 'market',
        'ilo' => 'tool',
        'kili' => 'fruit',
        'len' => 'clothing',
        'mani' => 'money',
        'moku' => 'food',
        'pan' => 'grain',
        'poki' => 'container',
        'tomo' => 'house',
    ],
    'describe' => [
        'anpa' => 'bottom',
        'ijo' => 'thing',
        'jaki' => 'dirty',
        'linja' => 'long',
        'lipu' => 'flat',
        'lupa' => 'hole',
        'palisa' => 'rod',
        'poka' => 'side',
        'sewi' => 'high',
        'sike' => 'circle',
        'sin' => 'new',
        'supa' => 'surface',
        'suwi' => 'sweet',
    ],
    'opposites' => [
        'pona' => 'good',
        'ike' => 'bad',
        'ante' => 'different',
        'sama' => 'same',
        'kiwen' => 'hard',
        'ko' => 'squishy',
        'insa' => 'inside',
        'selo' => 'outside',
        'sinpin' => 'front',
        'monsi' => 'back',
        'seli' => 'hot',
        'lete' => 'cold',
        'lili' => 'small',
        'suli' => 'big',
    ],
    'act' => [
        'alasa' => 'gather',
        'awen' => 'stay',
        'jo' => 'have',
        'kama' => 'come',
        'ken' => 'able',
        'kepeken' => 'use',
        'kipisi' => 'cut',
        'kute' => 'listen',
        'lape' => 'sleep',
        'lukin' => 'see',
        'moli' => 'death',
        'musi' => 'fun',
        'open' => 'open',
        'pali' => 'activity',
        'pana' => 'give',
        'pini' => 'end',
        'tawa' => 'go',
        'toki' => 'talk',
        'unpa' => 'mate',
        'wile' => 'want',
    ],
    'idea' => [
        'ale' => 'everything',
        'nasa' => 'silly',
        'nasin' => 'manner',
        'olin' => 'love',
        'pakala' => 'blunder',
        'pilin' => 'feeling',
        'sona' => 'knowledge',
        'tenpo' => 'time',
        'utala' => 'conflict',
        'wawa' => 'power',
        'weka' => 'absent',
    ],
    'senses' => [
        'kule' => 'color',
        'loje' => 'red',
        'jelo' => 'yellow',
        'laso' => 'blue',
        'pimeja' => 'black, dark',
        'walo' => 'white',
        'sitelen' => 'image',
        'kalama' => 'sound',
    ],
    'nature' => [
        'ma' => 'land',
        'kon' => 'air',
        'telo' => 'water',
        'suno' => 'sun, light',
        'mun' => 'moon',
        'nena' => 'hill',
        'soweli' => 'animal',
        'akesi' => 'reptile',
        'kala' => 'fish',
        'kasi' => 'plant',
        'pipi' => 'bug',
        'waso' => 'bird',
        'mu' => 'woof, meow',
    ],
    'logic' => [
        'ala' => 'not',
        'anu' => 'or',
        'en' => 'and',
        'kin' => 'also',
        'taso' => 'only, but',
    ],
    'numbers' => [
        'mute' => 'many',
        'namako' => 'extra',
        'nanpa' => 'number',
        'tu' => 'two',
        'wan' => 'one',
    ],
    'connect' => [
        'lon' => 'be, in',
        'ni' => 'this',
        'nimi' => 'word',
        'pi' => 'of',
        'seme' => 'what',
        'tan' => 'from',
    ],
    'unorganized' => [
        'a' => 'ah!',
        'e' => '| dir. obj.',
        'la' => '| adverb',
        'li' => '| verb',
        'o' => 'hey!',
    ],
)

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Toki Pona Categorized Word List</title>
        <style>
            body { margin: 0; background-color: #cccccc; }
            .page { padding: 10px 20px; margin: 0 auto; max-width: 800px;}
            .glyphs { display: flex; justify-content: flex-start; flex-wrap: wrap; }
            .glyphItem { padding: 10px; }
            .glyph { width: 64px; height: 64px; padding: 5px; }
            .glyph-wide { margin: 0 auto; width: 128px; height: 128px; }
            .glyph img { display: block; max-width: 64px; max-height: 64px; width: auto; height: auto; margin: 0 auto;}
            .glyph-wide img { display: block; max-width: 128px; max-height: 128px; width: auto; height: auto; margin: 0 auto;}
            .glyph-name { text-align: center; }
            .glyph-desc { font-style: italic; text-align: center; font-size: 0.8rem;}
            .footer { text-align: center; background-color: #ffffff; padding: 1rem; margin-top: 2rem; font-size: 0.8rem;}
        </style>
    </head>
    <body>
        <div class="page">
            <h1>Toki Pona Categorized Word List</h1>

<?php foreach ($words as $category => $catwords) { ?>
            <h2><?=$category;?></h2>
            <div class="glyphs">
    <?php foreach ($catwords as $word => $desc) { ?>
    <div class="glyphItem"><div class="glyph"> <img src="word-glyphs/<?=$word?>.svg" /> </div> <div class="glyph-name"><?=$word?></div><div class="glyph-desc"><?=$desc;?></div> </div>
    <?php } // end foreach ?>
            </div>

            <hr />
    <?php } // end foreach ?>
        </div>

        <div class="footer">
            <p>Credit for vectorized version of Toki Pona Sitelen Sitelen glyphs goes to Jan Same. <a href="http://www.jonathangabel.com/2015/jan-same-vectorized-sitelen/">See original post</a>
        </div>
    </body>
</html>
