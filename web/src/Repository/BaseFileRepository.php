<?php

declare(strict_types=1);

namespace App\Repository;

use App\Exception\FileException;

/**
 * Base Repository.
 */
class BaseFileRepository
{

    /**
     * Parse xml file and return Array
     *
     * @param string $file
     * @return array|null
     */
    public function readXmlFile(string $file): ?array
    {
        if(!empty($file)) {
            try {
                $xmlContent = simplexml_load_file('/var/www/html/data/' . $file);
                $arrayContent = json_decode(json_encode($xmlContent), true);
                return $arrayContent;
            } catch (\Exception $exception) {
                throw new FileException($exception->getMessage());
            }

        }else {
            throw new FileException('The file:' . $file . ' is not XML valid');
        }
    }

    private function readJsonFile($file): ?array
    {
        //TODO return prices        
    }

}
