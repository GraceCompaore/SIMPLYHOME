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
    <section class="page-header">
        <div class="contacts-list">
            <ul class="social">
                <li>|</li>
                <li><a href="https://fr-fr.facebook.com/mongreta"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/lesgreta"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://twitter.com/gretadebretagne"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="https://www.instagram.com/accounts/login/?next=/greta_formation"><i class="fab fa-instagram"></i></a></li>
                <li>|</li>
            </ul>

            <ul class="phone">
                <li><a href="tel:+33257877185"><i class="fa fa-phone"></i> 02 57 87 71 85</a></li>
                <li>|</li>
            </ul>

            <ul class="projet">
                <li><a href="formulaire.php"><i class="fa fa-home"></i> Suivre mon projet</a></li>
                <li>|</li>
            </ul>
        </div>

        
    </section>
    <div class="nav-bar-container">
            <?php include('header.php'); ?>
        </div>
    <div class="container">
        <section id="accueil">
            <div class="complementaires">
                <ul>
                    <li class="element-complementaire"><a href="tel:+33257877185"><i class="fa fa-phone"></i></a></li>
                    <li class="element-complementaire"><a href="form.php"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
            <h1> Bienvenue Chez Simply Home</h1>
            <div class="assemblage">
                <div class="bienvenue">
                    <p>La société <strong>Simply Home,</strong> constructeur de maisons neuves individuelles en <strong>Charente</strong>(16) et en <strong>Vendée</strong> (85), est née d'une ambition, accompagner ses clients dans la réussite d'un des projets
                        les plus importants dans leur vie : la <strong>construction d'une maison neuve.</strong><br>
                    </p>
                    <P><strong>Simply Home</strong> vous accompagne tout au long de votre projet de construction de maison individuelle, de la recherche de votre terrain jusqu'à la remise des cléS.</P>
                </div>
                <div class="construction">
                    <img src="images/construction_maison_individuelle.jpg" alt="construction">
                </div>
            </div>
        </section>

        <section id="presentation-maisons">
            <h2>Nos maisons</h2>

            <ul class="liste-maisons">
                <li class="maison"><a href="#">
                    <div class="cover" style="background-image: url('images/calypso_3_chambres.jpg');"></div>
                    <div class="description">
                        <h3 class="title">Calypso</h3>
                        <p>Maison 3 chambres <br> 107m²</p>
                    </div>
                    </a>
                </li>
                
                <li class="maison"><a href="#">
                    <div class="cover" style="background-image: url('images/city_3_chambres.jpg');"></div>
                    <div class="description">
                        <h3 class="title">City</h3>
                        <p>Maison 2,3 ou 4 chambres<br> 104m²</p>
                    </div>
                    </a>
                </li>
               
                <li class="maison pub">
                    <p class="finance"> Comment financer mon projet ?</p>
                    <a href="#" class="info"> +d'infos</a>

                </li>
                
                <li class="maison"><a href="#">
                    <div class="cover" style="background-image: url('images/armenia_3_chambres.jpg');"></div>
                    <div class="description">
                        <h3 class="title">Armenia</h3>
                        <p>Maison 3 chambres+bureau<br> 104m²</p>
                    </div>
                    </a>
                </li>
                
                <li class="maison"><a href="#">
                    <div class="cover" style="background-image: url('images/bolzano_3_chambres.jpg');"></div>
                    <div class="description">
                        <h3 class="title">Bolzano</h3>
                        <p>Maison 3 chambres<br> 104m²</p>
                    </div>
                    </a>
                </li>
                
                <li class="maison"><a href="#">
                    <div class="cover" style="background-image: url('images/azure_3_chambres.jpg');"></div>
                    <div class="description">
                        <h3 class="title">Azure</h3>
                        <p>Maison 3 chambres<br> 97m²</p>
                    </div>
                    </a>
                </li>
                
            </ul>

            <div class="voir">
                <a href="maisons.php">En voir +</a>
            </div>

        </section>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>