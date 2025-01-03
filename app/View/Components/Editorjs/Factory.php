<?php

namespace App\View\Components\Editorjs;

class Factory
{
    public static function make($block)
    {
        switch ($block['type']) {
            case 'header':
                return new Header($block['data']['level'], $block['data']['text']);
            case 'paragraph':
                return new Paragraph($block['data']['text']);
            case 'list':
                return new NestedList($block['data']['style'], $block['data']['items']);
            case 'image':
                return new Image($block['data']);
            case 'delimiter':
                return new Delimiter();
            case 'table':
                return new Table($block['data']['withHeadings'], $block['data']['content']);
            case 'attaches':
                return new Attachment($block['data']['file']);
            default:
                return null; // O manejar un componente predeterminado.
        }
    }
}
