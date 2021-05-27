<?php
require_once "./helper.php";


$selected = "day";
$value = "5/23/2021";

$time = subDayswithdate($value, 10);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Index</title>
    <link rel="stylesheet" href="./dist/css/app.css" />
</head>

<body>
    <header></header>
    <main id="main">
        <div class="profile">
            <div class="avatar">
                <div>
                    <img src="./dist/images/avatar.jpg" alt="profile-img" />
                </div>
            </div>
            <div class="information">
                <h2>Nguyen Phan Nam</h2>
                <ul>
                    <li>27/05/2002</li>
                    <li>Game Developer</li>
                    <li>Favourite quote: "Go hard to go home"</li>
                </ul>
            </div>
        </div>

        <div class="covid">
            <h1 class="title">COVID Report</h1>
            <div class="form">
                <form method="GET" action="#">
                    <div class="form__select">
                        <select name="select" id="select">
                            <option id="1" value="1">Lastest 10 Day</option>
                            <option id="2" value="2">Lastest 10 Month</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="">Submit</button>
                    </div>
                </form>
                <table>
                    <?php
                    $row = 1;
                    if (($handle = fopen("who_covid_southeast.csv", "r")) !== FALSE) {
                        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                            $num = count($data);
                            echo "<p> $num fields in line $row: <br /></p>\n";
                            $row++;
                            for ($c = 0; $c < $num; $c++) {
                                echo $data[$c] . "<br />\n";
                            }
                        }
                        fclose($handle);
                    }
                    ?>
                </table>
            </div>
        </div>
    </main>
    <footer></footer>
</body>

</html>
