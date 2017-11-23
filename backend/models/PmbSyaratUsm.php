<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pmb_syarat_usm".
 *
 * @property integer $id_syarat_usm
 * @property string $nama_syarat
 * @property integer $id_usm
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $active
 *
 * @property PmbUsm $idUsm
 */
class PmbSyaratUsm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pmb_syarat_usm';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_syarat'], 'required'],
            [['nama_syarat'], 'string'],
            [['id_usm', 'created_by', 'updated_by', 'active'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['id_usm'], 'exist', 'skipOnError' => true, 'targetClass' => PmbUsm::className(), 'targetAttribute' => ['id_usm' => 'id_usm']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_syarat_usm' => 'Id Syarat Usm',
            'nama_syarat' => 'Nama Syarat',
            'id_usm' => 'Id Usm',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'active' => 'Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsm()
    {
        return $this->hasOne(PmbUsm::className(), ['id_usm' => 'id_usm']);
    }
}
