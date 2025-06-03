<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register As Foster Home</title>
  @vite(['resources/css/register-as-foster-home.css'],)

</head>
<body>
  <button class="back-button" onclick="goBack()"> ← </button>

  <div class="container">
    <h2>Register As Foster Home</h2>
    <div class="border-gradient">
      <div class="form-box">
        <input type="text" placeholder="Name" />
        <input type="email" placeholder="Email" />
        <input type="password" placeholder="Password" />
        <input type="text" placeholder="Number Phone"/>
        <button onclick="goToNextPage()" class="slider-button"> next </button>

      </div>
    </div>
    <div class="cat-container">
      <img src="{{ asset('image/cat.png') }}" alt="Cats" class="cat-img" />
    </div>
  </div>

  <script>
    function goBack() {
    window.location.href = "dashboard";
    }
    function goToNextPage() {
    window.location.href = "foster-home-pilih-hewan.html";
    }
  </script>
</body>
</html>
