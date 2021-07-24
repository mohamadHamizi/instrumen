<?php

use app\models\hexaco\Main;
use yii\helpers\Html;
use dosamigos\chartjs\ChartJs;
use yii\web\JsExpression;

?>
<style>
    .honesty {
        color: blue;
    }

    .emosi {
        color: red;
    }

    .ekstraversi {
        color: orange;
    }

    .kebersetujuan {
        color: green;
    }

    .keberhemahan {
        color: brown;
    }

    .terbuka {
        color: purple;
    }

    .skor_tinggi {
        color: red;
        font-weight: bold;
    }

    .skor_rendah {
        color: blue;
        font-weight: bold;
    }
</style>



<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th-large"></i>&nbsp;<strong>Indeks Dimensi HEXACO</strong></h3>
    </div>
    <div class="box-body">
        <?= ChartJs::widget([
            'type' => 'radar',
            'id' => 'structureDoughnut',
            'options' => [
                'height' => 400,
                // 'width' => 00,
            ],
            'data' => [
                // 'radius' =>  "90%",
                'labels' => $labelDimensi,
                'datasets' => [
                    [
                        'data' => $dimensiArr,
                        'label' => 'Indeks Dimensi',
                        'fill' => true,
                        'backgroundColor' => "rgba(255,99,132,0.2)",
                        'borderColor' => "rgba(255,99,132,1)",
                        'pointBorderColor' => "#fff",
                        'pointBackgroundColor' => "rgba(255,99,132,1)",
                        'hoverBorderColor' => ["#999", "#999", "#999"],
                    ]
                ]
            ],
            'clientOptions' => [
                'responsive' => true,
                'legend' => [
                    // 'display' => true,
                    'position' => 'bottom',
                    'labels' => [
                        'fontSize' => 14,
                        'fontColor' => "#425062",
                    ]
                ],
                'tooltips' => [
                    'enabled' => true,
                    'intersect' => true,
                    'callbacks' => [
                        'label' => new JsExpression("function(t, d) {
                     var label = d.labels[t.index];
                     var data = d.datasets[t.datasetIndex].data[t.index];
                     if (t.datasetIndex === 0)
                     return label + ': ' + data;
                     else if (t.datasetIndex === 1)
                     return label + ': $' + data.toLocaleString();
              }"),
                        'title' => new JsExpression('function(){}')
                        //                                        'title' => '',
                    ]
                ],
                'hover' => [
                    'mode' => true
                ],
                'maintainAspectRatio' => false,
                'scale' => [
                    'ticks' => [
                        'beginAtZero' => true,
                        'precision' => 0,
                        // 'suggestedMax' => max(array_values(ArrayHelper::getColumn($pemberat, 'pemberat'))),
                        'stepSize' => 5,
                        'maxTicksLimit' => 10
                    ],
                    'pointLabels' => [
                        'fontColor' => ['blue', 'red', 'orange', 'green', 'brown', 'purple'],
                    ]
                ]

            ],
        ]);
        ?>

    </div>
</div>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-bar-chart"></i>&nbsp;<strong>Indeks Sub-Dimensi HEXACO</strong></h3>
    </div>
    <div class="box-body">
        <table class="table table-primary table-striped table-bordered">
            <thead class="thead-light">
                <tr>
                    <th width='3%'>Bil</th>
                    <th width='15%' class='text-center'>Dimensi</th>
                    <th width='5%' class='text-center'>Indeks<br>Dimensi</th>
                    <th width='15%' class='text-center'>Sub-dimensi</th>
                    <th class='text-center'>Indeks<br>Sub-dimensi</th>
                </tr>
            </thead>
            <tr class="honesty">
                <td><?= $bil++ ?></td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">Kejujuran-Kerendahan Hati<br>(Honesty-Humility)<br>
                    <font size="6px"><strong>H</strong>
                    </font>
                </td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->getDimensiKejujuran(); ?>%</font>
                </td>
                <td><?= Main::labelSubDimensi($no = 0); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>

            </tr>
            <tr class="honesty">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 1); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="honesty">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 2); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="honesty">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 3); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>

            <tr class="emosi">
                <td><?= $bil++ ?></td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">Emosi<br>(Emotionality)
                    <br>
                    <font size="6px"><strong>E</strong></font>
                </td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->getDimensiEmosi(); ?>%</font>
                </td>
                <td><?= Main::labelSubDimensi($no = 4); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="emosi">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 5); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="emosi">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 6); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="emosi">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 7); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="ekstraversi">
                <td><?= $bil++ ?></td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">Ekstraversi<br>(Extraversion)<br>
                    <font size="6px"><strong>X</strong></font>
                </td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->getDimensiEkstraversi(); ?>%</font>
                </td>
                <td><?= Main::labelSubDimensi($no = 8); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="ekstraversi">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 9); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="ekstraversi">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 10); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="ekstraversi">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 11); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="kebersetujuan">
                <td><?= $bil++ ?></td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">Kebersetujuan<br>(Agreeableness)<br>
                    <font size="6px"><strong>A</strong></font>
                </td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->getDimensiKebersetujuan(); ?>%</font>
                </td>
                <td><?= Main::labelSubDimensi($no = 12); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="kebersetujuan">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 13); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="kebersetujuan">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 14); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="kebersetujuan">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 15); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="keberhemahan">
                <td><?= $bil++ ?></td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">Keberhemahan<br>(Conscientiousness)<br>
                    <font size="6px"><strong>C</strong></font>
                </td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->getDimensiKeberhemahan(); ?>%</font>
                </td>
                <td><?= Main::labelSubDimensi($no = 16); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="keberhemahan">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 17); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="keberhemahan">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 18); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="keberhemahan">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 19); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="terbuka">
                <td><?= $bil++ ?></td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">Terbuka kepada Pengalaman<br>(Openness to Experience)<br>
                    <font size="6px"><strong>O</strong></font>
                </td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->getDimensiTerbuka(); ?>%</font>
                </td>
                <td><?= Main::labelSubDimensi($no = 20); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="terbuka">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 21); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="terbuka">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 22); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="terbuka">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 23); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="text-center">
    <?= Html::a('<i class="fa fa-check"></i>&nbsp;Tamat Sesi / Jawab Semula', ['/hexaco/des'], ['class' => 'btn btn-danger']); ?>
</div>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-info-circle"></i>&nbsp;<strong>Deskripsi Skala HEXACO</strong></h3>
    </div>
    <div class="box-body">
        <p><strong>1. KEJUJURAN-KERENDAHAN HATI:</strong>

        <p>Individu dengan <font class="skor_tinggi">skor yang sangat tinggi</font> dalam skala Kejujuran-Kerendahan Hati mengelak memanipulasi orang lain demi keuntungan peribadi, tidak mempunyai dorongan untuk melanggar peraturan, tidak berminat dengan kekayaan dan kemewahan, dan tidak menganggap diri mereka berhak diangkat ke tahap status sosial yang tinggi.

        <p>Sebaliknya, individu dengan <font class="skor_rendah">skor yang sangat rendah</font> pada skala ini akan memuji orang lain untuk mendapatkan apa yang mereka ingini, cenderung untuk melanggar peraturan demi keuntungan peribadi, didorong oleh keuntungan material, dan mempunyai perasaan penting-diri yang kuat.

        <p><strong>1.1 Skala Keikhlasan</strong> menilai kecenderungan untuk bersikap ikhlas dalam hubungan interpersonal. Individu dengan skor rendah akan memuji orang lain atau berpura-pura menyukai mereka untuk memperoleh bantuan, manakala individu yang mempunyai skor tinggi tidak sanggup memanipulasi orang lain.

        <p><strong>1.2 Skala Keadilan</strong> menilai kecenderungan untuk mengelakkan penipuan dan rasuah. Individu dengan skor rendah bersedia memperoleh keuntungan dengan menipu atau mencuri, manakala individu yang mempunyai skor tinggi tidak akan mengambil kesempatan terhadap individu lain atau masyarakat pada umumnya.

        <p><strong>1.3 Skala Penghindaran Ketamakan</strong> menilai kecenderungan untuk tidak berminat dalam memiliki kekayaan berlimpahan, barangan mewah, dan tanda-tanda status sosial yang tinggi. Individu dengan skor rendah mahu menikmati dan memperlihatkan kekayaan dan keistimewaan, manakala individu yang mempunyai skor tinggi tidak didorong oleh kemewahan atau pertimbangan status sosial.

        <p><strong>1.4 Skala Kesederhanaan</strong> menilai kecenderungan untuk bersikap sederhana dan rendah diri. Individu dengan skor rendah menganggap diri mereka unggul dan berhak mendapat keistimewaan yang tidak dimiliki orang lain, manakala individu yang mempunyai skor tinggi menganggap diri mereka sebagai orang biasa tanpa hak mendapat layanan istimewa.
            <br><br>
        <p><strong>2. EMOSI:</strong>

        <p>Individu dengan <font class="skor_tinggi">skor yang sangat tinggi</font> pada skala Emosi mengalami ketakutan terhadap bahaya fizikal, mengalami kegelisahan sebagai tindak balas terhadap tekanan hidup, mempunyai perasaan memerlukan sokongan emosi daripada orang lain, dan merasa empati dan hubungan sentimental dengan orang lain.

        <p>Sebaliknya, individu dengan <font class="skor_rendah">skor yang sangat rendah</font> pada skala ini tidak terganggu oleh prospek bahaya fizikal, mempunyai tahap kebimbangan yang rendah walaupun dalam situasi tertekan, tidak ada keperluan berkongsi kebimbangan mereka dengan orang lain, dan berasa terasing secara emosi dengan orang lain.


        <p><strong>2.1 Skala Ketakutan</strong> menilai kecenderungan untuk mengalami ketakutan. Individu dengan skor rendah mempunyai kurang perasaan takut akan kecederaan dan secara amnya kuat, berani, dan tidak sensitif terhadap kesakitan fizikal, manakala individu yang mempunyai skor tinggi sangat cenderung untuk mengelak kecederaan fizikal.


        <p><strong>2.2 Skala Kebimbangan</strong> menilai kecenderungan untuk bimbang dalam pelbagai konteks. Individu dengan skor rendah kurang tertekan dalam menghadapi kesukaran, manakala individu yang mempunyai skor tinggi cenderung mengalami tekanan walaupun dengan masalah yang agak kecil.

        <p><strong>2.3 Skala Kebergantungan</strong> menilai keperluan mendapat sokongan emosi daripada orang lain. Individu dengan skor rendah mempunyai keyakinan diri dan berupaya menangani masalah tanpa bantuan atau nasihat orang lain, manakala individu yang mempunyai skor tinggi ingin berkongsi masalah mereka dengan orang lain yang akan memberi dorongan dan penghiburan.

        <p><strong>2.4 Skala Sentimental</strong> menilai kecenderungan untuk membentuk ikatan emosi yang kuat dengan orang lain. Individu dengan skor rendah kurang beremosi ketika mengucapkan selamat tinggal atau sebagai reaksi kepada keprihatinan orang lain, manakala individu yang mempunyai skor tinggi merasa keterikatan emosi yang kuat dan kepekaan empati terhadap perasaan orang lain.

            <br><br>
        <p><strong>3. EKSTRAVERSI:</strong>

        <p>Individu dengan <font class="skor_tinggi">skor yang sangat tinggi</font> pada skala Ekstrovert berasa positif terhadap diri mereka sendiri, yakin ketika memimpin atau berucap kepada kumpulan ramai, gemar perjumpaan dan interaksi sosial, dan mempunyai semangat dan tenaga yang positif.

        <p>Sebaliknya, individu dengan <font class="skor_rendah">skor yang sangat rendah</font> pada skala ini menganggap diri mereka tidak popular, berasa janggal apabila mereka menjadi tumpuan perhatian sosial, tidak gemar dengan aktiviti sosial, dan kurang ceria dan kurang optimis berbanding orang lain.

        <p><strong>3.1 Skala Penghargaan Kendiri Sosial</strong> menilai kecenderungan untuk bersikap positif terhadap diri sendiri, terutama dalam konteks sosial. Individu dengan skor tinggi umumnya berpuas hati dengan diri mereka sendiri dan menganggap diri mereka mempunyai kualiti yang disukai, manakala individu yang mempunyai skor rendah cenderung melihat diri mereka sebagai tidak berguna dan tidak popular.

        <p><strong>3.2 Skala Keberanian Sosial</strong> menilai keselesaan atau keyakinan seseorang dalam pelbagai situasi sosial. Individu dengan skor rendah berasa malu atau janggal dalam aspek kepimpinan atau ketika berucap di khalayak ramai, manakala individu yang mempunyai skor tinggi bersedia mendekati orang yang tidak dikenali dan mampu bersuara dalam kumpulan.


        <p><strong>3.3 Skala Keramahan</strong> menilai kecenderungan menyukai perbualan, interaksi sosial, dan majlis keramaian. Individu dengan skor rendah pada amnya lebih suka melakukan aktiviti bersendirian dan tidak gemar perbualan, manakala individu yang mempunyai skor tinggi gemar bercakap, berziarah, dan menyambut keramaian bersama orang lain.

        <p><strong>3.4 Skala Keaktifan</strong> menilai tahap keterujaan dan tenaga seseorang. Individu dengan skor rendah cenderung kepada perasaan tidak ceria atau dinamik, manakala individu yang mempunyai skor tinggi biasanya mempunyai sifat optimis dan semangat yang tinggi.
            <br><br>
        <p><strong>4. KEBERSETUJUAN (VERSUS KEMARAHAN):</strong>

        <p>Individu dengan skor sangat tinggi dalam skala Kebersetujuan memaafkan kesalahan yang ditujukan kepada mereka, bersikap lembut dalam menilai orang lain, bersedia berkompromi dan bekerjasama dengan orang lain, dan mudah mengawal perasaan marah mereka.

        <p>Sebaliknya, individu dengan <font class="skor_rendah">skor yang sangat rendah</font> pada skala ini menyimpan dendam terhadap orang yang telah melukakan mereka, agak kritikal akan kekurangan orang lain, keras kepala dalam mempertahankan pandangan mereka, dan cepat marah sebagai tindak balas kepada penganiayaan.

        <p><strong>4.1 Skala Kemaafan</strong> menilai kesediaan seseorang untuk mempercayai dan menerima mereka yang mungkin pernah berbuat salah kepadanya. Individu dengan skor rendah cenderung menyimpan dendam terhadap mereka yang telah menyinggung perasaan mereka, manakala individu yang mempunyai skor tinggi biasanya bersedia untuk mempercayai dan berbaik semula dengan mereka yang telah menganiayanya.

        <p><strong>4.2 Skala Kelembutan</strong> menilai kecenderungan untuk bersikap lembut dan bertolak ansur apabila berurusan dengan orang lain. Individu dengan skor rendah cenderung menjadi kritikal dalam penilaian mereka terhadap orang lain, manakala individu yang mempunyai skor tinggi berat hati menilai orang lain dengan kasar.

        <p><strong>4.3 Skala Fleksibiliti</strong> menilai kesediaan seseorang untuk berkompromi dan bekerjasama dengan orang lain. Individu dengan skor rendah dilihat sebagai keras kepala dan bersedia untuk berdebat, manakala individu yang mempunyai skor tinggi mengelak perdebatan dan mempertimbangkan cadangan orang lain, walaupun ianya mungkin tidak masuk akal.

        <p><strong>4.4 Skala Kesabaran</strong> menilai kecenderungan untuk kekal tenang dan tidak menjadi marah. Individu dengan skor rendah cenderung untuk cepat marah, manakala individu dengan skor tinggi mempunyai ambang kesabaran tinggi untuk menjadi marah atau meluahkan kemarahan.

            <br><br>
        <p><strong>5. KEBERHEMAHAN:</strong>

        <p>Individu dengan <font class="skor_tinggi">skor yang sangat tinggi</font> pada skala Keberhemahan mengatur masa dan persekitaran fizikal mereka, bekerja dengan cara berdisiplin untuk mencapai tujuan mereka, berusaha untuk ketepatan dan kesempurnaan tugas mereka, dan teliti dalam membuat keputusan.

        <p>Sebaliknya individu dengan <font class="skor_rendah">skor yang sangat rendah</font> pada skala ini cenderung kepada tidak memperdulikan persekitaran atau jadual yang teratur, mengelak tugas yang sukar atau matlamat yang mencabar, berpuas hati dengan kerja yang mengandungi beberapa kesalahan, dan membuat keputusan mengikut gerak hati atau tanpa berfikir panjang.

        <p><strong>5.1 Skala Organisasi</strong> menilai kecenderungan untuk mencari ketertiban, terutama dalam persekitaran fizikal seseorang. Individu dengan skor rendah cenderung leka dan selekeh, manakala individu yang mempunyai skor tinggi memastikan keadaan kemas dan lebih suka pendekatan berstruktur dalam melaksanakan tugas.

        <p><strong>5.2 Skala Ketekunan</strong> menilai kecenderungan untuk bekerja keras. Individu dengan skor rendah mempunyai disiplin diri yang rendah dan tidak bermotivasi untuk mencapai sesuatu, manakala individu yang mempunyai skor tinggi ada "etika kerja" yang tinggi dan bersedia melaksanakan tugas sedaya-upaya.

        <p><strong>5.3 Skala Kesempurnaan</strong> menilai kecenderungan untuk ketelitian dan mementingkan perincian. Individu dengan skor rendah boleh menerima beberapa kesalahan dalam kerja mereka dan biasanya mengabaikan perincian kecil, manakala individu yang mempunyai skor tinggi meneliti untuk mengesan sebarang kesilapan dan potensi penambahbaikan.

        <p><strong>5.4 Skala Berhemah</strong> menilai kecenderungan untuk berunding dengan teliti dan menghalang impuls. Individu dengan skor rendah bertindak mengikut gerak hati dan biasanya tidak mempertimbangkan akibat, manakala individu yang mempunyai skor tinggi mempertimbangkan pilihan mereka dengan berhati-hati dan biasanya berwaspada dan mengawal diri.
            <br><br>
        <p><strong>6. KETERBUKAAN UNTUK PENGALAMAN:</strong>

        <p>Individu dengan <font class="skor_tinggi">skor yang sangat tinggi</font> pada skala Keterbukaan untuk Pengalaman tertarik dengan keindahan seni dan alam semula jadi, ingin tahu tentang pelbagai bidang ilmu pengetahuan, menggunakan imaginasi mereka secara bebas dalam kehidupan seharian, dan berminat dengan idea atau individu yang unik.

        <p>Sebaliknya, individu dengan <font class="skor_rendah">skor yang sangat rendah</font> pada skala ini tidak teruja dengan karya seni, mempunyai sifat ingin tahu intelektual yang rendah, menghindari aktiviti kreatif, dan mempunyai minat rendah terhadap idea-idea radikal atau tidak konvensional.

        <p><strong>6.1 Skala Penghayatan Estetika</strong> menilai keseronokan seseorang terhadap keindahan dalam seni dan alam semula jadi. Individu dengan skor rendah tidak berminat menghayati karya seni atau keajaiban semula jadi, manakala individu dengan skor tinggi mempunyai penghayatan mendalam terhadap pelbagai bentuk seni dan keajaiban alam.

        <p><strong>6.2 Skala Rasa Ingin Tahu</strong> menilai kecenderungan untuk mencari maklumat mengenai, dan pengalaman dengan, dunia semula jadi dan manusia. Individu dengan skor rendah memiliki sifat ingin tahu yang rendah tentang sains semula jadi atau sosial, manakala individu yang mempunyai skor tinggi gemar membaca dan mengembara.

        <p><strong>6.3 Skala Kreativiti</strong> menilai kecenderungan seseorang terhadap inovasi dan eksperimen. Individu dengan skor rendah tidak teruja dengan idea baru, manakala individu yang mempunyai skor tinggi secara aktif mencari jalan penyelesaian masalah yang baru dan mengekpresikan diri dalam seni.

        <p><strong>6.4 Skala Tidak Konvensional</strong> menilai kecenderungan untuk menerima sesuatu di luar kebiasaan. Individu dengan skor rendah menghindari orang yang eksentrik atau berlainan, manakala individu yang mempunyai skor tinggi terbuka kepada idea-idea yang mungkin kelihatan aneh atau radikal.
            <br><br>
        <p>Skala Interstisial

        <p>Skala Altruisme (berbanding Antagonisme) menilai kecenderungan untuk bersimpati dan berhati lembut terhadap orang lain. Individu dengan skor tinggi mengelak membawa kemudaratan dan bertindak dengan murah hati terhadap mereka yang lemah atau memerlukan pertolongan, manakala individu yang mempunyai skor rendah tidak risau dengan kemungkinan akan melukakan orang lain dan dianggap sebagai orang yang berhati keras.

        <p>Sumber: <a href="https://hexaco.org/scaledescriptions">https://hexaco.org/scaledescriptions</a>

    </div>
</div>