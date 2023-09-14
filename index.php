<?php

function f(): string|false
{
    $x = new SimpleXMLElement('<a></a>');
    // False positive: RedundantCondition
    if (isset($x->foo)) {
        echo 'hi';
    }
    // Inferred type not specific enough
    return $x->asXml();
}
