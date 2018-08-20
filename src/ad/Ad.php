<?php

class Ad
{

    public $id;
    public $name;
    public $text;
    public $keywords;
    public $price;

    /**
     * Получить цену в нужной валюте
     *
     * @param string $currency
     * @return mixed
     */
    public function getPrice(string $currency = 'rur'): float
    {
        if (empty($this->price)) {
            $this->price = 0.0;
        }

        switch ($currency) {
            case 'rur':
                $rate = 66.2; // получить данные из БД или кеша
                $price = $this->price * $rate;
                break;
            default:
                $price = $this->price;
                break;
        }

        return round($price, 2);
    }

}