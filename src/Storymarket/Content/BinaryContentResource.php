<?php

class Storymarket_Content_BinaryContentResource extends Storymarket_Content_Resource {
    public function uploadFile($file) {
        $this->manager->uploadFile($this, $file);
    }
}

