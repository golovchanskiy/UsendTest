<?php

include_once('./src/ad/AdFromInterface.php');

class AdFromCache implements AdFromInterface
{

    /**
     * @param int $id
     * @return Ad
     * @throws Exception
     */
    public function getAd(int $id): Ad
    {
        $data = get_deamon_ad_info($id);

        if (empty($data)) {
            throw new \Exception('No Ad');
        }

        $data = explode("\t", $data);

        $model = new Ad();
        $model->id = $data[0];
        $model->name = $data[3];
        $model->text = $data[4];
        $model->keywords = '';
        $model->price = $data[5];

        return $model;
    }

    /**
     * @return string
     */
    public function getFunctionName(): string
    {
        return 'get_deamon_ad_info';
    }

}