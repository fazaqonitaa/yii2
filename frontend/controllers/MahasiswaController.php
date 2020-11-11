<?php
namespace frontend\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Mahasiswa;

class MahasiswaController extends Controller
{
  public function actionIndex()
  {
    $query = Mahasiswa::find();
    $pagination = new Pagination(['defaultPageSize' => 4, 'totalCount' => $query->Count(),]);
    $mhs = $query->orderBy('nama')
        ->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();

    return $this -> render('index', [
        'mhs' => $mhs,
        'pagination' => $pagination,
    ]);
  }
}