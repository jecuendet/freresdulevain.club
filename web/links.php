<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "head.php";
    ?>
</head>
<body>

<?php
$current_menu = "links";
include "header.php";
?>

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Liens</span>
                <h2 class="mb-4">Les autres ressources disponibles</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">
                                    Marc Haller est <strong>LE</strong> spécialiste du pain au levain en Suisse Romande.
                                    <br>
                                    Lors d'un pélerinage à Saint-Jacques-de-Compostelle, il découvre le pain au levain,
                                    son excellente conservation,
                                    sa bonne satiété, et en fait son métier.
                                    <br>
                                    <a target="_blank" href="https://www.lespainsdemonchemin.ch/">
                                        A découvrir sur son site
                                    </a>
                                    <br>
                                    Marc propose des <a target="_blank"
                                                        href="https://www.lespainsdemonchemin.ch/les-pains-de-mon-chemin-cours-levain.html">cours</a>
                                    pour apprendre à fabriquer son pain
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Marc Haller</p>
                                        <span class="position">Le maître du pain au levain</span>
                                    </div>
                                </div>
                            </div>
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
