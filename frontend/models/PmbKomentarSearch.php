<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PmbKomentar;

/**
 * PmbKomentarSearch represents the model behind the search form about `frontend\models\PmbKomentar`.
 */
class PmbKomentarSearch extends PmbKomentar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_komentar', 'id_tanya_jawab', 'created_by', 'updated_by', 'active'], 'integer'],
            [['deskripsi_komenter', 'created_at', 'updated_at'], 'safe'],
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
        $query = PmbKomentar::find();

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
            'id_komentar' => $this->id_komentar,
            'id_tanya_jawab' => $this->id_tanya_jawab,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'deskripsi_komenter', $this->deskripsi_komenter]);

        return $dataProvider;
    }
}
