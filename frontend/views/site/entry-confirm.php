<?php
use yii\helpers\Html;
?>
<p> Data yang sudah diisi adalah sebagai berikut :</p>

<ul>
	<li><label>Nama</label> : <?= Html :: encode($model->name)?> </li>
	<li><label>Email</label> : <?= Html :: encode($model->email)?> </li>
</ul>