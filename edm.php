<?php
//Eau de Mon
//Montoya, Justine S.
//WD - 202

require 'fragrances.php';
include 'header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $storeName; ?></title>
        <style>
            body {
                background: linear-gradient(to right, #0f0f0f, #1c1c1c);
                font-family: 'Montserrat', sans-serif;
                color: #e0e0e0;
                text-align: center;
                margin: 0;
                padding: 0;
            }

            h1 {
                font-size: 3em;
                color: #c0a062;
                letter-spacing: 2px;
                margin-top: 30px;
            }

            p {
                font-family: 'Georgia', serif;
                font-size: 1.2em;
                color: #b0b0b0;
                margin-bottom: 40px;
            }


            table {
                margin: auto;
                border-collapse: collapse;
                width: 80%;
                background-color: #121212;
                box-shadow: 0 0 15px rgba(0,0,0,0.6);
            }

            th, td {
                border: 1px solid #444;
                padding: 15px;
                font-size: 1.1em;
                text-align: center;
            }

            th {
                background-color: #2c2c2c;
                color: #c0a062;
                text-transform: uppercase;
            }

            td {
                color: #e0e0e0;
            }

            tr:hover {
                background-color: #1f1f1f;
                transition: 0.3s;
            }
        </style>
    </head>

    <body>
        

        <table>
            <tr>
                <th>Name</th>
                <th>Notes</th>
                <th>Price</th>
                <th>Best Season</th>
                <th>Best Occasion</th>
            </tr>

            <?php
                foreach ($fragrances as $perfume) {
                    echo "<tr>";
                    echo "<td>{$perfume['name']}</td>";
                    echo "<td>{$perfume['notes']}</td>";

                    //Price column
                    $discRate = 0.10; //10% discount
                    $discountedPrice = $perfume['price'] - ($perfume['price'] * $discRate);
                    echo "<td>₱{$perfume['price']} <br><span style='color:#c0a062; font-weight: bold;'>₱{$discountedPrice} (Sale)</span></td>";

                    //Season column
                    if(strpos($perfume['season'], "Summer") !== false || (strpos($perfume['season'], "warm") !== false)) {
                        echo "<td style='color:#ffb74d;'>{$perfume['season']}</td>";
                    }
                    elseif(strpos($perfume['season'], "Winter") !== false || (strpos($perfume['season'], "Cooler") !== false)) {
                        echo "<td style='color:#64b5f6;'>{$perfume['season']}</td>";
                    }
                    else {
                        echo "<td>{$perfume['season']}</td>";
                    }
                    
                    //Occasion column
                    if(strpos($perfume['occasion'], "romantic") !== false) {
                        echo "<td style='color:pink;'>{$perfume['occasion']}</td>";
                    }
                    else {
                        echo "<td>{$perfume['occasion']}</td>";
                    }

                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
