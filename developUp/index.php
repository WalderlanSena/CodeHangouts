<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DevelopUp - Desenvolvimento Rápido e Eficiente</title>
        <link rel="icon" href="assets/imagens/favicon.png">
        <link rel="stylesheet" href="assets/css/estilo.css">
    </head>
    <body>
        <div class="container">
            <div class="row">

                <!-- Inicio da section  -->
                <section>
                    <!-- Inicio do meu cabeçario -->
                    <figure>
                        <img src="assets/imagens/logo.png" alt="Logo DevelopUp">
                    </figure>
                    <!-- end cabeçario -->
                    <!-- Inicio Formulario -->
                    <form action="app/sys/logar.php" method="POST">
                        <input type="text" name="login" placeholder="Digite sua login">
                        <br>
                        <input type="password" name="senha" placeholder="Digite sua senha">
                        <br>
                        <button type="submit" name="logar">Logar no sistema</button>
                    </form>
                    <!-- Fim formulario -->
                </section>
                <!-- end section -->
            </div><!-- end row -->
        </div><!-- end container -->
    </body>
</html>
