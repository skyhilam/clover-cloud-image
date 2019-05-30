<?php

namespace Clover\CloudImage\Tests;

use Clover\CloudImage\Facades\CloudImage;
use Clover\CloudImage\ServiceProvider;
use Orchestra\Testbench\TestCase;

class CloudImageTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'cloud-image' => CloudImage::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
