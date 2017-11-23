<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pmb_galery".
 *
 * @property integer $id_foto
 * @property string $file_foto
 * @property string $deskripsi
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $active
 */
class PmbGalery extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pmb_galery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file_foto'], 'required'],
            [['deskripsi'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by', 'active'], 'integer'],
            [['file_foto'], 'string', 'max' => 255],
            [['file'], 'file', 'skipOnEmpty' => false, 'extensions' => ['jpg','gif','png', 'pdf', 'docx', 'doc', 'xmls']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_foto' => 'Id Foto',
            'file_foto' => 'File Foto',
            'deskripsi' => 'Deskripsi',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'active' => 'Active',
        ];
    }
}
