<?php
namespace Mrubiosan\FlyUrl\Filesystem;

//use League\Flysystem\FilesystemInterface;
use League\Flysystem\FilesystemOperator;

interface UrlFilesystemInterface extends FilesystemOperator
{
    /**
     * @param $path
     * @return string
     */
    public function getUrl($path);
}
