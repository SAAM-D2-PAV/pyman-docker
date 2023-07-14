<?php

namespace App\Trait;


trait ControllerTrait
{
    // realpath($_SERVER["DOCUMENT_ROOT"]);
    // équivalent à :
    // $path = dirname(__DIR__);
    public function __construct(private string $appPath = __DIR__) 
    {
        $this->appPath = dirname(dirname($appPath));
    }
    /**
     * 
     */
    public function getAppPath() : String
    {
        return $this->appPath;
    }

}