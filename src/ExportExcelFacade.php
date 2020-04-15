<?php

namespace Bytsigan\ExportExcel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bytsigan\ExportExcel\Skeleton\SkeletonClass
 */
class ExportExcelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'export-excel';
    }
}
