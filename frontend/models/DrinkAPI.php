<?php

namespace frontend\models;

use common\models\Drink;

class DrinkAPI extends Drink
{
    public function fields()
    {
        $fields = parent::fields();
        return $fields;
    }

    public function extraFields()
    {
        return [
            ''
        ];
    }
}
