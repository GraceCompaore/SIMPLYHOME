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
        <section id="contact">
            <div class="complementaires">
                <ul>
                    <li class="element-complementaire"><a href="#"><i class="fa fa-phone"></i></a></li>
                    <li class="element-complementaire"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
            <h1>Contacter Simply Home</h1>
            <div class="colonne-contact">
                <p> Pour toute demande d'information ou de prise de rendez-vous,vous pouvez nous adresser votre demande en remplissant le formulaire de contact ci-dessous.<br> Le conseiller en habitat de votre secteur géographique, interlocuteur unique et
                    personnalisé tout au long de la construction.Ce suivi personnalisé est garant de la réussite des projets.
                </p>
                <img src="images/imgcommencerprojet.jpg">
            </div>

            <div>
                <form action="envoimail.php" method="post">
                    <div class="formcolonne">
                        <p>
                            <input type="text" name="nom" id="nom" class="input-bottom-border" placeholder="Nom">
                        </p>
                        <p>
                            <input type="email" name="email" id="email" class="input-bottom-border" placeholder="Email">
                        </p>
                        <p>
                            <input type="tel" name="tel" id="tel" class="input-bottom-border" placeholder="Téléphone">
                        </p>
                    </div>
                    <div class="formcolonne">
                        <p> Département</p>
                        <label for="charente">16</label>
                        <input id="charente" name="Charente" type="checkbox">

                        <label for="vendee">85</label>
                        <input id="vendee" name="Vendee" type="checkbox">

                        <p> Votre projet</p>
                        <label for="maison">Maison</label>
                        <input id="maison" name="maison" type="checkbox">

                        <label for="maison-terrain">Maison+Terrain</label>
                        <input id="maison-terrain" name="maison-terrain" type="checkbox">

                        <label for="appartement">Appartement</label>
                        <input id="appartement" name="appartement" type="checkbox">

                        <p> Votre message </p>
                        <p>
                            <textarea name="message" id="message"></textarea>
                        </p>
                        <p class="bouton-form"><button type="submit">Envoyer<button</p>

                </form>
                </div>
            </div>
        </section>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>