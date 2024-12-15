<?php

if (!function_exists("vista_asset")) {
    function vista_asset($path)
    {
        return asset("3DVista/{$path}");
    }
}


if (!function_exists("master_asset")) {
    function master_asset($path)
    {
        return asset("3DVista/{$path}");
    }
}
