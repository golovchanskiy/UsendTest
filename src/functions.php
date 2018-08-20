<?php

/**
 * Получить данные из БД
 *
 * @param int $id
 * @return array
 */
function getAdRecord($id)
{
    // пример ответа
    return [
        'id'       => $id,
        'name'     => 'AdName_FromMySQL',
        'text'     => 'AdText_FromMySQL',
        'keywords' => 'Some Keywords',
        'price'    => 10, // 10$
    ];
}

/**
 * Получить данные из cache
 *      0. id - объявления
 *      1. id - кампании
 *      2. id - пользователя
 *      3. название объявления
 *      4. текст объявления
 *      5. стоимость объявления в $
 *
 * @param int $id
 * @return string
 */
function get_deamon_ad_info($id)
{
    // пример ответа: строка разделенная табуляцией
    return "{$id}\t235678\t12348\tAdName_FromDaemon\tAdText_FromDaemon\t11";
}
