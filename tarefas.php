<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/tarefa.css">
    <title>Gerenciador de Tarefas</title>
  </head>
  <body>
    <h1>Gerenciador de Tarefas</h1>
    <form>
      <fieldset>
        <legend>Nova Tarefa</legend>
        <label>Tarefa
        <input type="text" name="nome">
        </label>
        <input type="submit" name="Cadastrar">
      </fieldset>
    </form>
    <?php
    $lista_tarefas	=	[];
      if	(array_key_exists('nome',	$_GET))	{
              $_SESSION['lista_tarefas'][]	=	$_GET['nome'];
      }
      $lista_tarefas	=	[];
      if	(array_key_exists('lista_tarefas',	$_SESSION))	{
        $lista_tarefas	=	$_SESSION['lista_tarefas'];
				}
    ?>
    <table>
				<tr>
								<th>Tarefas</th>
				</tr>
				<?php	foreach	($lista_tarefas	as	$tarefa)	:	?>
								<tr>
												<td><?php	echo	$tarefa;	?></td>
								</tr>
				<?php	endforeach;	?>
</table>
  </body>
</html>
