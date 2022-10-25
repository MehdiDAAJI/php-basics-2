<?php

$name = "Gus";
$jedis = ['Obi-Wan Kenobi', 'Yoda', 'Luke Skywalker', 'Windu', 'Qui-gon Jinn'];
$jedisNamesAndAgeValues = [
    "Yoda" => 800,
    "Leia" => 19,
    "Luke Skywalker" => 19,
    "Darth Vader" => 46,
    "Chewbacca" => 200,
];
$jedisNamesAndAgeValues["Han Solo"] = 29;
$starWarsCharactersByType = [
    "jedi" => [
        "Luke Skywalker" => 19,
        "Yoda" => 900,
        "Windu" => 43
    ],
    "Sith" => [
        "Darth Vader" => 46,
        "Darth Maul" => 35,
        "Dooku" => 70,
    ],
    "Gungan" => [
        "Jar Jar Binks" => 3,
    ],
    "Human" => [
        "Han Solo" => 29,
        "Leia" => 19,
    ],
];

ksort($jedisNamesAndAgeValues);
array_push($jedis, "rey");

echo "hello mate! <br>";
for ($i = 0; $i < 10; $i++) {
    echo $i;
}
echo "<br>";
for ($i = 0; $i < 11; $i++) {
    echo $i;
}
echo "<br>";
for ($i = 1; $i < 11; $i++) {
    echo $i;
}
echo "<br>";
for ($i = 10; $i > -1; $i--) {
    echo $i;
}
echo "<br>";
for ($i = 25; $i < 51; $i += 5) {
    echo $i;
}
echo "<br>";
for ($i = 10; $i > -10; $i -= 3) {
    echo $i;
}
echo "<br>";

if ($name === "Darth Vader" || $name === "Darth Sidious") {
    echo "Sith!";
} elseif ($name === "Yoda") {
    echo "Jedi!";
} else {
    echo "Probably a powerless person!";
}
echo "<br>";
foreach ($jedis as $dude) {
    echo "$dude <br>";
}
echo "<br>";

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
    <main>
        <ul>
            <?php foreach ($jedisNamesAndAgeValues as $jedi => $age) : ?>
                <?php if ($age > 100) : ?>
                    <li><?= $jedi . " is " . $age . " yo!" ?></li>
                <?php endif ?>
            <?php endforeach ?>
        </ul>
        <?php foreach ($starWarsCharactersByType as $type => $names) : ?>
            <section>
                <h2><?= $type ?></h2>
                <ul>
                    <?php foreach ($names as $name => $age) : ?>
                        <li><?= $name . " is " . $age . " yo." ?></li>
                    <?php endforeach ?>
                </ul>
            </section>
        <?php endforeach ?>
        <section>
            <ul>
                <?php foreach ($starWarsCharactersByType as $type => $names) : ?>
                    <li><?= $type . ": " . count($names) ?></li>
                <?php endforeach ?>
            </ul>
        </section>
    </main>
</body>

</html>