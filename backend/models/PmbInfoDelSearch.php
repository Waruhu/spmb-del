<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PmbInfoDel;

/**
 * PmbInfoDelSearch represents the model behind the search form about `backend\models\PmbInfoDel`.
 */
class PmbInfoDelSearch extends PmbInfoDel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_info_del', 'created_by', 'updated_by', 'active'], 'integer'],
            [['judul_info', 'deskripsi_del', 'created_at', 'updated_at'], 'safe'],
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
        $query = PmbInfoDel::find();

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
            'id_info_del' => $this->id_info_del,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'judul_info', $this->judul_info])
            ->andFilterWhere(['like', 'deskripsi_del', $this->deskripsi_del]);

        return $dataProvider;
    }
}
