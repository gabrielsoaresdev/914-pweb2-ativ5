<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <style>
            form {
                background-color: purple;
                padding: 2%;
            }
            
            .mensagem {
                padding: 0px 2px 2px 2px;
                margin: 2px;
                background-color: lightblue;
            }
            
            .mensagem h6 {
                font-size: 13pt;
                background-color: blue;
                color: white;
            }
            
            .mensagem p {
                font-size: 15pt;
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <?php
            if (array_key_exists('nick', $_GET)) {
                $nick = $_GET['nick'];
            } else {
                $nick = "";
            }
        ?>
        <form style="background-color: purple" action="salva.php" method="POST">
            <?php
                echo "<input id=\"nick\" name=\"nick\" type=\"text\" placeholder=\"Nickname\""
                . " value=\"".$nick."\" required/>";
            ?>
            <input id="texto" name="texto" type="text" placeholder="Mensagem" required/>
            <input type="submit"/>
        </form>
        
        
        <?php
            $conexao = mysqli_connect("localhost", "root", "", "atividade52");
            
            $query = "SELECT * from mensagens ORDER BY id DESC";
            $result = mysqli_query($conexao, $query);
            
            
            while($row = mysqli_fetch_assoc($result)) {
                
                echo "<div class=\"mensagem\">"
                    . "<h6>".$row['nick']."</h6>"
                    . "<p>".$row['texto']."</p></div>";
            }
        
        ?>
        
    </body>
</html>


<script type="text/javascript">
    setTimeout("window.location.reload()", 5000);
</script>