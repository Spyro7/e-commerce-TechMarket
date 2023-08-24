<?php

namespace backend\widgets;

use yii\base\Widget;

class LeftBar extends Widget
{
    public function run()
    {
        return $this->render('left-bar');
    }
}