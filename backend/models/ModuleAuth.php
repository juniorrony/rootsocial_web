<?php
namespace backend\models;
use Yii;
class ModuleAuth extends \yii\db\ActiveRecord
{
    
   
   
  //  public $imageFile;

    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'module_auth';
    }

    

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name','alias'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
         
        ];
    }

    

    
}
