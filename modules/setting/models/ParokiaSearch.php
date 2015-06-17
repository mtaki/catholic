<?php

namespace app\modules\setting\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\Models\Parokia;

/**
 * ParokiaSearch represents the model behind the search form about `app\modules\setting\Models\Parokia`.
 */
class ParokiaSearch extends Parokia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'jimbo_id'], 'integer'],
            [['parokia', 'catholic_name', 'start_date'], 'safe'],
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
        $query = Parokia::find();

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
            'start_date' => $this->start_date,
            'jimbo_id' => $this->jimbo_id,
        ]);

        $query->andFilterWhere(['like', 'parokia', $this->parokia])
            ->andFilterWhere(['like', 'catholic_name', $this->catholic_name]);

        return $dataProvider;
    }
}
