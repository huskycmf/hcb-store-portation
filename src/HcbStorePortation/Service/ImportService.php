<?php
namespace HcbStorePortation\Service;

use HcCore\Service\CommandInterface;
use HcbStorePortation\Data\ImportInterface;
use Zf2Libs\Stdlib\Service\Response\Messages\Response as ImportResponse;

class ImportService implements CommandInterface
{
    /**
     * @var ImportInterface
     */
    protected $importData;

    /**
     * @param ImportInterface $importData
     */
    public function __construct(ImportInterface $importData,
                                ImportResponse $importResponse)
    {
        $this->importData = $importData;
    }

    /**
     * @return ImportResponse
     */
    public function execute()
    {
        $csvReader = $this->importData->getCsv();

    }
}
