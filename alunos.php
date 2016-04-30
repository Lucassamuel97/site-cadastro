<?php
   @$nome= $_GET['nome'];
   @$endereco= $_GET['endereco'];
   @$curso= $_GET['curso'];
   @$nomepai= $_GET['nomepai'];
   @$nomemae= $_GET['nomemae'];
   @$cpf= $_GET['cpf'];
   @$rg= $_GET['rg'];
   @$email= $_GET['email'];
   @$telefone= $_GET['telefone'];
   @$celular= $_GET['celular'];
	$conn = new PDO('mysql:host=localhost;dbname=banco1','root','');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if ($nome) {
	$query="INSERT INTO tb_alunos set 
	nome='{$nome}',
	endereco='{$endereco}',
	curso='{$curso}',
	nomepai='{$nomepai}',
	nomemae='{$nomemae}',
	cpf='{$cpf}',
	rg='{$rg}',
	telefone='{$telefone}',
	celular='{$celular}',
	email='{$email}'";
	$conn->query($query);
	#unset($conn);
   }
	$sql="SELECT * FROM tb_alunos";
	$dados=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Central Aluno</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estilo.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="https://image.freepik.com/icones-gratis/graduacao-da-faculdade_318-85606.png">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="home.html">
                    <span class="glyphicon glyphicon-education" aria-hidden="true"></span> Sistema de Cadastro    
                    </a>
                </li>
                <li>
                    <a href="alunos.php">Central do Aluno</a>
                </li>
                <li>
                    <a href="professores.php">Central do Professor</a>
                </li>
                <li>
                    <a href="contato.html">Contato</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
	<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>	
	<div class="page-header" style="text-align:center;">
	<h1>Alunos<small> Complete as colunas abaixo</small></h1>
	</div>
    <form class="form-horizontal" action="cadalunos.php" method="GET" style="margin: 10px auto;">
	<div class="form-group">
    <label for="nome" class="col-sm-2 control-label">Nome:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required="required">
    </div>
	</div>
	<div class="form-group">
    <label for="nome" class="col-sm-2 control-label">Endereço:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite seu endereço" required="required">
    </div>
	</div>
	<div class="form-group">
	<label for="sel1" class="col-sm-2 control-label">Curso:</label>
	<div class="col-sm-6">
	<select class="form-control" id="curso" name="curso">
    <option value="Gestão da Tecnologia da Informação">Gestão da Tecnologia da Informação</option>
    <option value="Direito">Direito</option>
    <option value="Ed. fisica">Ed. fisica</option>
    <option value="Administração">Administração</option>
	</select>
	</div>
	</div>
	<div class="form-group">
    <label for="nome" class="col-sm-2 control-label">Nome do pai:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="nomepai" name="nomepai" placeholder="Digite o nome do seu pai" required="required">
    </div>
	</div>
	<div class="form-group">
    <label for="nome" class="col-sm-2 control-label">Nome da mãe:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="nomemae" name="nomemae" placeholder="Digite o nome da sua mãe" required="required">
    </div>
	</div>
	<div class="form-group">
    <label for="nome" class="col-sm-2 control-label">CPF:</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF" required="required">
    </div>
	<label for="nome" class="col-sm-2 control-label">RG:</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="rg" name="rg" placeholder="Digite seu RG" required="required">
    </div>
	</div>
	
	<div class="form-group">
    <label for="nome" class="col-sm-2 control-label">email:</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu Email" required="required">
    </div>
	</div>
	<div class="form-group">
    <label for="nome" class="col-sm-2 control-label">Telefone:</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="telefone" name="telefone"  placeholder="Digite seu Telefone" required="required">
    </div>
	<label for="nome" class="col-sm-2 control-label">Celular:</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="celular" name="celular" placeholder="Digite seu Celular" required="required">
    </div>
	</div>
	<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Enviar</button>
	  <button type="reset" class="btn btn-warning">Apagar</button>
    </div>
	</div>
	</form>
	
	<div class="page-header" style="text-align:center;">
	<a href="cadalunos.php">
	<div class="botao">
	<p style="font-size: 40px;"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>  Alunos Cadastrados</p>
	</div></a>
	</div>
	<div class="page-header" style="text-align:center;">
	&copy; 2016 <a target="_blank" href="#" title="Criado para fins educacionais">Desenvolved by lucas samuel</a>. All Rights Reserved.
	</div>
    </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
		<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){
z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?3mO0gMPV9urcns0RKl8c1Zsh1hhbCAU9';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->

</body>

</html>
