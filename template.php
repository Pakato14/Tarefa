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
        <label>
          Descrição	(Opcional):
          <textarea	name="descricao"></textarea>
        </label>
        <label>
          Prazo	(Opcional):
          <input	type="text"	name="prazo">
        </label>
        <fieldset>
          <legend>Prioridade:</legend>
          <label>
            <input	type="radio"	name="prioridade"	value="baixa"	checked>Baixa
            <input	type="radio"	name="prioridade"	value="media">Média
            <input	type="radio"	name="prioridade"	value="alta">Alta
          </label>
        </fieldset>
        <label>
          Tarefa	concluída:
          <input	type="checkbox"	name="concluida"	value="sim">
        </label>
        <input	type="submit"	value="Cadastrar">
      </fieldset>
    </form>
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
