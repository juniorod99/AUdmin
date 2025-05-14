<?php
if (!auth()) {
    abort(404);
}
// dd($animais);
?>
<div class="container">
    <?php require 'menu.view.php' ?>

    <div class="main">
        <?php require 'topbar.view.php' ?>


        <div class="details animais">
            <div class="recentOrders">
                <div class="titleHeader">
                    <h2>Animais</h2>
                    <div class="btn_cadastrar">
                        <a href="/cadastro-animal" class="btn"><ion-icon name="add-outline"></ion-icon><span>Cadastrar animal</span></a>
                    </div>
                </div>

                <table>
                    <thead>
                        <tr>
                            <td></td>
                            <td>Nome</td>
                            <td>Espécie</td>
                            <td>Idade</td>
                            <td>Sexo</td>
                            <td>Castrado</td>
                            <td>Local</td>
                            <td>Situação</td>
                            <td>Ações</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($animais as $animal): ?>
                            <tr>
                                <td>
                                    <div class="imgBox">
                                        <?php if (!is_null($animal->foto)): ?>
                                            <img src="../assets/img/<?= $animal->foto ?>">
                                        <?php else: ?>
                                            <img src="../assets/img/animais/icon.png">
                                        <?php endif; ?>
                                    </div>
                                </td>
                                <td><?= $animal->nome ?></td>
                                <td><?= $animal->especie ?></td>
                                <td><?= $animal->faixa_etaria ?></td>
                                <td><?= $animal->sexo ?></td>

                                <td>
                                    <?php if ($animal->castrado == "Sim"): ?>
                                        ✅
                                    <?php elseif ($animal->castrado == "Não"): ?>
                                        ❌
                                    <?php else: ?>
                                        ❓
                                    <?php endif; ?>
                                </td>
                                <td><?= $animal->local ?></td>
                                <td>
                                    <?php if ($animal->status == 'Disponível'): ?>
                                        <span class="status delivered">Disponivel</span>
                                    <?php elseif ($animal->status == 'Indisponível'): ?>
                                        <span class="status return">Indisponivel</span>
                                    <?php elseif ($animal->status == 'Estrelinha'): ?>
                                        <span class="status pending">Estrelinha</span>
                                    <?php endif; ?>
                                </td>
                                <td class="table_options">
                                    <a href="visualizar-animal?id=<?= $animal->id ?>"><ion-icon name="document"></ion-icon></a>
                                    <a href="alterar-animal?id=<?= $animal->id ?>"><ion-icon name="create"></ion-icon></a>
                                    <button class="excluirBtn" value="<?= $animal->id ?>"><ion-icon name="trash"></ion-icon></button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script defer src="../assets/js/script.js"></script>