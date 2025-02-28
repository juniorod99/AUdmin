<?php
if (!auth()) {
    abort(404);
}
// dd($adotante);
?>
<div class="container">
    <?php require 'menu.view.php' ?>

    <div class="main">
        <?php require 'topbar.view.php' ?>

        <div id="visualizar">
            <div id="container">
                <div id="header">
                    <h1 id="title">Dados Adotante</h1>
                </div>
                <div id="conteudo">
                    <div id="data_container">

                        <div class="adotante_dados">
                            <div>
                                <h4>Nome</h4>
                                <span><?= $adotante->nome ?></span>
                            </div>
                            <div>
                                <h4>Idade</h4>
                                <span><?= $adotante->idade ?></span>
                            </div>
                            <div>
                                <h4>Sexo</h4>
                                <span><?= $adotante->sexo ?></span>
                            </div>
                            <div>
                                <h4>Rede Social</h4>
                                <?php if (isset($adotante->rede_social)): ?>
                                    <span><?= $adotante->rede_social ?></span>
                                <?php else : ?>
                                    <span>-</span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if (isset($adotante->foto)): ?>
                            <div class="adotante_foto">
                                <div>
                                    <img src="../assets/img/<?= $adotante->foto ?>" alt="">
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
                                <h4>Telefone</h4>
                                <span><?= $adotante->telefone ?></span>
                            </div>
                            <div>
                                <h4>Email</h4>
                                <span><?= $adotante->email ?></span>
                            </div>
                            <div>
                                <h4>Bairro</h4>
                                <span><?= $adotante->bairro ?></span>
                            </div>
                            <div>
                                <h4>Rua</h4>
                                <span><?= $adotante->rua ?></span>
                            </div>
                        </div>
                        <div class="adotante_obs col-2">
                            <div>
                                <h4>Observações</h4>
                                <?php if (isset($adotante->observacao)): ?>
                                    <span><?= $adotante->observacao ?></span>
                                <?php else : ?>
                                    <span>-</span>
                                <?php endif; ?>
                            </div>
                            <div>
                                <?php if (isset($adotante->documentos)): ?>
                                    <a href="../assets/img/<?= $adotante->documentos ?>" target="_blank">Abrir Documento</a>
                                <?php else : ?>
                                    <span>Nenhum documento cadastrado.</span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<script defer src="../assets/js/script.js"></script>