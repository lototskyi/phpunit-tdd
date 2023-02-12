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
        $slug = trim($this->getTitle());
        $slug = preg_replace("/\s+/", "_", $slug);
        $slug = preg_replace("/\W+/", "", $slug);
        return $slug;
    }
}