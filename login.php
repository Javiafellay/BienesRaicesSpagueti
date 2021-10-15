<?php
 require 'includes/config/database.php';
 $db = conectarDB();
//Autenticar el usuario

 $errores = [];

 if($_SERVER['REQUEST_METHOD'] === 'POST') {
    //  echo "<pre>";
    //  var_dump($_POST);
    //  echo "</pre>";

     $email = mysqli_real_escape_string($db, filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL));
     $password = mysqli_real_escape_string($db, $_POST['password']);

    if(!$email) {
        $errores[] = "El Email es obligatorio o no es válido";
    }
    if(!$password){
        $errores[] = "La contraseña es Obligatoria";
    }

    if(empty($errores)){
        //Revisar si un usuario existe
        $query = "SELECT * FROM usuarios WHERE email = '${email}' ";
        $resultado = mysqli_query($db, $query);

        if( $resultado->num_rows ) {
            //Revisar si el password es correcto
            $usuario = mysqli_fetch_assoc($resultado);
            // var_dump($resultado);
            $auth = password_verify($password, $usuario['password']);

            if($auth) {
               //El usuario esta autenticado
               session_start();

               //Llenar el arreglo de la sesión
               $_SESSION['usuario'] = $usuario['email'];
               $_SESSION['login'] = true;

               header('Location: /admin');

            }else {
                $errores[] = 'La contraseña es incorrecta';
            }
        }else {
            $errores[] = "El usuario no existe";
        }
    }

 }

//Incluye el Header
    require 'includes/funciones.php';
   
    incluirTemplate('header');
 ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesión</h1>
        <?php foreach($errores as $error): ?>
            <div class="alerta error">
               <?php echo $error; ?>
            </div> 
        <?php endforeach;?>
        <form method="POST" class="formulario">
        <fieldset>
                <legend>Email y Password</legend>

                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Tu email" id="email" required>

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Tu password" id="password" required>   

            </fieldset>

            <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
        </form>

    </main>

<?php
    incluirTemplate('footer');
?>
