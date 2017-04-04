<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TOrder;

/**
 * TOrderSearch represents the model behind the search form about `app\models\TOrder`.
 */
class TOrderSearch extends TOrder
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['orderId', 'orderBiayaTransport', 'orderAlamatTambahanId'], 'integer'],
            [['orderTgl', 'orderJenisBayar', 'orderAlamat', 'orderKota', 'orderKelurahan', 'orderKecamatan', 'orderDaerah', 'orderKodePos', 'orderAlamatNote', 'orderGpsKoordinat', 'orderStatus'], 'safe'],
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
        $query = TOrder::find();

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
            'orderId' => $this->orderId,
            'orderTgl' => $this->orderTgl,
            'orderBiayaTransport' => $this->orderBiayaTransport,
            'orderAlamatTambahanId' => $this->orderAlamatTambahanId,
        ]);

        $query->andFilterWhere(['like', 'orderJenisBayar', $this->orderJenisBayar])
            ->andFilterWhere(['like', 'orderAlamat', $this->orderAlamat])
            ->andFilterWhere(['like', 'orderKota', $this->orderKota])
            ->andFilterWhere(['like', 'orderKelurahan', $this->orderKelurahan])
            ->andFilterWhere(['like', 'orderKecamatan', $this->orderKecamatan])
            ->andFilterWhere(['like', 'orderDaerah', $this->orderDaerah])
            ->andFilterWhere(['like', 'orderKodePos', $this->orderKodePos])
            ->andFilterWhere(['like', 'orderAlamatNote', $this->orderAlamatNote])
            ->andFilterWhere(['like', 'orderGpsKoordinat', $this->orderGpsKoordinat])
            ->andFilterWhere(['like', 'orderStatus', $this->orderStatus]);

        return $dataProvider;
    }
}
