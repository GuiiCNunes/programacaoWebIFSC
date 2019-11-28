<?php 
	if (!isset($_SESSION)){
    session_start();
  	}
  	if (isset($_SESSION['user'])) {
  		function criarTabela($consulta, $tipo="visualizar") { ?>
  			<table border="1">
		        <tr>
		          <td>Identificador</td>
		          <td>Matricula</td>
		          <td>Nome</td>
		          <td>Data de Nascimento</td>
		          <td>Endereço</td>
		          <?php if($tipo == 'editar') {?> <td>Editar</td> <?php } ?>
		          <?php if($tipo == 'excluir') {?> <td>Excluir</td> <?php } ?>
		        </tr>
		        <?php while ($resultado = mysqli_fetch_array($consulta)) { 
		        	$id = $resultado['idaluno']; ?>
		        <tr>
		        	<td><?= $resultado['idaluno']; ?></td>
		        	<td><?= $resultado['matricula']; ?></td>
		        	<td><?= $resultado['nome']; ?></td>
		        	<td><?= date('d/m/Y', strtotime($resultado['datanascimento'])); ?></td>
		        	<td><?= $resultado['endereco']; ?></td>
		        	<?php if ($tipo == 'editar') { ?><td><a href="editar.php?id=<?= $id; ?>">Editar</a></td> <?php } ?>
		        	<?php if ($tipo == 'excluir') { ?><td><a href="excluir.php?id=<?= $id; ?>">Excluir</a></td> <?php } ?>
		        </tr>
  				 <?php } ?>  
  			</table>
  		<?php
  		}
  	} else {
  		$_SESSION['erroLogin'] = "Usuário e/ou senha inválidos.";
		header("location: index.php");
  	}
?>