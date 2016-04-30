<html>
<head>
	<link href="css/css.css" rel="stylesheet">
	<script type="text/javascript" src="jquery.js"> </script>
	<link rel="shortcut icon" type="image/x-icon" href="https://image.freepik.com/icones-gratis/graduacao-da-faculdade_318-85606.png">
	<title>Sistema De Cadastro</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                <div class="pass-reset">
                    <label>
                        Sistema de Cadastro</label>
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div>
            <div class="wrap">
                <p class="form-title">
                    Login</p>
                <form class="login" role="form" action="validar.php" method="GET">
                <input id="login" type="text" name="login" value="" placeholder="usuario" />
                <input id="senha" type="password" name="senha" placeholder="senha" />
                <input type="submit" value="Entrar" class="btn btn-success btn-sm" />
                <div class="remember-forgot">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" />
                                    Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="posted-by">&copy; 2016<a href="#"> Lucas Samuel</a></div>
</div>
</body>
</html>