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

        <div id="visualizar">
            <div id="container">
                <div id="header">
                    <h1 id="title">Dados Animal</h1>
                </div>
                <div id="conteudo">
                    <div id="data_container">

                        <div class="adotante_dados">
                            <div>
                                <h4>Nome</h4>
                                <span><?= $animal->nome ?></span>
                            </div>
                            <div>
                                <h4>Faixa Etaria</h4>
                                <span><?= $animal->faixa_etaria ?></span>
                            </div>
                            <div>
                                <h4>Especie</h4>
                                <span><?= $animal->especie ?></span>
                            </div>
                            <div>
                                <h4>Sexo</h4>
                                <span><?= $animal->sexo ?></span>
                            </div>
                        </div>
                        <?php if (isset($animal->foto)): ?>
                            <div class="adotante_foto">
                                <div>
                                    <img src="../assets/img/<?= $animal->foto ?>" alt="">
                                </div>
                            </div>
                        <?php else : ?>
                            <div style="display: none;">
                                <div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="adotante_infos col-2">
                            <div>
                                <h4>Status</h4>
                                <span><?= $animal->status ?></span>
                            </div>
                            <?php if (isset($animal->causa_obito)): ?>
                                <div>
                                    <h4>Causa Óbito</h4>
                                    <span><?= $animal->causa_obito ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="adotante_infos col-2">
                            <div>
                                <h4>Castrado</h4>
                                <span><?= $animal->castrado ?></span>
                            </div>
                            <div>
                                <h4>Vacinado</h4>
                                <span><?= $animal->vacinado ?></span>
                            </div>
                            <div>
                                <h4>Docil</h4>
                                <?php if ($animal->docil == "1"): ?>
                                    <span>Sim</span>
                                <?php else: ?>
                                    <span>Não</span>
                                <?php endif; ?>
                            </div>
                            <div>
                                <h4>Abandono</h4>
                                <?php if ($animal->abandono == "1"): ?>
                                    <span>Sim</span>
                                <?php else: ?>
                                    <span>Não</span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="adotante_infos col-2">
                            <div>
                                <h4>Local</h4>
                                <span><?= $animal->local ?></span>
                            </div>
                            <?php if (isset($animal->lar_temp)): ?>
                                <div>
                                    <h4>LT</h4>
                                    <span><?= $animal->lar_temp ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="adotante_obs col-2">
                            <div>
                                <h4>Observações</h4>
                                <?php if (isset($animal->observacao)): ?>
                                    <span><?= $animal->observacao ?></span>
                                <?php else : ?>
                                    <span>-</span>
                                <?php endif; ?>
                            </div>
                            <div>
                                <h4>Data de encontro</h4>
                                <span><?= date('d/m/Y', strtotime($animal->data_encontro)) ?></span>
                            </div>
                            <div>
                                <h4>Data de cadastro</h4>
                                <span><?= date('d/m/Y H:i', strtotime($animal->data_cadastro . ' -3 hours')); ?></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<script defer src="../assets/js/script.js"></script>