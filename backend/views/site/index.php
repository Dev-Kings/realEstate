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
            
            <div class="col-lg-4">
                <h2>> Lands On Sale</h2>

                <p>We have various lands and plots on sale at affordable prices. Some are within Kitale town municipality while others are in the outskirts of the town.</p>

                <p><a class="btn btn-outline-secondary" href="<?= \yii\helpers\Url::to(['/lands/index']) ?>">View Lands/Plots on Sale &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>> Real Estate</h2>

                <p>Properties For Sale</p>

                <p><a class="btn btn-outline-secondary" href="<?= \yii\helpers\Url::to(['/realestate/index']) ?>">Click to learn more &raquo;</a></p>
            </div>
            
            <div class="col-lg-4">
                <h2>> ICT</h2>

                <p>We have a dedicated IT team offering advanced technological solutions.</p>

                <p><a class="btn btn-outline-secondary" href="<?= \yii\helpers\Url::to(['/site/ict']) ?>">Learn More &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
