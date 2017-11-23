<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pmb_faq".
 *
 * @property integer $id_faq
 * @property string $pertanyaan
 * @property string $jawaban
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $active
 */
class PmbFaq extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pmb_faq';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pertanyaan', 'jawaban'], 'required'],
            [['pertanyaan', 'jawaban'], 'string'],
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
            'id_faq' => 'Id Faq',
            'pertanyaan' => 'Pertanyaan',
            'jawaban' => 'Jawaban',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'active' => 'Active',
        ];
    }
}
