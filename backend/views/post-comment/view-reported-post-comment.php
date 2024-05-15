<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\data\ArrayDataProvider;
/* @var $this yii\web\View */
/* @var $model app\models\Countryy */

$this->title = 'Reported Post Comment Detail';

$this->params['breadcrumbs'][] = ['label' => 'post comment', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

?>


<div class="row">
    <div class="col-xs-12">
        <div class="box">

            <div class="box-body">



                <p>
                    
                    
                    
                    
                    <?php

                    echo Html::a('Reject Reported Request', ['reported-post-comment-action', 'id' => @$model->id,'type'=>'cancel'], ['class' => 'btn btn-primary','data' => [
                        'method' => 'post',
                    ]]);
                    echo '&nbsp;';
                    echo Html::a('Block Post Comment', ['reported-post-comment-action', 'id' => @$model->id,'type'=>'block'], [
                        'class' => 'btn btn-danger',
                        'data' => [
                        'confirm' => 'Are you sure you want to block this post comment?',
                        'method' => 'post',
                      ],
                    ]);
                    echo '&nbsp;';

                    ?>
                </p>


                <div class="col-xs-6" style="padding:0px;">

                    <?=DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'comment',
                        [
                            'attribute' => 'status',
                            'value' => function ($model) {
                                return $model->getStatus();
                            },

                        ],
                       
                        [
                            'attribute' => 'User',
                            'value' => function ($model) {

                                return Html::a(@$model->user->name, ['/user/view', 'id' => @$model->user_id]);
                            },
                            'format' => 'raw',
                        ],
                        'created_at:datetime',

                    ],
                ])?>
                </div>
                <div class="col-xs-6">

                
                 <?php 
                   
                    echo  GridView::widget([
                        'dataProvider' => new ArrayDataProvider([
                            'allModels' => $model->reportedPostCommentActive,
                        ]),
                    // 'filterModel' => $searchModel,
                        'columns' => [
                            //['class' => 'yii\grid\SerialColumn'],
                            ['class' => 'kartik\grid\SerialColumn'],
                            [
                                'attribute' => 'user_id',
                                'value' => function ($model) {
                                    
                                    
                                    return Html::a(@$model->user['name'], ['/user/view', 'id' => @$model->user['id']]);
                                },
                                'format'=>'raw'
                            ],
                            'created_at:datetime',
                            [
                            'attribute' => 'status',
                            'value' => function ($model) {
                                return $model->getStatus();
                            },
                            'format'=>'raw'
                            ],
                            'resolved_at:datetime',
                            
                            
                        
                        ],
                        'tableOptions' => [
                            'id' => 'theDatatable',
                            'class' => 'table table-striped table-bordered table-hover',
                        ],
                        'toolbar' => [
                        ],

                        'pjax' => false,
                        'bordered' => false,
                        'striped' => false,
                        'condensed' => false,
                        'responsive' => true,
                        'hover' => true,
                        'floatHeader' => false,
                        //'floatHeaderOptions' => ['top' => $scrollingTop],
                        'showPageSummary' => false,
                        'summary'=> false,
                        
                        'panel' => [
                           // 'type' => GridView::TYPE_PRIMARY,
                            'heading'=>'Post Reported By',
                            
                        ],
                                    
                    ]); 
                    ?>

                  

                </div>
                
                <div class="box-header col-xs-12">
                  
                    <?php

               
               
               ?>
            

                </div>

               

            </div>

        </div>

    </div>