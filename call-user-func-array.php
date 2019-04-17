<?php
# dirty

$product_ids = $this->logic->get_product_ids($_POST, self::search_action);
$percent = $_POST['rngbpp_percent_change'];
$value = $_POST['rngbpp_value_change'];
$text = $_POST['rngbpp_filter_price_text'];
if (isset($_POST['rngbpp_increse_price'])) {
    $this->logic->increase_price($product_ids, $percent, $value);
} elseif (isset($_POST['rngbpp_decrease_price'])) {
    $this->logic->decrease_price($product_ids, $percent, $value);
} elseif (isset($_POST['rngbpp_filter_price'])) {
    $this->logic->filter_price($product_ids, self::filter_key);
} elseif (isset($_POST['rngbpp_reset_price'])) {
    $this->logic->reset_price();
}

# clean

$map = array(
    array(
        'key' => 'rngbpp_increse_price',
        'method' => 'increase_price',
        'params' => array($product_ids, $percent, $value)
    ),
    array(
        'key' => 'rngbpp_decrease_price',
        'method' => 'decrease_price',
        'params' => array($product_ids, $percent, $value)
    ),
    array(
        'key' => 'rngbpp_filter_price',
        'method' => 'filter_price',
        'params' => array($product_ids, self::filter_product_key, self::filter_text_key)
    ),
    array(
        'key' => 'rngbpp_reset_price',
        'method' => 'reset_price',
        'params' => array()
    ),
);
foreach ($map as $callback) {
    if (isset($_POST[$callback['key']])) {
        call_user_func_array(array($this->logic, $callback['method']), $callback['params']);
        break;
    }
}
