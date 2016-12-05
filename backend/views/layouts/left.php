<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu Yii3', 'options' => ['class' => 'header']],
                    ['label' => '测试表', 'icon' => 'fa fa-file-code-o', 'url' => ['/test']],
                    ['label' => '商品系列', 'icon' => 'fa fa-file-code-o', 'url' => ['/shop-goods-serial']],
                    ['label' => '商品分类', 'icon' => 'fa fa-file-code-o', 'url' => ['/shop-goods-category']],
                    ['label' => '商品类型', 'icon' => 'fa fa-file-code-o', 'url' => ['/shop-goods-type']],
                    ['label' => '支付方式', 'icon' => 'fa fa-file-code-o', 'url' => ['/shop-payment']],
                    ['label' => '配送方式', 'icon' => 'fa fa-file-code-o', 'url' => ['/shop-shipping']],
                    ['label' => '商品品牌', 'icon' => 'fa fa-file-code-o', 'url' => ['/shop-goods-brand']],
                    ['label' => '商品模型', 'icon' => 'fa fa-file-code-o', 'url' => ['/shop-goods-model']],
                    ['label' => '用户管理', 'icon' => 'fa fa-file-code-o', 'url' => ['/user']],
                    ['label' => '原子商品', 'icon' => 'fa fa-file-code-o', 'url' => ['/goods']],
                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Same tools',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'fa fa-circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
