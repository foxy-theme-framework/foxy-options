<?php
namespace Jankx\Option\Adapters;

use Jankx\Option\Abstracts\Adapter;

class ReduxFramework extends Adapter
{
    protected $themeOptions;

    public function prepare()
    {
        $reduxOptionName = apply_filters(
            'jankx_option_redux_framework_option_name',
            get_stylesheet()
        );
        global $$reduxOptionName;

        $this->themeOptions = &$$reduxOptionName;
    }

    public function getOption($name, $defaultValue = null)
    {

        if (isset($this->themeOptions[$name])) {
            return $this->themeOptions[$name];
        }

        return $defaultValue;
    }
}
