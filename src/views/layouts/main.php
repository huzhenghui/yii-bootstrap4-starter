<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap4\Html;

use huzhenghui\yii\bootstrap4\starter\Asset;
use huzhenghui\yii\bootstrap4\starter\nav\StarterNav;

Asset::register($this);
$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <?= StarterNav::widget() ?>
    <main role="main" class="container">
        <div class="starter-template">
            <?= $content ?>
        </div>
    </main>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>