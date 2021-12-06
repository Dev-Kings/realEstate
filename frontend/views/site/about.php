<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php

$url = Yii::getAlias("@web") . '/../';

?>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <?= Html::img('@web/uploads/House On Sale.jpg', ['alt'=>'some', 'class'=>'thing']);?>
    
    <br>
    <code><?= __FILE__ ?></code>
</div>
