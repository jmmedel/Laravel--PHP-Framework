<?php 
class Cms591c9295f3675748120114_41955ff4d76b32a26aeecba90c6ed988Class extends \Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
