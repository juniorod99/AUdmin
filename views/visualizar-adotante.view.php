<?php
if (!auth()) {
    abort(404);
}
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
                                <span>Raimundo Junior</span>
                            </div>
                            <div>
                                <h4>Idade</h4>
                                <span>26</span>
                            </div>
                            <div>
                                <h4>Sexo</h4>
                                <span>Masculino</span>
                            </div>
                            <div>
                                <h4>Rede Social</h4>
                                <span>@natojunior_</span>
                            </div>
                        </div>
                        <div class="adotante_foto">
                            <div>
                                <img src="../assets/img/adotantes/9778fde1671f55bd620a242833ea5a54.png" alt="">
                            </div>
                        </div>
                        <div class="adotante_infos col-2">
                            <div>
                                <h4>Telefone</h4>
                                <span>(85) 91234-6789</span>
                            </div>
                            <div>
                                <h4>Email</h4>
                                <span>junior@email.com</span>
                            </div>
                            <div>
                                <h4>Bairro</h4>
                                <span>Aerolandia</span>
                            </div>
                            <div>
                                <h4>Rua</h4>
                                <span>Rua Capitão Vasconcelos, 475</span>
                            </div>
                        </div>
                        <div class="adotante_obs col-2">
                            <div>
                                <h4>Observações</h4>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ullam id ipsam sint totam animi facere eos sed explicabo magnam quas a ut, eius maxime molestiae dolore dolor similique. Nisi.</span>
                            </div>
                            <div>
                                <a href="../assets/img/adotantes-docs/3188f96bebad51bedbba1876825f4853.pdf" target="_blank">Abrir Documento</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<script defer src="../assets/js/script.js"></script>