<?php

namespace app\modules\member\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\member\Models\Muumini;

/**
 * MuuminiSearch represents the model behind the search form about `app\modules\member\Models\Muumini`.
 */
class MuuminiSearch extends Muumini
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'parent_id', 'relationship_id', 'jumuiya_id'], 'integer'],
            [['fullname', 'dob', 'pob', 'marital_status', 'area', 'mtaa', 'block', 'house_no', 'box', 'phone_no', 'neighbour_fullname', 'neighbour_phone_no', 'mzee_kanisa_fullname', 'mzee_kanisa_phone_no', 'work', 'education', 'work_place', 'spouse_name', 'spouse_phone_no', 'marriage_type', 'no', 'life_status'], 'safe'],
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
        $query = Muumini::find();

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
            'dob' => $this->dob,
            'parent_id' => $this->parent_id,
            'relationship_id' => $this->relationship_id,
            'jumuiya_id' => $this->jumuiya_id,
        ]);

        $query->andFilterWhere(['like', 'fullname', $this->fullname])
            ->andFilterWhere(['like', 'pob', $this->pob])
            ->andFilterWhere(['like', 'marital_status', $this->marital_status])
            ->andFilterWhere(['like', 'area', $this->area])
            ->andFilterWhere(['like', 'mtaa', $this->mtaa])
            ->andFilterWhere(['like', 'block', $this->block])
            ->andFilterWhere(['like', 'house_no', $this->house_no])
            ->andFilterWhere(['like', 'box', $this->box])
            ->andFilterWhere(['like', 'phone_no', $this->phone_no])
            ->andFilterWhere(['like', 'neighbour_fullname', $this->neighbour_fullname])
            ->andFilterWhere(['like', 'neighbour_phone_no', $this->neighbour_phone_no])
            ->andFilterWhere(['like', 'mzee_kanisa_fullname', $this->mzee_kanisa_fullname])
            ->andFilterWhere(['like', 'mzee_kanisa_phone_no', $this->mzee_kanisa_phone_no])
            ->andFilterWhere(['like', 'work', $this->work])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'work_place', $this->work_place])
            ->andFilterWhere(['like', 'spouse_name', $this->spouse_name])
            ->andFilterWhere(['like', 'spouse_phone_no', $this->spouse_phone_no])
            ->andFilterWhere(['like', 'marriage_type', $this->marriage_type])
            ->andFilterWhere(['like', 'no', $this->no])
            ->andFilterWhere(['like', 'life_status', $this->life_status]);

        return $dataProvider;
    }
}
