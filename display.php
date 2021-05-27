<?php
require_once "./config.php";
require_once "./helper.php";


$selected = "day";
$value = "5/23/2021";

$time = subDayswithdate($value, 10);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>

<body>
    <header></header>
    <main id="main">
        <div class="profile">
            <div>
                <img src="" alt="profile-img" />
                <h2>Nguyen Phan Nam</h2>
            </div>
            <div class="information">
                <ul>
                    <li>27/05/2002</li>
                    <li>Game Developer</li>
                    <li>Favourite quote: "Go hard to go home"</li>
                </ul>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    <h1>COVID Report</h1>
    <div>
        <!-- <?php
                $row = 1;
                if (($handle = fopen(PATH_CSV . NAME_CSV, "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        if ($row == 1) {
                            $row++;
                            continue;
                        }

                        $num = count($data);

                        $row++;

                        if ($data[0] >= $time) {
                            print_r($data);
                            // for ($i = 0; $i < $num; $i++) {
                            // echo $data[$i];
                            // }
                        }
                    }
                    fclose($handle);
                } else {
                    echo "False";
                }
                ?> -->
    </div>
</body>

</html>
