<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PmbSyaratUsm;

/**
 * PmbSyaratUsmSearch represents the model behind the search form about `backend\models\PmbSyaratUsm`.
 */
class PmbSyaratUsmSearch extends PmbSyaratUsm
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_syarat_usm', 'id_usm', 'created_by', 'updated_by', 'active'], 'integer'],
            [['nama_syarat', 'created_at', 'updated_at'], 'safe'],
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
        $query = PmbSyaratUsm::find();

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
            'id_syarat_usm' => $this->id_syarat_usm,
            'id_usm' => $this->id_usm,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'nama_syarat', $this->nama_syarat]);

        return $dataProvider;
    }
}
