<!DOCTYPE html>
<html>

<head>
    @include('home.css')
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
    <!-- slider section -->
    @include('home.slider')
    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->
  @include('home.product')
  <!-- end shop section -->
  <!-- contact section -->
  @include('home.contact')
  <!-- end contact section -->
<<<<<<< HEAD
=======
  <div class="info_link-box">
    <!-- Contact Info Will Be Dynamically Updated -->
</div>

<form id="contactForm">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <textarea name="message" placeholder="Message" required></textarea>
    <button type="submit">Send</button>
</form>

<script src="{{ asset('js/custom.js') }}"></script>

<div>
  <br> <br>
</div>
>>>>>>> 2def6010
  <!-- info section -->
  @include('home.footer')
</body>

</html>