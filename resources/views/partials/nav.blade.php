<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    
    <main>

        <!--
          - #SIDEBAR
        -->
    
        @include('partials.sidebar')
    
    
    
    
    
        <!--
          - #main-content
        -->
    
        <div class="main-content">
    
          <!--
            - #NAVBAR
          -->
    
          <nav class="navbar">
    
            <ul class="navbar-list">
    
              <li class="navbar-item">
                <a href="/about"><button class="navbar-link  {{ $title == 'about' ?  'active' : ""}}" data-nav-link>About</button></a>
              </li>
    
              <li class="navbar-item">
                <a href="/resume"><button class="navbar-link {{ $title == 'Resume' ?  'active' : ""}}" data-nav-link>Resume</button></a>
              </li>
    
              <li class="navbar-item">
                <a href="/portofolio"><button class="navbar-link {{ $title == 'Portofolio' ?  'active' : ""}}" data-nav-link>Portofolio</button></a>
              </li>
    
              <li class="navbar-item">
                <a href="/blog"><button class="navbar-link {{ $title == 'blog' ? 'active' : "" }}" data-nav-link>Blog</button></a>
              </li>
    
              {{-- <li class="navbar-item">
                <button class="navbar-link" data-nav-link>Contact</button>
              </li> --}}
              
              <li class="navbar-item">
                <a href="/rating"><button class="navbar-link {{ $title == 'rating' ? 'active' : "" }}" data-nav-link>Rating Diri Saya</button></a>
              </li>

              <li class="navbar-item">
                <a href="/post"><button class="navbar-link {{ $title == 'post' ? 'active' : "" }}" data-nav-link>Halaman Post</button></a>
              </li>
    
            </ul>
    
          </nav>
    
          @yield('container')
          
        </div>

    
      </main>
    
    
      <script src="./assets/js/script.js"></script>

      <!--
        - ionicon link
      -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>