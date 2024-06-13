<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <aside class="sidebar" data-sidebar>
    
        <div class="sidebar-info">
  
          <figure class="avatar-box">
            <img src="/image/my-avatar.png" alt="Richard hanrick" width="80">
          </figure>

          {{-- <figure class="avatar-box">
            <img src="/image/WhatsApp Image 2024-06-11 at 22.17.11.jpeg" alt="Richard hanrick" width="80">
          </figure>   <figure class="avatar-box"> --}}
 
  
          <div class="info-content">
            <h1 class="name" title="Richard hanrick">Azmi</h1>
  
            <p class="title">Web developer | Backend Developer</p>
          </div>
  
          <button class="info_more-btn" data-sidebar-btn>
            <span>Show Contacts</span>
  
            <ion-icon name="chevron-down"></ion-icon>
          </button>
  
        </div>
  
        <div class="sidebar-info_more">
  
          <div class="separator"></div>
  
          <ul class="contacts-list">
  
            <li class="contact-item">
  
              <div class="icon-box">
                <ion-icon name="mail-outline"></ion-icon>
              </div>
  
              <div class="contact-info">
                <p class="contact-title">Email</p>
  
                <a href="mailto:azmi89017@gmail.com" class="contact-link">azmi89017@gmail.com</a>
              </div>
  
            </li>
  
            <li class="contact-item">
  
              <div class="icon-box">
                <ion-icon name="phone-portrait-outline"></ion-icon>
              </div>
  
              <div class="contact-info">
                <p class="contact-title">Phone</p>
  
                <a href="tel:+62881024690339" class="contact-link">(+62) 881-024-690-339</a>
              </div>
  
            </li>
  
            <li class="contact-item">
  
              <div class="icon-box">
                <ion-icon name="logo-github"></ion-icon>
              </div>
  
              <div class="contact-info">
                <p class="contact-title">Github</p>
  
                <a href="https://github.com/MuhamadAzmiN" class="contact-link">MuhamadAzmiN</a>
              </div>
  
            </li>
  
            <li class="contact-item">
  
              <div class="icon-box">
                <ion-icon name="location-outline"></ion-icon>
              </div>
  
              <div class="contact-info">
                <p class="contact-title">Location</p>
  
                <address>Bogor, Jawa Barat</address>
              </div>
  
            </li>
  
          </ul>
  
          <div class="separator"></div>
  
          <ul class="social-list">
  
            <li class="social-item">
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>
  
            <li class="social-item">
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>
  
            <li class="social-item">
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
  
          </ul>
  
        </div>

      </aside>
      <script src="./assets/js/script.js"></script>

      <!--
        - ionicon link
      -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>