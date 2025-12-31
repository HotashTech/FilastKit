<?php

declare(strict_types=1);

if (! function_exists('domain')) {
    function domain(string $url = ''): string
    {
        if ($url === '' || $url === '0') {
            $url = config('app.url', '');
            assert(is_string($url), 'URL is not a string');
        }

        return (string) parse_url($url, PHP_URL_HOST);
    }
}
