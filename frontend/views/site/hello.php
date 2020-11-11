<?php
use \yii\helpers\Html;
use \yii\helpers\Url;
echo "<a href=home Url::to();>Home</a><br>";
echo Html::a('Google','http://www.google.com');
echo "<br>";
echo Html:: a('Pesan',['site/pesan']); 