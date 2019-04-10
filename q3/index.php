<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Galeria de Imagens</title>
        
        <style>
            img {
                width: 30%;
                display: inline;
                padding: 3px;
            }
            img:hover {
                border: solid;
            }
        </style>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data" action="salva.php">
            <label for="arquivo">Selecione uma imagem: </label>
            <input id="arquivo" name="arquivo" type="file" />
            <input type="submit" value="Salvar" />
        </form>
        
        <?php
            $path = "imagens/";
            $diretorio = dir($path);

            echo "Lista de Imagens na Galeria:<br/>";
         
            while($arquivo = $diretorio -> read()){
                if($path.$arquivo <> "imagens/.." && $path.$arquivo <> "imagens/.")
                    echo "<a href='".$path.$arquivo."'>"
                        . "<img src='".$path.$arquivo."'/>"
                        . "</a>";
            }
            $diretorio -> close();
        ?>
    </body>
</html>
