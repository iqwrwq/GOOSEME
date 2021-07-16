<?php

namespace Gooseme\directory;

class DirectoryHandler
{
    public function __construct()
    {
    }

    public function getProjects(){
        return array_filter(glob('*'), 'is_dir');
    }
}