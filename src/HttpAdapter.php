<?php

declare(strict_types=1);

namespace pxgamer\HttpAdapters;

interface HttpAdapter
{
    public function delete(string $url): string;

    public function get(string $url): string;

    /**
     * @param  string  $url
     * @param  array|string  $content
     * @return string
     */
    public function put(string $url, $content = ''): string;

    /**
     * @param  string  $url
     * @param  array|string  $content
     * @return string
     */
    public function post(string $url, $content = ''): string;

    public function getLatestResponseHeaders(): ?array;
}
