<?php 
class Cms591c816946f1b313712770_93c6a23c491a18c974a964a4bb83a7fbClass extends \Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
