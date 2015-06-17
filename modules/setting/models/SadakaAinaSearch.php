<?php

namespace app\modules\setting\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\Models\SadakaAina;

/**
 * SadakaAinaSearch represents the model behind the search form about `app\modules\setting\Models\SadakaAina`.
 */
class SadakaAinaSearch extends SadakaAina
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['sadaka_name', 'description'], 'safe'],
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
        $query = SadakaAina::find();

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
        ]);

        $query->andFilterWhere(['like', 'sadaka_name', $this->sadaka_name])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
