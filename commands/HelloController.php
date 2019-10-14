<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;
use app\controllers\IksokufController;
use app\models\OkuMain;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HelloController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     * @return int Exit code
     */
    public function actionIndex($message = 'hello world')
    {
        echo $message . "\n";

        return ExitCode::OK;
    }
    
    public function actionResult(){
//        echo 'test';
        
        $main = OkuMain::find()->where(['>','id','5'])->all();
        
//        \yii\helpers\VarDumper::dump($main,10,true);
//        exit();
        
        foreach($main as $m){
            echo $m->id . PHP_EOL ;
            IksokufController::saveTotals($m->id);
            
//            $this->saveTotals($main->id);
        }
        
        
        return ExitCode::OK;
    }
}
