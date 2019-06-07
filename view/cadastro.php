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
      <div class="container form-group col- ">
        <select onchange="yesnoCheck(this);" id="inputState" class="form-control" name="typePerson">
          <option id="employee" value="usuario">Usuario</option>
          <option id="employee" value="funcionario">Funcionario</option>
        </select>
      </div>
    </div>
    <!-- <div id="ifYes" style="display: none;" class="form-group">
                        <label>Money</label>
                        <input type="number" name="money" class="form-control" placeholder="Money">
                    </div> -->
  
    <div class="container form-group">
      <input type="text" name="usuario" placeholder="Usuario"><br>
      <div id="ifYes" style="display: none;" class="form-group">
      <input id='ifYes' type='number' name="salario" placeholder="salario"><br>
      </div>
      <input type="password" name="senha" placeholder="Senha"><br><br>
      <button type="submit" class="btn btn-primary">Submit</button>
      </div>

  </form>
  </div>
  <script>
    function yesnoCheck(that) {
      if (that.value == "usuario") {
       
        document.getElementById("ifYes").style.display = "none";
      } else {
        alert("Tem certeza que é funcionário?");
        document.getElementById("ifYes").style.display = "block";
      }
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  </script>
</body>

</html>