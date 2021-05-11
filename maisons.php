<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simply Home, constructeur de vie </title>
    <!-- Liens-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet " href="css/simply.css ">
</head>

<body>
<?php include('header.php'); ?>
    <div class="container">
        <section id="maisons">
            <div class="complementaires">
                <ul>
                    <li class="element-complementaire"><a href="#"><i class="fa fa-phone"></i></a></li>
                    <li class="element-complementaire"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
            <div class="nos-maisons">
                <h1>Simply Home : Nos Maisons</h1>
                <p>
                    Que votre choix se porte sur une <strong>maison traditionnelle</strong> ou sur une <strong>maison contemporaine</strong>, notre équipe expérimentée, composée de conducteurs de travaux qualifiés, d’un responsable technique, d’un responsable
                    qualité et de technico-commerciaux, est là pour vous conseiller et vous accompagner durant l’intégralité de vos travaux. Notez que nous disposons d’un bureau d’étude de dessin.
                </p>
            </div>

            <section class="bloc-filtres">
                <h2>Choisissez votre Maison</h2>

                <div class="liste-filtres">
                    <select class="filtre" name="style" placeholder="STYLE">
                        <option value="Traditionnel">Traditionnel</option>
                        <option value="Contemporain">Contemporain</option>
                    </select>

                    <select class="filtre" name="toiture" placeholder="TOITURE">
                        <option value="Ardoise">Ardoise</option>
                        <option value="Moderne">Moderne</option>
                        <option value="Tuile">Tuile</option>
                    </select>

                    <select class="filtre" name="niveau" placeholder="NIVEAU">
                        <option value="plain-pied">plain-pied</option>
                        <option value="étage">étage</option>
                    </select>

                    <select class="filtre" name="CHAMBRE" placeholder="NB CHAMBRE(5)">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </section>

            <ul class="liste-maisons">
                <li class="maison">
                    <div class="cover" style="background-image: url('images/armenia_3_chambres.jpg');"></div>
                    <div class="description">
                        <h3 class="title">ARMENIA- 3 chambres+bureau 104m²</h3>
                        <p>Maison traditionnelle à étage de 104 m² habitables environ. Belle pièce de vie de 40m², 3 chambres dont...
                            <!-- une salle de bains,mezzanine, bureau, cellier, salle de bains et WC séparés. -->
                        </p>
                    </div>

                </li>

                <li class="maison">
                    <div class="cover" style="background-image: url('images/atlas_3_chambres.jpg ');"></div>
                    <div class="description">
                        <h3 class="title">ATLAS- 3 chambres 106m²</h3>
                        <p>Maison contemporaine à étage de 106m² environ. Au RDC, belle pièce de vie de 44m²,cellier. A l'étage...
                            <!-- , 3 chambres, salle de bains et WC séparés. -->
                        </p>
                    </div>

                </li>
                <li class="maison">
                    <div class="cover" style="background-image: url('images/attis_3_chambres.jpg');"></div>
                    <div class="description">
                        <h3 class="title">ATTIS- 3 chambres 109m²</h3>
                        <p>Maison traditionnelle plain-pied de 109m² environ. Grande pièce de vie de 53m², 3 chambres, cellier, salle de bains et WC. Cette maison bénéficie également d'un grand garage.
                        </p>
                    </div>

                </li>
                <li class="maison">
                    <div class="cover" style="background-image: url('images/actuel_2_chambres.jpg');"></div>
                    <div class="description">
                        <h3 class="title">ACTUEL- 2 chambres 72m²</h3>
                        <p>Maison contemporaine de plain-pied de 72m² environ. Grande pièce de vie de 42m², 2 chambres, salle de bains... 
                            <!-- et WC séparés. Cette maison bénéficie également d'un garage et jardin. -->
                        </p>
                    </div>

                </li>
                <li class="maison">
                    <div class="cover" style="background-image: url('images/actuel_3_chambres.jpg');"></div>
                    <div class="description">
                        <h3 class="title">ACTUEL- 3 chambres 87m²</h3>
                        <p>Maison contemporaine de plain-pied de 87m² environ. Grande pièce de vie de 46m², 3 chambres, salle de bains...
                       <!-- et WC séparés. Cette maison bénéficie également d'un garage et jardin -->
                        </p>     
                    </div>

                </li>
                <li class="maison">
                    <div class="cover" style="background-image: url('images/actuel_4_chambres.jpg');"></div>
                    <div class="description">
                        <h3 class="title">ACTUEL- 4 chambres 108m²</h3>
                        <p>Maison contemporaine de plain-pied de 108m² environ. Grande pièce de vie de 47m², 4 chambres, salle de bains... 
                            <!-- et WC séparés. Cette maison bénéficie également d'un garage et jardin. -->
                        </p>
                    </div>

                </li>
                <li class="maison">
                    <div class="cover" style="background-image: url('images/adonis_4_chambres.jpg');"></div>
                    <div class="description">
                        <h3 class="title">ADONIS-4 chambres 125m²</h3>
                        <p>Maison traditionnelle à étage de 125m² habitables environ. Au RDC, belle pièce de vie, 1 grande chambre, une salle de bains, un cellier. A l'étage, une mezzanine, 3 chambres, salle de bains et WC.
                        </p>
                    </div>

                </li>
                <li class="maison">
                    <div class="cover" style="background-image: url('images/alpha_5_chambres.jpg');"></div>
                    <div class="description">
                        <h3 class="title">ALPHA- 5 chambres 177m²</h3>
                        <p>Maison contemporaine de plain-pied de 177 m² habitables environ. Belle pièce de vie de 66m², 5 chambres dont une... 
                            <!-- avec dressing et salle de bains, cellier, salle de bains et WC séparés. Cette maison bénéficie également d'un garage
                            et jardin. -->
                        </p>
                    </div>

                </li>
                <li class="maison">
                    <div class="cover" style="background-image: url('images/ambroise_4_chambres.jpg');"></div>
                    <div class="description">
                        <h3 class="title">AMBROISE- 5 chambres 117m²</h3>
                        <p>Maison contemporaine à étage de 117m² environ. Au RDC, belle pièce de vie de 49m², 1 grande chambre avec...
                            <!-- salle de bains, cellier. A l'étage, 3 chambres, salle de bains et WC séparés. -->
                        </p>
                    </div>

                </li>
            </ul>

            <div class="pagination"><a href="#">Préc</a> <a href="#"><strong>1</strong></a>
                <a href="#">2</a> <a href="#">3</a> <a href="#">Suiv</a>
            </div>

        </section>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>