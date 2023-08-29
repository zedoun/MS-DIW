<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>
  <link rel="stylesheet" href="./style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <div class="parallax">

    <?php
    require_once("header.php");
    ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <video src="VIDEOS/video1.mp4" class="mt-2 object-fit-cover img" id="titre" width="400" height="100"
            autoplay></video>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row text-center  ">
        <div class="col-lg-4 col-sm-12 my-3 ">
          <a href="catéories.html">
            <img src="image-de-district/category/asian_food_cat.jpg" id="cat1" alt="catégory" class="img-fluid survol">
          </a>
        </div>

        <div class="col-lg-4 col-sm-12 my-3 ">
          <a href="catéories.html">
            <img src="image-de-district/category/burger_cat.jpg" id="cat2" alt="catégory" class="img-fluid survol">
          </a>
        </div>

        <div class="col-lg-4 col-sm-12 my-3 ">
          <a href="catéories.html">
            <img src="image-de-district/category/pizza_cat.jpg" id="cat3" alt="catégory" class="img-fluid survol">
          </a>
        </div>

        <div class="col-lg-4 col-sm-12 my-3 ">
          <a href="catéories.html">
            <img src="image-de-district/category/pasta_cat.jpg" id="cat4" alt="catégory" class="img-fluid survol">
          </a>
        </div>

        <div class="col-lg-4 col-sm-12 my-3 ">
          <a href="catéories.html">
            <img src="image-de-district/category/sandwich_cat.jpg" id="cat5" alt="catégory" class="img-fluid survol">
          </a>
        </div>

        <div class="col-lg-4 col-sm-12 my-3 ">
          <a href="catéories.html">
            <img src="image-de-district/category/salade_cat.jpg" id="cat6" alt="catégory" class="img-fluid survol">
          </a>
        </div>

        <div class="col-lg-4 col-sm-12 my-3">
          <a href="plats.html">
            <img src="image-de-district/food/tagliatelles-saumon.webp" id="plat1" alt="plat1" class="img-fluid survol">
          </a>
        </div>

        <div class="col-lg-4 col-sm-12 my-3 ">
          <a href="plats.html">
            <img src="image-de-district/food/salad1.png" id="plat2" alt="plat2" class="img-fluid survol">
          </a>
        </div>

        <div class="col-lg-4 col-sm-12 my-3">
          <a href="plats.html">
            <img src="image-de-district/food/Food-Name-6340.jpg" id="plat3" alt="plat3" class="img-fluid survol">
          </a>
        </div>
      </div>
    </div>

    <?php
    require_once("footer.php");
    ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>