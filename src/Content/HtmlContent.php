<?php
namespace Content;

class HtmlContent extends Content {
    public function __construct() {
        parent::__construct(); // Call the parent constructor to initialize title and body
    }

    public function render() {
        return "<html>
                    <head>
                        <title>{$this->title}</title>
                        <style>
                            body {
                                text-align: center; /* Center text in the body */
                            }
                            img {
                                max-width: 100%; /* Ensure the image is responsive */
                                height: auto; /* Maintain aspect ratio */
                            }
                        </style>
                    </head>
                    <body>
                        <h1>{$this->title}</h1>
                        <img src='{$this->imageUrl}' alt='{$this->imageName}'>
                        <p>{$this->imageName}</p>
                        <p>{$this->body}</p>
                    </body>
                </html>";
    }
}
