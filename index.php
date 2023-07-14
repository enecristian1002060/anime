<?php
session_start();
  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="color-scheme" content="light dark">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="style.css" />
  <title>Anime</title>
  <style>
  </style>
</head>
<body>
  <nav class="navbar">
    <div class="logo">
      My Anime
    </div>
    <div style="display: flex;justify-content:space-evenly;margin-right: 5px;">
      <div class="navbar-button">
        <a href="despre-noi.html" style="font-size: 1vh;">
          <i class="fa fa-users" aria-hidden="true" style="color: #24243e; height: 100%;font-size: 2vh;">
            <span style="color: #24243e;height: 100%;font-size: 2vh;">Despre noi</span>
          </i>
        </a>
      </div>
      <div class="navbar-button">
        <a href="index.html" style="font-size: 1vh;">
          <i class="fa fa-home" aria-hidden="true" style="color: #24243e; height: 100%;font-size:2vh;">
            <span style="color: #24243e;height: 100%; font-size: 2vh;">Home</span>
          </i>
        </a>
      </div>
      <div class="navbar-button">
        <a href="index.html" style="font-size: 1vh;" id="log-in">
          <span style="color: #24243e;height: 100%; font-size: 2vh;">Log in</span>
        </a>
      </div>
      <div class="navbar-button" style="border: solid white 1px;">
        <a href="index.html" style="font-size: 1vh" id="sign-up">
          <span style="color: #24243e;height: 100%; font-size: 2vh;">Sign up</span>
        </a>
      </div>
    </div>
  </nav>
  <main class="main">
    <div>
      <button class="Back-to-top-buttton">
        <img src="poze/up-black-arrow-md.png">
      </button>
      <script src="scroll-up-button.js"></script>
    </div>
    <div class="poza-header">
      <img class="ichigo-background" src="poze/547297.jpg">
    </div>
    <div style="display: flex; position: relative;">
      <div class="left-side">
        <a href="TBATE.html">
          <img src="poze/meniu-sidebar-photo.jpg">
        </a>
      </div>
      <div class="container">
        <div class="meniu-navbar">
          <div class="dropdown">
            <a href="index.html"><button class="dropdown-button" id="left">Home</button></a>
          </div>
          <div class="dropdown">
            <button class="dropdown-button">Anime</button>
            <div class="dropdown-content">
              <a href="top-anime.html">Top Anime </a>
              <a href="Toate review-urile.html">Reviews anime</a>
              <a href="#">Recomandari</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropdown-button">Manga</button>
            <div class="dropdown-content">
              <a href="top-manga.html">Top Manga</a>
              <a href="Toate review-uri manga.html">Reviews manga</a>
              <a href="#">Recomandari</a>
            </div>
          </div>
          <div class="dropdown">
            <a href="despre-noi.html"><button class="dropdown-button">Despre-noi</button></a>
          </div>
          <div class="search-container">
            <input type="text" id="search-input" class="search-input" placeholder="Caută anime" autocomplete="off">
            <div id="suggestions-container" class="suggestions-container"></div>
            <p id="error-message" class="error-message" style="display: none;">Numele introdus este greșit. Vă rugăm să încercați din nou.</p>
          </div>
          <script src="search-bar.js"></script>
        </div>
        <div style="display: flex; justify-content: center;">
          <nav class="navbar-1">
            <p>Bine ai venit pe My Anime!</p>
          </nav>
        </div>
          <div class="side-container">
          <div id="Top anime" class="side">
            Recomandari
          </div>
          <div id="recomandari-hover">
            <div class="container-animeuri-top-1">
              <a href="Bleach.html" style="text-decoration: none;cursor: pointer;padding-left: 1%;width: 2.5vh;min-width: 1.2vw;">
                <div class="loc-anime">1</div>
                <div class="imagine-anime-container">
                  <a href="Bleach.html" style="cursor: pointer;"><img class="imagine-anime" src="poze/Bleach-icon.webp"></a>
                </div>
                <div class="nume-anime">
                  <a href="Bleach.html" style="text-decoration: none; cursor: pointer;">
                    <p>Bleach</p>
                    <span class="sub-text">Tv, 366 eps, score 7.91</span>
                  </a>
                </div>
              </a>
            </div>
          </div>
          <div id="recomandari-hover">
            <div class="container-animeuri-top-1">
              <a href="Code Geass.html" style="text-decoration: none;cursor: pointer;padding-left: 1%;width: 2.5vh;min-width: 1.2vw;">
                <div class="loc-anime">2</div>
                <div class="imagine-anime-container">
                  <a href="Code Geass.html" style="cursor: pointer;"><img class="imagine-anime" src="poze/Code Geass.webp"></a>
                </div>
                <div class="nume-anime">
                  <a href="Code Geass.html" style="text-decoration: none; cursor: pointer;">
                    <p>Code Geass: Lelouch of the Rebellion</p>
                    <span class="sub-text">Tv, 50 eps, 2 seasons, score 8.7</span>
                  </a>
                </div>
              </a>
            </div>
          </div>
          <div id="recomandari-hover">
            <div class="container-animeuri-top-1">
              <a href="Yuu Yuu hakusho.html" style="text-decoration: none;cursor: pointer;padding-left: 1%;width: 2.5vh;min-width: 1.2vw;">
                <div class="loc-anime">3</div>
                <div class="imagine-anime-container">
                  <a href="Yuu Yuu hakusho.html" style="cursor: pointer;"><img class="imagine-anime" src="poze/Yuu☆Yuu☆Hakusho.webp"></a>
                </div>
                <div class="nume-anime">
                  <a href="Yuu Yuu hakusho.html" style="text-decoration: none; cursor: pointer;">
                    <p>Yuu Yuu hakusho</p>
                    <span class="sub-text">Tv, 112 eps, score 8.46</span>
                  </a>
                </div>
              </a>
            </div>
          </div>
          <div id="recomandari-hover">
            <div class="container-animeuri-top-1">
              <a href="Classroom of the Elite.html" style="text-decoration: none;cursor: pointer;padding-left: 1%;width: 2.5vh;min-width: 1.2vw;">
                <div class="loc-anime">4</div>
                <div class="imagine-anime-container">
                  <a href="Classroom of the Elite.html" style="cursor: pointer;"><img class="imagine-anime" src="poze/Classroom of the Elite.webp"></a>
                </div>
                <div class="nume-anime">
                  <a href="Classroom of the Elite.html" style="text-decoration: none; cursor: pointer;">
                    <p>Classroom of the Elite</p>
                    <span class="sub-text">Tv, 25 eps, 2 seasons, score 7.86</span>
                  </a>
                </div>
              </a>
            </div>
          </div>
          <div id="recomandari-hover-1">
            <div class="container-animeuri-top-1">
              <a href="Chainsaw Man.html" style="text-decoration: none;cursor: pointer;padding-left: 1%;width: 2.5vh;min-width: 1.2vw;">
                <div class="loc-anime">5</div>
                <div class="imagine-anime-container">
                  <a href="Chainsaw Man.html" style="cursor: pointer;"><img class="imagine-anime" src="poze/Chainwsaw Man.jpg"></a>
                </div>
                <div class="nume-anime">
                  <a href="Chainsaw Man.html" style="text-decoration: none; cursor: pointer;">
                    <p>Chainsaw Man</p>
                    <span class="sub-text">Tv, 12 eps, score 8.6</span>
                  </a>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="right-side">
        <a href="Solo leveling.html">
          <img src="poze/meniu-sidebar-photo-right.jpg">
        </a>
      </div>
    </div>
    <script>
      window.addEventListener('scroll', function() {
        var container = document.querySelector('.container');
        var side = document.querySelector('.left-side');
        var rect = container.getBoundingClientRect();

        if (rect.top <= 0) {
          side.classList.add('fixed');
          side.style.top = 'px';
        } else {
          side.classList.remove('fixed');
          side.style.top = '0';
        }
      });
    </script>  
  
    <script>
      window.addEventListener('scroll', function() {
        var container = document.querySelector('.container');
        var side = document.querySelector('.right-side');
        var rect = container.getBoundingClientRect();

        if (rect.top <= 0) {
          side.classList.add('fixed');
          side.style.top = 'px';
        } else {
          side.classList.remove('fixed');
          side.style.top = '0';
        }
      });
    </script>  
  </main>
</body>
</html>