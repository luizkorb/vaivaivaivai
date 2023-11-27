<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
    <link rel="stylesheet" href="tabela.css">
</head>
<body>
<div class="cabecalho">
        <img src="menu.png" width="350px" class="menu">
    </div>    <br>
    </form>


    <form action="crud.php" method="get" class="form">
    <label for="nome">Filtrar por nome:</label>
    <input type="text" id="nome" name="nome" placeholder="Digite um nome">
    <input type="submit" name="listar" value="Listar" class="button">

</form>

    <table border="1" class="tabela">
        <thead>
            <tr>
                <th> CPF </th>
                <th> Nome </th>
                <th> E-mail </th>
                <th> Telefone</th>
                <th> Usuário </th>
                
            </tr>
        </thead>
        <tbody>
        <?php
                        include_once("lista.php");
                        if(!empty($lista_usuarios)){
                            foreach($lista_usuarios as $linha){
                                echo ' <tr>
                                        <td> '.$linha['CPF'] .' </td>
                                        <td> '.$linha['Nome'] .' </td>
                                        <td> '.$linha['Email'] .' </td>
                                        <td> '.$linha['Telefone'] .' </td>
                                        <td> '.$linha['Usuario'] .' </td>
                                        
                                        
                                    </tr>
                                ';
                            }
                        }
                    ?>

        </tbody>
    </table>
</body>
<script>




</html>