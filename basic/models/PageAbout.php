<?php
namespace app\models;

use app\models\About;
use app\models\Page;

/*
 *  @property About $About
 */

 class PageAbout extends Page {

     public function getAbout()
     {
         return $this->hasOne(About::className(), ['id' => 'id']);
     }

}
