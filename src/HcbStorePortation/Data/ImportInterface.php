<?php
namespace HcbStorePortation\Data;

use EasyCSV\Reader as CsvReader;

interface ImportInterface
{
    /**
     * @return CsvReader
     */
    public function getCsv();
}
