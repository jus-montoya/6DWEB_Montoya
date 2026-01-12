<?php 
// Name: Montoya, Justine S.
// Section: WD - 202 
// January 12, 2026
$text = "Holy Angel University";
$text2 = "JUSTINE MONTOYA";
$text3 = " Oh sige, kayo na pogi ";
$text4 = "December 25... Daddy Rob!";
$num = 3.14;
$fruits = array("Apple", "Banana", "Cherry");
$cars = array("Toyota", "Mitsubishi", "Honda");
$numbers_array = array(20, 10, 50, 30, 40, 20);
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>MDTM Hands-On Mod5 - Built-in Functions</title>
        <style>
            body {
            font-family: Arial, sans-serif;
            padding: 20px;
            }

            p {
            font-weight: bold;
            margin-top: 20px;
            }

            table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            margin-bottom: 20px;
            background-color: pink;
            }

            td {
            border: 1px solid #ccc;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color:rgb(247, 229, 229);
            }
        </style>

    </head>
        <body>
            <p>Built-in Functions</p>

            <!-- First table -->
            <p>Changing the Case of Characters</p>
            <table>
                <tr>
                    <td>Lowercase</td>
                    <td><?= strtolower($text) ?></td>
                </tr>
                <tr>
                    <td>Uppercase</td>
                    <td><?= strtoupper($text) ?></td>
                </tr>
                <tr>
                    <td>Capitalize</td>
                    <td><?= ucwords($text) ?></td>
                </tr>
            </table>

            <!-- Second table -->
            <p>Counting Characters and Words</p>
            <table>
                <tr>
                    <td>Number of Characters</td>
                    <td><?= strlen($text2) ?></td>
                </tr>
                <tr>
                    <td>Number of Words</td>
                    <td><?= str_word_count($text2) ?></td>
                </tr>
            </table>

            <!-- Third table -->
            <p>Removing and Replacing Characters</p>
            <table>
                <tr>
                    <td>Remove whitespaces from left</td>
                    <td>Start|<?= ltrim($text3, ' ') ?>|End</td>
                </tr>
                <tr>
                    <td>Remove whitespaces from right</td>
                    <td>Start|<?= rtrim($text3, ' ') ?>|End</td>
                </tr>
                <tr>
                    <td>Remove whitespace from left and right</td>
                    <td>Start|<?= trim($text3, ' ') ?>|End</td>
                </tr>
                <tr>
                    <td>String replace</td>
                    <td><?= str_replace('pogi', 'gwapo', $text3) ?></td>
                </tr>
                <tr>
                    <td>String ireplace</td>
                    <td><?= str_ireplace('POGI', 'gwapo', $text3) ?></td>
                </tr>
                <tr>
                    <td>String Repeat</td>
                    <td><?= str_repeat($text3 ,2) ?></td>
                </tr>
            </table>

            <!-- Fourth table -->
            <p>Other Built-in Functions</p>
            <table>
                <tr>
                    <td>Round half up</td>
                    <td><?= round($num, 0, PHP_ROUND_HALF_UP) ?></td>
                </tr>
                <tr>
                    <td>Square root</td>
                    <td><?= sqrt($num) ?></td>
                </tr>
                <tr>
                    <td>Checks if a value is a number</td>
                    <td><?= is_numeric($num) ? "Yes" : "No"?></td>
                </tr>
                <tr>
                    <td>Array Shift</td>
                    <td><?= array_shift($cars) ?></td>
                </tr>
                <tr>
                    <td>Array Pop</td>
                    <td><?= array_pop($fruits) ?></td>
                </tr>
                <tr>
                    <td>First match of "Rob" using mb_strpos</td>
                    <td><?= mb_strpos($text4, "Rob")?></td>
                </tr>
                <tr>
                    <td>Returns text from first occurrences of "Rob"</td>
                    <td><?= strstr($text4, "Rob")?></td>
                </tr>
                <tr>
                    <td>Merging Arrays</td>
                    <td><?= implode(", ", array_merge($fruits, $cars)) ?></td>
                </tr>
                <tr>
                    <td>Check if it string starts "December"</td>
                    <td><?= str_starts_with($text4, "December") ? "Yes" : "No"?></td>
                </tr>
            </table>
        </body>
</html>