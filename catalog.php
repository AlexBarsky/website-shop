<?php 
    include "path.php";
    include "app/controllers/topics.php";
?>

<!doctype html>
<html lang="en">
        <?php include "app/include/head.php"; ?>
    <body>
    
        <!-- Заголовок -->
        <?php include "app/include/header.php"; ?>

        <!-- Основной блок -->
        <div class="container text-center">
            <div class="content-title row">
                <div class="col-md-6 offset-md-3">
                    <h2>Товары</h2>
                </div>
            </div>
            <?php foreach ($topics as $key => $topic): ?>
                <?php $items = select('items', ['topic_id' => $topic['id']]); ?>
                <?php if(!$items): ?>
                    <?php continue; ?>
                <?php endif; ?>
                <div class="row"><h3><?=$topic['title']?></h3></div>
                <div class="content row row-cols-4">
                    <?php foreach ($items as $key => $item): ?>
                        <div class="item-content col">
                            <a href="single.php?id=<?=$item['id']; ?>"><img src="<?=BASE_URL . 'assets/images/items/' . $item['img']; ?>" alt="item1" class="img-thumbnail"></a>
                            <h3>
                                <a href="single.php?id=<?=$item['id']; ?>"><?=$item['title']; ?></a>
                            </h3>
                            <p class="text-desc">
                                <?=$item['price']?>
                                <i class="fa-solid fa-ruble-sign"></i>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Нижний колонтитул -->
        <?php include "app/include/footer.php"; ?>

    </body>
</html>