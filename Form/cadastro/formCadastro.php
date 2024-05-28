<?php
    session_start();

    if(isset($_SESSION['cadastro_sucesso']) && $_SESSION['cadastro_sucesso']) {
        echo "<script>
                Swal.fire({
                title: 'Cadastro realizado com sucesso!',
                text: 'Você foi cadastrado com sucesso. Faça login para continuar.',
                icon: 'success'
                });
            </script>";

        unset($_SESSION['cadastro_sucesso']);
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexum Press LT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../../Style/styleCadastro/style.css">
    <link rel="stylesheet" href="../../node_modules/parsleyjs/src/parsley.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
    <?php if (isset($error)): ?>
            <div class="alert alert-danger alert-dismissible d-flex align-items-center justify-content-center mb-0" role="alert">
                <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:" width="24" height="24">
                    <use xlink:href="#exclamation-triangle-fill"/>
                </svg>
                <div><?php echo $error; ?></div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </symbol>
            </svg>
        <?php endif;?>
        <div class="card shadow custom-card w-100" style="max-width: 600px;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="h3 mb-0 title-header">Cadastre-se</h1>
                    <a href="../login/formLogin.php" class="btn btn-warning custom-button text-white">Entrar</a>
                </div>
                <form method="POST" action="../../Sistema/cadastro.php" data-parsley-validate>
                    <div class="row g-3 mb-3">
                        <div class="col-6">
                            <label for="nomecompleto" class="form-label">Nome</label>
                            <input 
                                id="nomecompleto" 
                                type="text" 
                                name="nome" 
                                class="form-control custom-input" 
                                placeholder="Ex: Álvaro Ferreira da Silva Júnior" 
                                required data-parsley-required-message="Nome é obrigatório">
                        </div>
                        <div class="col-6">
                            <label for="credencial" class="form-label">Crie uma credencial</label>
                            <input 
                                id="credencial" 
                                type="text" 
                                name="credencial" 
                                class="form-control custom-input" 
                                placeholder="Digite sua credencial" 
                                required data-parsley-required-message="Credencial é obrigatória" 
                                data-parsley-maxlength="6" 
                                data-parsley-minlength-message="A credencial deve ter no mínimo 5 caracteres">
                        </div>
                        <div class="col-6">
                            <label for="CPF" class="form-label">Digite seu CPF</label>
                            <input 
                                id="CPF" 
                                type="text" 
                                name="CPF" 
                                class="form-control custom-input" 
                                placeholder="xxx.xxx.xxx-xx" 
                                required 
                                data-parsley-required-message="CPF é obrigatório"
                                data-parsley-pattern="^\d{3}\.\d{3}\.\d{3}-\d{2}$" 
                                data-parsley-pattern-message="Formato de CPF inválido">
                        </div>
                        <div class="col-6">
                            <label for="celular" class="form-label">Digite seu celular</label>
                            <input 
                                id="celular" 
                                type="text" 
                                name="celular" 
                                class="form-control custom-input" 
                                placeholder="(xx) xxxxx-xxxx"
                                required 
                                data-parsley-required-message="Celular é obrigatório"
                                data-parsley-pattern="^\(\d{2}\) \d{5}-\d{4}$" 
                                data-parsley-pattern-message="Formato de celular inválido">
                        </div>
                        <div class="col-6">
                            <label for="password" class="form-label">Crie sua senha</label>
                            <input 
                                id="password" 
                                type="password" 
                                name="senha" 
                                class="form-control custom-input" 
                                placeholder="Digite sua senha" 
                                required data-parsley-required-message="Senha é obrigatória" 
                                data-parsley-minlength="6" 
                                data-parsley-minlength-message="A senha deve ter no mínimo 6 caracteres">
                        </div>
                        <div class="col-6">
                            <label for="confirmPassword" class="form-label">Confirme sua Senha</label>
                            <input 
                                id="confirmPassword" 
                                type="password" 
                                name="senha" 
                                class="form-control custom-input" 
                                placeholder="Digite sua senha novamente" 
                                required data-parsley-required-message="Confirmação de senha é obrigatória" 
                                data-parsley-equalto="#password" 
                                data-parsley-equalto-message="As senhas não coincidem">
                        </div>
                    </div>
                    <div class="d-grid">
                        <button name="cadastrar" type="submit" class="btn btn-warning custom-button text-white">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; ChrisLM 2023</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/parsleyjs/dist/parsley.js"></script>
    <script src="../../node_modules/parsleyjs/dist/parsley.min.js"></script>
    <script src="../../node_modules/parsleyjs/dist/i18n/pt-br.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
