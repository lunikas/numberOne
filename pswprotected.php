<?php include "header.php" ?>

<div class="container">

    <div class="breadcrumb-wrapper">
        <div class="col s12">
            <a href="index.php" class="tooltipped breadcrumb" data-tooltip="Grįžti į pradinį puslapį">Pagrindinis</a>
            <a href="about.php" class="breadcrumb">Apie mus</a>
            <a href="about.php" class="breadcrumb">Administratoriaus puslapis</a>
        </div>
    </div>

    <h4 class="psw center-align indigo-text text-darken-4">Čia lentelė iš duombazės</h4>


    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "birzelis2020";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT id, email, message, date FROM contacts";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='striped'><tr><th>ID</th><th>El.paštas</th><th>Žinutė</th><th>Data</th></tr>";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["email"] . "</td><td>" . $row["message"] . "</td><td>" . $row["date"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>


</div>
</body>

</html>
