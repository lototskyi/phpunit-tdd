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

//    public function testSlugHasSpacesReplacedByUnderscores()
//    {
//        $this->article->setTitle('An example article');
//        $this->assertEquals('An_example_article', $this->article->getSlug());
//    }
//
//    public function testSlugHasWhitespaceReplacedBySingleUnderscore()
//    {
//        $this->article->setTitle("An    example   \n   article");
//        $this->assertEquals("An_example_article", $this->article->getSlug());
//    }
//
//    public function testSlugDoesNotStartOrEndWithAnUnderscore()
//    {
//        $this->article->setTitle(" An example article ");
//        $this->assertEquals("An_example_article", $this->article->getSlug());
//    }
//
//    public function testSlugDoesNotHaveAnyNonWordCharacters()
//    {
//        $this->article->setTitle("Read! This! Now!");
//        $this->assertEquals("Read_This_Now", $this->article->getSlug());
//    }

    public static function titleProvider(): array
    {
        return [
            'Slug Has Spaces Replaced By Underscores'
                            => ["An example article", "An_example_article"],
            'Slug Has Whitespace Replaced By Single Underscore'
                            => ["An    example   \n   article", "An_example_article"],
            'Slug Does Not Start Or End With An Underscore'
                            => [" An example article ", "An_example_article"],
            'Slug Does Not Have Any Non Word Characters'
                            => ["Read! This! Now!", "Read_This_Now"]
        ];
    }

    /**
     * @dataProvider titleProvider
     */
    public function testSlug($title, $slug)
    {
        $this->article->setTitle($title);
        $this->assertEquals($slug, $this->article->getSlug());
    }

}
