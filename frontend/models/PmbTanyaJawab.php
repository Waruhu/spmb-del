<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pmb_tanya_jawab".
 *
 * @property integer $id_tanya_jawab
 * @property string $deskripsi_tanya_jawab
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $active
 *
 * @property PmbKomentar[] $pmbKomentars
 */
class PmbTanyaJawab extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pmb_tanya_jawab';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['deskripsi_tanya_jawab'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by', 'active'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tanya_jawab' => 'Id Tanya Jawab',
            'deskripsi_tanya_jawab' => 'Deskripsi Tanya Jawab',
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
    public function getPmbKomentars()
    {
        return $this->hasMany(PmbKomentar::className(), ['id_tanya_jawab' => 'id_tanya_jawab']);
    }
}
