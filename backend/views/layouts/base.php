<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use yii\bootstrap5\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <div class="d-flex flex-column h-100">
        <div class="d-flex flex-column h-100">
            <header class="mb-2">
                <?php echo $this->render('header'); ?>
            </header>
            <?php echo $content ?>
        </div>
    </div>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
