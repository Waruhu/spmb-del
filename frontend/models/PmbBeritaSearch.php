<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PmbBerita;

/**
 * PmbBeritaSearch represents the model behind the search form about `frontend\models\PmbBerita`.
 */
class PmbBeritaSearch extends PmbBerita
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_berita', 'created_by', 'updated_by', 'active'], 'integer'],
            [['judul_berita', 'deskripsi_singkat', 'deskripsi_all', 'file_foto', 'created_at', 'updated_at'], 'safe'],
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
        $query = PmbBerita::find();

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
            'id_berita' => $this->id_berita,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'judul_berita', $this->judul_berita])
            ->andFilterWhere(['like', 'deskripsi_singkat', $this->deskripsi_singkat])
            ->andFilterWhere(['like', 'deskripsi_all', $this->deskripsi_all])
            ->andFilterWhere(['like', 'file_foto', $this->file_foto]);

        return $dataProvider;
    }
}
