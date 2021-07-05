<?php

use kartik\dialog\Dialog;

$this->registerCss(".hideButton { display: none !important; }");

$js = <<< JS
krajeeDialogCust1.dialog("<strong>Notice and Privacy</strong><br><p>By signing this Form you have admitted that you have been adequately notified of the Universiti Malaysia Sabah’s (“UMS”) Data Protection Notice (‘the said PDPA Notice’), for the following purposes in accordance with the Personal Data Protection Act 2010 ('the Act') and hereby gives your consent to UMS for use and processing the said personal data for the specified purposes as contained therein the said PDPA Notice. Please visit our website at www.ums.edu.my for further details on our data protection policy, including how you may access or correct your personal data or withdraw consent to the collection, use or disclosure of your personal data.<br>Data protection policy - <strong><u><a target='_blank' href='http://www.ums.edu.my/v5/en/pdpa/data-protection-notice'>http://www.ums.edu.my/v5/en/pdpa/data-protection-notice</a></u></strong>.</p><br><strong>Notis dan Privasi</strong><p>Dengan menandatangani Borang ini anda telah mengakui bahawa anda telah dengan secukupnya diberikan Notis Perlindungan Data (‘Notis PDPA tersebut’) oleh Universiti Malaysia Sabah (“UMS”) selaras dengan tujuan-tujuan yang selaras dengan Akta Perlindungan Data Peribadi 2010 ('Akta') dan dengan ini memberikan kebenaran kepada UMS untuk pemprosesan dan menggunakan data peribadi anda untuk tujuan-tujuan yang berkenaan sebagaimana yang dinyatakan di dalam Notis PDPA tersebut. Sila lawat web rasmi kami di www.ums.edu.my untuk untuk keterangan lanjut tentang polisi perlindungan data kami, termasuklah cara bagaimana anda boleh mengakses atau membetulkan data peribadi anda atau menarikbalik kebenaran untuk mengutip, menggunakan dan/atau menzahirkan data peribadi anda.<br>Polisi perlindungan data - <strong><u><a target='_blank' href='http://www.ums.edu.my/v5/ms/pdpa/notis-perlindungan-data'>http://www.ums.edu.my/v5/ms/pdpa/notis-perlindungan-data</a></u></strong>.</p>",function(result) {});
JS;

// register your javascript
$this->registerJs($js);
echo Dialog::widget([
    'overrideYiiConfirm' => false,
    'libName' => 'krajeeDialogCust1',
    'options' => [
        'dragable' => true,
        'closable' => false,
        'size' => Dialog::SIZE_WIDE, // large dialog text
        'title' => 'Notis Perlindungan Data',
        'type' => Dialog::TYPE_INFO,
        'buttons' => [
            [
                'id' => 'cust-submit-btn',
                'label' => 'Agree / Setuju',
                'cssClass' => 'btn-success',
                'icon' => 'glyphicon glyphicon-ok',
                'hotkey' => 'S',
                'action' => new yii\web\JsExpression("function(dialog) {
                        return dialog.close();
                    }")
            ],
            [
                'id' => 'cust-cancel-btn',
                'label' => 'Cancel',
                'cssClass' => 'hideButton',
                'hotkey' => 'C',
            ],
        ]
    ],
]);

?>