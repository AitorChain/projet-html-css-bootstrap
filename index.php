<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="Greenpeace est un réseau international d'organisations indépendantes qui agissent selon les principes de non-violence pour protéger l’environnement, la biodiversité et promouvoir la paix."/>
        <title>Greenpeace - Page d'accueil</title>
        <!--Bootstrap-->
        <link rel="stylesheet" href="css/styles.css" >
        <!--CSS-->
        <link rel="stylesheet" href="css/bootstrap/bootstrap.css" >
        
        <!--Boostrap JS-->
        <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        </style>
    </head>

    <body>
        <header class="container-fluid fixed-top">

            <nav class="navbar container-xl navbar-expand-md ">
                <a href="index.php" class="navbar-brand nav-link">
                    <img src="css/media/logo.png" class="logo">
                </a>

                <button
                type="button"
                class="navbar-toggler"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown"
                arie-expanded="false"
                aria-label="Toggle activation"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
            
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li onclick="location.href='evenements.html';" class="nav-item top-nav">
                            <a href="evenements.html">Prochains evenements</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="container-fluid banner top-banner">
            
            <section class="container banner-text">
                <h1><strong>Greenpeace</strong> est un réseau international d'organisations indépendantes qui agissent selon les principes de non-violence pour protéger l’<strong>environnement</strong>, la <strong>biodiversité</strong> et promouvoir la <strong>paix</strong>.</h1>
            </section>
            
            <button
            type="button"
            class="btn-rounded btn-arrow"
            onclick="window.location.href='#about_us'" 
            ><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
              </svg></button>

        </div>

        <main class="container-xl">
            <article id="about_us" class="about_us">
                <h2 class="about_us_title">Qui sommes nous?</h2>
                <div class="row row-cols-1">
                    <section class="col-lg-9 about_us_description">
                        <p>
                            Depuis sa création il y a une cinquantaine d’années, Greenpeace agit sur terre et en mer selon les principes de non-violence pour protéger l’environnement et promouvoir la paix. Aujourd’hui, nous restons fidèles à cette mission, ainsi qu'à notre totale indépendance financière et idéologique.
                        </p>
                    </section>
                    <section class="col-lg-3">
                        <img src="css/media/about_us_photo.png" class="about_us_photo"></img>
                    </section>
                </div>

                </div>
                <div class="row row-cols-1">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <h3>Nos valeurs et principes d'action</h3>
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"><p>Depuis sa création, Greenpeace France est une organisation indépendante des États, des pouvoirs politiques et économiques. Greenpeace n'est soutenue par aucun parti et n'en soutient aucun. Cependant, notre mission nous conduit à interpeller les responsables politiques pour que les problèmes que nous dénonçons et les solutions que nous proposons soient considérés.

                                Cette indépendance politique repose sur une indépendance financière totale. Greenpeace ne vit que des contributions des particuliers qui ont choisi de soutenir sa démarche.</p></div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                <h3>La non-violence, réponse à l’urgence d’agir</h3>
                            </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"><p>Comment se battre contre les injustices qui brutalisent la vie sur Terre ? Naturellement préoccupées par cette question, nombre de personnes pratiquent la non-violence, parfois sans le savoir. La non-violence est utilisée comme technique de lutte sociale, écologique et politique. Grève, manifestation, non-coopération, boycott, ou encore désobéissance civile : les déclinaisons sont nombreuses.</p> </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                <h3>Notre histoire</h3>
                            </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"><p>En septembre 1971, un groupe de militants nord-américains, pacifistes et écologistes, embarquent à bord du Phyllis Cormack pour protester contre les essais nucléaires américains prévus sur l'île d'Amchitka, au large de l'Alaska. Leur but est d'empêcher ces essais en se plaçant au centre de la zone d'essai. Cette action fait sensation dans le monde entier et atteint son but. En 1972, les Etats-Unis, sous la pression massive du public, annoncent la fin des essais nucléaires à Amchitka. </p>

                                <p>Les militants de l'expédition cherchent alors un nom évocateur des problématiques qu'ils défendent : environnement et pacifisme. Ce sera «Greenpeace».</p>
                                
                                <p>Quelques années plus tard, en 1979, les bureaux européens, américains et ceux du Pacifique décident de mutualiser leurs moyens et créent Greenpeace International.</p>
                                
                                <p>Le bureau français, lui, ouvre en 1977. Mais en 1987, deux ans après l'attentat contre le Rainbow Warrior et suite à la campagne de désinformation orchestrée par la France, il doit fermer ses portes. Greenpeace France rouvre finalement deux ans plus tard, en 1989.</p>
                                
                                <p>Les premières actions de Greenpeace concernaient la lutte contre le nucléaire et la protection des océans. Greenpeace a ensuite progressivement élargi son combat : lutte contre le changement climatique, contre la pollution par les produits toxiques, protection des forêts, dénonciation des OGM et des pesticides, promotion des énergies renouvelables et de l’agriculture écologique.
                                
                                Depuis plus de quarante ans, Greenpeace a contribué à d'importants changements à travers le monde et remporté de nombreux succès.</p></div>
                          </div>
                        </div>
                    </div>
                </div>
                
                <section class="text-center">
                <button
                type="button"
                class="btn-rounded btn-arrow btn-arrow-green"
                onclick="window.location.href='#evenements-banner'" 
                ><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
                </svg></button>
                </section>

                
            </article>
        </main>

        <div id="evenements-banner" class="container-fluid evenements-banner banner">
            
            <section class="container banner-text">
                <h2><strong>Viens nous rejoindre</strong> dans nos prochains evenements!</h2>
            </section>
            
            <button
            type="button"
            class="btn-call-action"
            onclick="window.location.href='evenements.html'" 
            >Prochains evenements</button>

        </div>
        

        <footer class="container-fluid">
            <section class="row logo">
                
            </section>
            <section class="row copyright">
                <p>Aitor Garcia © 2022</p>
            </section>
        </footer>

    </body>
</html>