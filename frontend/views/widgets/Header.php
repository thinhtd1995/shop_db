<?php
namespace frontend\views\widgets;
use Yii;
use yii\base\Widget;
use yii\helpers\Html;


class Header extends Widget{

	public function init(){
		parent::init();		
	}
	
	public function run(){   
		
        return $this->render('header');
	}
}
?>