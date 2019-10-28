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
<form action="store.php" method="post"  accept-charset="utf-8">
<div class="form-group" >
        <label>id </label>
        <input  class="form-control" type="number" name="id" value=""><br>
        </div>
        <div class="form-group">
		<label>first name</label>
        <input class="form-control" type="text" name="name1" ><br>
        </div>

        <div class="form-group">
		<label>last name </label>
        <input class="form-control" type="text" name="name2"><br>
        </div>

        <div class="form-group">
		<label>email</label>
        <input class="form-control" type="text" name="email"><br>
        </div>

        <div class="form-group">
		<label>phone</label>
        <input class="form-control" type="tel" name="phone"><br>
        </div>

		<input type="submit">
    </form>


    
   
    <button type="submit" class="btn btn-danger"><a href="index.php">back</a></button>

</body>
</html>