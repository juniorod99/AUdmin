<div class="content">
    <div class="wrapper">
        <h1>Login</h1>
        <form id="form_cadastro" method="POST">
            <?php if ($mensagem = flash()->get('mensagem')): ?>
                <div class="sucesso">
                    <?= $mensagem ?>
                </div>
            <?php endif; ?>

            <div>
                <?php if ($validacoes = flash()->get('validacoes_login')): ?>
                    <div class="erro">
                        <ul>
                            <li>Erros:</li>
                            <?php foreach ($validacoes as $validacao): ?>
                                <li><?= $validacao ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
            <div>
                <label for="email-input">
                    <span>@</span>
                </label>
                <input type="email" name="email" id="email-input" placeholder="Email">
            </div>

            <div>
                <label for="password-input">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                        <path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm240-200q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80Z" />
                    </svg>
                </label>
                <input type="password" name="senha" id="password-input" placeholder="Senha">
            </div>
            <button type="submit">Entrar</button>

        </form>
        <p>Não possui uma conta? <a href="/cadastro">Cadastre-se</a></p>
    </div>
</div>