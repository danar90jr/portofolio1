<?php
function get_CURL($url)
{
  $curl = curl_init();
  curl_setopt($curl,CURLOPT_URL, $url);
  curl_setopt($curl,CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true);

}
$result= get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCoK26y4iwTUCClqTT24SD6w&key=AIzaSyB2VZ4sJPgOhnwMhU4V9WxA0-QL8ijwtkk');

$youtubeProfilePict = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName =  $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];

//latesVideo
$urlLatesVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyB2VZ4sJPgOhnwMhU4V9WxA0-QL8ijwtkk&channelId=UCoK26y4iwTUCClqTT24SD6w&maxResults=1&order=date&part=snippet';
$result = get_CURL($urlLatesVideo);
$latesVideoId = $result['items'][0]['id']['videoId'];

 ?>
<!doctype html>
<html lang="en" id="home">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="asset/img/profile1.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="asset/css/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>My Portofolio</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <!-- Brand and toogle Just an image -->
      <div class="navbar-header navbar-light bg-dark">
        <a class="navbar-brand bg-dark " href="#home">
          <img src="" class="d-inline-block align-top" alt="">
          Personal Profile
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
            <span class="navbar-toggler-icon"></span>
          </button>
      </div>

      <div class="navbar  navbar-collapse" id="navbarNavAltMarkup">
        <ul class="nav justify-content-end">
          <li class="nav-item ">
            <a class="nav-link" href="#about">About <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portofolio">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Contact">Kontak</a>
          </li>
      </div>
  </nav>


  <!-- jumbotron -->
  <div class="jumbotron text-center ">
    <img src="asset/img/profile1.png" class="rounded-circle">
    <h1>Danaria Khoirul Anam</h1>
    <p>Developer | Content Creator | Freelancer</p>
  </div>
  <!-- About -->
  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 ">
          <h2 class="text-center">About</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-sm-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Portofolio -->
  <section class="portofolio" id="portofolio">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Galeri</h2>
          <hr>
        </div>
      </div>
      <div class="row ">
        <div class="col-sm-4 ">
          <img class="img-thumbnail" src="asset/img/da.jpg" alt="">
        </div>
        <div class="col-sm-4">
          <img class="img-thumbnail" src="asset/img/dd.jpg" alt="">
        </div>
        <div class="col-sm-4">
          <img class="img-thumbnail" src="asset/img/aaa.jpg" alt="">
        </div>

      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="Contact" id="Contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Contact</h2>
          <hr>
        </div>
        <div class="col-sm-12 text-center">
          <a target="_blank" href="https://www.facebook.com/danar.jr">Facebook</a><br><br>
          <a target="_blank" href="https://www.instagram.com/90.danar_jr">Instagram</a><br><br>
          <a target="_blank" href="https://www.youtube.com/channel/UCoK26y4iwTUCClqTT24SD6">YouTube</a><br><br>

        </div>
      </div>
    </div>
  </section>

  <!-- SOSMED -->
  <section class="social" id="social">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Social Media</h2>
          <hr>
          <br><br>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-4">
              <img class="rounded-cyrcle" src="<?= $youtubeProfilePict;  ?>" alt="">
            </div>
            <div class="col-md-8">
              <h5><?= $channelName  ?></h5>
              <p><?= $subscriber ?> Subscribers</p>
              <div class="g-ytsubscribe" data-channelid="UCoK26y4iwTUCClqTT24SD6w" data-layout="default" data-theme="dark" data-count="hidden"></div>
            </div>
          </div>
          <div class="row">
            <div class="col mt-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latesVideoId ?>" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-5">
          <div class="row">
            <div class="col-md-4">
              <img class="rounded-cyrcle" src="asset/img/profile1.png" alt="">
            </div>
            <div class="col-md-8">
              <h5>Pokokmen Motovlog IG</h5>
              <p>10000 Followers</p>
            </div>
          </div>
          <div class="row">
            <div class="col mt-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <p> &copy; Copyright 2019 | Alright Developed with <i class="material-icons">favorite</i> by <a target="_blank" href="https:instagram.com/90.danar_jr">90.danar_jr</a>
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://apis.google.com/js/platform.js"></script>
</body>

</html>
