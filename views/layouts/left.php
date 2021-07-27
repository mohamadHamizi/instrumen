<aside class="main-sidebar">
    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget([
            'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
            'items' => [
                ['label' => 'Menu', 'options' => ['class' => 'header']],

                ['label' => 'PDPA', 'icon' => 'book', 'url' => ['site/pdpa'], 'visible' => true],
                ['label' => 'Laman Utama', 'icon' => 'tachometer', 'url' => ['site/dashboard'], 'visible' => true],
                [
                    'label' => 'KK-OKU',
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
                    'label' => 'TIPI-Malay',
                    'icon' => 'smile-o',
                    'url' => '#',
                    'items' => [
                        ['label' => 'Pengenalan', 'icon' => 'check-square-o', 'url' => ['tipi/index'], 'visible' => true],
                        ['label' => 'Demografi', 'icon' => 'check-square-o', 'url' => ['tipi/demografi'], 'visible' => true],
                        ['label' => 'Jawab Soal Selidik', 'icon' => 'check-square-o', 'url' => ['tipi/questions'], 'visible' => true],
                        ['label' => 'Keputusan', 'icon' => 'check-square-o', 'url' => ['tipi/result'], 'visible' => true],
                    ],
                ],
                [
                    'label' => 'BFI-Malay',
                    'icon' => 'user-secret',
                    'url' => '#',
                    'items' => [
                        ['label' => 'Pengenalan', 'icon' => 'user-secret', 'url' => ['bfi/index'], 'visible' => true],
                        ['label' => 'Demografi', 'icon' => 'user-secret', 'url' => ['bfi/demografi'], 'visible' => true],
                        ['label' => 'Jawab Soal Selidik', 'icon' => 'user-secret', 'url' => ['bfi/questions'], 'visible' => true],
                        ['label' => 'Keputusan', 'icon' => 'user-secret', 'url' => ['bfi/result'], 'visible' => true],
                    ],
                ],
                [
                    'label' => 'HEXACO-Malay',
                    'icon' => 'user-circle-o',
                    'url' => '#',
                    'items' => [
                        ['label' => 'Pengenalan', 'icon' => 'user-circle-o', 'url' => ['hexaco/index'], 'visible' => true],
                        ['label' => 'Demografi', 'icon' => 'user-circle-o', 'url' => ['hexaco/demografi'], 'visible' => true],
                        ['label' => 'Bahagian 1', 'icon' => 'user-circle-o', 'url' => ['hexaco/bhgn1'], 'visible' => true],
                        ['label' => 'Bahagian 2', 'icon' => 'user-circle-o', 'url' => ['hexaco/bhgn2'], 'visible' => true],
                        ['label' => 'Bahagian 3', 'icon' => 'user-circle-o', 'url' => ['hexaco/bhgn3'], 'visible' => true],
                        ['label' => 'Bahagian 4', 'icon' => 'user-circle-o', 'url' => ['hexaco/bhgn4'], 'visible' => true],
                        ['label' => 'Bahagian 5', 'icon' => 'user-circle-o', 'url' => ['hexaco/bhgn5'], 'visible' => true],
                        ['label' => 'Bahagian 6', 'icon' => 'user-circle-o', 'url' => ['hexaco/bhgn6'], 'visible' => true],
                        ['label' => 'Keputusan', 'icon' => 'user-circle-o', 'url' => ['hexaco/result'], 'visible' => true],
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
                        ['label' => 'TIPI', 'icon' => 'smile-o', 'url' => ['admin/data-tipi'], 'visible' => !Yii::$app->user->isGuest],
                        ['label' => 'HEXACO', 'icon' => 'user-circle-o', 'url' => ['admin/data-hexaco'], 'visible' => !Yii::$app->user->isGuest],
                        ['label' => 'BFI', 'icon' => 'user-secret', 'url' => ['admin/data-bfi'], 'visible' => !Yii::$app->user->isGuest],
                    ]
                ],
            ],
        ]); ?>
    </section>
</aside>