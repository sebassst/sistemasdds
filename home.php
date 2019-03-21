<?php
  require_once(RUTA_APP."/view/inc/header.php");


?>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet"> 
</head>
<body>
    <div class="container-fluid img">
        <div class="row d-flex justify-content-center   h-100  align-items-center">
            <div class="col-12 col-sm-9 col-lg-5 shadow-sm p-3 mb-5 bg-blue-oscuro rounded animated slideInDown p-5">
                  
               <h1 class="display-6 text-center text-white">INICIAR SESION</h1>
               <!-- <div class="alert alert-danger mt-5">El Aprendiz no existe</div> -->
                <form  class="form-group " id="form-sesion" action="<?=RUTA_URL?>/Paginas/login" method="POST">
                        <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                        <div class="input-group mb-2 mt-4 py-3">
                          <div class="input-group-prepend">
                            <div class="input-group-text bg-blue-oscuro text-white ">
                                    <i class="fas fa-user"></i>
                                    </div>
                          </div>
                          <input type="text" class="form-control rounded-0 py-3" name="num" id="inlineFormInputGroupUsername2" placeholder="N documento">
                        </div>
            
                    
                    <label class="sr-only" for="inlineFormInputGroupUsername2">Password</label>
                    <div class="input-group mb-0 mt-2 py-3">
                      <div class="input-group-prepend">
                        <div class="input-group-text bg-blue-oscuro text-white"><i class="fas fa-unlock-alt"></i></div>
                      </div>
                      <input type="password" name="pass" class="form-control rounded-0 py-3" id="inlineFormInputGroupUsername2" placeholder="Password">
                    </div>
                    <div class="form-group form-check float-left mt-3 ml-4">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label text-white" for="exampleCheck1">no olvidar contraseña</label>
                          </div>
                          <span id="alerta"></span>
                    <button class="btn btn-success  mt-1 float-right rounded-0">Inicio de sesion</button>

                   
                </form>
              

            </div>
        </div>
    </div>
<?php

require_once(RUTA_APP."/view/inc/footer.php");

?>
</body>
</html>