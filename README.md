This reproduces SimpleXMLElement-related regressions on [Psalm](https://psalm.dev/) 5.15.

* False positive `RedundantCondition`
* Inferred type for `asXml` method call with no argument is `string|bool`, but should be the more specific `string|false`
