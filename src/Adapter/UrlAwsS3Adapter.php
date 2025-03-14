<?php
namespace Mrubiosan\FlyUrl\Adapter;

//use League\Flysystem\AwsS3v3\AwsS3Adapter;
use League\Flysystem\AwsS3V3\AwsS3V3Adapter;

class UrlAwsS3Adapter extends AwsS3V3Adapter implements UrlAdapterInterface
{
    public function getUrl($path)
    {
        $bucket = $this->getBucket();
        return $this->getClient()->getObjectUrl($bucket, $this->applyPathPrefix($path));
    }
}
