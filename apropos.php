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
        <section id="apropos">
            <div class="complementaires">
                <ul>
                    <li class="element-complementaire"><a href="#"><i class="fa fa-phone"></i></a></li>
                    <li class="element-complementaire"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
            <h1>Simply Home : Une équipe d'experts</h1>
            <div class="descript">
                <p>
                    Forts d’une longue expérience dans le domaine de la construction de maisons individuelles, nous nous engageons à déterminer avec vous ce qui vous conviendra le mieux, en étudiant rigoureusement les moindres détails de la conception de votre nouveau lieu
                    de vie.
                </p>
                <p>
                    Que votre choix se porte sur une maison traditionnelle ou sur une maison contemporaine, notre équipe expérimentée, composée de conducteurs de travaux qualifiés, d’un responsable technique, d’un responsable qualité et de technico-commerciaux, est là pour
                    vous conseiller et vous accompagner durant l’intégralité de vos travaux. Notez que nous disposons d’un bureau d’étude de dessin.
                </p>
            </div>

            <section id="engagement-garantie" class="accordion">
                <header id="engagement-garantie-header" class="accordion-header">
                    <a href="#"><i class="fa fa-chevron-circle-right"></i> <h2>Nos engagements et garanties</h2></a>
                </header>
                <article id="engagement-garantie-body" class="accordion-content">
                    <p>
                        Nous mettons tout en œuvre pour vous offrir une maison qui réponde en tous points à vos exigences. Ainsi, nous nous engageons à respecter les délais que nous nous sommes fixés, en ne travaillant qu’avec des matériaux de qualité et adaptés. De plus, nous
                        respectons toutes les normes et les réglementations, notamment les normes RT 2012, ainsi que le Contrat de Construction de Maison Individuelle.<br>
                    </p>
                    <p>Nous vous invitons à découvrir l'ensemble de nos garanties:</p>
                    <div class="garantie-liste">
                        <ul>
                            <li>Garantie de remboursement d’acompte</li>
                            <li> Garantie de livraison à prix et délai convenus</li>
                            <li> Assurance dommages-ouvrage</li>
                            <li> Garantie de parfait achèvement</li>
                            <li>Garanties biennale et décennale</li>
                            <li>Garantie de bon fonctionnement</li>
                            <li> Paiement des travaux strictement réglementé</li>
                        </ul>
                        <img src="images/pa-picto-01.png" alt="picto">
                    </div>
                </article>
            </section>
            <section id="rapport-qualite" class="accordion">
                <header id="rapport-qualite_header" class="accordion-header">
                    <a href="#"><i class="fa fa-chevron-circle-right"></i> <h2>Un rapport qualité/prix inégalé</h2></a>
                </header>
                <article id="rapport-qualite-body" class="accordion-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi atque qui porro ducimus, eius ex?
                </article>
            </section>
            <section id="equipe-investie" class="accordion">
                <header id="equipe-investie-header" class="accordion-header">
                    <a href="#"><i class="fa fa-chevron-circle-right"></i> <h2>Une équipe investie et disponible</h2></a>
                </header>
                <article id="equipe-investie-body" class="accordion-content">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, quaerat.
                </article>
            </section>
        </section>
    </div>
    <?php include('footer.php'); ?>

</body>
<script type="text/javascript">
    const accordionHeaders = document.getElementsByClassName("accordion-header");
    const accordionContents = document.getElementsByClassName("accordion-content");
    let i;

    for (i = 0; i < accordionHeaders.length; i++) {
        let accordionContent = accordionContents[i];
        accordionHeaders[i].addEventListener("click", function() {
            if (accordionContent.style.display === "block") {
                accordionContent.style.display = "none";
            } else {
                accordionContent.style.display = "block";
            }
        });
    }
</script>

</html>