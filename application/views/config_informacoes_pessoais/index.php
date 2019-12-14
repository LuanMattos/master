<div class="col-lg-9 col-md-7 config-itens" id="div-geral-config-informacoes-pessoais-index" style="display: none">
    <div class="setting-form">
        <form>
            <div class="user-data full-width">
                <div class="about-left-heading">
                    <h3>Informações pessoais</h3>
                </div>
                <div class="prsnl-info">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Nome*</label>
                                <input class="payment-input"
                                       type="text"
                                       placeholder="Nome"
                                       value="<?= set_val($data['nome']) ?>">
                            </div>


                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Sobrenome*</label>
                                <input class="payment-input"
                                       type="text"
                                       placeholder="Sobrenome"
                                       value="<?= set_val($data['sobrenome']) ?>"
                                       name="sobrenome"
                                >
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <label>Data de nascimento*</label>
                                <input class="payment-input datepicker-here"
                                       data-language="en"
                                       type="text"
                                       placeholder="08/29/1991"
                                       value="<?= set_val(date_to_br($data['datanasc'])) ?>"
                                >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <label>País*</label>
                                <div class="select-bg">
                                    <select class="wide " @change="get_cidade" id="selec-pais">
                                        <option value="">Selecione um país</option>
                                        <?php
                                            if(isset($pais)):
                                            foreach($pais as $row)
                                                echo "<option value='{$row['id']}'>{$row['nome']}</option>";
                                            endif;
                                            ?>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12" >
                            <div class="form-group">
                                <label>Cidade*</label>
                                <div class="select-bg">
                                    <select class="wide"  >
                                        <option value="">Selecione</option>
                                        <option v-for="i in informacoes_pessoais.data_cidade"
                                                v-html="i.nome"
                                                :value="i.id"
                                        >
                                        </option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Endereço de E-mail profissional*</label>
                                <input class="payment-input" type="email" placeholder="Endereço de E-mail profissional*">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Número de telefone*</label>
                                <input type="text" class="phone_br payment-input ">
                            </div>
                        </div>


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
                                <label>Gosto musical*</label>
                                <input class="payment-input" type="text" placeholder="Rock, Rap, Solo, Hiphop">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Livros favoritos*</label>
                                <input class="payment-input" type="text"
                                       placeholder="Jogos, Romântico, Ciência, História">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Horas vagas*</label>
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
                                <label>Instituição*</label>
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
                                <label>Profissão*</label>
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
                <button class="setting-save-btn" type="submit">Salvar alterações</button>
            </div>
        </form>
    </div>
</div>