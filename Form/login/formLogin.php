<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexum Press LT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../Style/styleLogin/style.css">
    <link rel="stylesheet" href="../../node_modules/parsleyjs/src/parsley.css">
</head>
<body>
    <div class="container">
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
        <div class="card shadow" style="width: 100%; max-width: 400px;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="card-title form-header text-center position-relative" style="font-size:25px;">Bem-vindo de volta</h5>
                    <img src="imagens/LogoNxpLT.jpeg" alt="Imagem" style="height: 60px;">
                   
                </div>
                <form method="POST" action="../../Sistema/login.php" data-parsley-validate>
                    <div class="input-container pb-2">
                        <label for="credencial" class="form-label">Credencial</label>
                        <input 
                            id="credencial" 
                            type="text" 
                            name="credencial" 
                            class="form-control" 
                            placeholder="Digite sua credencial" 
                            required 
                            data-parsley-pattern="^[^\s]+$"
                            data-parsley-pattern-message="A credencial não pode conter espaços"
                            pattern="^\S(.*\S)?$"
                            data-parsley-required-message="Credencial é obrigatória" 
                            data-parsley-pattern="^[a-zA-Z]{3}[0-9]{3}$" 
                            data-parsley-pattern-message="A credencial deve conter 3 letras seguidas por 3 números"
                            maxlength="16"
                        >
                    </div>
                    <div class="input-container pb-2">
                        <label for="senha" class="form-label">Senha</label>
                        <input 
                            id="senha" 
                            type="password" 
                            name="senha" 
                            class="form-control" 
                            placeholder="Digite sua senha" 
                            required 
                            data-parsley-pattern="^[^\s]+$"
                            data-parsley-pattern-message="A senha não pode conter espaços"
                            pattern="^\S(.*\S)?$"
                            data-parsley-required-message="Senha é obrigatória" 
                            data-parsley-minlength="6" 
                            data-parsley-minlength-message="A senha deve ter no mínimo 6 caracteres"
                        >
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" id="showPassword">
                        <label class="form-check-label" for="showPassword">Mostrar senha</label>
                    </div>
                    <div class="mb-3">
                        <button name="entrar" type="submit" class="btn btn-warning custom-button text-white w-100">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="layoutAuthentication_footer" class="footer">
        <footer class="py-4">
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
    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/parsleyjs/dist/parsley.js"></script>
    <script src="../../node_modules/parsleyjs/dist/parsley.min.js"></script>
    <script src="../../node_modules/parsleyjs/dist/i18n/pt-br.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../JS/Check-box/script.js"></script>
</body>
</html>
