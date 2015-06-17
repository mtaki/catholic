<?php

namespace app\modules\setting\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\Models\Ahadi;

/**
 * AhadiSearch represents the model behind the search form about `app\modules\setting\Models\Ahadi`.
 */
class AhadiSearch extends Ahadi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'muumini_id', 'ahadi_time_interval_id'], 'integer'],
            [['amount', 'amount_due'], 'number'],
            [['matoleo_date'], 'safe'],
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
        $query = Ahadi::find();

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
            'amount' => $this->amount,
            'amount_due' => $this->amount_due,
            'muumini_id' => $this->muumini_id,
            'ahadi_time_interval_id' => $this->ahadi_time_interval_id,
        ]);

        $query->andFilterWhere(['like', 'matoleo_date', $this->matoleo_date]);

        return $dataProvider;
    }
}
