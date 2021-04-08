<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "tienda";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
    die("no hay conexion: ".mysqli_connect_error());
}
$username = $_POST["Username"];
$email = $_POST["Email"];
$pass = $_POST["Password"];
//
if(isset($_POST["btningresar"])){
$query = mysqli_query($conn,"SELECT * FROM login WHERE email = '".$email."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);
    if($nr == 1)
    {
        echo"<script> alert('bienvenido $username'); window.location='principal.html'</script>";
    }
    else
    {
         echo"<script> alert('Debes registrarte para iniciar sesion'); window.location='index.html'</script>";
    }

}
if(isset($_POST["btnregistro"])){
$sqlgrabar = "INSERT INTO login(Username,Email,Password) values('$username','$email','$pass')";
    if(mysqli_query($conn,$sqlgrabar)){
            echo"<script> alert('REGISTRADO CON EXITO $username'); window.location='index.html'</script>";
    }
    else{
    echo"Error: ".$sql."<br></br>".mysql_error($conn);
    }

}
//buscar
$titulo = $_POST["buscar"];
$titulo = strtolower($titulo);
if(isset($_POST["buscar"])){
$queryr = mysqli_query($conn,"SELECT * FROM libros WHERE titulo = '".$titulo."'");
$nrr = mysqli_num_rows($queryr);
    if($nrr == 1)
    {
        if($titulo == "dracula")
        {
            echo"<script> alert('encontrado $titulo'); window.location='dracula.html'</script>";
        }
        else if($titulo == "it")
                {
                    echo"<script> alert('encontrado $titulo'); window.location='It.html'</script>";
                }
        else if($titulo == "soy leyenda")
                {
                    echo"<script> alert('encontrado $titulo'); window.location='Soy Leyenda.html'</script>";
                }
        else if($titulo == "hannibal")
                 {
                 echo"<script> alert('encontrado $titulo'); window.location='Hannibal.html'</script>";
                 }
        else if($titulo == "el resplandor")
                 {
                 echo"<script> alert('encontrado $titulo'); window.location='Resplandor.html'</script>";
                 }
        else if($titulo == "el exorcista")
                 {
                 echo"<script> alert('encontrado $titulo'); window.location='Exorcista.html'</script>";
                 }
        else if($titulo == "la casa infernal")
                 {
                 echo"<script> alert('encontrado $titulo'); window.location='casa infernal.html'</script>";
                 }
        else if($titulo == "asylum")
                 {
                 echo"<script> alert('encontrado $titulo'); window.location='Asylum.html'</script>";
                 }
        else if($titulo == "la esposa del dios del fuego")
                 {
                 echo"<script> alert('encontrado $titulo'); window.location='fuego.html'</script>";
                 }
        else if($titulo == "el silencio de nuestras palabras")
                  {
                  echo"<script> alert('encontrado $titulo'); window.location='silencio.html'</script>";
                  }
        else if($titulo == "sueños de papel")
                 {
                 echo"<script> alert('encontrado $titulo'); window.location='sueños.html'</script>";
                 }
        else if($titulo == "los justos")
                 {
                 echo"<script> alert('encontrado $titulo'); window.location='justos.html'</script>";
                  }
        else if($titulo == "un mundo feliz")
                  {
                  echo"<script> alert('encontrado $titulo'); window.location='mundo.html'</script>";
                  }
        else if($titulo == "fahrenheit 451")
                  {
                  echo"<script> alert('encontrado $titulo'); window.location='451.html'</script>";
                  }
        else if($titulo == "la maquina del tiempo")
                  {
                  echo"<script> alert('encontrado $titulo'); window.location='tiempo.html'</script>";
                  }
        else if($titulo == "marte rojo")
                 {
                 echo"<script> alert('encontrado $titulo'); window.location='marte.html'</script>";
                 }
        else if($titulo == "cumbres borrascosas")
                 {
                 echo"<script> alert('encontrado $titulo'); window.location='Cumbres_borrascosas.html'</script>";
                 }
         else if($titulo == "orgullo y prejuicio")
                  {
                  echo"<script> alert('encontrado $titulo'); window.location='Orgulloyprejuicio.html'</script>";
                  }
         else if($titulo == "bajo la misma estrella")
                  {
                  echo"<script> alert('encontrado $titulo'); window.location='estrella.html'</script>";
                  }
          else if($titulo == "cincuenta sombras de grey")
                   {
                   echo"<script> alert('encontrado $titulo'); window.location='50.html'</script>";
                   }
         }
    else
    {
         echo"<script> alert('libro no encontrado'); window.location='principal.html'</script>";
    }
}


$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$precio = $_POST["precio"];
$isbn = $_POST["isbn"];
$genero = $_POST["genero"];
if(isset($_POST["btnagregar"])){
$sqlagregar = "INSERT INTO libros_nuevos(titulo,autor,genero,precio,isbn) values('$titulo','$autor','$genero','$precio','$isbn')";
    if(mysqli_query($conn,$sqlagregar)){
            echo"<script> alert('REGISTRADO CON EXITO $titulo'); window.location='principal.html'</script>";
    }
    else{
    echo"Error: ".$sql."<br></br>".mysql_error($conn);
    }

}

//Eliminar
$eliminar = $_POST["eliminar"];
$eliminar = strtolower($eliminar);
if(isset($_POST["btneliminar"])){
$queryr1 = mysqli_query($conn,"SELECT * FROM libros_nuevos WHERE titulo = '".$eliminar."'");
$nrr1 = mysqli_num_rows($queryr1);
    if($nrr1 == 1)
        {
            mysqli_query($conn,"DELETE FROM libros_nuevos WHERE titulo = '".$eliminar."'");
            echo"<script> alert('eliminado $eliminar'); window.location='principal.html'</script>";
        }
    else{
     echo"<script> alert('no encontrado '); window.location='principal.html'</script>";
    }
}

$numcuenta = $_POST["inputNumero"];
$nombrecuenta = $_POST["inputNombre"];
$mescuenta = $_POST["mes"];
$aniocuenta = $_POST["year"];
$cvvcuenta = $_POST["inputCCV"];
if(isset($_POST["btnenviar"])){
    if($numcuenta && $nombrecuenta && $mescuenta && $aniocuenta && $cvvcuenta){
        echo"<script> alert('PAGADO CON EXITO $nombrecuenta'); window.location='envios.html'</script>";
    }
    else{
        echo"<script> alert('ERROR DATOS VACIOS'); window.location='pago.html'</script>";
    }
}





$nombre = $_POST["fullname"];
$email = $_POST["email"];
$direccion = $_POST["address"];
$ciudad = $_POST["city"];
$estado = $_POST["state"];
$codigopostal = $_POST["zip"];
$status = "en tienda";

if(isset($_POST["btnpedido"])){
$sqlagregarpedido = "INSERT INTO pedidos(nombre,email,direccion,ciudad,estado,codigopostal,status) values('$nombre','$email','$direccion','$ciudad','$estado','$codigopostal','$status')";
    if(mysqli_query($conn,$sqlagregarpedido)){
            echo"<script> alert('REGISTRADO CON EXITO $nombre'); window.location='listarpedido.php'</script>";
    }

}


$id= $_POST["idpedido"];
$status= $_POST["status"];
if(isset($_POST["btnstatus"])){
$queryr11 = mysqli_query($conn,"SELECT * FROM pedidos WHERE id = '".$id."'");
$nrr12 = mysqli_num_rows($queryr11);
    if($nrr12 == 1)
        {
           $sql = "UPDATE pedidos SET status='$status' WHERE id='$id'";

           if ($conn->query($sql) === TRUE) {
             echo"<script> alert('STATUS DEL PEDIDO $id MODIFICADO'); window.location='listarpedido.php'</script>";
           }

        }
    else{
     echo"<script> alert('ID NO EXISTENTE'); window.location='modificar.html'</script>";
    }
}


?>