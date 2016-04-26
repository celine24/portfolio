<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Mon portfolio</title>
    <link rel="stylesheet" href="css/_style.css" type="text/css" />
    <link rel="stylesheet" href="css/menu_mobile/slicknav.css" type="text/css" />
    <link rel="stylesheet" href="font/fontawesome/font-awesome.css" type="text/css" />
</head>
<body>
    <div class="wrapper">

        <div class="main-menu-container">
            <header>
                <nav id="main-navigation">
                    <ul>
                        <li><a id="link-home" href="#home">Accueil</a></li>
                        <li><a id="link-portfolio" href="#portfolio">Portfolio</a></li>
                        <li><a id="link-about" href="#about">A propos</a></li>
                        <li><a id="link-contact" href="#contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="main-menu-links">
                    <ul>
                        <li>
                            <a href="https://github.com/celine24" title="Repositories Github">
                                <i class="fa fa-github-square fa-2x"></i>
                            </a>
                        </li>
                        <li>
                            <a href="pdf/celine-peyrot-developpeur-web.pdf" title="CV téléchargeable">
                                <i class="fa fa-download fa-2x"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </header>
        </div>
        <div class="main-container">

            <!-- Home -->
            <div id="home" class="content home-content">
                <h1>Intégrateur Developpeur Web</h1>
                <div class="wrapper-content">
                    <div class="home-img">
                        <img src="img/home.jpg" />
                    </div>
                    <div class="home-intro">
                        <h3>Céline Peyrot, 24 ans</h3>
                        " Après avoir poussé la porte du web et exploré ses différents langages par curiosité, j'ai très rapidement consacré mon temps libre à l'apprentissage de ces derniers et des nombreux outils parfois indispensables qui les accompagnent.
                        Passionnée de code depuis des années, je me suis toujours formée en autodidacte et par le biais de formules à distance qui m'ont apporté des connaissances solides en développement front et back end. Initiée aux langages de référence ainsi qu'à leurs frameworks associés, je suis désormais capable de mettre à profit mes compétences sur de nombreux projets, et souhaite faire de ma passion mon métier.
                        A la fois autonome et habituée à travailler en collaboration avec d'autres passionnés, je suis prête à rejoindre une équipe avec laquelle partager mes aptitudes et en acquérir de nouvelles. "
                    </div>
                    <div class="links">
                        <ul>
                            <li>
                                <a href="https://github.com/celine24" title="Repositories Github">
                                    <i class="fa fa-github-square fa-2x"></i>
                                </a>
                            </li>
                            <li>
                                <a href="pdf/celine-peyrot-developpeur-web.pdf" title="CV téléchargeable">
                                    <i class="fa fa-download fa-2x"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Home -->

            <!-- Portfolio -->
            <div id="portfolio" class="panel">
                <div class="content">
                    <h1>Mes réalisations</h1>
                    <div class="wrapper-content">
                        <ul id="filters" class="clearfix">
                            <li><span class="filter active" data-filter="site tp maquette">Tout</span></li>
                            <li><span class="filter" data-filter="site">Sites Web</span></li>
                            <li><span class="filter" data-filter="tp">TPs</span></li>
                            <li><span class="filter" data-filter="maquette">Maquettes</span></li>
                        </ul>
                        <div id="portfoliolist">
                            <div class="portfolio tp" data-cat="tp">
                                <div class="portfolio-wrapper">
                                    <a href="tp/tictactoe/tictactoe.html" alt="Tic Tac Toe, jeu JS" target="_blank">
                                        <img src="img/portfolio/tp/thumbnail/tictactoe.png" alt="" />
                                    </a>
                                    <div class="label">
                                        <div class="label-text">
                                            <span class="text-title">Tic Tac Toe</span>
                                            <span class="text-description">Jeu inspiré du célèbre "Tic Tac Toe"</span>
                                            <span class="text-techno">HTML5, CSS3, Javascript</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio tp" data-cat="tp">
                                <div class="portfolio-wrapper">
                                    <a href="tp/cupcake_factory/cupcake.html" alt="Tic Tac Toe, jeu JS" target="_blank">
                                        <img src="img/portfolio/tp/thumbnail/cupcake.png" alt="" />
                                    </a>
                                    <div class="label">
                                        <div class="label-text">
                                            <span class="text-title">Cupcake Factory</span>
                                            <span class="text-description">Jeu inspiré du célèbre "Cookie Clicker"</span>
                                            <span class="text-techno">HTML5, CSS3, Javascript</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio site" data-cat="site">
                                <div class="portfolio-wrapper">
                                    <a href="http://madouceparenthese.com/" alt="Ma Douce Parenthèse, site esthétique" target="_blank">
                                        <img src="img/portfolio/site/madouceparenthese.png" alt="" />
                                    </a>
                                    <div class="label">
                                        <div class="label-text">
                                            <span class="text-title">Ma Douce Parenthèse</span>
                                            <span class="text-description">Site d'un institut de beauté</span>
                                            <span class="text-techno">HTML5, CSS3, Jquery</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio site" data-cat="site">
                                <div class="portfolio-wrapper">
                                    <a href="http://road-web.fr" alt="Roadweb, site collaboratif" target="_blank">
                                        <img src="img/portfolio/site/roadweb.png" alt="" />
                                    </a>
                                    <div class="label">
                                        <div class="label-text">
                                            <span class="text-title">Roadweb</span>
                                            <span class="text-description">Projet collaboratif entre étudiants des métiers du Web</span>
                                            <span class="text-techno">HTML5, CSS3, Javascript, Jquery, PHP, MYSQL, Laravel</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio maquette" data-cat="maquette">
                                <div class="portfolio-wrapper">
                                    <a href="img/portfolio/maquette/hiroko_miura_accueil.jpg" alt="Maquette Page d'Accueil Créatrice de Bijoux" target="_blank">
                                        <img src="img/portfolio/maquette/thumbnail/hiroko-accueil-min.png" alt="" />
                                    </a>
                                    <div class="label">
                                        <div class="label-text">
                                            <span class="text-title">Hiroko Miura Page d'Accueil</span>
                                            <span class="text-description">Maquette pour le Site d'une Créatrice de Bijoux</span>
                                            <span class="text-techno">Photoshop</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio maquette" data-cat="maquette">
                                <div class="portfolio-wrapper">
                                    <a href="img/portfolio/maquette/hiroko_miura_galerie.jpg" alt="Maquette Galerie Créatrice de Bijoux" target="_blank">
                                        <img src="img/portfolio/maquette/thumbnail/hiroko-galerie-min.png" alt="" />
                                    </a>
                                    <div class="label">
                                        <div class="label-text">
                                            <span class="text-title">Hiroko Miura Galerie</span>
                                            <span class="text-description">Maquette pour le Site d'une Créatrice de Bijoux</span>
                                            <span class="text-techno">Photoshop</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio maquette" data-cat="maquette">
                                <div class="portfolio-wrapper">
                                    <a href="img/portfolio/maquette/banniere_milk.jpg" alt="Maquette Page d'Accueil" target="_blank">
                                        <img src="img/portfolio/maquette/thumbnail/flyer-min.png" alt="" />
                                    </a>
                                    <div class="label">
                                        <div class="label-text">
                                            <span class="text-title">Flyer Milk</span>
                                            <span class="text-description">Flyer fictif pour un Magasin de Vêtements</span>
                                            <span class="text-techno">Photoshop</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio tp" data-cat="tp">
                                <div class="portfolio-wrapper">
                                    <a href="tp/todolist/todolist.html" alt="Todolist angular" target="_blank">
                                        <img src="img/portfolio/tp/thumbnail/todolist.png" alt="" />
                                    </a>
                                    <div class="label">
                                        <div class="label-text">
                                            <span class="text-title">Tp</span>
                                            <span class="text-description">To do list</span>
                                            <span class="text-techno">Angular JS</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio tp" data-cat="tp">
                                <div class="portfolio-wrapper">
                                    <a href="tp/divshot/divshot.html" alt="Divshot bootstrap" target="_blank">
                                        <img src="img/portfolio/tp/thumbnail/divshot.png" alt="" />
                                    </a>
                                    <div class="label">
                                        <div class="label-text">
                                            <span class="text-title">Tp</span>
                                            <span class="text-description">Intégration Bootstrap</span>
                                            <span class="text-techno">Bootstrap</span>
                                        </div>
                                        <div class="label-bg"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Portfolio -->

            <!-- About -->
            <div id="about" class="panel">
                <div class="content">
                    <h1>Mon expérience, mes compétences</h1>
                    <div class="wrapper-content">
                         <div class="about-training"><h3>Parcours</h3>
                             <ul>
                                <li><span class="training-date">2016</span> : formation Développeur-Web et Application Mobile chez simplonLine.co </li>
                                <li><span class="training-date">2015</span> : formation Intégrateur-Développeur Web à l'EMWEB (Paris)</li>
                                <li><span class="training-date">2012</span> : licence psychologie (Bordeaux)</li>
                                <li><span class="training-date">2009</span> : baccalauréat filière Littéraire (anglais renforcé)</li>
                             </ul>
                         </div>
                         <div class="about-xp"><h3>Expériences Professionnelles</h3>
                             <ul>
                                 <li><span class="training-date">2015</span> : création d'un site Web Communautaire d'Entre-aide en Bénévolat (développement front et back du site avec le framework laravel)</li>
                                 <li><span class="training-date">2013</span> : création d'un site vitrine pour l'institut de Beauté Ma Douce Parenthèse</li>
                             </ul>
                         </div>
                    </div>
                    <div class="wrapper-content">
                        <div class="skills-content">
                            <h3>Compétences</h3>

                            <div class="about-skill-container">
                                <div class="about-skill-category">
                                    <span class="skill-category-title">Langages</span>
                                    <div class="about-skill-content">
                                            <span class="skill-title">HTML5</span>
                                            <progress max="100" value="80" form="form-id">80%</progress>
                                        </div>
                                    <div class="about-skill-content">
                                             <img src="img/badge/css3.png" alt="css3" class="skill-badge" />
                                             <span class="skill-title">CSS 3</span>
                                             <progress max="100" value="75" form="form-id">75%</progress>
                                        </div>
                                    <div class="about-skill-content">
                                            <img src="img/badge/javascript.png" alt="javascript" class="skill-badge" />
                                            <span class="skill-title">Javascript</span>
                                            <progress max="100" value="50" form="form-id">50%</progress>
                                        </div>
                                    <div class="about-skill-content">
                                            <img src="img/badge/php_mysql.png" alt="php/mysql" class="skill-badge" />
                                            <span class="skill-title">Php/MySQL</span>
                                            <progress max="100" value="60" form="form-id">60%</progress>
                                        </div>
                                    <div class="about-skill-content">
                                             <img src="img/badge/sass.png" alt="sass" class="skill-badge" />
                                             <span class="skill-title">Sass</span>
                                             <progress max="100" value="50" form="form-id">50%</progress>
                                        </div>
                                    <div class="about-skill-content">
                                            <img src="img/badge/ruby.png" alt="ruby" class="skill-badge" />
                                            <span class="skill-title">Ruby</span>
                                            <progress max="100" value="5" form="form-id">5%</progress>
                                        </div>
                                </div>
                                <div class="about-skill-category">
                                    <span class="skill-category-title">Frameworks</span>
                                    <div class="about-skill-content">
                                        <img src="img/badge/bootstrap.png" alt="bootstrap" class="skill-badge" />
                                        <span class="skill-title">Bootstrap</span>
                                        <progress max="100" value="60" form="form-id">60%</progress>
                                    </div>
                                    <div class="about-skill-content">
                                        <img src="img/badge/laravel.png" alt="laravel" class="skill-badge" />
                                        <span class="skill-title">Laravel 5</span>
                                        <progress max="100" value="60" form="form-id">60%</progress>
                                    </div>
                                    <div class="about-skill-content">
                                        <img src="img/badge/angular.png" alt="angular" class="skill-badge" />
                                        <span class="skill-title">Angular 1</span>
                                        <progress max="100" value="30" form="form-id">30%</progress>
                                    </div>
                                </div>
                                <div class="about-skill-category">
                                    <span class="skill-category-title">Bibliothèques</span>
                                    <div class="about-skill-content">
                                            <img src="img/badge/jquery.png" alt="jquery" class="skill-badge" />
                                            <span class="skill-title">JQuery</span>
                                            <progress max="100" value="40" form="form-id">40%</progress>
                                        </div>
                                </div>
                                <div class="about-skill-category">
                                    <span class="skill-category-title">Logiciels</span>
                                    <div class="about-skill-content">
                                        <span class="skill-title">Photoshop</span>
                                        <progress max="100" value="50" form="form-id">50%</progress>
                                    </div>
                                </div>
                                <div class="about-skill-category">
                                    <span class="skill-category-title">Outils</span>
                                    <div class="about-skill-content">
                                        <span class="tool-title">Git</span>
                                        <span class="tool-title">Slack</span>
                                        <span class="tool-title">Trello</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /About -->

            <!-- Contact -->
            <div id="contact" class="panel">
                <div class="content">
                    <h1>Me contacter</h1>
                    <div class="wrapper-content">
                        <form class="contact-form" action="form.php" method="POST">
                            <div class=""><?php echo isset($_SESSION["sending"]) ? $_SESSION["sending"] : ''; ?></div>
                            <div class="form-input">
                                <input type="text" placeholder="Votre Nom" name="lastname" required value="<?php echo isset($_SESSION["inputs"]["lastname"]) ? $_SESSION["inputs"]["lastname"] : ''; ?>" />
                                <?php if (isset($_SESSION["errors"]["lastname"])): ?>
                                    <div class="error">
                                        <?php echo $_SESSION["errors"]["lastname"]; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-input">
                                <input type="text" placeholder="Votre Prénom" name="firstname" required value="<?php echo isset($_SESSION["inputs"]["firstname"]) ? $_SESSION["inputs"]["firstname"] : ''; ?>" />
                                <?php if (isset($_SESSION["errors"]["firstname"])): ?>
                                    <div class="error">
                                        <?php echo $_SESSION["errors"]["firstname"]; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-input">
                                <input type="text" placeholder="Votre Email" name="email" required value="<?php echo isset($_SESSION["inputs"]["email"]) ? $_SESSION["inputs"]["email"] : ''; ?>" />
                                <?php if (isset($_SESSION["errors"]["email"])): ?>
                                    <div class="error">
                                        <?php echo $_SESSION["errors"]["email"]; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-textarea">
                                <textarea name="message" required><?php echo isset($_SESSION["inputs"]["lastname"]) ? $_SESSION["inputs"]["lastname"] : 'Votre Message'; ?></textarea>
                                <?php if (isset($_SESSION["errors"]["message"])): ?>
                                    <div class="error">
                                        <?php echo $_SESSION["errors"]["message"]; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <input type="submit" name="submit" value="Envoyer" />
                        </form>
                        <div class="contact-info">
                            <div>Céline Peyrot</div>
                            <div>Intégrateur-Développeur Web</div>
                            <div>peyrot.celine@gmail.com</div>
                            <div>(Gironde, France)</div>

                        </div>
                    </div>
                    <!-- ... -->
                </div>
            </div>
            <!-- /Contact -->
        </div>
    </div>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/structure.js"></script>
    <script type="text/javascript" src="js/portfolio.js"></script>
    <script type="text/javascript" src="js/jquery/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/jquery/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="js/menu_mobile/jquery.slicknav.min.js"></script>
    <script type="text/javascript" src="js/menu_mobile/menu.js"></script>
</body>
</html>
<?php
unset($_SESSION['inputs']); // on nettoie les données précédentes
unset($_SESSION['sending']);
unset($_SESSION['errors']);

