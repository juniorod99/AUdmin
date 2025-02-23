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
                </div>

                <table>
                    <thead>
                        <tr>
                            <td></td>
                            <td>Nome</td>
                            <td>Espécie</td>
                            <td>Idade</td>
                            <td>Sexo</td>
                            <td>Castração</td>
                            <td>Local</td>
                            <td>Disponivel</td>
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
                                    <?php if ($animal->castrado == 1): ?>
                                        ✅
                                    <?php else: ?>
                                        ❌
                                    <?php endif; ?>
                                </td>
                                <td><?= $animal->local ?></td>
                                <td>
                                    <?php if ($animal->disp_adocao == 1): ?>
                                        <span class="status delivered">Disponivel</span>
                                    <?php elseif ($animal->disp_adocao == 0): ?>
                                        <span class="status return">Indisponivel</span>
                                    <?php endif; ?>
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