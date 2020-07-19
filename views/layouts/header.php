<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?php //Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) 
    ?>

    <nav class="navbar navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a href="#" class="navbar-brand"><b>AIS</b> STT-NF</a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dosen <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Mahasiswa</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?= $directoryAsset ?>/img/avatar2.png" class="user-image" alt="User Image" />
                            <span class="hidden-xs">TIFANY NABARIAN</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?= $directoryAsset ?>/img/avatar2.png" class="img-circle" alt="User Image" />
                                <p>
                                    TIFANNY NABARIAN <small>DOSEN</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <?= Html::a(
                                        'Sign out',
                                        ['/site/logout'],
                                        ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                    ) ?>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>