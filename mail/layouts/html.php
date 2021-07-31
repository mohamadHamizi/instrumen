<?php

use yii\helpers\Html;

dmstr\web\AdminLteAsset::register($this);

$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= Yii::$app->charset ?>" />
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <?=
    $this->render(
        'content.php',
        ['content' => $content, 'directoryAsset' => $directoryAsset]
    )
    ?>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>