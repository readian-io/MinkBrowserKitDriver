<?php

namespace Behat\Mink\Tests\Driver;

use Behat\Mink\Driver\BrowserKitDriver;
use Behat\Mink\Tests\Driver\Util\FixturesKernel;
use Symfony\Component\HttpKernel\HttpKernelBrowser;

class BrowserKitConfig extends AbstractConfig
{
    public static function getInstance(): BrowserKitConfig
    {
        return new self();
    }

    /**
     * {@inheritdoc}
     */
    public function createDriver()
    {
        $client = new HttpKernelBrowser(new FixturesKernel());

        return new BrowserKitDriver($client);
    }

    /**
     * {@inheritdoc}
     */
    public function getWebFixturesUrl(): string
    {
        return 'http://localhost';
    }

    protected function supportsJs(): bool
    {
        return false;
    }
}
