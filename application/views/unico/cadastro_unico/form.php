<form id="form-cadastro-unificado" action="<?= site_url("unico/cadastro_unico/Cadastro_unico/acao_salvar") ?>" method="POST" >
<div class="p-4">
    <div class="container ">
        <div class="input-group input-group-sm mb-3 col-md-4">
            <div class="input-group-prepend">
                <span class="input-group-text" >Nome:</span>
            </div>
            <input type="text" class="form-control" name="nome">
        </div>
    </div>
    <div class="container ">
        <div class="input-group input-group-sm mb-3 col-md-3">
            <div class="input-group-prepend">
                <span class="input-group-text" >CPF:</span>
            </div>
            <input type="text" class="form-control" name="cpf">
        </div>
    </div>
    <div class="container ">
        <div class="input-group input-group-sm mb-3 col-md-3">
            <div class="input-group-prepend">
                <span class="input-group-text">RG:</span>
            </div>
            <input type="text" class="form-control" name="rg">
        </div>
    </div>
    <div class="container ">
        <div class="input-group input-group-sm mb-3 col-md-3">
            <div class="input-group-prepend">
                <span class="input-group-text" >Orgão emissor:</span>
            </div>
            <input type="text" class="form-control" name="orgaoemissor">
        </div>
    </div>
    <div class="container ">
        <div class="input-group input-group-sm mb-3 col-md-3">
            <div class="input-group-prepend">
                <span class="input-group-text" >E-mail:</span>
            </div>
            <input type="text" class="form-control" name="email">
        </div>
    </div>

</div>
<div class="row">
    <div class="col">
        <h3 class="one"></h3>
    </div>
    <div class="col-auto btn-group">
        <button class="btn btn-danger pull-right cancelar " data-dismiss="modal">Cancelar</button>
        <button class="btn btn-primary pull-right btn-salvar">Salvar</button>
    </div>
</div>
</form>
