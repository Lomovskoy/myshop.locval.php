<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <h3>Личный кабинет</h3>

            <h4>Привет, <?php echo $user['name'];?>!</h4>
            <ul>
                <li><a class="btn btn-default" href="/cabinet/edit">Редактировать личные данные</a></li>
                <!--<li><a href="/cabinet/history">Список покупок</a></li>-->
            </ul>
            <?php if ($user['role'] == 'admin') :?>
            <ul>
                <li><a class="btn btn-default" href="../admin/">Кабинет администратора</a></li>
            </ul>
            <?php endif;?>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>