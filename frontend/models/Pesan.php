<?php
namespace frontend\models;

class Pesan extends \yii\base\Model {
    public $nama;
    public $pesan;

    public function rules(){
        return[
            [['nama','pesan'],'required'],
        ];
    }
}