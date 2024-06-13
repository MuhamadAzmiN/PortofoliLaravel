@extends('layout.main')

@section('container')
<header>
    <h2 class="h2 article-title">Contact</h2>
  </header>

 

  <section class="contact-form">

    <h3 class="h3 form-title">Contact Form</h3>

    <form action="/rating" method="POST" class="form" data-form enctype="multipart/form-data">
      @csrf
      <div class="input-wrapper">
        <input name="nama" type="text"  class="form-input" placeholder="Full name" required data-form-input>

      </div>
      <input style="margin-bottom:20px; background-color: #333; color: #fff; border-color: #555;" class="form-control" @error('image') is-invalid @enderror type="file" name="image" id="image" onchange="previewImage()">

      @error('image')
      <div class="invalid-feedback">
          {{ $message }}
          </div>

          @enderror
      <textarea name="body" class="form-input" placeholder="Your Message" required data-form-input></textarea>

      <button class="form-btn" type="submit">
        <ion-icon name="paper-plane"></ion-icon>
        <span>Send Message</span>
      </button>

    </form>

  </section>

  
@endsection