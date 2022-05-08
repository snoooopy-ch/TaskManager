<?php
/**
 * Global common functions
 * 2021/02/08 Created by RedSpider
 *
 * @author RedSpider
 */

function cAsset($path)
{
    if (env('APP_ENV') === 'production') {
        return secure_url(ltrim($path, '/'));
    }

    return url(ltrim($path, '/'));
}
