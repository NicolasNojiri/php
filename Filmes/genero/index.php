<?php
include("conexao.php");
session_start();

$sql = "SELECT descricao, status, genero FROM generos";

$result = $conn->query($sql);
?>
<html>
    <head>    
        <title>Cadastro de Gêneros</title>
        <script>
            function troca(filme){
                document.getElementById("descricao_"+filme).style.display='none';
                document.getElementById("status_"+filme).style.display='none';
                document.getElementById("descricaoE_"+filme).style.display='';
                document.getElementById("statusE_"+filme).style.display='';
                document.getElementById("salvar_"+filme).style.display='';
                document.getElementById("editar_"+filme).style.display='none';
            }

            <?php 
            if(isset($_GET['resposta']) && $_GET['resposta']==1){
                ?>alert("incluido com sucesso");<?php
            }else if(isset($_GET['resposta']) && $_GET['resposta']==0){
                ?>alert("erro ao inserir");<?php
            }else if(isset($_GET['resposta']) && $_GET['resposta']==3){
                ?>alert("excluído com sucesso");<?php
            }else if(isset($_GET['resposta']) && $_GET['resposta']==4){
                ?>alert("erro ao excluir");<?php
            }else if(isset($_GET['resposta']) && $_GET['resposta']==5){
                ?>alert("editado com sucesso");<?php
            }else if(isset($_GET['resposta']) && $_GET['resposta']==6){
                ?>alert("erro ao editar");<?php
            } ?>
        </script>
    </head>
    <body>
    
        <h2>Olá <?=$_SESSION["nome"];?></h2>
        <h1>Cadastro de Gêneros</h1>
        <form action = "cadastrar.php" method="post">
                Descrição: <input type="text" name="descricao" id="descricao">
                Status: <input type="number" name="status" id="status">
                <input type="submit" value="enviar">
        </form>

        <h1>Remoção de Gêneros</h1>
        <form action = "remover.php" method="post">
            Filme: <?php
                $sqlGeneros = "select genero, descricao from generos";
                $sqlGenerosLista = "select * from generos";
                $resultado = $conn->query($sqlGeneros);
                $resultadoLista = $conn->query($sqlGenerosLista);
                ?>
                <select name="genero" id="genero">
                    <option value="">selecione uma opção</option>
                <?php
                while($row = $resultado->fetch_assoc()){
                    ?>
                    <option value="<?php echo $row["genero"];?>"><?php echo $row["descricao"];?></option>
                    <?php
                }
                ?>
                </select>

                <input type="submit" value="enviar">
        </form>

        <table border="1">
                <tr>
                    <th>Nome</th>
                    <th>Status</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
                <?php if ($result->num_rows > 0){ ?>
                    <?php while($row = $result->fetch_object()){ ?>
                        <tr>
                
                            <form action="alterar.php" method="post" name="form_<?=$row->genero;?>">                     
                                <td><div id="descricaoE_<?=$row->genero;?>" style="display: none;"><input name="descricao" type="text" value="<?php echo htmlspecialchars($row->descricao); ?>"></div>
                                    <div id="descricao_<?=$row->genero;?>"><?php echo htmlspecialchars($row->descricao); ?></div></td>
                                <td><div id="statusE_<?=$row->genero;?>" style="display: none;"><input name="status" type="text" value="<?php echo htmlspecialchars($row->status); ?>"></div>
                                    <div id="status_<?=$row->genero;?>"><?php echo htmlspecialchars($row->status); ?></div></td>
                                <td><div id="editar_<?=$row->genero;?>" style="cursor:pointer;" onclick="troca(<?=$row->genero;?>);">Editar</div>
                                <div id="salvar_<?=$row->genero;?>" style="cursor:pointer; display:none;" onclick="document.form_<?=$row->genero;?>.submit()">Salvar</div></td>
                                <input type="hidden" name="genero" value="<?=$row->genero;?>">    
                            </form>
                            <td><form action="remover.php" method="post">
                                <input type="hidden" name="genero" value=<?=$row->genero;?>>
                                <input type="submit" value="Excluir">
                            </form></td>
                        </tr>
                
                   
                <?php }
                } else {
                    ?>  
                    <tr>
                        <td colspan="4">Nenhum genero cadastrado.</td>
                    </tr>
                    <?php
                }?>
            </table>

    </body>
</html>
<?php
    $conn->close();
?>