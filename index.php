<?php

use Rules\Alphabetical;
use Rules\Numeric;
use Rules\Required;

require_once './vendor/autoload.php';

$attributes = ['name' => '', 'age' => ''];

$rules = [
    'name' => [new Required, new Alphabetical],
    'age' => [new Required, new Numeric],
];

try
{
    $validator = Validator::make($rules, $attributes);

    echo '<pre>';
    print_r($validator->getErrors());
    echo '</pre>';
}
catch (Exceptions\UndefinedRuleException $ex)
{
    echo $ex->getMessage();
}