<?php

namespace kouosl\sosyal\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\sosyal\models\Share;

/**
 * ShareSearch represents the model behind the search form of `vendor\kouosl\sosyal\models\Share`.
 */
class ShareSearch extends Share
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'UserID'], 'integer'],
            [['Date', 'Text'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Share::find();

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
            'id' => $this->id,
            'UserID' => $this->UserID,
        ]);

        $query->andFilterWhere(['like', 'Date', $this->Date])
            ->andFilterWhere(['like', 'Text', $this->Text]);

        return $dataProvider;
    }
}
