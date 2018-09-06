<?php 
class Cms591c8284acf65079941007_de9462e8204ce37f1f40ad8a8718af56Class extends \Cms\Classes\PageCode
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
