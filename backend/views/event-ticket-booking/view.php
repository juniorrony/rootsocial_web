<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Countryy */

$this->title = 'Booking Detail';
$this->params['breadcrumbs'][] = ['label' => 'Event Ticket Booking', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>


<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <!-- <div class="box-header">
                <h3 class="box-title"><?= Html::encode($this->title) ?></h3>

            </div>
             -->
            <div class="box-body">
                
            <p class="buttonTopPadding">
                    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

                </p>




    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute'  => 'is_check_in',
                'label'=> 'Is Check-In ?',
                'value'  => function ($data) {
                    return  Html::checkbox('my-checkbox', false, ['disabled' => 'disabled','checked'=>($data->is_check_in)?true:false]);
                },
                'format'=>'raw'
            ],
            [
                'attribute'  => 'notes',
                
                'value'  => function ($data) {
                    return  nl2br($data->notes);
                },
                'format'=>'raw'
            ],
            [
                'attribute'  => 'status',
                'value'  => function ($data) {
                    return $data->getStatusButton();
                },
                'format'=>'raw'
            ],

            [
                'attribute'  => 'event_id',
                'value' => function($model){
                    return @$model->event->name;
                },
                'format'=>'raw'
            ],
            [
                'attribute'  => 'user_id',
                'value' => function($model){
                    
                    return Html::a(@$model->user->name, ['/user/view', 'id' => $model->user_id]);
                },
              
                'format'=>'raw'
            ],
            
            'created_at:datetime',
            [
                'attribute'  => 'event_ticket_id',
                'value'  => function ($data) {
                    return $data->ticket_qty.' x '.$data->ticket->ticket_type;
                },
                'format'=>'raw'
            ],
            'coupon',
            'coupon_discount_value',
            'paid_amount',
            'ticket_amount',
            [
                'label'  => 'Transactions',
                'attribute'  => 'Paymentd',
                'value'  => function ($data) {
                    //return $data->ticket_qty.' x '.$data->ticket->ticket_type;
                    $str='';
                    foreach($data->payment as $payment){
                        $str.='$'.$payment->amount.' / '.$payment->paymentModeString .' / '.$payment->transaction_id;

                        $str.='<br>';
                    };
                    return $str;

                },
                'format'=>'raw'
            ],
            

          
            
        ],
    ]) ?>

</div>


</div>

</div>
</div>
