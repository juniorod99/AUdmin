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
                    <h2>Adotantes</h2>
                    <div class="btn_cadastrar">
                        <a href="/cadastro-adotante" class="btn"><ion-icon name="add-outline"></ion-icon><span>Cadastrar adotante</span></a>
                    </div>
                </div>

                <table>
                    <thead>
                        <tr>
                            <td></td>
                            <td>Nome</td>
                            <td>Sexo</td>
                            <td>Idade</td>
                            <td>Telefone</td>
                            <td>Email</td>
                            <td>Ações</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($adotantes as $adotante): ?>
                            <tr>
                                <td>
                                    <div class="imgBox">
                                        <?php if (!is_null($adotante->foto)): ?>
                                            <img src="../assets/img/<?= $adotante->foto ?>">
                                        <?php else: ?>
                                            <img src="../assets/img/profile.png">
                                        <?php endif; ?>
                                    </div>
                                </td>
                                <td><?= formatarNome($adotante->nome) ?></td>
                                <td><?= $adotante->sexo ?></td>
                                <td><?= $adotante->idade ?></td>
                                <td><?= $adotante->telefone ?></td>
                                <td><?= $adotante->email ?></td>
                                <td class="table_options">
                                    <a href="visualizar-adotante?id=<?= $adotante->id ?>"><ion-icon name="document"></ion-icon></a>
                                    <a href="alterar-adotante?id=<?= $adotante->id ?>"><ion-icon name="create"></ion-icon></a>
                                    <a href="deletar-adotante?id=<?= $adotante->id ?>"><ion-icon name="trash"></ion-icon></a>
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