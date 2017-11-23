<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pmb_foto".
 *
 * @property integer $id_foto
 * @property string $file_foto
 * @property string $deskripsi
 */
class PmbFoto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pmb_foto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deskripsi'], 'string'],
            [['file_foto'], 'string', 'max' => 255],
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
        ];
    }
}
