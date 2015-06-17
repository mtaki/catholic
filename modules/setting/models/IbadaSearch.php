<?php

namespace app\modules\setting\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\Models\Ibada;

/**
 * IbadaSearch represents the model behind the search form about `app\modules\setting\Models\Ibada`.
 */
class IbadaSearch extends Ibada
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ibada_type_id'], 'integer'],
            [['ibada_date', 'kumbukumbu'], 'safe'],
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
        $query = Ibada::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'ibada_date' => $this->ibada_date,
            'ibada_type_id' => $this->ibada_type_id,
        ]);

        $query->andFilterWhere(['like', 'kumbukumbu', $this->kumbukumbu]);

        return $dataProvider;
    }
}
