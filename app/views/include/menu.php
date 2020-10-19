<nav class="main-menu">
    <ul class="menu">
        <div class="flexbox">
            <?php foreach (MENU_ITEMS as $item): ?>
                <?php $link = str_replace(' ', '-', strtolower($item)); ?>
                <li class="menu-item">
                    <a href="<?= $link ?>" class="menu-link">
                        $item
                    </a>
                </li>
            <?php endforeach;?>
        </div>
    </ul>
</nav>
