<?php include "header.php" ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "birzelis2020";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET["email"])) {

    $email = $_GET["email"];
    $message = $_GET["message"];
    $date = $_GET["date"];

    $sql = "INSERT INTO contacts (id, email, message, date) VALUES (null, '$email','$message','$date')";

    if ($conn->query($sql) === TRUE) {
        header("Location: http://localhost/numberOne/about.php?status=success");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<div class="container about">


    <div class="breadcrumb-wrapper">
        <div class="col s12">
            <a href="index.php" class="tooltipped breadcrumb" data-tooltip="Grįžti į pradinį puslapį">Pagrindinis</a>
            <a href="about.php" class="breadcrumb">Apie mus</a>
        </div>
    </div>

    <div class="pageName">
        <h1 class="indigo-text text-darken-4">Apie Mus</h1>
    </div>


    <p class="slogan center-align flow-text indigo-text text-darken-4">Mes rūpinamės Jūsų kokybišku poilsiu!</p>



    <div class="card  indigo-text text-darken-4">

        <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
                <li class="tab"><a class="active" href="#one">Žygiai</a></li>
                <li class="tab"><a href="#two">Kelionės automobiliu</a></li>
                <li class="tab"><a href="#three">Poilsinės kelionės</a></li>
            </ul>
        </div>
        <div class="card-content" id="one">
            <div class="row">
                <div class="col l6 s12">
                    <img class="responsive-img materialboxed " src="https://picsum.photos/id/177/500/500" alt="kalnai">
                </div>
                <div class="col l6 s12 products">
                    <h6>Mėgstantiems aktyvų poilsį</h6>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus eius, voluptatibus totam explicabo voluptatem nihil nisi consequuntur adipisci laboriosam debitis, rerum necessitatibus eligendi! Cum nam ipsum magni omnis. Iusto, itaque?</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus eius, voluptatibus totam explicabo voluptatem nihil nisi consequuntur adipisci laboriosam debitis, rerum necessitatibus eligendi! Cum nam ipsum magni omnis. Iusto, itaque?</p>
                </div>
            </div>
        </div>
        <div class="card-content" id="two">
            <div class="row">
                <div class="col l6  s12">
                    <img class="materialboxed " src="https://picsum.photos/id/191/500/500" alt="kelias">
                </div>
                <div class="col l6  s12 products">
                    <h6>Trokštantiems įspūdžių ir norintiems pamatyti kuo daugiau</h6>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus eius, voluptatibus totam explicabo voluptatem nihil nisi consequuntur adipisci laboriosam debitis, rerum necessitatibus eligendi! Cum nam ipsum magni omnis. Iusto, itaque?</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus eius, voluptatibus totam explicabo voluptatem nihil nisi consequuntur adipisci laboriosam debitis, rerum necessitatibus eligendi! Cum nam ipsum magni omnis. Iusto, itaque?</p>
                </div>
            </div>
        </div>
        <div class="card-content" id="three">
            <div class="row">
                <div class="col l6  s12">
                    <img class="materialboxed " src="https://picsum.photos/id/449/500/500" alt="papludimys">
                </div>

                <div class="col l6  s12 products">
                    <h6>Pavargusiems ir norintiems tiesiog pagulėti</h6>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus eius, voluptatibus totam explicabo voluptatem nihil nisi consequuntur adipisci laboriosam debitis, rerum necessitatibus eligendi! Cum nam ipsum magni omnis. Iusto, itaque?</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus eius, voluptatibus totam explicabo voluptatem nihil nisi consequuntur adipisci laboriosam debitis, rerum necessitatibus eligendi! Cum nam ipsum magni omnis. Iusto, itaque?</p>
                </div>
            </div>
        </div>

    </div>

    <div class="findUS">
        <h5 class="indigo-text text-darken-4">Mūsų kontaktai</h5>
        <p>Mūsų gatvė Nr.1,</p>
        <p>Vilnius 00001</p>
        <p>Lietuva</p>
        <p>tel. 8 5 212 33 22</p>
        <p>El.paštas:<a href="mailto:laishkeliams@gmail.com"> email@email.com</a></p>

    </div>


    <div class="row">
        <iframe class="map col l6 m12 s12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2306.4099714932604!2d25.27833385059149!3d54.68481288121817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd9411a1bd7cdb%3A0x645ec2d88e118d0c!2sLabdari%C5%B3%20g.%203%2C%20Vilnius%2001120!5e0!3m2!1sen!2slt!4v1591730100877!5m2!1sen!2slt" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        <div class="contactUS col l6 m12 s12">
            <h5 class="indigo-text text-darken-4">Susisiekite su mumis: </h5>

            <form action="">
                <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input type="email" id="email" name="email">
                    <label for="email">Jūsų elektroninis paštas</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">message</i>
                    <textarea class="materialize-textarea" id="message" name="message"></textarea>
                    <label for="message">Jūsų žinutė</label>
                </div class="input-field">
                <input class="datepicker" type="text" id="date" name="date">
                <label for="date">Pasirinkite norimą susitikimo datą</label>
                <div>
                    <div class="input-field">
                        <button class="btn indigo darken-4 waves-light">Siųsti</button>
                    </div>

                    <?php
                    if (isset($_GET["status"]) && $_GET["status"] === "success") {
                        echo "<p class='indigo-text text-darken-4'>Jūsų žinutė nusiųsta sėkmingai!</p>";
                    }
                    ?>
                </div>

            </form>

        </div>

    </div>




    <?php include "footer.php" ?>