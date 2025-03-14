<?php
namespace Mrubiosan\FlyUrl\Adapter;

//use League\Flysystem\AdapterInterface;
use League\Flysystem\FilesystemAdapter;

interface UrlAdapterInterface extends FilesystemAdapter
{
    /**
     * @param $path
     * @return string
     */
    public function getUrl($path);
}
