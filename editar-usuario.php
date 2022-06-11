<h1>Editar Usuario</h1>
<?php
    $sql = "SELECT * FROM  alunos WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="action" value="editar">
    <!--importante-->
    <input type="hidden" name="id" value="<?php print $row->id ?>">
    <div class="mb-3">
        <label>Username</label>
        <input type="text" name="username" value="<?php print $row->username; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">E-mail</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Ctrl Cash Inicial</label>
        <input type="number" name="ctrlcash" value="<?php print $row->ctrlcash; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <input type="hidden" name="password" value="<?php print $row->password; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input id="date" type="date" name="data" value="<?php print $row->data_nasc; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit"  class="btn-primary">Enviar</button>
    </div>
</form>