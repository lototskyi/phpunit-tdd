<?php

namespace App;

class Article
{

    private string $title = "";

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title = ""): void
    {
        $this->title = $title;
    }

    public function getSlug(): string
    {
        return str_replace(" ", "_", $this->getTitle());
    }
}