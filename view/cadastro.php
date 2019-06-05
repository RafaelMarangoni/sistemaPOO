<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Document</title>
</head>

<body>

</body>

</html>
<form action="index.php?Pessoas" method="post" class="col-md-4 ">

  <div class="container form-group">
    <label for="exampleInputEmail1">Type your name</label>
    <input type="name" name='nome' class="form-control" placeholder="your name">
  </div>
  <div class="container form-group">
    <label for="exampleInputPassword1">CPF</label>
    <input type="number" name="cpf" class="form-control" id="exampleInputPassword1" placeholder="type your CPF">
  </div>
  <div class="container form-group">
    <label for="exampleInputPassword1">Idade</label>
    <input type="number" name="idade" class="form-control" id="exampleInputPassword1" placeholder="report your age">
  </div>
  <div>
    <select name="tipoPessoa" id="">

      <option value="usuario">Usuario</option>
      <option value="funcionario">Funcionario</option>
    </select>
  </div><br>
  </div>
  <div>
    <input type="text" name="usuario" placeholder="Usuario"><br><br>

    <input type="password" name="senha" placeholder="Senha"><br><br>
    <div class="container">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>