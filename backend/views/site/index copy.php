<?php

/* @var $this yii\web\View */

$this->title = 'RANES ENTERPRISE LTD';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Consultancy services available</h1>

        <p class="lead">WELCOME TO RANES ENTERPRISE LIMITED</p>

        <!-- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">HOMEPAGE</a></p> -->
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>> Survey</h2>

                <p>In need of integral survey services? At Ranes,our licensed surveyors deal with land, powerline, cadastral, topographical, levelling and engineering surveys.</p>

                <p><a class="btn btn-outline-secondary" href="<?= \yii\helpers\Url::to(['/site/survey']) ?>">More about Survey &raquo;</a></p>
                
            </div>
            <div class="col-lg-4">
                <h2>> Lands On Sale</h2>

                <p>We have various lands and plots on sale at affordable prices. Some are within Kitale town municipality while others are in the outskirts of the town.</p>

                <p><a class="btn btn-outline-secondary" href="<?= \yii\helpers\Url::to(['/lands/index']) ?>">View Lands/Plots on Sale &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>> Operations Research</h2>

                <p>We offer professional statistical analysis for your firm/organization, business and advise on the performance with reference to current market trend.</p>

                <p><a class="btn btn-outline-secondary" href="<?= \yii\helpers\Url::to(['/site/operations_research']) ?>">Click to learn more &raquo;</a></p>
            </div>
            
            <div class="col-lg-4">
                <h2>> ICT</h2>

                <p>We have a dedicated IT team offering advanced technological solutions.</p>

                <p><a class="btn btn-outline-secondary" href="<?= \yii\helpers\Url::to(['/site/ict']) ?>">Learn More &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
