<?php

namespace app\modules\member\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\member\Models\MuuminiSacrament;

/**
 * MuuminiSacramentSearch represents the model behind the search form about `app\modules\member\Models\MuuminiSacrament`.
 */
class MuuminiSacramentSearch extends MuuminiSacrament
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'msharika_id', 'sacrament_service_id'], 'integer'],
            [['place', 'year_issued', 'description'], 'safe'],
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
        $query = MuuminiSacrament::find();

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
            'msharika_id' => $this->msharika_id,
            'sacrament_service_id' => $this->sacrament_service_id,
        ]);

        $query->andFilterWhere(['like', 'place', $this->place])
            ->andFilterWhere(['like', 'year_issued', $this->year_issued])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
