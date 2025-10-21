<!DOCTYPE html>
<html lang="fr">
<head>
  <!-- ==================== BASE / SEO ==================== -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact — Elpton | Discutons de votre projet web</title>
  <meta name="description" content="Vous avez un projet web ? Contactez Elpton pour discuter de votre site vitrine, e-commerce ou optimisation SEO. Réponse rapide et solutions sur mesure." />
  <meta name="keywords" content="contact Elpton, création site web, agence web Abidjan, e-commerce, SEO, Côte d'Ivoire" />
  <link rel="icon" href="favicon.png" type="image/png" />
  <link rel="canonical" href="https://www.elpton.com/contact.php" />

  <!-- Open Graph / Social -->
  <meta property="og:title" content="Contactez Elpton — Création de sites web modernes" />
  <meta property="og:description" content="Besoin d’un site vitrine, d’une boutique en ligne ou d’un SEO optimisé ? Contactez Elpton dès aujourd’hui pour transformer vos idées en réussite digitale." />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://images.unsplash.com/photo-1526378722484-bd91ca387e72?q=80&w=1600&auto=format&fit=crop" />
  <meta property="og:url" content="https://www.elpton.com/contact.php" />
  <meta name="twitter:card" content="summary_large_image" />

  <!-- JSON-LD Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Elpton",
    "url": "https://www.elpton.com/",
    "logo": "https://www.elpton.com/img/Elptonfav.jpg",
    "sameAs": [
      "https://www.facebook.com/profile.php?id=61578419139752",
      "https://wa.me/2250554276459"
    ],
    "contactPoint": [{
      "@type": "ContactPoint",
      "contactType": "customer support",
      "email": "contact@elpton.com",
      "telephone": "+2250554276459",
      "areaServed": "Côte d'Ivoire"
    }]
  }
  </script>

  <!-- Tailwind & Icons -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- ==================== STYLES ==================== -->
  <style>
    :root{
      --brand-1:#3b82f6;
      --brand-2:#8b5cf6;
      --ink:#0f172a;
      --muted:#475569;
      --bg:#f8fafc;
    }
    html{scroll-behavior:smooth}
    body{font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial,"Noto Sans","Apple Color Emoji","Segoe UI Emoji"}

    .gradient-text{background:linear-gradient(90deg,var(--brand-1),var(--brand-2));-webkit-background-clip:text;background-clip:text;color:transparent}
    .card-hover{transition:transform .3s ease, box-shadow .3s ease}
    .card-hover:hover{transform:translateY(-8px);box-shadow:0 20px 40px -20px rgba(2,6,23,.25)}
    .nav-link{position:relative}
    .nav-link:after{content:"";position:absolute;left:0;bottom:-6px;height:2px;width:0;background:linear-gradient(90deg,var(--brand-1),var(--brand-2));transition:width .3s ease}
    .nav-link:hover:after{width:100%}
    .reveal{opacity:0;transform:translateY(16px);transition:opacity .6s ease, transform .6s ease}
    .reveal.show{opacity:1;transform:translateY(0)}
    .parallax{position:relative;overflow:hidden}
    .parallax .layer{position:absolute;inset:auto;pointer-events:none;will-change:transform}
    @keyframes float{0%,100%{transform:translateY(0)}50%{transform:translateY(-12px)}}
    .floating{animation:float 6s ease-in-out infinite}
  </style>
</head>

<body class="bg-[var(--bg)] text-slate-800">
  <!-- ==================== NAVBAR ==================== -->
  <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur supports-[backdrop-filter]:bg-white/60 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="h-16 flex items-center justify-between">
        <a href="index.html" class="flex items-center gap-2" aria-label="Retour accueil">
          <span class="text-xl font-extrabold text-slate-900">El<span class="gradient-text">pton</span></span>
        </a>
        <div class="hidden md:flex items-center gap-8">
          <a href="index.html" class="nav-link text-sm font-medium text-slate-900">Accueil</a>
          <a href="services.html" class="nav-link text-sm font-medium text-slate-900">Services</a>
          <a href="portfolio.html" class="nav-link text-sm font-medium text-slate-900">Portfolio</a>
          <a href="about.html" class="nav-link text-sm font-medium text-slate-900">À propos</a>
          <a href="contact.php" class="inline-flex items-center gap-2 bg-gradient-to-r from-[var(--brand-1)] to-[var(--brand-2)] text-white px-4 py-2 rounded-md text-sm font-semibold shadow hover:shadow-md transition">
            <i class="fa-solid fa-paper-plane"></i> Contact
          </a>
        </div>
        <button id="mobile-menu-button" class="md:hidden inline-flex h-10 w-10 items-center justify-center rounded-md border border-slate-200 text-slate-600 hover:bg-slate-50" aria-expanded="false" aria-controls="mobile-menu" aria-label="Ouvrir le menu">
          <i class="fa-solid fa-bars"></i>
        </button>
      </div>
    </div>
    <!-- Mobile -->
    <div id="mobile-menu" class="md:hidden hidden border-t border-slate-200 bg-white">
      <div class="max-w-7xl mx-auto px-4 py-3 flex flex-col gap-2">
        <a href="index.html" class="px-3 py-2 rounded hover:bg-slate-50">Accueil</a>
        <a href="services.html" class="px-3 py-2 rounded hover:bg-slate-50">Services</a>
        <a href="portfolio.html" class="px-3 py-2 rounded hover:bg-slate-50">Portfolio</a>
        <a href="about.html" class="px-3 py-2 rounded hover:bg-slate-50">À propos</a>
        <a href="contact.php" class="px-3 py-2 rounded bg-gradient-to-r from-[var(--brand-1)] to-[var(--brand-2)] text-white">Contact</a>
      </div>
    </div>
  </nav>

    <!-- Hero Contact -->
    <section class="relative bg-gradient-to-r from-white to-indigo-50 py-20 overflow-hidden">
        <!-- Bulles décoratives autour du hero -->
        <div class="absolute top-10 left-10 w-32 h-32 bg-blue-200 rounded-full opacity-30 floating"></div>
    
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center relative z-10">
            <div>
                <h1 class="text-4xl font-bold mb-4">Parlons de votre <span class="gradient-text">projet</span></h1>
                <p class="text-lg text-gray-600 mb-6">
                    Vous avez une idée pour un site web ou un projet digital ? Contactez notre équipe pour obtenir une solution sur mesure adaptée à vos besoins.
                </p>
                <p class="text-gray-600">Pas d'adresse physique nécessaire – nous travaillons entièrement en ligne.</p>
            </div>
           <div class="relative bg-gray-50 p-8 rounded-xl shadow-lg">
    
    <form action="send.php" method="post" id="contactForm">
        <div class="mb-6">
            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Votre nom</label>
            <input type="text" id="nom" name="nom" class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Jean Dupont" required>
        </div>
        <div class="mb-6">
            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Votre email</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="jean.dupont@exemple.com" required>
        </div>
        <div class="mb-6 relative">
  <label for="sujet" class="block text-sm font-medium text-gray-700 mb-2">Services souhaités</label>
  
  <!-- Bouton du menu déroulant -->
  <div id="dropdownButton" class="w-full flex justify-between items-center px-4 py-3 border border-gray-300 rounded-md cursor-pointer bg-white">
    <span id="selectedServices" class="text-gray-500">Sélectionnez vos services</span>
    <span id="arrowIcon" class="transform transition-transform">^</span>
  </div>
  
  <!-- Liste déroulante -->
  <div id="dropdownMenu" class="absolute mt-2 w-full bg-white border border-gray-300 rounded-md shadow-lg hidden z-50">
    <ul class="max-h-60 overflow-y-auto">
      <li><label class="block px-4 py-2 cursor-pointer"><input type="checkbox" value="Création de site vitrine" class="mr-2"> Création de site vitrine</label></li>
      <li><label class="block px-4 py-2 cursor-pointer"><input type="checkbox" value="Boutique en ligne" class="mr-2"> Boutique en ligne</label></li>
      <li><label class="block px-4 py-2 cursor-pointer"><input type="checkbox" value="SEO & Référencement" class="mr-2"> SEO & Référencement</label></li>
      <li><label class="block px-4 py-2 cursor-pointer"><input type="checkbox" value="Maintenance" class="mr-2"> Maintenance</label></li>
      <li><label class="block px-4 py-2 cursor-pointer"><input type="checkbox" value="Hébergement" class="mr-2"> Hébergement</label></li>
      <li><label class="block px-4 py-2 cursor-pointer"><input type="checkbox" value="CV en ligne" class="mr-2"> CV en ligne</label></li>
      <li><label class="block px-4 py-2 cursor-pointer"><input type="checkbox" value="Marketing digital" class="mr-2"> Marketing digital</label></li>
    </ul>
  </div>

  <!-- Champ caché pour envoyer les services choisis -->
  <input type="hidden" id="sujet" name="sujet" required>
</div>
        <div class="mb-6">
            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Votre message</label>
            <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Décrivez-nous votre projet..." required></textarea>
        </div>
        
        <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-md font-medium hover:bg-blue-700 transition duration-300 mb-4">
           <i class="fa-solid fa-envelope"></i> Envoyer le message (par e-mail)
        </button>

        <button type="button" id="whatsappButton" class="w-full bg-green-500 text-white px-6 py-3 rounded-md font-medium hover:bg-green-600 transition duration-300">
            <i class="fab fa-whatsapp"></i> Envoyer par WhatsApp
        </button>
    </form>
    
   <?php if (isset($_GET['success'])): ?>
<!-- POPUP (Succès ou Erreur) -->
<div id="popup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
  <div class="bg-white rounded-2xl shadow-xl p-6 max-w-sm w-full text-center relative animate-fadeIn">
    
    <!-- Bouton fermeture -->
    <button id="closePopup" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
    
    <?php if ($_GET['success'] == 'true'): ?>
      <!-- Succès -->
      <div class="flex flex-col items-center">
        <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center mb-4">
          <i class="fa-solid fa-check text-green-600 text-2xl"></i>
        </div>
        <h2 class="text-xl font-semibold text-green-600 mb-2">Message envoyé</h2>
        <p class="text-gray-600">Merci 🙏 Votre message a bien été transmis. Nous vous répondrons rapidement.</p>
      </div>
    <?php else: ?>
      <!-- Erreur -->
      <div class="flex flex-col items-center">
        <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center mb-4">
          <i class="fa-solid fa-times text-red-600 text-2xl"></i>
        </div>
        <h2 class="text-xl font-semibold text-red-600 mb-2">Échec de l’envoi</h2>
        <p class="text-gray-600">⚠️ Une erreur est survenue lors de l’envoi de votre message. Veuillez réessayer plus tard.</p>
      </div>
    <?php endif; ?>
    
  </div>
</div>

<!-- Animation + Script -->
<style>
  @keyframes fadeIn {
    from {opacity: 0; transform: scale(0.9);}
    to {opacity: 1; transform: scale(1);}
  }
  .animate-fadeIn {
    animation: fadeIn 0.3s ease-out;
  }
</style>

<script>
  const popup = document.getElementById("popup");
  const closePopup = document.getElementById("closePopup");

  // Fermer avec le bouton
  closePopup.addEventListener("click", () => {
    popup.style.display = "none";
  });

  // Fermer en cliquant à l'extérieur
  window.addEventListener("click", (e) => {
    if (e.target === popup) {
      popup.style.display = "none";
    }
  });
</script>
<?php endif; ?>

</div>



<!-- les we pour le menu deroulant -->
<script>
  const dropdownButton = document.getElementById("dropdownButton");
  const dropdownMenu = document.getElementById("dropdownMenu");
  const arrowIcon = document.getElementById("arrowIcon");
  const checkboxes = dropdownMenu.querySelectorAll("input[type='checkbox']");
  const selectedServices = document.getElementById("selectedServices");
  const hiddenInput = document.getElementById("sujet");

  // Ouvrir/fermer le menu
  dropdownButton.addEventListener("click", () => {
    dropdownMenu.classList.toggle("hidden");
    arrowIcon.classList.toggle("rotate-180");
  });

  // Fermer en cliquant à l’extérieur
  document.addEventListener("click", (e) => {
    if (!dropdownButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
      dropdownMenu.classList.add("hidden");
      arrowIcon.classList.remove("rotate-180");
    }
  });

  // Mettre à jour les services choisis
  checkboxes.forEach(checkbox => {
    checkbox.addEventListener("change", () => {
      let selected = [];
      checkboxes.forEach(cb => {
        if (cb.checked) selected.push(cb.value);
      });

      selectedServices.textContent = selected.length > 0 ? selected.join(", ") : "Sélectionnez vos services";
      hiddenInput.value = selected.join(", ");
    });
  });
</script>

<!-- what -->
<script>
    // Écouteur d'événement pour le bouton WhatsApp
    document.getElementById('whatsappButton').addEventListener('click', function(event) {
        // Le preventDefault n'est plus nécessaire ici car le type est "button"

        // Récupération des valeurs
        const nom = document.getElementById('nom').value;
        const email = document.getElementById('email').value;
        const sujet = document.getElementById('sujet').value;
        const message = document.getElementById('message').value;

        // Construction et encodage du message
        const texteMessage = `Nom : ${nom}\nEmail : ${email}\nSujet : ${sujet}\n\nMessage : ${message}`;
        const texteEncode = encodeURIComponent(texteMessage);
        
        // Numéro de téléphone cible
        const numeroTelephone = '22554276459'; 

        // Création de l'URL WhatsApp
        const urlWhatsApp = `https://wa.me/${numeroTelephone}?text=${texteEncode}`;

        // Redirection
        window.open(urlWhatsApp, '_blank');
    });
</script>
        </div>
    </section>

    <!-- Contact rapide & réseaux -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-12">
            <div class="space-y-6">
                <div class="flex items-start">
                    <div class="flex-shrink-0 bg-blue-100 p-3 rounded-lg mr-4">
                        <i class="fas fa-envelope text-blue-600"></i>
                    </div>
                    <div>
                      <h4 class="font-bold text-gray-900 mb-1">Email</h4>
                      <ul class="list-none">
                        <li>
                          <a href="mailto:contact@elpton.com" class="text-black hover:text-gray-700">contact@elpton.com</a>
                        </li>
                      </ul>
                    </div>

                </div>
                <div class="flex items-start">
                    <div class="flex-shrink-0 bg-green-100 p-3 rounded-lg mr-4">
                        <i class="fas fa-phone-alt text-green-600"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-1">Téléphone</h4>
                        <p class="text-gray-600">+225 0554 276 459</p>
                    </div>
                </div>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/profile.php?id=61578419139752"  target="_blank" rel="noopener"  class="bg-blue-600 text-white p-3 rounded-full hover:bg-blue-700 transition duration-300">
                        <i class="fab fa-facebook-f"></i>
                    </a>                                    
                    <a href="#" target="_blank" rel="noopener" class="bg-blue-800 text-white p-3 rounded-full hover:bg-blue-900 transition duration-300">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://wa.me/2250554276459" target="_blank" rel="noopener" class="bg-green-500 text-white p-3 rounded-full hover:bg-green-600 transition duration-300">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


<!-- FOOTER -->
<footer class="bg-slate-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex flex-col md:flex-row justify-between gap-10">
        <div>
          <div class="flex items-center gap-2">
            <span class="text-xl font-extrabold">El<span class="gradient-text">pton</span></span>
          </div>
          <p class="mt-4 text-slate-400 max-w-sm">Transformons vos idées en réalité digitale. Développement web sur mesure, SEO et automatisation.</p>
        </div>

        <nav class="grid grid-cols-2 md:grid-cols-3 gap-8" aria-label="Liens de pied de page">
          <div>
            <h4 class="text-lg font-semibold mb-4">Contact</h4>
            <ul class="space-y-2">
              <li><a href="mailto:contact@elpton.com" class="text-slate-300 hover:text-white">contact@elpton.com</a></li>
            </ul>
          </div>
          <div>
            <h4 class="text-lg font-semibold mb-4">Services</h4>
            <ul class="space-y-2">
              <li><a href="services.html" class="text-gray-400 hover:text-white transition">Création de site</a></li>
              <li><a href="services.html" class="text-gray-400 hover:text-white transition">Référencement (SEO)</a></li>
              <li><a href="services.html" class="text-gray-400 hover:text-white transition">Maintenance</a></li>
              <li><a href="services.html" class="text-gray-400 hover:text-white transition">Automatisation & intégrations</a></li><li><a href="services.html" class="text-gray-400 hover:text-white transition">Marketing digital</a></li><li><a href="services.html" class="text-gray-400 hover:text-white transition">HEBERGEMENT</a></li>
              <li><a href="services.html" class="text-gray-400 hover:text-white transition">CV EN LIGNE</a></li>
            </ul>
          </div>
          <div>
            <h4 class="text-lg font-semibold mb-4">Légal</h4>
            <ul class="space-y-2">
              <li><a class="text-slate-300 hover:text-white" href="mentions-legales.html">Mentions légales</a></li>
              <li><a class="text-slate-300 hover:text-white" href="politique-confidentialite.html">Politique de confidentialité</a></li>
              <li><a class="text-slate-300 hover:text-white" href="conditions-generales.html">Conditions générales</a></li>
            </ul>
          </div>
        </nav>
      </div>

      <div class="border-t border-white/10 mt-10 pt-6 flex flex-col md:flex-row items-center justify-between gap-4">
        <p class="text-slate-400">© 2025 Elpton. Tous droits réservés.</p>
        <div class="flex items-center gap-5" aria-label="Réseaux sociaux">
          <a href="https://www.facebook.com/profile.php?id=61578419139752" target="_blank" rel="noopener" class="text-slate-300 hover:text-white" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
         
          <a href="#" target="_blank" rel="noopener" class="text-slate-300 hover:text-white" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          <a href="https://wa.me/2250554276459" target="_blank" rel="noopener" class="text-slate-300 hover:text-white" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>
  </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
     
</body>
</html>