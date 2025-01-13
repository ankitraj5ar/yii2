<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$this->beginContent('@backend/views/layouts/base.php');
?>
<main role="main" class="d-flex mt-5">
    <aside class="shadow">
        <?php echo $this->render('sidebar'); ?>
    </aside>

    <div class="content-wrapper p-3 flex-grow-1">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>
<?php $this->endContent() ?>