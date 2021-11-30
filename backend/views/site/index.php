<?php

/* @var $this yii\web\View */

$this->title = 'RANES ENTERPRISE';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Admin Panel</h1>

        <p class="lead">WELCOME TO RANES ENTERPRISE LIMITED</p>

        <!-- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">HOMEPAGE</a></p> -->
    </div>

    <div class="body-content">

        <div class="row">
            
            <div class="col-lg-6">
                <h2>> Lands On Sale</h2>

                <p>Create / Delete / Update / View</p>

                <p><a class="btn btn-outline-secondary" href="<?= \yii\helpers\Url::to(['/lands/index']) ?>">Click to perform operation &raquo;</a></p>
            </div>
            <div class="col-lg-6">
                <h2>> Real Estate</h2>

                <p>Create / Delete / Update / View Properties For Sale</p>

                <p><a class="btn btn-outline-secondary" href="<?= \yii\helpers\Url::to(['/property/index']) ?>">Click to perform operation &raquo;</a></p>
            </div>
            
        </div>
    </div>
</div>
