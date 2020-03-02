<?php 

$email = $_POST["inputEmail"];

// incluir a funcionalidade do recaptcha
require_once "recaptchalib.php";

// definir a chave secreta
$secret = "Colocar sua Chave reCAPTCHA aqui";

// verificar a chave secreta
$response = null;
$reCaptcha = new ReCaptcha($secret);

if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]);
}

// deu tudo certo?
if ($response != null && $response->success) {

    echo "OK: " . $email;

} else {

	header("Location: exemplo-04.php");

}

 ?>
