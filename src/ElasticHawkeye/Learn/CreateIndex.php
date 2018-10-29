<?php

namespace ElasticHawkeye\Learn;

use Elasticsearch\ClientBuilder;

/**
 * @package ElasticHawkeye\Learn
 */
class CreateIndex
{
    public static function create()
    {
        $client = ClientBuilder::create()->build();
    }
}
