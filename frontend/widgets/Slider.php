<?php

namespace frontend\widgets;

use yii\base\Widget;

class Slider extends Widget
{
    public function run()
    {
        return $this->render('slider');
    }
}