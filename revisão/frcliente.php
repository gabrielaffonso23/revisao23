<?php
include "header.php";
include "menu.php";

?>


<form method="POST" action="validacliente.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="email" class="form-control" placeholder="nome" name="nome">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" placeholder="Senha" name="senha">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
include "footer.php";

?>