<!DOCTYPE html>

<!-- Normalemente quando estamos rodando um arquivo HTML em um servidor se nos fizermos uma atualizacao no documento e tentar atualizar pode ser que nao de certo.
Para que de certo nos temos que atualizar a pagina e a o cache de memoria com o comando CTRL + F5-->

<html>
    <head>
        <meta lang="pt-br">
        <meta charset="UTF-8">
        <title>Entre ou Cadastre-se</title>

        <link rel="stylesheet" text="text/css" href="../css/global.css">
        <link rel="stylesheet" text="text/css" href="../css/login.css">

        <script src="../js/script.js"></script>
    </head>
    <body>
        <main>
            <section class="painel-login">
                <div class="card">
                    <h1>Entre ou Cadastre-se</h1>

                    <form action="#" action="#">
                        <input type="email" placeholder="Digite o seu e-mail">
                        <input type="password" placeholder="Digite a sua Senha">
                        <button>Entrar</button>
                    </form>

                    <a href="./cadastro.php">Ainda nao possui cadastro? Clique aqui!</a>
                </div>
            </section>
            <section class="painel-imagem">
                <img src="../images/login.svg" alt="Login">
            </section>
        </main>
    </body>
</html>