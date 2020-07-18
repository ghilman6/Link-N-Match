<?php

use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;

?>
<div class="content-wrapper">
    <section class="content-header" style="position:static; text-align: left;">
        <div class="container">
            <div class="box-title">
                <div col-md-12>
                    <?=
                        Breadcrumbs::widget(
                            [
                                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                            ]
                        ) ?>
                </div>
            </div>
        </div>
    </section>


    <section class="content" style="margin-top: -30px;">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>
</div>

<footer class=" main-footer">
    <div class="container">
        <div class="pull-right hidden-xs">
            Made with <i class="fa fa-heart" style="color: red;"></i> & <i class="fa fa-coffee"></i> by <a href="http://www.nurulfikri.ac.id">BTSI NF</a>  </div>
        <strong>Copyright &copy; 2020 <a href="https://adminlte.io">Sekolah Tinggi Teknologi Terpadu Nurul
                Fikri</a>.</strong> All rights reserved.
    </div>
    <!-- /.container -->
</footer>