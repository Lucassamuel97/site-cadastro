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
        <div id="page-content-wrapper">
		<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
	<div class="page-header" style="text-align:center;">
	<h1>Nossos Alunos</h1>
	</div>
	<table class="table table-bordered">
	<tr>
	<th>Codigo</th>
	<th>Nome</th>
	<th>Endereço</th>
	<th>Curso</th>
	<th>CPF</th>
	<th>RG</th>
	<th>Email</th>
	<th>Telefone</th>
	<th>Celular</th>
	</tr>
<?php foreach($dados as $linha){ ?>
	<tr>
		<td><?=$linha['codigo'];?></td>
		<td><?=$linha['nome'];?></td>
		<td><?=$linha['endereco'];?></td>
		<td><?=$linha['curso'];?></td>
		<td><?=$linha['cpf'];?></td>
		<td><?=$linha['rg'];?></td>
		<td><?=$linha['email'];?></td>
		<td><?=$linha['telefone'];?></td>
		<td><?=$linha['celular'];?></td>	
	</tr>
	<?php } ?>
	</table>
	<button type="button" class="btn btn-primary"><a href="alunos.php" style="color:white; text-decoretion: none;"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Voltar</a></button>
	<button class="btn btn-primary" type="button" onClick="javascript:window.print()" ><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir<button/>
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

</body>

</html>
