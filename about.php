<?php include "header.php" ?>

<div class="container about">


    <div class="breadcrumb-wrapper">
        <div class="col s12">
            <a href="index.php" class="breadcrumb">Home</a>
            <a href="about.php" class="breadcrumb">About</a>
        </div>
    </div>

    <div class="pageName">
        <h1>About Us</h1>
    </div>


    <p class="slogan center-align">Mes rūpinamės Jūsų kokybišku poilsiu!</p>



    <div class="card  light-blue-text text-darken-4">

        <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
                <li class="tab"><a class="active" href="#one">Žygiai</a></li>
                <li class="tab"><a href="#two">Kelionės automobiliu</a></li>
                <li class="tab"><a href="#three">Poilsinės kelionės</a></li>
            </ul>
        </div>
        <div class="card-content" id="one">
            <div class="row">
                <img class="col l6 m10 s12" src="https://picsum.photos/id/177/500/500" alt="kalnai">

                <div class="col l6 m10 s12 products">
                    <h6>Mėgstantiems aktyvų poilsį</h6>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus eius, voluptatibus totam explicabo voluptatem nihil nisi consequuntur adipisci laboriosam debitis, rerum necessitatibus eligendi! Cum nam ipsum magni omnis. Iusto, itaque?</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus eius, voluptatibus totam explicabo voluptatem nihil nisi consequuntur adipisci laboriosam debitis, rerum necessitatibus eligendi! Cum nam ipsum magni omnis. Iusto, itaque?</p>
                </div>
            </div>
        </div>
        <div class="card-content" id="two">
            <div class="row">
                <img class="col l6 m10 s12" src="https://picsum.photos/id/191/500/500" alt="kelias">
                <div class="col l6 m10 s12 products">
                    <h6>Trokštantiems įspūdžių ir norintiems pamatyti kuo daugiau</h6>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus eius, voluptatibus totam explicabo voluptatem nihil nisi consequuntur adipisci laboriosam debitis, rerum necessitatibus eligendi! Cum nam ipsum magni omnis. Iusto, itaque?</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus eius, voluptatibus totam explicabo voluptatem nihil nisi consequuntur adipisci laboriosam debitis, rerum necessitatibus eligendi! Cum nam ipsum magni omnis. Iusto, itaque?</p>
                </div>
            </div>
        </div>
        <div class="card-content" id="three">
            <div class="row">

                <img class="col l6 m10 s12" src="https://picsum.photos/id/449/500/500" alt="papludimys">

                <div class="col l6 m10 s12 products">
                    <h6>Pavargusiems ir norintiems tiesiog pagulėti</h6>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus eius, voluptatibus totam explicabo voluptatem nihil nisi consequuntur adipisci laboriosam debitis, rerum necessitatibus eligendi! Cum nam ipsum magni omnis. Iusto, itaque?</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus eius, voluptatibus totam explicabo voluptatem nihil nisi consequuntur adipisci laboriosam debitis, rerum necessitatibus eligendi! Cum nam ipsum magni omnis. Iusto, itaque?</p>
                </div>
            </div>
        </div>

    </div>

    <div class="findUS">
        <h5>Mūsų kontaktai</h5>
        <p>Gatve, namas</p>
        <p>Miestas</p>
        <p>LT-pasto kodas</p>
        <p>Lietuva</p>
        <p>tel. 8 5 212 33 22</p>
        <p>El.paštas: email@email.com</p>
    </div>


    <div class="row">
        <iframe class="map col l6" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2306.4099714932604!2d25.27833385059149!3d54.68481288121817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd9411a1bd7cdb%3A0x645ec2d88e118d0c!2sLabdari%C5%B3%20g.%203%2C%20Vilnius%2001120!5e0!3m2!1sen!2slt!4v1591730100877!5m2!1sen!2slt" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        <div class="contactUS col l6">
            <h6>Susisiekite su mumis: </h6>

            <form action="">
                <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input type="email" id="email">
                    <label for="email">Jūsų elektroninis paštas</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">message</i>
                    <textarea class="materialize-textarea" id="message"></textarea>
                    <label for="message">Jūsų žinutė</label>
                </div class="input-field">
                <input class="datepicker" type="text" id="date">
                <label for="date">Pasirinkite norimą susitikimo datą</label>
                <div>
                    <div class="input-field">
                        <button class="btn">Siųsti</button>
                    </div>

                </div>





            </form>




        </div>

    </div>




    <?php include "footer.php" ?>