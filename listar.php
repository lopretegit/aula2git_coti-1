<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Lista de Clientes</h3>
        <a href="index.php">Voltar</a>
        <hr>
        <?php
        include_once 'config/db.php';
        
        $sql = "SELECT * FROM tbcliente";
        $rs = mysqli_query($conn, $sql);
        if(mysqli_num_rows($rs) > 0):
        ?>
        <table style="width: 100%">
            <tr>
                <th>NOME</th>
                <th>EMAIL</th>
            </tr>
            <?php while($row = mysqli_fetch_object($rs)): ?>
            <tr>
                <td><?=$row->nome?></td>
                <td><?=$row->email?></td>
            </tr>
            <?php endwhile; ?>
        </table>
        <?php 
            endif; 
        ?>
    </body>
</html>
