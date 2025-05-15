<?php
if (!auth()) {
    abort(404);
}
// dd($animal);
?>
<div class="container">
    <?php require 'menu.view.php' ?>

    <div class="main">
        <?php require 'topbar.view.php' ?>

        <div id="cadastro">
            <div id="form_container">
                <div id="form_header">
                    <h1 id="form_title">Alterar Dados Animal</h1>
                </div>

                <form action="/update-animal" id="form" method="POST" enctype="multipart/form-data">
                    <div id="input_container">
                        <input type="hidden" name="id" value="<?= $animal->id ?>">
                        <div class="input_infos">
                            <div class="input_box">
                                <label for="nome" class="form_label">Nome</label>
                                <div class="input_field">
                                    <input type="text" name="nome" id="nome" class="form_control" value="<?= $animal->nome ?>">
                                </div>
                                <span class="error"></span>
                            </div>

                            <div class="input_box">
                                <label for="faixa_etaria" class="form_label">Faixa etária</label>
                                <div class="input_field">
                                    <select class="form_control" name="faixa_etaria" id="faixa_etaria">
                                        <option selected disabled>Selecione uma faixa etária</option>
                                        <option value="Filhote" <?php echo ($animal->faixa_etaria == 'Filhote') ? 'selected' : ''; ?>>Filhote</option>
                                        <option value="Jovem" <?php echo ($animal->faixa_etaria == 'Jovem') ? 'selected' : ''; ?>>Jovem</option>
                                        <option value="Adulto" <?php echo ($animal->faixa_etaria == 'Adulto') ? 'selected' : ''; ?>>Adulto</option>
                                        <option value="Idoso" <?php echo ($animal->faixa_etaria == 'Idoso') ? 'selected' : ''; ?>>Idoso</option>
                                    </select>
                                </div>
                                <span class="error"></span>
                            </div>
                        </div>

                        <div class="input_box input_file">
                            <label for="file" id="label_img" class="form_label file_input">
                                <div class="drop_zone" id="drop_zone">
                                    <input type="file" name="imagem" id="file">
                                    <?php if (isset($animal->foto)): ?>
                                        <img src="./assets/img/<?= $animal->foto ?>" id="cover" alt="">
                                    <?php else: ?>
                                        <img src="./assets/img/photo1.png" id="cover" alt="">
                                    <?php endif; ?>
                                </div>
                            </label>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="especie" class="form_label">Espécie</label>
                            <div class="input_field">
                                <select class="form_control" name="especie" id="especie">
                                    <option selected disabled>Selecione uma espécie</option>
                                    <option value="Gato" <?php echo ($animal->especie == 'Gato') ? 'selected' : ''; ?>>Gato</option>
                                    <option value="Cachorro" <?php echo ($animal->especie == 'Cachorro') ? 'selected' : ''; ?>>Cachorro</option>
                                </select>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="sexo" class="form_label">Sexo</label>
                            <div class="input_field">
                                <select class="form_control" name="sexo" id="sexo">
                                    <option value="" disabled selected>Selecione o sexo</option>
                                    <option value="Macho" <?php echo ($animal->sexo == 'Macho') ? 'selected' : ''; ?>>Macho</option>
                                    <option value="Fêmea" <?php echo ($animal->sexo == 'Fêmea') ? 'selected' : ''; ?>>Fêmea</option>
                                    <option value="Não identificado" <?php echo ($animal->sexo == 'Não identificado') ? 'selected' : ''; ?>>Não identificado</option>
                                </select>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="local_origem" class="form_label">Local de Origem</label>
                            <div class="input_field">
                                <input type="text" name="local_origem" id="local_origem" class="form_control" placeholder="ex: RU velho" value="<?= $animal->local_origem ?>">
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="data_encontro" class="form_label">Data de encontro</label>
                            <div class="input_field">
                                <input type="date" name="data_encontro" id="data_encontro" class="form_control" placeholder="" value="<?= $animal->data_encontro ?>">
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="vacinado" class="form_label">Vacinado</label>
                            <div class="input_field">
                                <select class="form_control" name="vacinado" id="vacinado">
                                    <option value="" disabled selected>Selecione uma opção</option>
                                    <option value="Sim" <?php echo ($animal->vacinado == 'Sim') ? 'selected' : ''; ?>>Sim</option>
                                    <option value="Não" <?php echo ($animal->vacinado == 'Não') ? 'selected' : ''; ?>>Não</option>
                                    <option value="Não identificado" <?php echo ($animal->vacinado == 'Não identificado') ? 'selected' : ''; ?>>Não identificado</option>
                                </select>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="castrado" class="form_label">Castrado</label>
                            <div class="input_field">
                                <select class="form_control" name="castrado" id="castrado">
                                    <option value="" disabled selected>Selecione uma opção</option>
                                    <option value="Sim" <?php echo ($animal->castrado == 'Sim') ? 'selected' : ''; ?>>Sim</option>
                                    <option value="Não" <?php echo ($animal->castrado == 'Não') ? 'selected' : ''; ?>>Não</option>
                                    <option value="Não identificado" <?php echo ($animal->castrado == 'Não identificado') ? 'selected' : ''; ?>>Não identificado</option>
                                </select>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="status" class="form_label">Status</label>
                            <div class="input_field">
                                <select class="form_control" name="status" id="status">
                                    <option disabled selected>Selecione uma opção</option>
                                    <option value="Disponível" <?php echo ($animal->status == 'Disponível') ? 'selected' : ''; ?>>Disponível</option>
                                    <option value="Indisponível" <?php echo ($animal->status == 'Indisponível') ? 'selected' : ''; ?>>Indisponível</option>
                                    <option value="Desaparecido" <?php echo ($animal->status == 'Desaparecido') ? 'selected' : ''; ?>>Desaparecido</option>
                                    <option value="Estrelinha" <?php echo ($animal->status == 'Estrelinha') ? 'selected' : ''; ?>>Estrelinha</option>
                                </select>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="causa_obito" class="form_label">Causa do Óbito</label>
                            <div class="input_field">
                                <select <?php echo (is_null($animal->causa_obito)) ? 'disabled' : ''; ?> class="form_control" name="causa_obito" id="causa_obito">
                                    <option disabled selected>Selecione uma opção</option>
                                    <option value="Velhice" <?php echo ($animal->causa_obito == 'Velhice') ? 'selected' : ''; ?>>Velhice</option>
                                    <option value="Doença" <?php echo ($animal->causa_obito == 'Doença') ? 'selected' : ''; ?>>Doença</option>
                                    <option value="Atropelamento" <?php echo ($animal->causa_obito == 'Atropelamento') ? 'selected' : ''; ?>>Atropelamento</option>
                                </select>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div id="docil" class="radio_container">
                            <span class="form_label">O animal é docil?</span>
                            <div class="radio_inputs">
                                <div class="radio_box">
                                    <input type="radio" name="docil" id="docil_sim" class="form_control" value="1" <?php echo ($animal->docil == 1) ? 'checked' : ''; ?>>
                                    <label for="docil_sim" class="form_label">Sim</label>
                                </div>

                                <div class="radio_box">
                                    <input type="radio" name="docil" id="docil_nao" class="form_control" value="0" <?php echo ($animal->docil == 0) ? 'checked' : ''; ?>>
                                    <label for="docil_nao" class="form_label">Não</label>
                                </div>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div id="abandono" class="radio_container">
                            <span class="form_label">O animal foi abandonado?</span>
                            <div class="radio_inputs">
                                <div class="radio_box">
                                    <input type="radio" name="abandono" id="abandono_sim" class="form_control" value="1" <?php echo ($animal->abandono == 1) ? 'checked' : ''; ?>>
                                    <label for="abandono_sim" class="form_label">Sim</label>
                                </div>

                                <div class="radio_box">
                                    <input type="radio" name="abandono" id="abandono_nao" class="form_control" value="0" <?php echo ($animal->abandono == 0) ? 'checked' : ''; ?>>
                                    <label for="abandono_nao" class="form_label">Não</label>
                                </div>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="local" class="form_label">Ele está no campus ou LT?</label>
                            <div class="input_field">
                                <select class="form_control" name="local" id="local">
                                    <option value="" selected disabled>Selecione uma opção</option>
                                    <option value="Campus" <?php echo ($animal->local == 'Campus') ? 'selected' : ''; ?>>Campus</option>
                                    <option value="Lar Temporário" <?php echo ($animal->local == 'Lar Temporário') ? 'selected' : ''; ?>>Lar Temporário</option>
                                </select>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box">
                            <label for="lar_temp" class="form_label">Informe o LT</label>
                            <div class="input_field">
                                <select class="form_control" name="lar_temp" id="lar_temp">
                                    <option disabled selected>Selecione o LT</option>
                                    <option value="Casa do Fulano" <?php echo ($animal->lar_temp == 'Casa do Fulano') ? 'selected' : ''; ?>>Casa do Fulano</option>
                                    <option value="Casa do Ciclano" <?php echo ($animal->lar_temp == 'Casa do Ciclano') ? 'selected' : ''; ?>>Casa do Ciclano</option>
                                </select>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="input_box col-2">
                            <label for="observacao" class="form_label">Observações Gerais</label>
                            <div class="input_field">
                                <textarea class="form_control" name="observacao" id="observacao" cols="30" rows="5"><?= $animal->observacao ?></textarea>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn_default"><i class="fa-solid fa-check"></i>Atualizar Dados</button>
                </form>
            </div>

        </div>

    </div>
</div>

<script defer src="../assets/js/script.js"></script>
<script defer src="../assets/js/dropFile.js"></script>
<script defer src="../assets/js/validarFormularioAnimais.js"></script>
<script defer src="../assets/js/desabilitarSubmit.js"></script>