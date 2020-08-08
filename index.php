<!Doctype html>
<html lang="es">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--Css-->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Font-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

    
    <title>LandingPage Sigma</title>
  </head>
  <body>
    <div class="container landing">
      <div class="row lanCont_row1">
        <div class="lanCont_col_1 col-12 text-center pt-2">
          <img class="lanCont_col_1_logo mt-5" src="./img/sigma-logo.png" width="173" alt="LandingLogo">
        </div>
        <div class="lanCont_col_2 col-12 text-center pt-2">
          <h1 class="lanCont_col_2_title mt-4">Prueba de desarrollo Sigma</h1>
          <p class="lanCont_col_2_text mt-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam gravida dolor in nisl scelerisque dignissim. Fusce rhoncus pharetra odio a pretium. Donec nulla felis, consectetur sit amet ipsum in, pretium eleifend dolor.
          </p>
        </div>
        
      </div>

      <div class="row lanCon_row2 text-center mt-5 mb-5">
        <div class="col-lg-6 col-md-6 col-sm-12 lanControw2_col_1 text-right">
          <span class="align-middle"></span>
          <img class="lanControw2_col_1_img" src="./img/sigma-image.png" alt="Comunicación Imagen">
        </div>
        <div class="col-lg-6 col-md-6  col-sm-12 lanControw2_col_2">
          <form class="lanControw2_col_2_form text-left"  method="post" autocomplete="on" id="formColom"> 
            <div class="form-group">
              <label for="">Departamento*</label>
              <select name="state" id="state" class="form-control country " require>
              </select>
              <i class="fas fa-angle-right"></i>
            </div>
            <div class="form-group">
              <label for="">Ciudad*</label>
              <select name="city" id="city" class="form-control" require >
              </select>
              <i class="fas fa-angle-right"></i>
            </div>
            <div class="form-group">
              <label for="">Nombre*</label>
              <input min="5" max="50" name="name" type="text" class="form-control" require id="name" placeholder="Pepito de Jesús" >
            </div>
            <div class="form-group">
              <label for="">Correo*</label>
              <input min="10" max="30" name="email" type="email" class="form-control" require id="email" aria-describedby="email" placeholder="Pepitodejesus@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
            </div>
            <button type="submit" id="submit" class="btn btn_pink">Enviar</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal" tabindex="-1" role="dialog" id="Finish">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Tu información ha sido recibida satisfactoriamente</p>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="./js/data_states.js"></script>
    <script src="./js/post_data.js"> </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   
  </body>
</html>