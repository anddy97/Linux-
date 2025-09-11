<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gasela - Home </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
    integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="styleIndex.css" />
</head>

<body>
  <div class="container">

    <!--navbar-->
<?php include "layout/nav.php"; ?>

    <!--carrousel-->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="assets/Banner1.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="assets/Banner1.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="assets/Banner1.jpg" class="d-block w-100" alt="..." />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!--ProductosMasVendidoss-->
    <br />
    <br />
    <br />
    <h1>Mas vendidos</h1>
    <br />
    <br />
    <br />

    <div class="row">

      <div class="col-md-4 col-6">
        <div class="product-container">
          <img class="ImgCard" src="assets/remeradc.jpg" alt="" />
          <div class="contDesc">
            <h3>Producto</h3>
            <p>$2000</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-6">
        <div class="product-container">
          <img class="ImgCard" src="assets/remeradc.jpg" alt="" />
          <div class="contDesc">
            <h3>Producto</h3>
            <p>$2000</p>
          </div>
        </div>
      </div>

    </div>
    <!--boton de whatsapp-->
    <a class="whatsapp" href="#"><i class="fa-brands fa-whatsapp"></i></a>
    <!--footer-->
   <?php include "layout/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>

  </div>
</body>

</html>