<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
    <form action="index.php?Login" method="POST">
      <div class="form-group">
        <label for="">login</label>
        <input type="text" name='usuario' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        
      </div>
      <div class="form-group">
        <label for="oi">Password</label>
        <input type="password" class="form-control" name='senha' id="exampleInputPassword1" placeholder="Password">
      </div>
    
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>