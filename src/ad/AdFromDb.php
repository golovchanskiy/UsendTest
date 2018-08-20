<?php

include_once('./src/ad/AdFromInterface.php');

class AdFromDb implements AdFromInterface
{

    /**
     * @param int $id
     * @return Ad
     * @throws Exception
     */
    public function getAd(int $id): Ad
    {
        $data = getAdRecord($id);

        if (empty($data)) {
            throw new \Exception('No Ad');
        }

        $model = new Ad();
        $model->id = $data['id'];
        $model->name = $data['name'];
        $model->text = $data['text'];
        $model->keywords = $data['keywords'];
        $model->price = $data['price'];

        return $model;
    }

    /**
     * @return string
     */
    public function getFunctionName(): string
    {
        return 'getAdRecord';
    }

}