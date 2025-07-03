document.addEventListener('DOMContentLoaded', function() {
    const darkThemeToggle = document.getElementById('dark-theme-toggle');
    const lightThemeToggle = document.getElementById('light-theme-toggle');
    const body = document.body;

    const savedTheme = localStorage.getItem('theme');

    if(savedTheme ==='dark') {
        body.classList.add('dark-mode');
        darkThemeToggle.style.display = 'none';
        lightThemeToggle.style.display = 'block';
    } else {
        body.classList.remove('dark-mode');
        darkThemeToggle.style.display = 'block';
        lightThemeToggle.style.display = 'none';
    }

    darkThemeToggle.addEventListener('click' , function() {
        body.classList.add('dark-mode');
        localStorage.setItem('theme', 'dark');
        darkThemeToggle.style.display = 'none';
        lightThemeToggle.style.display = 'block';
    });

    lightThemeToggle.addEventListener('click', function(){
        body.classList.remove('dark-mode');
        localStorage.setItem('theme', 'light');
        darkThemeToggle.style.display = 'block';
        lightThemeToggle.style.display = 'none';
    });
});


document.addEventListener('DOMContentLoaded', function() {
            const menuArea = document.querySelector('.menu-container');
            const mainMenu = document.querySelector('.main-menu');
            const burgerMenu = document.querySelector('.burger-menu');

            const mediaQuery = window.matchMedia('(max-width: 768px)');

            burgerMenu.addEventListener('click', function(event) {
                if (mediaQuery.matches) {
                    event.stopPropagation();
                    mainMenu.classList.toggle('active');
                }
            });

            document.addEventListener('click', function(event) {
                if (mediaQuery.matches) {
                    if (mainMenu.classList.contains('active') && !mainMenu.contains(event.target) && !burgerMenu.contains(event.target)) {
                      mainMenu.classList.remove('active');  
                    }
                }
            });

            function adjustMenuOneResize() {
                if (!mediaQuery.matches) {
                    mainMenu.classList.remove('active');
                } else {
                    mainMenu.classList.remove('active');
                }
            }

            adjustMenuOneResize();
            mediaQuery.addListener(adjustMenuOneResize);
        });

        const languageSelect = document.querySelector('.language-select select');

        const translations = {
    'fr': {
        "accueil": "Accueil",
        "les_posts": "Les Posts",
        "profil": "Profil",
        "admin": "Admin",
        "creer_un_post": "Créer un Post",
        "partagez_vos_idees": "Partagez vos idées sur ici !",
        "quoi_de_neuf": "Quoi de neuf dans le monde ? (max 280 caractères)",
        "publier": "Publier",
        "placeholder_tags": "#Éducation #Inspiration #Activités #Voyages", 
        "a_la_une": "À la Une : Nos Articles Phares",
        "post_date": "Date", 
        "post_author": "Auteur", 
        "like": "J'aime", 
        "dislike": "Je n'aime pas", 
        "comments": "Commentaires", 
        "read_more": "Lire la suite", 
        "contact_us": "Contactez-nous", 
        "all_rights_reserved": "Tous droits réservés." 
        },

    'en': {
        "accueil": "Home",
        "les_posts": "Posts",
        "profil": "Profile",
        "admin": "Admin",
        "creer_un_post": "Create a Post",
        "partagez_vos_idees": "Share your ideas here!",
        "quoi_de_neuf": "What's new in the world? (max 280 characters)",
        "publier": "Publish",
        "placeholder_tags": "#Education #Inspiration #Activities #Travel",
        "a_la_une": "Featured: Our Top Articles",
        "post_date": "Date",
        "post_author": "Author",
        "like": "Like",
        "dislike": "Dislike",
        "comments": "Comments",
        "read_more": "Read More",
        "contact_us": "Contact Us",
        "all_rights_reserved": "All rights reserved."
        },
    'tr': {
        "accueil": "Ana Sayfa",
        "les_posts": "Gönderiler",
        "profil": "Profil",
        "admin": "Yönetici",
        "creer_un_post": "Gönderi Oluştur",
        "partagez_vos_idees": "Fikirlerinizi burada paylaşın!",
        "quoi_de_neuf": "Dünyada neler oluyor? (maks 280 karakter)",
        "publier": "Yayınla",
        "placeholder_tags": "#Eğitim #İlham #Aktiviteler #Seyahatler",
        "a_la_une": "Öne Çıkanlar: Başlıca Makalelerimiz",
        "post_date": "Tarih",
        "post_author": "Yazar",
        "like": "Beğen",
        "dislike": "Beğenme",
        "comments": "Yorumlar",
        "read_more": "Daha Fazla Oku",
        "contact_us": "Bize Ulaşın",
        "all_rights_reserved": "Tüm Hakları Saklıdır."
    },
    'es': { // İspanyolca eklendi
        "accueil": "Inicio",
        "les_posts": "Publicaciones",
        "profil": "Perfil",
        "admin": "Administrador",
        "creer_un_post": "Crear Publicación",
        "partagez_vos_idees": "¡Comparte tus ideas aquí!",
        "quoi_de_neuf": "¿Qué hay de nuevo en el mundo? (máx 280 caracteres)",
        "publier": "Publicar",
        "placeholder_tags": "#Educación #Inspiración #Actividades #Viajes",
        "a_la_une": "Destacado: Nuestros Artículos Principales",
        "post_date": "Fecha",
        "post_author": "Autor",
        "like": "Me gusta",
        "dislike": "No me gusta",
        "comments": "Comentarios",
        "read_more": "Leer más",
        "contact_us": "Contáctanos",
        "all_rights_reserved": "Todos los derechos reservados."
    },
    'de': { // Almanca eklendi
        "accueil": "Startseite",
        "les_posts": "Beiträge",
        "profil": "Profil",
        "admin": "Admin",
        "creer_un_post": "Beitrag erstellen",
        "partagez_vos_idees": "Teilen Sie Ihre Ideen hier!",
        "quoi_de_neuf": "Was gibt es Neues in der Welt? (max. 280 Zeichen)",
        "publier": "Veröffentlichen",
        "placeholder_tags": "#Bildung #Inspiration #Aktivitäten #Reisen",
        "a_la_une": "Im Rampenlicht: Unsere Top-Artikel",
        "post_date": "Datum",
        "post_author": "Autor",
        "like": "Gefällt mir",
        "dislike": "Gefällt mir nicht",
        "comments": "Kommentare",
        "read_more": "Mehr lesen",
        "contact_us": "Kontaktieren Sie uns",
        "all_rights_reserved": "Alle Rechte vorbehalten."
    },
    'pt': { // Portekizce eklendi
        "accueil": "Início",
        "les_posts": "Publicações",
        "profil": "Perfil",
        "admin": "Administrador",
        "creer_un_post": "Criar Publicação",
        "partagez_vos_idees": "Compartilhe suas ideias aqui!",
        "quoi_de_neuf": "O que há de novo no mundo? (máx 280 caracteres)",
        "publier": "Publicar",
        "placeholder_tags": "#Educação #Inspiração #Atividades #Viagens",
        "a_la_une": "Em Destaque: Nossos Artigos Principais",
        "post_date": "Data",
        "post_author": "Autor",
        "like": "Gostei",
        "dislike": "Não gostei",
        "comments": "Comentários",
        "read_more": "Leia Mais",
        "contact_us": "Contate-nos",
        "all_rights_reserved": "Todos os direitos reservados."
    }
};

function setLanguage(lang) {
    const elements = document.querySelectorAll('[data-key]');
    elements.forEach(element => {
        const key = element.getAttribute('data-key');
        if (translations[lang] && translations[lang][key]) {
            // Eğer element bir input/textarea ise placeholder'ını güncelle
            if (element.tagName === 'INPUT' || element.tagName === 'TEXTAREA') {
                element.placeholder = translations[lang][key];
            } else {
                // Aksi takdirde innerText veya innerHTML'ini güncelle
                element.innerText = translations[lang][key];
            }
        }
    });
    localStorage.setItem('language', lang); // Kullanıcının dil tercihini kaydet
}

// Sayfa yüklendiğinde kullanıcının tercihini kontrol et
const savedLanguage = localStorage.getItem('language') || 'fr'; // Varsayılan dil Fransızca
languageSelect.value = savedLanguage; // Dropdown'ı kaydettiğimiz dile ayarla
setLanguage(savedLanguage); // Sayfa açıldığında dili ayarla

// Dropdown değiştiğinde dili güncelle
languageSelect.addEventListener('change', (event) => {
    setLanguage(event.target.value);
});



    


