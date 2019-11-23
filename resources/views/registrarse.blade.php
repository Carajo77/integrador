<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/style.css">
  	  <link rel="stylesheet" href="css/registrarse.css">
  </head>
  <body>
    <header>
      <h1>CABAÑAS OFICIAL</h1>
    </header>

    <div class="container">

   	 <h4>Completa Tus Datos</h4>
     <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre</label>
      <input type="Nombre" class="form-control"placeholder="Nombre">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Apellido</label>
      <input type="apellido" class="form-control" placeholder="Apellido">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control"  placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control"  placeholder="Password">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Provincia</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Localidad</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
  </div>
  <div class="form">
    <button type="submit" class="btn btn-primary enviar">Enviar</button>
  </div>

  <div class="reglas">

    <p>Al registrarme, declaro que soy mayor de edad y acepto los <a target="_blank" href="index.php" title="Leer términos y condiciones">Términos y condiciones</a> y las <a target="_blank" href="index.php" title="Leer políticas de privacidad">Políticas de privacidad</a> de Cabañas. </p>
  </div>
</form>

    </div>

  </body>
</html>
