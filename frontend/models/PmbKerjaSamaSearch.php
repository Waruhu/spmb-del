<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PmbKerjaSama;

/**
 * PmbKerjaSamaSearch represents the model behind the search form about `frontend\models\PmbKerjaSama`.
 */
class PmbKerjaSamaSearch extends PmbKerjaSama
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kerja_sama', 'created_by', 'updated_by', 'active'], 'integer'],
            [['nama_client', 'deskripsi', 'logo', 'created_at', 'udpated_at'], 'safe'],
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
        $query = PmbKerjaSama::find();

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
            'id_kerja_sama' => $this->id_kerja_sama,
            'created_at' => $this->created_at,
            'udpated_at' => $this->udpated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'nama_client', $this->nama_client])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi])
            ->andFilterWhere(['like', 'logo', $this->logo]);

        return $dataProvider;
    }
}
