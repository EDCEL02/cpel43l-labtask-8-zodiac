<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="zodiac_styles.css">
    <title>Chinese Zodiac</title>
    <link rel="icon" type="image/png" href="img/dragon.png">
</head>
<body>
    <div class="container">
        <header>
        <h1>CHINESE ZODIAC for loop</h1>
        </header>
        <table>
            <tr>
                <?php
                    // Chinese Zodiac signs
                    $zodiacSigns = array("Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake", "Horse", "Goat", "Monkey", "Rooster", "Dog", "Pig");

                    // Corresponding images for each sign
                    $zodiacImages = array(
                        "img/rat.png", 
                        "img/ox.png", 
                        "img/tiger.png", 
                        "img/rabbit.png", 
                        "img/dragon.png", 
                        "img/snake.png",
                        "img/horse.png", 
                        "img/goat.png",
                        "img/monkey.png", 
                        "img/rooster.png", 
                        "img/dog.png", 
                        "img/pig.png"
                    );

                    // Loop through each sign to create column headers with images
                    foreach ($zodiacSigns as $index => $sign) {
                        echo "<th>$sign<br><img src=\"{$zodiacImages[$index]}\" alt=\"$sign\"></th>";
                    }
                ?>
            </tr>
            
            <?php
                // Start year and end year
                $startYear = 1912;
                $endYear = date("Y");  // Current year

                // Loop through each year to create rows
                for ($year = $startYear; $year <= $endYear; $year++) {
                    echo "<tr>";
                    
                    // Loop through each sign to create cells
                    foreach ($zodiacSigns as $index => $sign) {
                        echo "<td>$year</td>";
                        $year++;
                        if ($year > $endYear) {
                            break 2;  // Break out of both inner and outer loops
                        }
                    }
                    
                    echo "</tr>";
                    $year --;
                }
            ?>
        </table>
    </div>
</body>
</html>
