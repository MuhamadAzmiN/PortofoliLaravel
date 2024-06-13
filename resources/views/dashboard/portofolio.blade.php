@extends('layout.main')

@section('container')

    <header>
      <h2 class="h2 article-title">Portfolio</h2>
    </header>

    <section class="projects">

      <ul class="filter-list">

        <li class="filter-item">
          <button class="active" data-filter-btn>All</button>
        </li>


        

      </ul>

      <div class="filter-select-box">

        <button class="filter-select" data-select>

          <div class="select-value" data-selecct-value>Select category</div>

          <div class="select-icon">
            <ion-icon name="chevron-down"></ion-icon>
          </div>

        </button>

        <ul class="select-list">

          <li class="select-item">
            <button data-select-item>Web</button>
          </li>

          <li class="select-item">
            <button data-select-item>Web design</button>
          </li>

          <li class="select-item">
            <button data-select-item>Applications</button>
          </li>

          <li class="select-item">
            <button data-select-item>Web development</button>
          </li>

        </ul>

      </div>

      <ul class="project-list">

        <li class="project-item  active" data-filter-item data-category="web development">
          <a href="https://hymenial-litres.000webhostapp.com/">

            <figure class="project-img">
              <div class="project-item-icon-box">
                <ion-icon name="eye-outline"></ion-icon>
              </div>

              <img src="https://media.licdn.com/dms/image/D5622AQH1xgVoMiprbA/feedshare-shrink_800/0/1715258958444?e=1721260800&v=beta&t=TdFvF8V6zr0GcG67Yv7F2YCo6Qou7z4gIE3ZXqxm1I8" alt="finance" loading="lazy">
            </figure>

            <h3 class="project-title">Web Shop</h3>

            <p class="project-category">Web development</p>

          </a>
        </li>

        <li class="project-item  active" data-filter-item data-category="web development">
          <a href="https://media.licdn.com/dms/image/D5622AQF4x3fVxqqf3g/feedshare-shrink_800/0/1711183952778?e=1721260800&v=beta&t=425LM1FPUJM91IhsnpF2Cy-KQOTa1o1qAWMHjPUYUiA">

            <figure class="project-img">
              <div class="project-item-icon-box">
                <ion-icon name="eye-outline"></ion-icon>
              </div>

              <img src="https://media.licdn.com/dms/image/D5622AQF4x3fVxqqf3g/feedshare-shrink_800/0/1711183952778?e=1721260800&v=beta&t=425LM1FPUJM91IhsnpF2Cy-KQOTa1o1qAWMHjPUYUiA" alt="orizon" loading="lazy">
            </figure>

            <h3 class="project-title">Web Mengukur berat badan ideal</h3>

            <p class="project-category">Web development</p>

          </a>
        </li>

        <li class="project-item  active" data-filter-item data-category="web design">
          <a href="">

            <figure class="project-img">
              <div class="project-item-icon-box">
                <ion-icon name="eye-outline"></ion-icon>
              </div>

              <img src="https://media.licdn.com/dms/image/D5622AQHzmfUIJY53Rw/feedshare-shrink_800/0/1711183743919?e=1721260800&v=beta&t=3b_UrUusPt5lEHiA4M8EJJHs7pJ38mjPT2fmJw1Kv88" alt="fundo" loading="lazy">
            </figure>

            
            <p class="project-category">Web development</p>
            <h3 class="project-tiztle">Web Bahan Bakar</h3>
          </a>
        </li>

        <li class="project-item  active" data-filter-item data-category="applications">
          <a href="#">

            <figure class="project-img">
              <div class="project-item-icon-box">
                <ion-icon name="eye-outline"></ion-icon>
              </div>

              <img src="/image/Cuplikan layar 2024-06-11 214314.png" alt="brawlhalla" loading="lazy">

            </figure>

            <h3 class="project-title">Membuat Web Data Siswa Sistem Crud</h3>

            <p class="project-category">Web development</p>

          </a>
        </li>

        <li class="project-item  active" data-filter-item data-category="web design">
          <a href="#">

            <figure class="project-img">
              <div class="project-item-icon-box">
                <ion-icon name="eye-outline"></ion-icon>
              </div>

              <img src="/image/Cuplikan layar 2024-06-11 214404.png" alt="metaspark" loading="lazy">
            </figure>

            <h3 class="project-title">Web Kasir</h3>

            <p class="project-category">Web development</p>

          </a>
        </li>


    </section>


@endsection