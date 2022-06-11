<h1>Novo Usuario</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="action" value="cadastrar">
    <div class="mb-3">
        <label>Username</label>
        <input type="text" name="username" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Ctrl Cash Inicial</label>
        <input type="number" name="ctrlcash" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Senha</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input id="date" type="date" name="data" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit"  class="btn-primary">Enviar</button>
    </div>
</form>