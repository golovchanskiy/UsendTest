<?php

include_once('./src/ad/Ad.php');
include_once('./src/ad/AdFromDb.php');
include_once('./src/ad/AdFromCache.php');
include_once('./src/FileLogger.php');
include_once('./src/functions.php');

class AdFactory
{

    /**
     * @var AdFromInterface $service
     */
    protected $service;

    public function __construct($from)
    {
        switch ($from) {
            case 'Daemon':
                $this->service = new AdFromCache();
                break;
            default:
                $this->service = new AdFromDb();
                break;
        }
    }

    /**
     * @param int $id
     * @return Ad
     * @throws Exception
     */
    public function getAd(int $id): Ad
    {
        return $this->service->getAd($id);

        $logger = new FileLogger('/path/to/file');
        $message = '[' . date('Y-m-d H:i:s') . ']' . "\t" . $this->service->getFunctionName() . ' (ID=' . $id . ')';
        $logger->log($message);
    }

}