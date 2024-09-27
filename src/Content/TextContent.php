<?php
namespace Content;

class TextContent extends Content {
    public function __construct() {
        parent::__construct(); // Call the parent constructor to initialize title and body
    }

    public function render() {
        return $this->title . "\n\n" . $this -> imageName . "\n\n" . $this->body; // Use inherited properties
    }
}