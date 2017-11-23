<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "pmb_berita".
 *
 * @property integer $id_berita
 * @property string $judul_berita
 * @property string $deskripsi_singkat
 * @property string $deskripsi_all
 * @property string $file_foto
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $active
 */
class PmbBerita extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pmb_berita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul_berita', 'deskripsi_singkat', 'deskripsi_all'], 'required'],
            [['deskripsi_singkat', 'deskripsi_all'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by', 'active'], 'integer'],
            [['judul_berita', 'file_foto'], 'string', 'max' => 255],
            

            [['file'], 'safe'],
            [['file'], 'file', 'extensions'=>'jpg, jpeg, png, pdf,docx, doc, xmls'],
            [['file'], 'file', 'maxSize' => 1024 * 1024 * 1024],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_berita' => 'Id Berita',
            'judul_berita' => 'Judul Berita',
            'deskripsi_singkat' => 'Deskripsi Singkat',
            'deskripsi_all' => 'Deskripsi All',
            'file_foto' => 'File Foto',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'active' => 'Active',
        ];
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'updated_at',
                ],
                'value' => new Expression('NOW()'),
            ],
            
        ];
    }




    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        } 
        if(ActiveRecord::EVENT_BEFORE_INSERT){
            $this->created_by = Yii::$app->user->identity->id;
            $this->updated_by = Yii::$app->user->identity->id;
        }else if(ActiveRecord::EVENT_BEFORE_UPDATE){
            $this->updated_by = Yii::$app->user->identity->id;
        }
        
        return true;
    }

    public function softDelete(){
        //$this->deleted_at = (new \yii\db\Query)->select(new Expression('NOW()'))->scalar();
        $this->active = 0;      
        return $this->save();
    }
}
