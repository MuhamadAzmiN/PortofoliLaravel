@extends('layout.main')

@section('container')
<header>
    <h2 class="h2 article-title">Blog</h2>
  </header>

  <section class="blog-posts">

    <ul class="blog-posts-list">

      <li class="blog-post-item">
        <a href="#">

          <figure class="blog-banner-box">
            <img src="/image/Cuplikan layar 2024-06-12 144353.png" alt="Design conferences in 2022" loading="lazy">
          </figure>

          <div class="blog-content">

            <div class="blog-meta">
              <p class="blog-category">Code Politan</p>

              <span class="dot"></span>

              <time datetime="2022-02-23">21 MEI 2024</time>
            </div>

            <h3 class="h3 blog-item-title">HTML | CSS</h3>

            <p class="blog-text">
            Saya Belajar HTML - CSS DiCodePolitan
            </p>

          </div>

        </a>
      </li>

      <li class="blog-post-item">
        <a href="#">

          <figure class="blog-banner-box">
            <img src="/image/Cuplikan layar 2024-06-12 144803.png" alt="Best fonts every designer" loading="lazy">
          </figure>

          <div class="blog-content">

            <div class="blog-meta">
              <p class="blog-category">Code Politan </p>

              <span class="dot"></span>

              <time datetime="2022-02-23">21 Mei, 2024</time>
            </div>

            <h3 class="h3 blog-item-title">Java Script Dasar</h3>

            <p class="blog-text">
              Saya Belajar Java script Dasar
            </p>

          </div>

        </a>
      </li>

      <li class="blog-post-item">
        <a href="#">

          <figure class="blog-banner-box">
            <img src="/image/Cuplikan layar 2024-06-12 144907.png" alt="Design digest #80" loading="lazy">
          </figure>

          <div class="blog-content">

            <div class="blog-meta">
              <p class="blog-category">Belajar Front End Dasar</p>

              <span class="dot"></span>

              <time datetime="2022-02-23">Fab 23, 2022</time>
            </div>

            <h3 class="h3 blog-item-title"></h3>

            <p class="blog-text">
              Saya Belajar Front End Dasar Dicoding
              
            </p>

          </div>

        </a>
      </li>

      <li class="blog-post-item">
        <a href="#">

          <figure class="blog-banner-box">
            <img src="/image/Cuplikan layar 2024-06-12 150232.png" alt="UI interactions of the week" loading="lazy">
          </figure>

          <div class="blog-content">

            <div class="blog-meta">
              <p class="blog-category">PHP</p>

              <span class="dot"></span>

              <time datetime="2022-02-23">Fab 23, 2022</time>
            </div>

            <h3 class="h3 blog-item-title">Learning PHP</h3>

            <p class="blog-text">
                Saya Belajar PHP Dasar 
            </p>

          </div>

        </a>
      </li>

    </ul>

  </section>
@endsection