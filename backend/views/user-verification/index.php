<?php

//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CountryySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$title = 'User Verification Request';
if($type=='completed'){
    $title = 'Payment Payout';
}

$this->title = $title;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-xs-12"><div class="box">
            <!-- /.box-header -->
            <div class="box-body">
               

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                  //  'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'kartik\grid\SerialColumn'],
                        [
                            'attribute'  => 'user_id',
                            'value' => function($model){
                                
                                return Html::a(@$model->user->name, ['/user/view', 'id' => @$model->user_id]);
                            },
                            
                            'format'=>'raw'
                        ],
                        [
                            'attribute'  => 'user_id',
                            'label'      => 'Username',
                            'value' => function($model){
                                
                                return Html::a(@$model->user->username, ['/user/view', 'id' => @$model->user_id]);
                            },
                            
                            'format'=>'raw'
                        ],
                        
                        'document_type',
                        
                        [
                            'attribute'  => 'status',
                            'value'  => function ($data) {
                                return $data->statusButton;
                            },
                            'format'=>'raw'
                        ],
                     
                        
                        'created_at:datetime',
                        [
							'class' => 'yii\grid\ActionColumn',
							 'header' => 'Action',
                             'template' => '{view}',
                         ],
                        
                      
                    ],
                    'tableOptions' => [
                        'id' => 'theDatatable',
                        'class' => 'table table-striped table-bordered table-hover',
                    ],
                     'toolbar' => [
                    
                        '{export}',
                        //'{toggleData}'
                    ],
                    //'toggleDataContainer' => ['class' => 'btn-group-sm'],
                    //'exportContainer' => ['class' => 'btn-group-sm'],
                    'exportConfig' => [
                        GridView::CSV => ['label' => 'CSV'],
                        GridView::EXCEL => [],// html settings],
                       
                    ],
            
                    'pjax' => false,
                    'bordered' => true,
                    'striped' => false,
                    'condensed' => false,
                    'responsive' => true,
                    'hover' => true,
                    'floatHeader' => false,
                    //'floatHeaderOptions' => ['top' => $scrollingTop],
                    'showPageSummary' => false,
                    'panel' => [
                        // 'type' => GridView::TYPE_PRIMARY
                    ],
                   
                ]); ?> 
            </div>
        </div>
        <!-- /.box -->

        <!-- /.col -->
    </div>
</div>