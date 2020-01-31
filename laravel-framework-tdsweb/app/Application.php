<?php

namespace App;

class Application extends \Illuminate\Foundation\Application
{
    public function publicPath()
    {
        return dirname($this->basePath) . DIRECTORY_SEPARATOR . 'public_html';
    }
}
