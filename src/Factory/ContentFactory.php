<?php
namespace Factory;

use Content\TextContent;
use Content\HtmlContent;
use Content\PdfContent;

class ContentFactory {
    public static function createContent($type) {
        switch ($type) {
            case 'text':
                return new TextContent();
            case 'html':
                return new HtmlContent();
            case 'pdf':
                return new PdfContent();
            default:
                throw new \InvalidArgumentException("Invalid content type: $type");
        }
    }
}
