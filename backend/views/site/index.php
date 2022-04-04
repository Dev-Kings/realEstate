<?php

/* @var $this yii\web\View */

$this->title = 'RANES ENTERPRISE LTD';
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
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3>
              <?php 
              //echo $lands;
              //echo $property;
              //echo $admin
              ?>
              </h3>
                <p>Total Lands For Sale</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-home"></i>
              </div>
              <a href="<?= \yii\helpers\Url::to(['/property/index']) ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            <?php
            $this->params['lands'] = $lands;
            $this->params['admin'] = $admin;
            $this->params['property'] = $property;
            ?>
          </div>
          <?php //} ?>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            
        </div>
    </div>
</div>
