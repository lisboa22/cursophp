 <html>
  <head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
  </head>
  <body>
    <form action="cadastrar.php" method="POST">

    	<input type="email" name="inputEmail">
 		<button type="submit">Enviar</button>

      	<div class="g-recaptcha" data-sitekey="Colocar sua Chave reCAPTCHA aqui"></div>
      	<br/>
    </form>
  </body>
</html>