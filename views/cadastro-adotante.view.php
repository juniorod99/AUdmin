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
                    <h1 id="form_title">Cadastrar Adotante</h1>
                </div>

                <form action="/adotante-criar" id="form" method="POST" enctype="multipart/form-data">
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
                                    <input type="number" name="idade" id="idade" class="form_control" placeholder="ex: 30">
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
                            <label for="sexo" class="form_label">Sexo</label>
                            <div class="input_field">
                                <select class="form_control" name="sexo" id="sexo">
                                    <option value="" disabled selected>Selecione o sexo</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                </select>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="rede_social" class="form_label">Rede Social</label>
                            <div class="input_field">
                                <input type="text" name="rede_social" id="rede_social" class="form_control" placeholder="Link da rede social">
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="bairro" class="form_label">Bairro</label>
                            <div class="input_field">
                                <input type="text" name="bairro" id="bairro" class="form_control" placeholder="ex: Aldeota">
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="rua" class="form_label">Rua</label>
                            <div class="input_field">
                                <input type="text" name="rua" id="rua" class="form_control" placeholder="ex: Rua Acolá, 123">
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="telefone" class="form_label">Telefone</label>
                            <div class="input_field">
                                <input type="tel" name="telefone" id="telefone" class="form_control" placeholder="ex: (85) 99999-9999">
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="email" class="form_label">Email</label>
                            <div class="input_field">
                                <input type="email" name="email" id="email" class="form_control" placeholder="ex: email@email.com">
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box col-2">
                            <label for="observacao" class="form_label">Observações Gerais</label>
                            <div class="input_field">
                                <textarea class="form_control" name="observacao" id="observacao" cols="30" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="input_box col-2">
                            <label for="documentos" class="form_label">Documentos</label>
                            <div class="input_field">
                                <input type="file" class="form_control" name="documentos" id="documentos" cols="30" rows="5">
                            </div>
                            <span class="error"></span>
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
<script defer src="../assets/js/validarFormularioAdotantes.js"></script>