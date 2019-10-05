<form id="form-cadastro-unificado" method="POST">
    <ul class="nav nav-tabs" id="tab-cadastro-unico" role="tablist">
        <li class="nav-item">
            <a class="nav-link active"
               id="home-tab"
               data-toggle="tab" href="#home" role="tab" aria-controls="documentos" aria-selected="true">Documentos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="contato"
               aria-selected="true">Contato</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="enderecos"
               aria-selected="false">Endereços</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="home">
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


                <!--        <div class="container ">-->
                <!--            <div class="input-group input-group-sm mb-3 col-md-3">-->
                <!--                <div class="input-group-prepend">-->
                <!--                    <span class="input-group-text">Endereço:</span>-->
                <!--                </div>-->
                <!--                <input type="text"-->
                <!--                       class="form-control"-->
                <!--                       name="email"-->
                <!--                       v-model="dados.rua"-->
                <!--                >-->
                <!--            </div>-->
                <!--        </div>-->
                <!---->
                <!--        <div class="container ">-->
                <!--            <div class="input-group input-group-sm mb-3 col-md-3">-->
                <!--                <div class="input-group-prepend">-->
                <!--                    <span class="input-group-text">Bairro:</span>-->
                <!--                </div>-->
                <!--                <input type="text"-->
                <!--                       class="form-control"-->
                <!--                       name="email"-->
                <!--                       v-model="dados.bairro"-->
                <!--                >-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="container ">-->
                <!--            <div class="input-group input-group-sm mb-3 col-md-3">-->
                <!--                <div class="input-group-prepend">-->
                <!--                    <span class="input-group-text">Complemento:</span>-->
                <!--                </div>-->
                <!--                <input type="text"-->
                <!--                       class="form-control"-->
                <!--                       name="email"-->
                <!--                       v-model="dados.complemento"-->
                <!--                >-->
                <!--            </div>-->
                <!--        </div>-->


                <div class="container ">
                    <div class="row justify-content-between">
                        <div class="col-5">
                            <div class="input-group input-group-sm  col-md-10">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">CNH:</span>
                                </div>
                                <input type="text"
                                       class="form-control"
                                       name="cnh"
                                       v-model="dados.cnh"
                                >
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="input-group input-group-sm  col-md-7">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Categoria:</span>
                                </div>
                                <input type="text"
                                       class="form-control"
                                       name="categoria"
                                       maxlength="1"
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="p-4">
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

                <!--        <div class="container ">-->
                <!--            <div class="input-group input-group-sm mb-3 col-md-3">-->
                <!--                <div class="input-group-prepend">-->
                <!--                    <span class="input-group-text">Endereço:</span>-->
                <!--                </div>-->
                <!--                <input type="text"-->
                <!--                       class="form-control"-->
                <!--                       name="email"-->
                <!--                       v-model="dados.rua"-->
                <!--                >-->
                <!--            </div>-->
                <!--        </div>-->
                <!---->
                <!--        <div class="container ">-->
                <!--            <div class="input-group input-group-sm mb-3 col-md-3">-->
                <!--                <div class="input-group-prepend">-->
                <!--                    <span class="input-group-text">Bairro:</span>-->
                <!--                </div>-->
                <!--                <input type="text"-->
                <!--                       class="form-control"-->
                <!--                       name="email"-->
                <!--                       v-model="dados.bairro"-->
                <!--                >-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="container ">-->
                <!--            <div class="input-group input-group-sm mb-3 col-md-3">-->
                <!--                <div class="input-group-prepend">-->
                <!--                    <span class="input-group-text">Complemento:</span>-->
                <!--                </div>-->
                <!--                <input type="text"-->
                <!--                       class="form-control"-->
                <!--                       name="email"-->
                <!--                       v-model="dados.complemento"-->
                <!--                >-->
                <!--            </div>-->
                <!--        </div>-->


                <div class="container ">
                    <div class="row justify-content-between">
                        <div class="col-5">
                            <div class="input-group input-group-sm  col-md-10">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">CNH:</span>
                                </div>
                                <input type="text"
                                       class="form-control"
                                       name="cnh"
                                       v-model="dados.cnh"
                                >
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="input-group input-group-sm  col-md-7">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Categoria:</span>
                                </div>
                                <input type="text"
                                       class="form-control"
                                       name="categoria"
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="p-4">
                <div class="container ">
                    <div class="input-group input-group-sm mb-3 col-md-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nome:</span>
                        </div>
                        <input type="text"
                               class="form-control"
                               name="nome"
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

                <!--        <div class="container ">-->
                <!--            <div class="input-group input-group-sm mb-3 col-md-3">-->
                <!--                <div class="input-group-prepend">-->
                <!--                    <span class="input-group-text">Endereço:</span>-->
                <!--                </div>-->
                <!--                <input type="text"-->
                <!--                       class="form-control"-->
                <!--                       name="email"-->
                <!--                       v-model="dados.rua"-->
                <!--                >-->
                <!--            </div>-->
                <!--        </div>-->
                <!---->
                <!--        <div class="container ">-->
                <!--            <div class="input-group input-group-sm mb-3 col-md-3">-->
                <!--                <div class="input-group-prepend">-->
                <!--                    <span class="input-group-text">Bairro:</span>-->
                <!--                </div>-->
                <!--                <input type="text"-->
                <!--                       class="form-control"-->
                <!--                       name="email"-->
                <!--                       v-model="dados.bairro"-->
                <!--                >-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="container ">-->
                <!--            <div class="input-group input-group-sm mb-3 col-md-3">-->
                <!--                <div class="input-group-prepend">-->
                <!--                    <span class="input-group-text">Complemento:</span>-->
                <!--                </div>-->
                <!--                <input type="text"-->
                <!--                       class="form-control"-->
                <!--                       name="email"-->
                <!--                       v-model="dados.complemento"-->
                <!--                >-->
                <!--            </div>-->
                <!--        </div>-->


                <div class="container ">
                    <div class="row justify-content-between">
                        <div class="col-5">
                            <div class="input-group input-group-sm  col-md-10">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">CNH:</span>
                                </div>
                                <input type="text"
                                       class="form-control"
                                       name="cnh"
                                       v-model="dados.cnh"
                                >
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="input-group input-group-sm  col-md-7">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Categoria:</span>
                                </div>
                                <input type="text"
                                       class="form-control"
                                       name="categoria"
                                >
                            </div>
                        </div>
                    </div>
                </div>
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
