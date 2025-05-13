<?php
if (!auth()) {
    abort(404);
}
?>
<div class="container">
    <?php require 'menu.view.php' ?>

    <div class="main">
        <?php require 'topbar.view.php' ?>

        <div id="cadastro">
            <div id="form_container">
                <div id="form_header">
                    <h1 id="form_title">Cadastrar AU</h1>
                </div>

                <form action="/animal-criar" id="form" method="POST" enctype="multipart/form-data">
                    <div id="input_container">
                        <div class="input_infos">
                            <div class="input_box">
                                <label for="nome" class="form_label">Nome</label>
                                <div class="input_field">
                                    <input type="text" name="nome" id="nome" class="form_control" placeholder="Fulano">
                                </div>
                                <span class="error"></span>
                            </div>

                            <div class="input_box">
                                <label for="faixa" class="form_label">Faixa etária</label>
                                <div class="input_field">
                                    <select class="form_control" name="faixa" id="faixa">
                                        <option selected disabled>Selecione uma faixa etária</option>
                                        <option value="Filhote">Filhote</option>
                                        <option value="Jovem">Jovem</option>
                                        <option value="Adulto">Adulto</option>
                                        <option value="Idoso">Idoso</option>
                                    </select>
                                </div>
                                <span class="error"></span>
                            </div>
                        </div>

                        <div class="input_box input_file">
                            <label for="file" id="label_img" class="form_label file_input">
                                <div class="drop_zone" id="drop_zone">
                                    <input type="file" name="imagem" id="file">
                                    <img src="./assets/img/photo1.png" id="cover" alt="">
                                </div>
                            </label>
                            <span class="error"></span>
                        </div>


                        <div class="input_box">
                            <label for="especie" class="form_label">Espécie</label>
                            <div class="input_field">
                                <select class="form_control" name="especie" id="especie">
                                    <option selected disabled>Selecione uma espécie</option>
                                    <option value="Gato">Gato</option>
                                    <option value="Cachorro">Cachorro</option>
                                </select>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="sexo" class="form_label">Sexo</label>
                            <div class="input_field">
                                <select class="form_control" name="sexo" id="sexo">
                                    <option value="" disabled selected>Selecione o sexo</option>
                                    <option value="Macho">Macho</option>
                                    <option value="Fêmea">Fêmea</option>
                                    <option value="Não identificado">Não identificado</option>
                                </select>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="vacinado" class="form_label">Vacinado</label>
                            <div class="input_field">
                                <select class="form_control" name="vacinado" id="vacinado">
                                    <option value="" disabled selected>Selecione uma opção</option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                    <option value="Não identificado">Não identificado</option>
                                </select>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="castrado" class="form_label">Castrado</label>
                            <div class="input_field">
                                <select class="form_control" name="castrado" id="castrado">
                                    <option value="" disabled selected>Selecione uma opção</option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                    <option value="Não identificado">Não identificado</option>
                                </select>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="local" class="form_label">Ele está no campus ou LT?</label>
                            <div class="input_field">
                                <select class="form_control" name="local" id="local">
                                    <option value="" selected disabled>Selecione uma opção</option>
                                    <option value="Campus">Campus</option>
                                    <option value="Lar Temporário">Lar Temporário</option>
                                </select>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="lt" class="form_label">Informe o LT</label>
                            <div class="input_field">
                                <select disabled class="form_control" name="lt" id="lt">
                                    <option disabled selected>Selecione o LT</option>
                                    <option value="Casa do Fulano">Casa do Fulano</option>
                                    <option value="Casa do Ciclano">Casa do Ciclano</option>
                                </select>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="status" class="form_label">Status</label>
                            <div class="input_field">
                                <select class="form_control" name="status" id="status">
                                    <option disabled selected>Selecione uma opção</option>
                                    <option value="Disponivel">Disponível</option>
                                    <option value="Indisponivel">Indisponível</option>
                                    <option value="Desaparecido">Desaparecido</option>
                                    <option value="Estrelinha">Estrelinha</option>
                                </select>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="causa_obito" class="form_label">Causa do Óbito</label>
                            <div class="input_field">
                                <select disabled class="form_control" name="causa_obito" id="causa_obito">
                                    <option disabled selected>Selecione uma opção</option>
                                    <option value="Disponivel">Velhice</option>
                                    <option value="Indisponivel">Doença</option>
                                    <option value="Desaparecido">Atropelamento</option>
                                </select>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div id="docil" class="radio_container">
                            <span class="form_label">O animal é docil?</span>
                            <div class="radio_inputs">
                                <div class="radio_box">
                                    <input type="radio" name="docil" id="docil_sim" class="form_control" value="1">
                                    <label for="docil_sim" class="form_label">Sim</label>
                                </div>

                                <div class="radio_box">
                                    <input type="radio" name="docil" id="docil_nao" class="form_control" value="0">
                                    <label for="docil_nao" class="form_label">Não</label>
                                </div>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div id="abandono" class="radio_container">
                            <span class="form_label">O animal foi abandonado?</span>
                            <div class="radio_inputs">
                                <div class="radio_box">
                                    <input type="radio" name="abandono" id="abandono_sim" class="form_control" value="1">
                                    <label for="abandono_sim" class="form_label">Sim</label>
                                </div>

                                <div class="radio_box">
                                    <input type="radio" name="abandono" id="abandono_nao" class="form_control" value="0">
                                    <label for="abandono_nao" class="form_label">Não</label>
                                </div>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="origem" class="form_label">Local de Origem</label>
                            <div class="input_field">
                                <input type="text" name="origem" id="origem" class="form_control" placeholder="ex: RU velho">
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="data_encontro" class="form_label">Data de encontro</label>
                            <div class="input_field">
                                <input type="date" name="data_encontro" id="data_encontro" class="form_control" placeholder="">
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box col-2">
                            <label for="observacoes" class="form_label">Observações Gerais</label>
                            <div class="input_field">
                                <textarea class="form_control" name="observacoes" id="observacoes" cols="30" rows="5"></textarea>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn_default"><i class="fa-solid fa-check"></i>Efetuar Cadastro</button>
                </form>
            </div>

        </div>

    </div>
</div>

<script defer src="../assets/js/script.js"></script>
<script defer src="../assets/js/dropFile.js"></script>
<script defer src="../assets/js/validarFormularioAnimais.js"></script>