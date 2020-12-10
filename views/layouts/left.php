<aside class="main-sidebar">
    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget([
            'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
            'items' => [
                ['label' => 'Menu', 'options' => ['class' => 'header']],
                [
                    'label' => 'e-IKSOKU-F',
                    'icon' => 'wheelchair-alt',
                    'url' => '#',
                    'items' => [
                        ['label' => 'Utama', 'icon' => 'tachometer', 'url' => ['iksokuf/index'], 'visible' => true],
                        ['label' => 'Profil Demografi', 'icon' => 'user', 'url' => ['iksokuf/demografi'], 'visible' => true],
                        ['label' => 'Bahagian A', 'icon' => 'th-large', 'url' => ['iksokuf/bahagian-a'], 'visible' => true],
                        ['label' => 'Bahagian B', 'icon' => 'random', 'url' => ['iksokuf/bahagian-b'], 'visible' => true],
                        ['label' => 'Bahagian C', 'icon' => 'hourglass-start', 'url' => ['iksokuf/bahagian-c'], 'visible' => true],
                        ['label' => 'Bahagian D', 'icon' => 'cloud-download', 'url' => ['iksokuf/bahagian-d'], 'visible' => true],
                        ['label' => 'Keputusan', 'icon' => 'file-text', 'url' => ['iksokuf/result'], 'visible' => true],
                    ],
                ],
                [
                    'label' => 'Mipk',
                    'icon' => 'handshake-o',
                    'url' => '#',
                    'items' => [
                        ['label' => 'Pengenalan', 'icon' => 'tachometer', 'url' => ['mipk/index'], 'visible' => true],
                        ['label' => 'Bahagian A', 'icon' => 'th-large', 'url' => ['mipk/bahagian-a'], 'visible' => true],
                        ['label' => 'Bahagian B', 'icon' => 'random', 'url' => ['mipk/bahagian-b'], 'visible' => true],
                        ['label' => 'Keputusan', 'icon' => 'file-text', 'url' => ['mipk/result'], 'visible' => true],
                    ],
                ],
                [
                    'label' => 'EA-Malay',
                    'icon' => 'line-chart',
                    'url' => '#',
                    'items' => [
                        ['label' => 'Pengenalan', 'icon' => 'home', 'url' => ['mea/index'], 'visible' => true],
                        ['label' => 'Demografi', 'icon' => 'th-large', 'url' => ['mea/demografi'], 'visible' => true],
                        ['label' => 'Jadual 1', 'icon' => 'th-large', 'url' => ['mea/jadual-1'], 'visible' => true],
                        ['label' => 'Jadual 2', 'icon' => 'th-large', 'url' => ['mea/jadual-2'], 'visible' => true],
                        ['label' => 'Jadual 3', 'icon' => 'th-large', 'url' => ['mea/jadual-3'], 'visible' => true],
                        ['label' => 'Jadual 4', 'icon' => 'th-large', 'url' => ['mea/jadual-4'], 'visible' => true],
                        ['label' => 'Keputusan', 'icon' => 'star-half-o', 'url' => ['mea/skor'], 'visible' => true],
                    ],
                ],
                [
                    'label' => 'EA-Malay (v2)',
                    'icon' => 'bar-chart',
                    'url' => '#',
                    'items' => [
                        ['label' => 'Pengenalan', 'icon' => 'home', 'url' => ['mea-two/index'], 'visible' => true],
                        ['label' => 'Demografi', 'icon' => 'th-large', 'url' => ['mea-two/demografi'], 'visible' => true],
                        ['label' => 'Jadual 1', 'icon' => 'th-large', 'url' => ['mea-two/jadual-1'], 'visible' => true],
                        ['label' => 'Jadual 2', 'icon' => 'th-large', 'url' => ['mea-two/jadual-2'], 'visible' => true],
                        ['label' => 'Jadual 3', 'icon' => 'th-large', 'url' => ['mea-two/jadual-3'], 'visible' => true],
                        ['label' => 'Jadual 4', 'icon' => 'th-large', 'url' => ['mea-two/jadual-4'], 'visible' => true],
                        ['label' => 'Keputusan', 'icon' => 'star-half-o', 'url' => ['mea-two/skor'], 'visible' => true],
                    ],
                ],
                [
                    'label' => 'Admin Dashboard',
                    'icon' => 'dashboard',
                    'url' => '#',
                    'visible' => !Yii::$app->user->isGuest,
                    'items' => [
                        ['label' => 'Senarai', 'icon' => 'list', 'url' => ['admin/index'], 'visible' => !Yii::$app->user->isGuest],
                        ['label' => 'Data', 'icon' => 'table', 'url' => ['admin/data'], 'visible' => !Yii::$app->user->isGuest],
                        ['label' => 'MIPK', 'icon' => 'table', 'url' => ['admin/data-mipk'], 'visible' => !Yii::$app->user->isGuest],
                        ['label' => 'MEA', 'icon' => 'table', 'url' => ['admin/data-mea'], 'visible' => !Yii::$app->user->isGuest],
                        ['label' => 'MEA v2', 'icon' => 'table', 'url' => ['admin/data-mea-two'], 'visible' => !Yii::$app->user->isGuest],
                    ]
                ],
            ],
        ]); ?>
    </section>
</aside>