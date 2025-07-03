<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TumbFlow </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./asset/css/style.css">

</head>

<body>
    <?php
    
    // require_once __DIR__ . 'vendor/autoload.php';
    
    // $router = new AltoRouter();

    // $router->setBasePath('/TumbFlow');

    // $router->map('GET', '/register', 'ControllerUser#showRegisterForm', 'register_form');
    // $router->map('POST', '/register', 'ControllerUser#registerUser', 'register_submit');
    
    ?>


    <nav class="main-nav">
        <div class="nav-left">
            <img class="logo" src="./asset/images/logo.png" alt="Logo">
         </div>   
         <div class="menu-container">
            <div class="burger-menu">☰</div>
            
            <div class="main-menu">
                <ul>
                    <li><a href="#" data-key="accueil">Accueil</a></li>
                    <li><a href="#" data-key="les_posts">Les Posts</a></li>
                    <li><a href="#" data-key="creer_un_post">Profil</a></li>
                    <li><a href="admin-login.html">Admin</a></li>
                    <li><a href="#">Créer un Post</a></li>
                </ul>
            </div>
        </div>
        <div class="nav-right">
            <a href="#"><img src="./asset/images/dark_mode.png" alt="theme-dark" class="theme-toggle" id="dark-theme-toggle">
            </a>
            <a href="#"><img src="./asset/images/light_mode.png" alt="theme-light" class="theme-toggle" id="light-theme-toggle" style="display: none;"></a>
            <div class="language-select">
                <select>
                    <option value="fr">Français </option>
                    <option value="en">English</option>
                    <option value="tr">Turkçe</option>
                    <option value="es">Espanol</option>
                    <option value="de">Deutsch</option>
                    <option value="pt">Portugues</option>
                </select>
            </div>
            <a href="/exercicephp/TumbFlow/register" class="register-button">
                <img src="./asset/images/icon_incs.png" alt="S'inscrire">
            </a>
        </div>
    </nav>

    <main class="home-page-main-content">
        <section class="create-post-section">
            <h2><span data-key="partagez_vos_idees">Partagez vos idées sur ici !</span></h2>
            <form class="create-post-form">
                <textarea placeholder="Quoi de neuf dans le monde ? (max 280 caractères)" maxlength="280" data-key="quoi_de_neuf"></textarea>
                <div class="post-options">
                    <label for="image-upload" class="icon-button"><i class="fas fa-image"></i></label>
                    <input type="file" id="image-upload" accept="image/*" style="display: none;">

                    <label for="video-url" class="icon-button"><i class="fas fa-video"></i></label>
                    <input type="url" id="video-url" placeholder="Lien vidéo YouTube/Vimeo" class="hidden-input">

                    <label for="link-url" class="icon-button"><i class="fas fa-link"></i></label>
                    <input type="url" id="link-url" placeholder="Lien d'article/ressource" class="hidden-input">

                    <button type="submit" class="btn-primary" data-key="publier">Publier</button>
                </div>
                <input type="text" placeholder="#Education #Inspiration #Activites #Voyages" class="tag-input" data-key="placeholder_tags">
            </form>
        </section>

        <hr class="section-divider">
       
        
        
        <main class= "home-page">
            <section class="post-list">
                <h2><span data-key="a_la_une">A la Une : Nos Articles Phares</span></h2>
                <article class="post-item">
                    <a href="post1.html">
                        <span class="category">Education</span>
                        <img src="./asset/images/pedagogie_1.png" alt="L'impact des relations parentales sur les enfants">
                        <h3>L'impact des relations parentales sur les enfants</h3>
                        <p class="post-excerpt">La vie de famille est extrêmement importante pour l’enfant, car le mariage affecte également la relation entre la mère, le père et l’enfant. C'est pour cette raison que l'un des facteurs...</p>
                    </a>
                    <div class="post-meta">
                        <div class="meta-item">
                        <i class="fas fa-calendar-alt"></i><span class="post-date" data-key="post_date">15 octobre 2023</span>
                        </div>
                        <div class="meta-item">
                        <i class="fas fa-user"></i><span class="post-author" data-key="post_author">Jean Dupont</span>
                        </div>
                    </div>
                    <div class="post-actions">
                        <a href="#" class="action-btn like-btn" data-key="like"><i class="fas fa-thumbs-up"></i>111</a>
                        <a href="#" class="action-btn dislike-btn" data-key="dislike"><i class="fas fa-thumbs-down"></i>3</a>
                        <a href="post1.html#comments" class="action-btn comment-btn" data-key="comments"><i class="fas fa-comment"></i> 12</a> <a href="post1.html" class="action-btn read-more-btn" data-key="read_more"><i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </article>

                <article class="post-item">
                    <a href="post2.html">
                        <span class="category">Inspiration</span>
                        <img src="./asset/images/secrets-beaute.webp" alt="secrets-beaute">
                        <h3>7 secrets beauté de femmes du monde entier</h3>
                        <p class="post-excerpt">Qu’il s’agisse d'embellir vos cheveux ou de chérir votre peau, certains rituels beauté de l’autre bout du monde peuvent s’avérer plus naturels et efficaces que votre routine habituelle. </p>
                    </a>
                    <div class="post-meta">
                        <div class="meta-item">
                        <i class="fas fa-calendar-alt"></i><span class="post-date">20 octobre 2023</span>
                        </div>
                        <div class="meta-item">
                        <i class="fas fa-user"></i><span class="post-author">Marie Curie</span>
                        </div>
                    </div>
                    <div class="post-actions">
                        <a href="#" class="action-btn like-btn"><i class="fas fa-thumbs-up"></i>35</a>
                        <a href="#" class="action-btn dislike-btn"><i class="fas fa-thumbs-down"></i>2</a>
                        <a href="post1.html#comments" class="action-btn comment-btn"><i class="fas fa-comment"></i> 52</a> <a href="post1.html" class="action-btn read-more-btn"><i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </article>

                <article class="post-item post-video">
                    <a href="post_video_example.html">
                        <span class="category">Activités</span>
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/z96QXdDRhck?si=0dbBMwMRcPgUkwqm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <h3>5 Activités Éducatives pour les Tout-Petits à la Maison</h3>
                        <p class="post-excerpt">Découvrez des idées d'activités simples et amusantes pour stimuler le développement de vos enfants directement chez vous.</p>
                    </a>
                    <div class="post-meta">
                        <div class="meta-item">
                        <i class="fas fa-calendar-alt"></i><span class="post-date">01 décembre 2023</span>
                        </div>
                        
                        <div class="meta-item"><i class="fas fa-user"></i><span class="post-author">Thomas Dubois</span>
                        </div>
                    </div>
                    <div class="post-actions">
                        <a href="#" class="action-btn like-btn"><i class="fas fa-thumbs-up"></i></a>
                        <a href="#" class="action-btn dislike-btn"><i class="fas fa-thumbs-down"></i></a>
                        <a href="post_video_example.html#comments" class="action-btn comment-btn"><i class="fas fa-comment"></i></a>
                        <a href="post_video_example.html" class="action-btn read-more-btn"><i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </article>

                 <article class="post-item post-link">
            <a href="https://your-dev-resource.com/article-exemple" target="_blank" rel="noopener noreferrer">
                <span class="category">#Productivité #Tools</span>
                <img src="./asset/images/pour_developpeurs.jpg" alt="Miniature Lien"> <h3>Les 10 meilleurs outils pour développeurs en 2024</h3>
                <p class="post-excerpt">Découvrez les outils indispensables qui boosteront votre productivité cette année. #DevTools</p>
            </a>
            <div class="post-meta">
                        <div class="meta-item">
                        <i class="fas fa-calendar-alt"></i><span class="post-date">01 décembre 2023</span>
                        </div>
                        
                        <div class="meta-item"><i class="fas fa-user"></i><span class="post-author">Thomas Dubois</span>
                        </div>
                    </div>
            <div class="post-actions">
                <a href="#" class="action-btn like-btn"><i class="fas fa-thumbs-up"></i><span class="count-number">111</span></a>
                <a href="#" class="action-btn dislike-btn"><i class="fas fa-thumbs-down"></i>2</a>
                <a href="post1.html#comments" class="action-btn comment-btn"><i class="fas fa-comment"></i><span class="count-number">12</span></a>
                <a href="https://your-dev-resource.com/article-exemple" target="_blank" rel="noopener noreferrer" class="action-btn read-more-btn"><i class="fas fa-external-link-alt"></i></a> </div>
        </article>
                        
            </section>
        
     </main>

     <footer class="main-footer">
        <div class="footer-left">
            <div class="footer-logo">
                <img src="./asset/images/logo.png" alt="Logo">
            </div>
        </div>
        <div class="footer-center">
            <p><span data-key="all_rights_reserved">© 2022 Blog TumbFlow. Tous droits réservés.</span></p>
            <p><span data-key="contact_us">Contactez-nous</span> <a href="mailto:academienfants@ac.fr"><i class="fas fa-envelope"></i></a> </p>
        </div>
        <div class="footer-right">
            <div class="social-icon">
                <a href="#" target="_blank"><img src="./asset/images/facebook.png" alt="Facebook"></a>
                <a href="#" target="_blank"><span style="margin-left: 10px;"></span><img src="./asset/images/twitter.png" alt="Twitter"></a>
                <a href="#" target="_blank"><span style="margin-left: 10px;"></span><img src="./asset/images/instagram.png" alt="Instagram"></a>
                <a href="#" target="_blank"><span style="margin-left: 10px;"></span><img src="./asset/images/youtube.png" alt="Youtube"></a>
            </div>
        </div>


     </footer>

      <script src="./asset/js/script.js"></script>


</body>
</html>