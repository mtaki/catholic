<?php

namespace app\modules\member;

class Member extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\member\controllers';

    public function init()
    {
        parent::init();
		
		$this->setImport(array(
            'member.models.*',
            'member.components.*',
           // 'image.models.*',
           // 'image.components.*',
        ));

        // custom initialization code goes here
    }
}
