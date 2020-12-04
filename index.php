<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body>        
            <?php
                include "inc/form_ini.inc";
                include "inc/cabecalho_conexao.inc";

                $SQL = "SELECT id, nome FROM estados";

                // Executa o comando SQL
                $dados_recuperados = mysqli_query($con, $SQL);

                if(mysqli_num_rows($dados_recuperados) > 0){
                    echo'<select class="form-control" name="uf" id="uf">
                            <option selected>Escolha seu estado</option>';
                        
                    while( ($resultado = mysqli_fetch_assoc($dados_recuperados)) != null) {
                            
                        echo '<option value="'.$resultado['id'].'">'.$resultado['nome'].'</option>';
                    }
                        echo '</select>';
                    }

                mysqli_close($con);
                include "inc/fim_ini.inc";       
            ?>
        
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/codigo.js"></script>
</body>
</html>