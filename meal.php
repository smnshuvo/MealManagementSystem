<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-16">
        <title>

        </title>
        <link rel="stylesheet" type="text/css" href="css/mealTable.css">
        <link rel="stylesheet" type="text/css" href="css/Mealnav.css">
        <link rel="stylesheet" type="text/css" href="css/log-in.css">
        <style >
            .mealMeter{
                height: 30px;
                background: green;
                font-size: 15px;
                color: #fff;
                padding-top: 10px;
                vertical-align: middle;
                padding-top: 5px;
            }

            .redBar{
                height: 30px;
                background: red;
                font-size: 15px;
                color: #fff;
                padding-top: 10px;
                vertical-align: middle;
                padding-top: 5px;
            }
        </style>
        <!-- JS -->
        <script>
// Get the modal
            var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
    </head>
    <body>

        <nav>
            <!-- title -->
            <div id="title">
                <span id="smn">Meal</span>
                <span id="shuvo">Management</span>
                <span>System</span>
            </div>
            <!-- This is where all the links are -->
            <div id="links">
                <a href="mealHome.php"> Home </a>
                <a href="insert.php"> Add Meal </a>
                <a href="edit.php"> Edit Meal </a>
                <a href="meal.php"> Show meals </a>
                <a href="#" onclick="document.getElementById('id01').style.display = 'block'" style="width:auto;">Meal Cost</a>
                <a href="advance.php"> Advanced </a>     
                <a href="#"> Notifications </a>

            </div>

        </nav>
        <br>
        <br>

        <?php
        include ('connect.php');

        $sql = "SELECT * FROM mess_manager";
        $output = '';
        $shuvo_total = 0;
        $touhid_total = 0;
        $mehedi_total = 0;
        $mahir_total = 0;
        $mahmud_total = 0;
        $anik_total = 0;
        $total_bajar = 0;
        $result = mysqli_query($cnct, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $shuvo_total += $row['Shuvo'];
            $touhid_total += $row['Touhid'];
            $mehedi_total += $row['Mehedi'];
            $mahir_total += $row['Mahir'];
            $mahmud_total += $row['Mahmud'];
            $anik_total += $row['Anik'];
            $total_bajar += $row['Amount'];
            // Table Generation
            $output .= "<tr>" . "<td id='date'>" . $row['Date'] . "</td>" .
                    "<td id='Shuvo'>" . $row['Shuvo'] . "</td>" .
                    "<td id='Touhid'>" . $row['Touhid'] . "</td>" .
                    "<td id='Mahir'>" . $row['Mahir'] . "</td>" .
                    "<td id='Mehedi'>" . $row['Mehedi'] . "</td>" .
                    "<td id='Mahmud'>" . $row['Mahmud'] . "</td>" .
                    "<td id='Anik'>" . $row['Anik'] . "</td>" .
                    "<td id='Amount'>" . $row['Amount'] . "</td>" .
                    "<td id='done_by'>" . $row['done_by'] . "</td>" .
                    "</tr>";
        }
        // echo "$shuvo_total";
// print part
        print_r("<table>" . "<tr>" .
                "<td id='date'>" . "Date" . "</td>" . "<td id='Shuvo'>" . "Shuvo" . "</td>" .
                "<td id='Touhid'>" . "Touhid" . "</td>" .
                "<td id='Mahir'>" . "Mahir" . "</td>" .
                "<td id='Mehedi'>" . "Mehedi" . "</td>" .
                "<td id='Mahmud'>" . "Mahmud" . "</td>" .
                "<td id='Anik'>" . "Anik" . "</td>" .
                "<td id='Amount'>" . "Amount" . "</td>" .
                "<td id='done_by'>" . "Done by" . "</td>" .
                "</tr>" . $output .
                "<tr>" .
                "<td id='date'>" . "Total" .
                "</td>" . "<td id='Shuvo'>" . $shuvo_total . "</td>" .
                "<td id='Touhid'>" . $touhid_total . "</td>" .
                "<td id='Mahir'>" . $mahir_total . "</td>" .
                "<td id='Mehedi'>" . $mehedi_total . "</td>" .
                "<td id='Mahmud'>" . $mahmud_total . "</td>" .
                "<td id='Anik'>" . $anik_total . "</td>" .
                "<td colspan = 2 id='done_by'>" . $total_bajar . " BDT" . "</td>" .
                "</tr>" .
                "</table>");
        $averageMealRate = $total_bajar / ($shuvo_total + $touhid_total + $mahir_total + $mehedi_total + $mahmud_total + $anik_total);
        $shuvo_percentage = (($averageMealRate * $shuvo_total) * 100 / $total_bajar);
        $touhid_percentage = (($averageMealRate * $touhid_total) * 100 / $total_bajar);
        $mahir_percentage = (($averageMealRate * $mahir_total) * 100 / $total_bajar);
        $mehedi_percentage = (($averageMealRate * $mehedi_total) * 100 / $total_bajar);
        $mahmud_percentage = (($averageMealRate * $mahmud_total) * 100 / $total_bajar);
        $anik_percentage = (($averageMealRate * $anik_total) * 100 / $total_bajar);
// Shuvo
        echo "(Beta) Average meal rate " . "$averageMealRate";
        // cloxd connection

        mysqli_close($cnct);
        ?>
       

        <div id="id01" class="modal">


            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display = 'none'" class="close" title="Close Modal">&times;</span>
                <h1>Meal Cost</h1>

            </div>

            <div class="container">

                <?php
                echo "<h1> Shuvo </h1> " . ($averageMealRate * $shuvo_total) . " Taka" . "</br></br>";
                echo " <div class='mealMeter' style='width:" . $shuvo_percentage . "%'>" .
                round($shuvo_total, 2)
                . " Meal</div>";
                

// touhid

                echo "<h1> Towhid </h1> " . ($averageMealRate * $touhid_total) . " Taka" . "</br></br>";
                echo " <div class='mealMeter' style='width:" . $touhid_percentage . "%'>" .
                round($touhid_total, 2)
                . " Meal</div>";


// mahir 

                echo "<h1> Mahir </h1> " . ($averageMealRate * $mahir_total) . " Taka" . "</br></br>";
                echo " <div class='mealMeter' style='width:" . $mahir_percentage . "%'>" .
                round($mahir_total, 2)
                . " Meal</div>";

// Mehedi 


                echo "<h1> Mehedi </h1> " . ($averageMealRate * $mehedi_total) . " Taka" . "</br></br>";
                echo " <div class='mealMeter' style='width:" . $mehedi_percentage . "%'>" .
                round($mehedi_total, 2)
                . " Meal</div>";

// Mahmud
                echo "<h1> Mahmud </h1> " . ($averageMealRate * $mahmud_total) . " Taka" . "</br></br>";
                echo " <div class='mealMeter' style='width:" . $mahmud_percentage . "%'>" .
                round($mahmud_total, 2)
                . " Meal</div>";

                echo "<h1> Anik </h1> " . ($averageMealRate * $anik_total) . " Taka" . "</br></br>";
                echo " <div class='mealMeter' style='width:" . $anik_percentage . "%'>" .
                round($anik_total, 2)
                . " Meal<br><br><br><br></div>";
                ?>
                <br>
                <br>
                <button type="button" onclick="document.getElementById('id01').style.display = 'none'" class="cancelbtn">Okay</button>
                <button type="button" class="cancelbtn" onclick="myFunction()">Print this page</button>

                <script>
                    function myFunction() {
                        window.print();
                    }
                </script>
            </div>

            <div class="container" style="background-color:#f1f1f1">

            </div>

        </div>
        <!--    
        Session testing
        <?php
        print_r($_SESSION);
        ?>
        -->
        <br>


        <div id='Advance_taka'>
            <!-- instead of using name 
            I thought of using an array
            of String, as there is a chance
            of one member from us can leave
            this house
            -->

            <?php
            include 'connect.php';
            $person = array("Shuvo", "Touhid", "Mahir", "Mehedi", "Mahmud", "Anik");
            $i = 0;
            $person_advanced = array();

            for ($i = 0; $i < count($person); $i++) {

                $sql = "SELECT SUM($person[$i])"
                        . "FROM mess_advance;";
                $result = (mysqli_query($cnct, $sql));

                $row = mysqli_fetch_assoc($result);
                $temp = "" . "SUM(" . $person[$i] . ")";
                array_push($person_advanced, $row[$temp]);
            }
            // print_r($person_advanced);
            // Current meal counter 

            $shuvo_currentCost = (($averageMealRate * $shuvo_total));
            $touhid_currentCost = (($averageMealRate * $touhid_total) );
            $mahir_currentCost = (($averageMealRate * $mahir_total) );
            $mehedi_currentCost = (($averageMealRate * $mehedi_total) );
            $mahmud_currentCost = (($averageMealRate * $mahmud_total) );
            $anik_currentCost = (($averageMealRate * $anik_total) );


            // Another meal meter to count the advance
            echo "<h1> Shuvo </h1> " . "</br>";
            echo " <div class='mealMeter' style='width:" . $person_advanced[0] . "px'>" .
            $person_advanced[0]
            . " Taka (Advance) </div>";
            echo " <div class='redBar' style='width:" . $shuvo_currentCost
            . "px'>" .
            round($shuvo_currentCost, 2)
            . " Taka </div>";
            echo "BALANCE: " . ($person_advanced[0] - $shuvo_currentCost) ;

// touhid

            echo "<h1> Towhid</h1> " . "</br>";
            echo " <div class='mealMeter' style='width:" . $person_advanced[1] . "px'>" .
            $person_advanced[1]
            . " Taka (Advance)</div>";
            echo " <div class='redBar' style='width:" . $touhid_currentCost
            . "px'>" .
            round($touhid_currentCost, 2)
            . " Taka </div>";
            echo "BALANCE: " . ($person_advanced[1] - $touhid_currentCost) ;


// mahir 

            echo "<h1> Mahir </h1> " . "</br>";
            echo " <div class='mealMeter' style='width:" . $person_advanced[2] . "px'>" .
            $person_advanced[2]
            . " Taka (Advance)</div>";
            echo " <div class='redBar' style='width:" . $mahir_currentCost
            . "px'>" .
            round($mahir_currentCost, 2)
            . " Taka </div>";
            echo "BALANCE: " . ($person_advanced[2] - $mahir_currentCost) ;

// Mehedi 


            echo "<h1> Mehedi </h1> " . "</br>";
            echo " <div class='mealMeter' style='width:" . $person_advanced[3] . "px'>" .
            $person_advanced[3]
            . " Taka (Advance)</div>";
            echo " <div class='redBar' style='width:" . $mehedi_currentCost
            . "px'>" .
            round($mehedi_currentCost, 2)
            . " Taka </div>";
            echo "BALANCE: " . ($person_advanced[3] - $mehedi_currentCost) ;

// Mahmud
            echo "<h1> Mahmud </h1> " . "</br>";
            echo " <div class='mealMeter' style='width:" . $person_advanced[4] . "px'>" .
            $person_advanced[4]
            . " Taka (Advance)</div>";
            echo " <div class='redBar' style='width:" . $mahmud_currentCost
            . "px'>" .
            round($mahmud_currentCost, 2)
            . " Taka </div>";
            echo "BALANCE: " . ($person_advanced[4] - $mahmud_currentCost) ;

            echo "<h1> Anik </h1> " . "</br>";
            echo " <div class='mealMeter' style='width:" . $person_advanced[5] . "px'>" .
            $person_advanced[5]
            . " Taka (Advance)<br><br><br><br></div>";
            echo " <div class='redBar' style='width:" . $anik_currentCost
            . "px'>" .
            round($anik_currentCost, 2)
            . " Taka </div>";
            echo "BALANCE: " . ($person_advanced[5] - $anik_currentCost) ;
            $total_advanced = array_sum($person_advanced);
            echo "<br> <h1> Meal Balance: ". ($total_advanced - $total_bajar) . "</h1>";
            ?>





        </div>
    </body>










</html>
