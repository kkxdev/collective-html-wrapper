<?php

namespace Kkxdev\CollectiveHtmlWrapper\Tests;

use Illuminate\Http\Request;
use Kkxdev\CollectiveHtmlWrapper\HtmlBuilder;
use PHPUnit\Framework\TestCase;
use Spatie\Html\Html;


class HtmlBuilderTest extends TestCase
{
    protected HtmlBuilder $htmlBuilder;

    public function setup() : void {
        parent::setUp();
        // Initialize the HtmlBuilder with a mock Spatie\Html\Html instance
        $request = new Request();
        $this->htmlBuilder = new HtmlBuilder(new Html($request));
    }

    /** @test */
    public function it_generates_a_label()
    {
        $result = $this->htmlBuilder->label('email', 'Email Address', ['class' => 'form-label']);
        $expected = '<label class="form-label" for="email">Email Address</label>';
        $this->assertStringContainsString($expected, (string) $result);
    }

    /** @test */
    public function it_generates_a_text_input()
    {
        $result = $this->htmlBuilder->input('text', 'username', 'JohnDoe', ['class' => 'form-control']);
        $expected = '<input class="form-control" type="text" name="username" id="username" value="JohnDoe">';
        $this->assertStringContainsString($expected, (string) $result);
    }
}