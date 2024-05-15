<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Countryy */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
.column {
  float: left;
  padding: 10px;
  margin-left: 1.5%;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<div class="countryy-form">

    <?php $form = ActiveForm::begin(); ?>

    
        
            <div class="panel panel-default">
        <div class="panel-heading">
            <h4>User Module Permission</h4>
        </div>
        <div  class="row" style="padding:10px;">
            <?php 
                foreach($moduleList as $record){
                    
                ?>
        
                    <div class="col-sm-6">
                    <?php  echo $form->field($model, 'module_ids[]')->checkBox(['label' => $record['name'],'checked'=>($record['is_active'])?true:false, 'data-size'=>'small', 'style'=>'margin-bottom:4px;','value'=> $record['id']]);?>
                        <?php // echo $form->field($model, 'is_photo_post')->checkBox(['label' => $record['name'], 'data-size' => 'small', 'style' => 'margin-bottom:4px;']);?>  
                    </div>
            <?php 
         } ?>

        </div>
        </div>
        
                
      
    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$js = <<<JS
    // alert('a')
   
  

JS;
    $this->registerJs($js, \yii\web\view::POS_READY);
    ?>