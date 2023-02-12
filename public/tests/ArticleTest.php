<?php


use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    protected App\Article $article;

    protected function setUp(): void
    {
        $this->article = new App\Article;
    }

    public function testTitleIsEmptyByDefault()
    {
        $this->assertEmpty($this->article->getTitle());
    }

    public function testSlugIsEmptyWithNoTitle()
    {
        $this->assertSame("", $this->article->getSlug());
    }

    public function testSlugHasSpacesReplacedByUnderscores()
    {
        $this->article->setTitle('An example article');
        $this->assertEquals('An_example_article', $this->article->getSlug());
    }
}
