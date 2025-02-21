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
                                <label for="idade" class="form_label">Idade</label>
                                <div class="input_field">
                                    <input type="number" name="idade" id="idade" class="form_control" placeholder="ex: 2">
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
                                </select>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div id="vacinado" class="radio_container">
                            <label for="vacinado" class="form_label">Vacinado</label>
                            <div class="radio_inputs">
                                <div class="radio_box">
                                    <input type="radio" name="vacinado" id="vac_sim" class="form_control" value="Sim">
                                    <label for="vac_sim" class="form_label">Sim</label>
                                </div>

                                <div class="radio_box">
                                    <input type="radio" name="vacinado" id="vac_nao" class="form_control" value="Não">
                                    <label for="vac_nao" class="form_label">Não</label>
                                </div>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div id="castrado" class="radio_container">
                            <label for="" class="form_label">Castrado</label>
                            <div class="radio_inputs">
                                <div class="radio_box">
                                    <input type="radio" name="castrado" id="cast_sim" class="form_control" value="Sim">
                                    <label for="cast_sim" class="form_label">Sim</label>
                                </div>

                                <div class="radio_box">
                                    <input type="radio" name="castrado" id="cast_nao" class="form_control" value="Não">
                                    <label for="cast_nao" class="form_label">Não</label>
                                </div>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="local" class="form_label">Ele está no campus ou LT?</label>
                            <div class="input_field">
                                <select class="form_control" name="local" id="select_local">
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
                                <select disabled class="form_control" name="lt" id="select_lt">
                                    <option disabled selected>Selecione o LT</option>
                                    <option value="Casa do Fulano">Casa do Fulano</option>
                                    <option value="Casa do Ciclano">Casa do Ciclano</option>
                                </select>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div id="adocao" class="radio_container">
                            <label for="" class="form_label">Disponivel para adoção?</label>
                            <div class="radio_inputs">
                                <div class="radio_box">
                                    <input type="radio" name="adocao" id="disp_sim" class="form_control" value="Sim">
                                    <label for="disp_sim" class="form_label">Sim</label>
                                </div>

                                <div class="radio_box">
                                    <input type="radio" name="adocao" id="disp_nao" class="form_control" value="Não">
                                    <label for="disp_nao" class="form_label">Não</label>
                                </div>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div id="docil" class="radio_container">
                            <label for="" class="form_label">O animal é docil?</label>
                            <div class="radio_inputs">
                                <div class="radio_box">
                                    <input type="radio" name="docil" id="docil_sim" class="form_control" value="Sim">
                                    <label for="docil_sim" class="form_label">Sim</label>
                                </div>

                                <div class="radio_box">
                                    <input type="radio" name="docil" id="docil_nao" class="form_control" value="Não">
                                    <label for="docil_nao" class="form_label">Não</label>
                                </div>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box col-2">
                            <label for="origem" class="form_label">Local de Origem</label>
                            <div class="input_field">
                                <input type="text" name="origem" id="origem" class="form_control" placeholder="ex: UFC">
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box col-2">
                            <label for="observacao" class="form_label">Observações Gerais</label>
                            <div class="input_field">
                                <textarea class="form_control" name="observacoes" id="" cols="30" rows="5"></textarea>
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