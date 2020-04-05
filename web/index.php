<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "head.php";
    ?>
</head>
<body>

<?php
include "header.php";
?>


<div class="hero-wrap js-fullheight" style="background-image: url('images/pain_entier.jpg');"
     data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
             data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate">
                <h2 class="subheading">Bienvenue, frère (et soeur) du levain!</h2>
                <h1>Le pain au levain, pour tout un chacun</h1>
                <p class="mb-4">On va vous aider à le faire &#x1F4AA;</p>
                <p><a href="#7etapes" class="btn btn-primary mr-md-4 py-2 px-4">En savoir plus<span
                                class="ion-ios-arrow-forward"></span></a></p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pt" id="7etapes">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 py-5 order-md-last">
                <div class="heading-section ftco-animate">
                    <span class="subheading">Le levain et le pain</span>
                    <h2 class="mb-4">Les 2 grandes étapes</h2>
                    <p>
                        Faire son levain est une étape plus compliquée que de faire son pain avec du levain.
                        Pour commencer, vous pouvez demander à un frère ou une soeur du levain, de vous donner un peu de
                        son levain.
                        Vous pourrez ensuite, quand vous maitriserez le processus, fabriquer votre propre levain.
                    </p>
                </div>
            </div>
            <div class="col-lg-9 services-wrap px-4 pt-5">
                <div class="row pt-md-3">
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="services text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-lawn-mower"></span>
                            </div>
                            <div class="text">
                                <h3>Fabriquer son levain</h3>
                                <p>
                                    Le levain est formé avec de la farine et de l'eau. Il faut les mélanger et les
                                    laisser travailler ensemble.
                                    <br>
                                    Ce processus est hautement contraint par la température et le temps.
                                </p>
                            </div>
                            <a href="fabriquer_levain.php"
                               class="btn-custom d-flex align-items-center justify-content-center"><span
                                        class="ion-ios-arrow-round-forward"></span></a>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="services text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-natural-resources"></span>
                            </div>
                            <div class="text">
                                <h3>Fabriquer son pain</h3>
                                <p>
                                    Le pain au levain est fabriqué avec 4 ingrédients:
                                <ul>
                                    <li>De la farine</li>
                                    <li>De l'eau</li>
                                    <li>Du levain</li>
                                    <li>Du sel</li>
                                </ul>
                                Il faudra à ce mélange, du temps et de la chaleur pour obtenir une pâte qui lève
                                </p>
                            </div>
                            <a href="fabriquer_pain.php"
                               class="btn-custom d-flex align-items-center justify-content-center"><span
                                        class="ion-ios-arrow-round-forward"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include "footer.php";
?>

</body>
</html>
