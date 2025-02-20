<div class="topbar">
    <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
    </div>
    <div class="search">
        <label for="">
            <input type="text" name="" id="" placeholder="Pesquisar">
            <ion-icon name="search-outline"></ion-icon>
        </label>
    </div>
    <div class="user_info">
        <div class="user">
            <?php if (is_null(auth()->foto)): ?>
                <img src="./assets/img/momo.jpeg" alt="">
            <?php else: ?>
                <img src="./assets/<?= auth()->foto ?>" alt="">
            <?php endif; ?>
        </div>
        <p>Oi, <?= explode(" ", auth()->nome)[0] ?></p>
    </div>
</div>