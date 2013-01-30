<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * @author  arie
 */

class Malam_Hook
{
    public static function init()
    {
        $hooks = Kohana::config('hooks');

        if (empty($hooks))
            return;

        foreach ($hooks as $event => $hook)
        {
            if (! empty($hook))
            {
                foreach ($hook as $h)
                {
                    Dispatcher::instance()->register_listener($event, $h);
                }
            }
        }
    }
}