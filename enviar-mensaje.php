<?php 

ini_set("error_reporting",0);

$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$asunto = $_POST['asunto'];
$telefono = $_POST['telefone'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$verificacion = $_POST['verificacion'];
if ($verificacion == '')
{
    if ($nombre = '' || $empresa = '' || $asunto = '' || $telefono = '' || $email = '' || $mensaje = ''){ // Si falta un dato en el formulario mandara una alerta al usuario.

        echo "<script>
            alert('Todos los campos son obligatorios');
            location.href ='javascript:history.back()';
        </script>";

    }else{

        require("Class/class.phpmailer.php"); // Requiere PHPMAILER para poder enviar el formulario desde el SMTP de google
        $mail = new PHPMailer();

        $mail->From     = $Email;
        $mail->FromName = $Nombre;
        $mail->AddAddress("b.m.balboazz@gmail.com"); // Dirección a la que llegaran los mensajes.

        // Aquí van los datos que apareceran en el correo que reciba

        $mail->WordWrap = 50;
        $mail->IsHTML(true);
        $mail->Subject  =  $Asunto; // Asunto del mensaje.
        $mail->Body     =  "Nombre: $nombre \n<br />". // Nombre del usuario
        "Empresa: $empresa \n <br />".
        "Asunto: $asunto \n <br />".
        "Telefono: $telefono \n<br />".    // Email del usuario
        "Email: $email \n<br />".    // Email del usuario
        "Mensaje: $mensaje \n<br />"; // Mensaje del usuario

        // Datos del servidor SMTP, podemos usar el de Google, Outlook, etc...

        $mail->IsSMTP();
        $mail->Host = "ssl://smtp.gmail.com:465";  // Servidor de Salida. 465 es uno de los puertos que usa Google para su servidor SMTP
        $mail->SMTPAuth = true;
        $mail->Username = "b.m.balboazz@gmail.com";  // Correo Electrónico
        $mail->Password = "@@Matanoobsxd123"; // Contraseña del correo

        if ($mail->Send())
            echo "<script>alert('Mensaje enviado, nos pondremos en contacto a la brevedad.');location.href ='localhost/ServiciosMineros/index.html';</script>";
        else
            echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";

    }
}else{
    echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";
}


























?>