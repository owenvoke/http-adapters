<?php

declare(strict_types=1);

namespace pxgamer\HttpAdapters;

interface HttpAdapter
{
    /**
     * Perform a DELETE request to the given URL
     *
     * @param string $url
     * @return string
     */
    public function delete(string $url): string;

    /**
     * Perform a GET request to the given URL
     *
     * @param string $url
     * @return string
     */
    public function get(string $url): string;

    /**
     * Perform a PUT request to the given URL
     *
     * @param  string $url
     * @param  array|string|null $content
     * @return string
     */
    public function put(string $url, $content = null): string;

    /**
     * Perform a POST request to the given URL
     *
     * @param  string $url
     * @param  array|string|null $content
     * @return string
     */
    public function post(string $url, $content = null): string;

    /**
     * Get the headers from the last response
     *
     * @return array|null
     */
    public function getLatestResponseHeaders(): ?array;
}
