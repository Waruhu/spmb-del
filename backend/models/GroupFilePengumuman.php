<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "group_file_pengumuman".
 *
 * @property integer $id_gruop_file
 * @property string $file_pengumuman
 * @property integer $id_pengumuman
 *
 * @property PmbPengumuman $idPengumuman
 */
class GroupFilePengumuman extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'group_file_pengumuman';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pengumuman'], 'integer'],
            [['file_pengumuman'], 'string', 'max' => 255],
            [['id_pengumuman'], 'exist', 'skipOnError' => true, 'targetClass' => PmbPengumuman::className(), 'targetAttribute' => ['id_pengumuman' => 'id_pengumuman']],
            [['file'], 'safe'],
            [['file'], 'file', 'skipOnEmpty' => false, 'extensions' => ['jpg','gif','png', 'pdf', 'docx', 'doc', 'xlsx']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_gruop_file' => 'Id Gruop File',
            'file_pengumuman' => 'File Pengumuman',
            'id_pengumuman' => 'Id Pengumuman',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPengumuman()
    {
        return $this->hasOne(PmbPengumuman::className(), ['id_pengumuman' => 'id_pengumuman']);
    }
}
