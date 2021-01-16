<?php

declare(strict_types=1);

namespace Flextype\Plugin\Redirect;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$redirect = flextype('registry')->get('plugins.redirect.settings.redirect');

if (isset($redirect) and count($redirect) > 0) {
    foreach ($redirect as $item) {
        flextype()->get($item['from'], function (Request $request, Response $response, array $args) use ($item) {
            return $response->withRedirect($item['to'], isset($item['status']) ? $item['status'] : 301);
        });
    }
}
