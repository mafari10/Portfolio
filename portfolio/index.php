<?php
require './php/form.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body class="main-content">
    <header class="container header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="img/cover.jpg" alt="">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    Hallo, Je suis <span>Michael.</span>
                    Un <span>Développeur</span> Web.
                </h1>
                <p>
                    Je suis un développeur web passionné et compétent, dévoué à la création de sites web uniques et
                    conviviaux. Fort d'une solide expérience en programmation et d'un sens aiguisé du design, je
                    fusionne créativité et fonctionnalité pour offrir des expériences numériques exceptionnelles
                </p>
                <div class="btn-con">
                    <a href="./img/Michael.pdf" class="main-btn" target="_blank">
                        <span class="btn-text">Téléchargez CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                    </a>
                    <a href="tel:+32467878066" class="main-btn">
                        <span class="btn-text">Embauchez Moi</span>
                        <span class="btn-icon"><i class="fas fa-phone-alt"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="container about" id="about">
            <div class="main-title">
                <h2>À propos de <span>Moi</span><span class="bg-text">Mon stats</span></h2>
            </div>
            <div class="about-container">
                <div class="left-about">
                    <h4>Informations à Mon Sujet</h4>
                    <p>
                        Je suis un développeur passionné et expérimenté, spécialisé dans plusieurs langages de
                        programmation. J'ai travaillé sur divers projets, allant des petites applications web aux
                        systèmes complexes à grande échelle. Je suis toujours à la recherche de nouvelles
                        technologies et je m'adapte facilement aux nouveaux défis.<br /> <br />
                        Je suis également un fervent adepte de la
                        collaboration et je crois en l'équilibre entre travail et vie personnelle. Contactez-moi pour en
                        savoir plus sur mes compétences et discuter de collaborations éventuelles.
                    </p>
                    <div class="btn-con">
                        <a href="./img/Michael.pdf" class="main-btn" target="_blank">
                            <span class="btn-text">Téléchargez CV</span>
                            <span class="btn-icon"><i class="fas fa-download"></i></span>
                        </a>
                    </div>
                </div>
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">50+</p>
                            <p class="small-text">Projets <br /> Réalisés</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">2+</p>
                            <p class="small-text">Years of <br /> experience</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">80+</p>
                            <p class="small-text">Client <br />Satisfait</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">70+</p>
                            <p class="small-text">Avis des <br /> clients</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-stats">
                <h4 class="stat-title">Mes compétences</h4>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title">html5</p>
                        <div class="progress-con">
                            <p class="prog-text">90%</p>
                            <div class="progress">
                                <span class="html"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">css3</p>
                        <div class="progress-con">
                            <p class="prog-text">95%</p>
                            <div class="progress">
                                <span class="css"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">javascript</p>
                        <div class="progress-con">
                            <p class="prog-text">70%</p>
                            <div class="progress">
                                <span class="js"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">ReactJS</p>
                        <div class="progress-con">
                            <p class="prog-text">60%</p>
                            <div class="progress">
                                <span class="react"></span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <h4 class="stat-title">Ma Chronologie</h4>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2014 - 2016</p>
                    <h5>IPMC (École Professionnel)<span> - Système Administrateur Réseaux</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, architecto!
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2020 - 2021</p>
                    <h5>Bureautique (Technique Transition)<span> Ecole De Beauvoir - Bureautique.</span></h5>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit, asperiores.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2021 - 2023</p>
                    <h5>Informatique (Technique Transition) <span> - Royal Maurice Destenay</span></h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, officiis?
                    </p>
                </div>
            </div>
        </section>
        <section class="container" id="portfolio">
            <div class="main-title">
                <h2>Mon <span>Portfolio</span><span class="bg-text">Mon Travail</span></h2>
            </div>
            <p class="port-text">
                Voici une partie de mon travail réalisé dans différents langages de programmation.
            </p>
            <div class="portfolios">
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port1.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Source du projet</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port2.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3> Source du projet</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port3.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Source du projet</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port4.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Source du projet</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port5.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Source du projet</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port2.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Source du projet</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port7.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Source du projet</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port8.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Source du projet</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port9.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3> Source du projet</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-behance"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container" id="blogs">
            <div class="blogs-content">
                <div class="main-title">
                    <h2>Mes <span>Blogs</span><span class="bg-text">Mes Blogs</span></h2>
                </div>
                <div class="blogs">
                    <div class="blog">
                        <img src="img/port6.jpg" alt="">
                        <div class="blog-text">
                            <h4>

                                Comment créer votre propre site web.
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/blog1.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Comment devenir un expert en conception Web.
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/blog2.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Devenez un designer Web en 10 jours.
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/blog3.jpg" alt="">
                        <div class="blog-text">
                            <h4>

                                Débogage simplifié avec l'Inspecteur Web.
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/port1.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Commencer avec la conception Web et la conception d'interface utilisateur (UI).
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/port3.jpg" alt="">
                        <div class="blog-text">
                            <h4>
                                Voici ce que vous devez savoir sur la conception Web.
                            </h4>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Doloribus natus voluptas, eos obcaecati recusandae amet?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Contactez <span>Moi</span><span class="bg-text">Contactez</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                        <h4>Contactez-Moi Ici</h4>
                        <p>
                            Contactez-moi pour discuter de votre projet ou de toute autre demande.
                        </p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Location:</span>
                                </div>
                                <p>
                                    Liège, Belgique.
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                    <span>Email: </span>
                                </div>
                                <p>
                                    <span>&nbsp;michaelnewtons419@gmail.com</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Education: </span>
                                </div>
                                <p>
                                    <span>IFAPME </span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Numéro Contact:</span>
                                </div>
                                <p>
                                    <span>0467878066</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-globe-africa"></i>
                                    <span>Langues:</span>
                                </div>
                                <p>
                                    <span>Anglais et Français</span>
                                </p>
                            </div>
                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                                <a href="https://www.facebook.com/prince.gyan3" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/newtons_micheal" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://github.com/mafari10/" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="https://www.youtube.com/@newtechman1559" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="right-contact">
                        <form  method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                            <div class="input-control i-c-2">
                                <input type="text" required placeholder="Votre Nom" name="name" id="name">
                                <input type="email" required placeholder="Votre E-mail" name="email" id="email">
                            </div>
                            <div class="input-control">
                                <input type="text" required placeholder="Votre Sujet" name="subject">
                            </div>
                            <div class="input-control">
                                <textarea id="message" cols="15" rows="8" placeholder="Message Ici..."
                                    name="message"></textarea>
                            </div>
                            <div class="submit-btn">
                                <a href="./img/Michael.pdf" class="main-btn" target="_blank">
                                    <span class="btn-text">Téléchargez CV</span>
                                    <span class="btn-icon"><i class="fas fa-download"></i></span>
                                </a>
                                <button class="btn">
                                    <a href=".contact-form" class="main-btn" target="_blank">
                                        <span class="btn-text">Envoyer</span>
                                        <span class="btn-icon"><i class="fas fa-envelope-square"></i></span>
                                    </a>
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="controls">
        <div class="control active-btn" data-id="home">
            <i class="fas fa-home"></i>
        </div>
        <div class="control" data-id="about">
            <i class="fas fa-user"></i>
        </div>
        <div class="control" data-id="portfolio">
            <i class="fas fa-briefcase"></i>
        </div>
        <div class="control" data-id="blogs">
            <i class="far fa-newspaper"></i>
        </div>
        <div class="control" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>
    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
    <script src="app.js"></script>
</body>

</html>