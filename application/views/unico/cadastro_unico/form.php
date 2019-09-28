<form id="form-cadastro-unificado" method="POST">
    <div class="p-4">
        <div class="container ">
            <input type="hidden" v-model="dados.codigo">
            <div class="input-group input-group-sm mb-3 col-md-4">
                <div class="input-group-prepend">
                    <span class="input-group-text">Nome:</span>
                </div>
                <input type="text"
                       class="form-control"
                       name="nome"
                       v-model="dados.nome"
                >
            </div>
        </div>
        <div class="container ">
            <div class="input-group input-group-sm mb-3 col-md-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">CPF:</span>
                </div>
                <input type="text"
                       class="form-control"
                       name="cpf"
                       v-model="dados.cpf"
                >
            </div>
        </div>
        <div class="container ">
            <div class="input-group input-group-sm mb-3 col-md-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">RG:</span>
                </div>
                <input type="text"
                       class="form-control"
                       name="rg"
                       v-model="dados.rg"
                >
            </div>
        </div>
        <div class="container ">
            <div class="input-group input-group-sm mb-3 col-md-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Orgão emissor:</span>
                </div>
                <input type="text"
                       class="form-control"
                       name="orgaoemissor"
                       v-model="dados.orgaoemissor"
                >
            </div>
        </div>
        <div class="container ">
            <div class="input-group input-group-sm mb-3 col-md-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">E-mail:</span>
                </div>
                <input type="text"
                       class="form-control"
                       name="email"
                       v-model="dados.email"
                >
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <h3 class="one"></h3>
        </div>
        <div class="col-auto btn-group">
            <button @click.prevent="closemodal()" class="btn btn-danger pull-right cancelar ">Cancelar</button>
            <button class="btn btn-primary pull-right btn-salvar">Salvar</button>
        </div>
    </div>
</form>
