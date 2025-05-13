<?php
if (!auth()) {
    abort(404);
}
?>
<div class="container">
    <?php require 'menu.view.php' ?>

    <div class="main">
        <?php require 'topbar.view.php' ?>

        <!-- ===== Cards ======  -->
        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers">1,504</div>
                    <div class="cardName">Animais atendidos</div>
                </div>

                <div class="iconBox">
                    <svg width="56px" height="56px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.41003 16.75C4.17003 19.64 6.35003 22 9.25003 22H14.04C17.3 22 19.54 19.37 19 16.15C18.43 12.77 15.17 10 11.74 10C8.02003 10 4.72003 13.04 4.41003 16.75Z" stroke="#999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10.47 7.5C11.8507 7.5 12.97 6.38071 12.97 5C12.97 3.61929 11.8507 2.5 10.47 2.5C9.08926 2.5 7.96997 3.61929 7.96997 5C7.96997 6.38071 9.08926 7.5 10.47 7.5Z" stroke="#999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17.3 8.69995C18.4046 8.69995 19.3 7.80452 19.3 6.69995C19.3 5.59538 18.4046 4.69995 17.3 4.69995C16.1955 4.69995 15.3 5.59538 15.3 6.69995C15.3 7.80452 16.1955 8.69995 17.3 8.69995Z" stroke="#999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M21 12.7C21.8284 12.7 22.5 12.0284 22.5 11.2C22.5 10.3715 21.8284 9.69995 21 9.69995C20.1716 9.69995 19.5 10.3715 19.5 11.2C19.5 12.0284 20.1716 12.7 21 12.7Z" stroke="#999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3.96997 10.7C5.07454 10.7 5.96997 9.80452 5.96997 8.69995C5.96997 7.59538 5.07454 6.69995 3.96997 6.69995C2.8654 6.69995 1.96997 7.59538 1.96997 8.69995C1.96997 9.80452 2.8654 10.7 3.96997 10.7Z" stroke="#999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">80</div>
                    <div class="cardName">Adoções</div>
                </div>

                <div class="iconBox">
                    <svg width="56px" height="56px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.62 20.81C12.28 20.93 11.72 20.93 11.38 20.81C8.48 19.82 2 15.69 2 8.68998C2 5.59998 4.49 3.09998 7.56 3.09998C9.38 3.09998 10.99 3.97998 12 5.33998C13.01 3.97998 14.63 3.09998 16.44 3.09998C19.51 3.09998 22 5.59998 22 8.68998C22 15.69 15.52 19.82 12.62 20.81Z" stroke="#999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">284</div>
                    <div class="cardName">Castrações</div>
                </div>

                <div class="iconBox">
                    <svg width="56px" height="56px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 22H22" stroke="#999" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17 2H7C4 2 3 3.79 3 6V22H21V6C21 3.79 20 2 17 2Z" stroke="#999" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14.06 15H9.92998C9.41998 15 8.98999 15.42 8.98999 15.94V22H14.99V15.94C15 15.42 14.58 15 14.06 15Z" stroke="#999" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 6V11" stroke="#999" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9.5 8.5H14.5" stroke="#999" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">32</div>
                    <div class="cardName">Voluntários</div>
                </div>

                <div class="iconBox">
                    <svg width="56px" height="56px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- ====== Order Details ======= -->
        <div class="details">
            <div class="recentOrders">
                <div class="titleHeader">
                    <h2>Animais</h2>
                    <a href="/animais" class="btn">Ver todos</a>
                </div>

                <table>
                    <thead>
                        <tr>
                            <td></td>
                            <td>Nome</td>
                            <td>Espécie</td>
                            <td>Castrado</td>
                            <td>Situação</td>
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
                                <td>
                                    <?php if ($animal->castrado == 1): ?>
                                        ✅
                                    <?php else: ?>
                                        ❌
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($animal->status == 'Disponível'): ?>
                                        <span class="status delivered">Disponivel</span>
                                    <?php elseif ($animal->status == 'Indisponível'): ?>
                                        <span class="status return">Indisponivel</span>
                                    <?php elseif ($animal->status == 'Estrelinha'): ?>
                                        <span class="status pending">Estrelinha</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- ====== New Customers =====  -->
            <div class="recentCustomers">
                <div class="titleHeader">
                    <h2>Adotantes Cadastrados</h2>
                </div>

                <table>
                    <?php foreach ($adotantes as $adotante): ?>
                        <tr>
                            <td width="60px">
                                <div class="imgBox">
                                    <?php if (!is_null($adotante->foto)): ?>
                                        <img src="../assets/img/<?= $adotante->foto ?>">
                                    <?php else: ?>
                                        <img src="../assets/img/profile.png">
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td>
                                <h4><?= formatarNome($adotante->nome) ?> <br> <span><?= $adotante->bairro ?></span></h4>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>

    </div>
</div>

<script defer src="assets/js/script.js"></script>