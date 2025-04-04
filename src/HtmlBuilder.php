<?php

namespace Kkxdev\CollectiveHtmlWrapper;
use Spatie\Html\Html;

class HtmlBuilder
{
    protected $html;

    public function __construct(Html $html)
    {
        $this->html = $html;
    }

    /**
     * Open up a new HTML form
     * @param array $options
     * @return void
     */
    public function open(array $options = []) {

    }

    public function close() {

    }

    public function token() {

    }

    public function model($model, array $options = []) {

    }

    public function label($name, $value = null, $options = [], $escape_html = true) {

    }

    public function input($type, $name, $value = null, $options = []) {

    }

    public function text($name, $value = null, $options = []) {

    }

    public function password($name, $options = []) {

    }

    public function range($name, $value = null, $options = []) {

    }

    public function hidden($name, $value = null, $options = []) {

    }

    public function search($name, $value = null, $options = []) {

    }

    public function email($name, $value = null, $options = []) {

    }

    public function tel($name, $value = null, $options = []) {

    }

    public function number($name, $value = null, $options = []) {

    }

    public function date($name, $value = null, $options = []) {

    }

    public function datetime($name, $value = null, $options = []) {

    }

    public function datetimeLocal($name, $value = null, $options = []) {

    }

    public function time($name, $value = null, $options = []) {

    }

    public function url($name, $value = null, $options = []) {

    }

    public function week($name, $value = null, $options = []) {

    }

    public function file($name, $options = []) {

    }

    public function textarea($name, $value = null, $options = []) {

    }

    public function select($name,
                           $list = [],
                           $selected = null,
                           array $selectAttributes = [],
                           array $optionsAttributes = [],
                           array $optgroupsAttributes = []) {

    }

    public function selectRange($name, $begin, $end, $selected = null, $options = []) {

    }

    public function selectYear() {

    }

    public function selectMonth($name, $selected = null, $options = [], $format = '%B') {

    }


    public function checkbox($name, $value = 1, $checked = null, $options = []) {

    }

    public function radio($name, $value = null, $checked = null, $options = []) {

    }

    public function reset($value, $attributes = []) {

    }

    public function image($url, $name = null, $attributes = []) {

    }

    public function month($name, $value = null, $options = []) {

    }

    public function color($name, $value = null, $options = []) {

    }
    public function submit($value = null, $options = []) {

    }

    public function button($value = null, $options = []) {

    }

    public function datalist($id, $list = []) {

    }
    public function script($url, $attributes = [], $secure = null) {

    }

    public function style($url, $attributes = [], $secure = null) {

    }


}