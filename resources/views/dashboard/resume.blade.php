@extends('layout.main')

@section('container')

    <header>
      <h2 class="h2 article-title">Resume</h2>
    </header>

    <section class="timeline">

      <div class="title-wrapper">
        <div class="icon-box">
          <ion-icon name="book-outline"></ion-icon>
        </div>

        <h3 class="h3">Education</h3>
      </div>

      <ol class="timeline-list">

        <li class="timeline-item">

          <h4 class="h4 timeline-item-title">SMK WIKRAMA BOGOR</h4>

          <span>2023 — 2025</span>

          <p class="timeline-text">
            PPLG - Pengembangan Perangkat Lunak dan Gim
          </p>

        </li>

        <li class="timeline-item">

          <h4 class="h4 timeline-item-title">SMPN 2 NEGERI</h4>

          <span>2020 — 2023</span>

          <p class="timeline-text">
            {{-- Sistem Informatika, Jaringan, dan Aplikasi. --}}
          </p>

        </li>
        <li class="timeline-item">

          <h4 class="h4 timeline-item-title">SDN BANZARWARU 02</h4>

          <span> 2014 — 2020</span>

          <p class="timeline-text">
            {{-- Sistem Informatika, Jaringan, dan Aplikasi. --}}
          </p>

        </li>

      </ol>

    </section>

    {{-- <section class="timeline">

      <div class="title-wrapper">
        <div class="icon-box">
          <ion-icon name="briefcase-outline"></ion-icon>
        </div>

        <h3 class="h3">Experience</h3>
      </div>

      <ol class="timeline-list">

        <li class="timeline-item">

          <h4 class="h4 timeline-item-title">Full-stack Developer</h4>

          <span>2022 — 2023</span>

          <p class="timeline-text">
            PT Sarana Mandiri Teknologi Indonesia.
          </p>

        </li>

        <li class="timeline-item">

          <h4 class="h4 timeline-item-title">Network Engineer</h4>

          <span>2021 — 2022</span>

          <p class="timeline-text">
            PT Sarana Mandiri Teknologi Indonesia.
          </p>

        </li>

        <li class="timeline-item">

          <h4 class="h4 timeline-item-title">Network Operation Center</h4>

          <span>2020 — 2021</span>

          <p class="timeline-text">
            PT Jaya Komunikasi Indonesia.
          </p>

        </li>

      </ol>

    </section> --}}

    <section class="skill">

      <h3 class="h3 skills-title">My skills</h3>

      <ul class="skills-list content-card">

        <li class="skills-item">

          <div class="title-wrapper">
            <h5 class="h5">PHP </h5>
            <data value="80">80%</data>
          </div>

          <div class="skill-progress-bg">
            <div class="skill-progress-fill" style="width: 80%;"></div>
          </div>

        </li>

        <li class="skills-item">

          <div class="title-wrapper">
            <h5 class="h5">Laravel</h5>
            <data value="50">50%</data>
          </div>

          <div class="skill-progress-bg">
            <div class="skill-progress-fill" style="width: 50%;"></div>
          </div>

        </li>

        <li class="skills-item">

          <div class="title-wrapper">
            <h5 class="h5">HTML</h5>
            <data value="90">90%</data>
          </div>

          <div class="skill-progress-bg">
            <div class="skill-progress-fill" style="width: 90%;"></div>
          </div>

        </li>

        <li class="skills-item">

          <div class="title-wrapper">
            <h5 class="h5">CSS</h5>
            <data value="80">80%</data>
          </div>

          <div class="skill-progress-bg">
            <div class="skill-progress-fill" style="width: 80%;"></div>
          </div>

        </li>

      </ul>

    </section>



@endsection