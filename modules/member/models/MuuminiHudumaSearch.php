<?php

namespace app\modules\member\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\member\Models\MuuminiHuduma;

/**
 * MuuminiHudumaSearch represents the model behind the search form about `app\modules\member\Models\MuuminiHuduma`.
 */
class MuuminiHudumaSearch extends MuuminiHuduma
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'huduma_id', 'msharika_id'], 'integer'],
            [['start_date'], 'safe'],
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
        $query = MuuminiHuduma::find();

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
            'huduma_id' => $this->huduma_id,
            'msharika_id' => $this->msharika_id,
            'start_date' => $this->start_date,
        ]);

        return $dataProvider;
    }
}
