<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PmbPendaftaran;

/**
 * PmbPendaftaranSearch represents the model behind the search form about `frontend\models\PmbPendaftaran`.
 */
class PmbPendaftaranSearch extends PmbPendaftaran
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pendaftaran', 'id_usm', 'created_by', 'updated_by', 'active'], 'integer'],
            [['jadwal_awal', 'jadwal_akhir', 'tgl_pengumuman', 'tgl_ujian', 'tgl_mendaftar_ulang_awal', 'tgl_mendaftar_ulang_akhir', 'created_at', 'updated_at'], 'safe'],
            [['biaya_daftar'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = PmbPendaftaran::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_pendaftaran' => $this->id_pendaftaran,
            'jadwal_awal' => $this->jadwal_awal,
            'jadwal_akhir' => $this->jadwal_akhir,
            'biaya_daftar' => $this->biaya_daftar,
            'tgl_pengumuman' => $this->tgl_pengumuman,
            'tgl_ujian' => $this->tgl_ujian,
            'tgl_mendaftar_ulang_awal' => $this->tgl_mendaftar_ulang_awal,
            'tgl_mendaftar_ulang_akhir' => $this->tgl_mendaftar_ulang_akhir,
            'id_usm' => $this->id_usm,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'active' => $this->active,
        ]);

        return $dataProvider;
    }
}
