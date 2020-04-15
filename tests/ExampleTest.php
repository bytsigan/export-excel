<?php

namespace Bytsigan\ExportExcel\Tests;

use Orchestra\Testbench\TestCase;
use Bytsigan\ExportExcel\ExportExcelServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ExportExcelServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
