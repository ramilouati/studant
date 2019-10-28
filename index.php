<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist\bootstrap-4.3.1-dist\css\bootstrap.min.css">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="container">
<h1>DSI 21</h1>
    <table class="table table-dark" >
    <tr>
<th>ID</th>
<th>firstname</th>
<th>lastname</th>
<th>email</th>
<th>phone</th>
    
    </tr>
<?php
include 'dbconnexion.php';
$rep = $cnx->query('SELECT * FROM etudiant');
while($data = $rep->fetch()){
    echo'<tr>';
    echo'<td>'.$data['id'].'</td>';
    echo '<td>'.$data['firstname'].'</td>';
    echo '<td>'.$data['lastname'].'</td>';
    echo '<td>'.$data['email'].'</td>';
    echo '<td>'.$data['phone'].'</td>';
    echo '<td><button type="submit" class="btn btn-Success"><a href="edit.php">edit</a></button></td>';
    echo '<td><button type="submit" class="btn btn-danger"><a href="delet**.php">delete</a></button></td>';

    echo '</tr>';
}
?>

<button type="submit" class="btn btn-danger"><a href="create.php">add</a></button>


</table>
</body>
</html>