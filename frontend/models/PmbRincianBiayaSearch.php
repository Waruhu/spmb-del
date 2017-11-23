<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PmbRincianBiaya;

/**
 * PmbRincianBiayaSearch represents the model behind the search form about `frontend\models\PmbRincianBiaya`.
 */
class PmbRincianBiayaSearch extends PmbRincianBiaya
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_rincian_biaya', 'id_biaya_pendidikan', 'id_usm', 'created_by', 'updated_by', 'active'], 'integer'],
            [['rincian_biaya', 'created_at', 'updated_at'], 'safe'],
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
        $query = PmbRincianBiaya::find();

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
            'id_rincian_biaya' => $this->id_rincian_biaya,
            'id_biaya_pendidikan' => $this->id_biaya_pendidikan,
            'id_usm' => $this->id_usm,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'rincian_biaya', $this->rincian_biaya]);

        return $dataProvider;
    }
}
