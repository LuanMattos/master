<div class="col-lg-9 col-md-7 config-itens" id="div-geral-config-informacoes-pessoais-index" style="display: none">
    <div class="setting-form">
        <form action="<?= site_url("account_settings/Account_settings/acao_salvar_informacoes_pessoais") ?>" method="POST" id="form-informacoes-pessoais">
            <div class="user-data full-width">
                <div class="about-left-heading">
                    <h3>Informações pessoais</h3>
                </div>
                <div class="prsnl-info">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Nome<span style="color:red">{{informacoes_pessoais.error.nome}}</span></label>
                                <input class="payment-input"
                                       type="text"
                                       placeholder="Nome"
                                       name="usuarios[nome]"
                                       value="<?= set_val($data['nome']) ?>">

                            </div>


                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Sobrenome<span style="color:red">{{informacoes_pessoais.error.nome}}</span></label>
                                <input class="payment-input"
                                       type="text"
                                       placeholder="Sobrenome"
                                       value="<?= set_val($data['sobrenome']) ?>"
                                       name="usuarios[sobrenome]"
                                >
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <label>Data de nascimento<span style="color:red">{{informacoes_pessoais.error.nome}}</span></label>
                                <input class="payment-input datepicker-here"
                                       data-language="en"
                                       type="text"
                                       placeholder="08/29/1991"
                                       value="<?= set_val(date_to_br($data['datanasc'])) ?>"
                                       name="usuarios[datanasc]"
                                >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <label>País<span style="color:red">{{informacoes_pessoais.error.codpais}}</span></label>
                                <div class="select-bg">
                                    <select class="wide " @change="get_cidade" id="selec-pais" name="usuarios[codpais]">
                                        <option value="">Selecione um país</option>
                                        <?php if(isset($pais)):
                                            foreach($pais as $row){ ?>
                                                <option value="<?php echo $row['id']  ?>" <?= $data['codpais']===$row['id']?'selected':'' ?> ><?php echo $row['nome']  ?></option>
                                            <?php }endif; ?>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <label>Endereço:</label>
                                <div class="select-bg">
<!--                                    <input type="text" class="payment-input" id="autocomplete" id="autocomplete_search" name="autocomplete_search">-->
                                    <input id="searchTextField" type="text" size="50">

                                    <div id='lblFormattedAddress'></div>

                                    <input type='text' name='hidFormattedAddress' id='hidFormattedAddress'/>

                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12" >
                            <div class="form-group">
                                <label>Cidade</label>
                                <div class="select-bg">
                                    <select class="wide"  name="usuarios[codcidade]">
                                        <option value="">Selecione</option>
                                        <option v-for="i in informacoes_pessoais.data_cidade"
                                                v-html="i.nome"
                                                :value="i.id"
                                                :selected="i.id == <?= set_val($data['codcidade']) ?>"
                                        >
                                        </option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Endereço de E-mail profissional</label>
                                <input class="payment-input"
                                       type="email"
                                       placeholder="Endereço de E-mail profissional"
                                       name="usuarios[emailprofissional]"
                                >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Número de telefone<span style="color:red">{{informacoes_pessoais.error.telcel}}</span></label>
                                <input type="text"
                                       id="telcel"
                                       class="payment-input phone_ddi_br"
                                       name="usuarios[telcel]"
                                       value="<?= set_val($data['telcel']) ?>"
                                >
                            </div>
                        </div>
                        <span style="color:red;font-size: 10px">{{informacoes_pessoais.error.telceli}}</span></label>


                    </div>
                </div>
            </div>

            <div class="user-data full-width">
                <div class="about-left-heading">
                    <h3>Hobbies</h3>
                </div>
                <div class="prsnl-info">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Gosto musical</label>
                                <input class="payment-input" type="text" placeholder="Rock, Rap, Solo, Hiphop">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Livros favoritos</label>
                                <input class="payment-input" type="text"
                                       placeholder="Jogos, Romântico, Ciência, História">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Horas vagas</label>
                                <input class="payment-input" type="tel"
                                       placeholder="Ler livros, dançar, academia, cantar, esportes">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user-data full-width">
                <div class="about-left-heading">
                    <h3>Educação</h3>
                    <a href="#">Adicionar Novo</a>
                </div>
                <div class="prsnl-info">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Instituição</label>
                                <input class="payment-input" type="text" placeholder="Instituição de ensino">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input class="payment-input" type="text" placeholder="Curso">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user-data full-width">
                <div class="about-left-heading">
                    <h3>Profissão</h3>
                    <a href="#">Adicionar nova</a>
                </div>
                <div class="prsnl-info">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Profissão</label>
                                <input class="payment-input" type="text" placeholder="Engenheiro, médico, astronauta">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input class="payment-input" type="text" placeholder="Empresa">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-crdt-amnt">
                <button class="setting-save-btn" type="button" @click.prevent="acao_salvar_informacoes_pessoais()">Salvar alterações</button>
            </div>
            <div v-if="informacoes_pessoais.success">
                <span style="color:#00abef;font-size:14px">
                    {{informacoes_pessoais.success ?informacoes_pessoais.success:''}}
                </span>
            </div>
            <div v-else="informacoes_pessoais.error">
                <span style="color:red;font-size:10px">
                    {{informacoes_pessoais.error ?'Todos os campos com * em vermelho são obrigatórios':''}}
                </span>
            </div>
        </form>
    </div>
</div>
