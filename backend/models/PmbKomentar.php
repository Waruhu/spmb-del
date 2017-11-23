<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pmb_komentar".
 *
 * @property integer $id_komentar
 * @property string $deskripsi_komenter
 * @property integer $id_tanya_jawab
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $active
 *
 * @property PmbTanyaJawab $idTanyaJawab
 */
class PmbKomentar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pmb_komentar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deskripsi_komenter'], 'required'],
            [['deskripsi_komenter'], 'string'],
            [['id_tanya_jawab', 'created_by', 'updated_by', 'active'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['id_tanya_jawab'], 'exist', 'skipOnError' => true, 'targetClass' => PmbTanyaJawab::className(), 'targetAttribute' => ['id_tanya_jawab' => 'id_tanya_jawab']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_komentar' => 'Id Komentar',
            'deskripsi_komenter' => 'Deskripsi Komenter',
            'id_tanya_jawab' => 'Id Tanya Jawab',
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
    public function getIdTanyaJawab()
    {
        return $this->hasOne(PmbTanyaJawab::className(), ['id_tanya_jawab' => 'id_tanya_jawab']);
    }
}
