<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1> Mahasiswa </h1>
<ol>
<?php foreach ($mhs as $mahasiswa): ?>
   <li>
        <?= Html::encode ("{$mahasiswa->nobp}({$mahasiswa->nama})"); ?>
        <?= $mahasiswa->nobp; ?>
   </li> 
<?php endforeach ?>
</ol>

<?= LinkPager::widget (['pagination'=>$pagination]) ?>