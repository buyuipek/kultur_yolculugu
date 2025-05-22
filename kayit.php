<?php 
include("baglanti.php");
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kültür Yolculuğu</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="popup-overlay" id="popupOverlay" onclick="closeLogin()"></div>

 <div class="login-popup" id="loginPopup">
  <h2>Üye Girişi</h2>
  <input type="email" id="emailInput" placeholder="E-posta" />
  <input type="password" id="passwordInput" placeholder="Şifre" />
  <button onclick="login()">Giriş Yap</button>
  <p style="margin-top:10px;">Hesabınız yok mu? <a href="#" onclick="openRegister()">Kaydol</a></p>

</div>


  <div class="container">
    <div class="navbar">
      <div class="logo-container">
        <div class="menu-icon" onclick="toggleFavorite()">
          <div></div><div></div><div></div>
        </div>
        <div class="logo">
          <a href="#">KÜLTÜR YOLCULUĞU</a>
        </div>
      </div>
     <ul>
  <li>
    <img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" alt="home" />
    <a href="#" onclick="goBack()">Ana Sayfa</a>
  </li>

  <!-- Giriş yapmamış kullanıcıya gösterilecek -->
  <li id="loginLink">
    <img src="https://cdn-icons-png.flaticon.com/512/747/747376.png" alt="user" />
    <a onclick="openLogin()">Üye Girişi</a>
  </li>

  <!-- Giriş yapmış kullanıcıya gösterilecek -->
  <li id="userInfo" style="display: none; position: relative;">
    <img src="https://cdn-icons-png.flaticon.com/512/747/747376.png" alt="user" />
    <span id="userName" style="color:white; margin-left: 5px; cursor: pointer;" onclick="toggleLogoutMenu()"></span>

    <!-- Açılır çıkış menüsü -->
    <div id="logoutMenu" style="display:none; position: absolute; top: 30px; left: 0; background: white; padding: 8px 12px; border-radius: 6px; box-shadow: 0 0 8px rgba(0,0,0,0.3); z-index: 100;">
      <a href="#" onclick="logout()" style="text-decoration: none; color: #333;">Çıkış Yap</a>
    </div>
  </li>

 <li>
  <span style="font-size: 18px;">🎯</span>
  <a href="#" onclick="openSiteAmaciModal()">Site Amacı</a>
</li>

</ul>


    </div>

    <div id="backArrow" class="back-arrow" onclick="goBack()">←</div>

<div class="center-buttons vertical-buttons">
  <button class="film-btn" onclick="showFilmPage()">🎬 Film</button>
  <button class="kitap-btn" onclick="showKitapPage()">📚 Kitap</button>
  <button class="tiyatro-btn" onclick="showTiyatroPage()">🎭 Tiyatro</button>
</div>

    
   <div class="favorites-panel" id="favoritesPanel">
  <div class="favorites-label" onclick="handleFavoritesClick()">
    <img src="https://cdn-icons-png.flaticon.com/512/833/833472.png" alt="heart" />
    <span>Favoriler</span>
  </div>

  <div class="saved-note" onclick="handleSavedClick()">
    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828817.png" alt="save" style="width: 20px; height: 20px; margin-right: 6px; vertical-align: middle;" />
    <span>Kaydedilenler</span>
  </div>
</div>
</body>
</html>