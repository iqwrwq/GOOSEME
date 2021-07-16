<?php

namespace Gooseme\pageloader;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;


class PageLoader
{
    private $loader;
    private $twig;

    public function __construct()
    {
        $this->loader = new FilesystemLoader('.goose/src/pages', getcwd());
        $this->twig = new Environment($this->loader);
    }

    public function index()
    {
        echo $this->twig->render('index.html.twig',
            [
                'words' => 'hallo welt!'
            ]);
    }

}