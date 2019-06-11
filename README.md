# sha512 Twig Filter plugin for Craft CMS 3.x

A simple filter for twig to hash a string with sha512.

## Acknowledgements

Based on the MD5 Twig filter from Steadfast Collective. https://packagist.org/packages/steadfastcollective/md5-twig-filter

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require christopherdowson/sha512twigfilter

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for sha512 Twig Filter.

## Using sha512 Twig Filter

        {{ sha512("some string" }}
        {{ "some string" | sha512 }}

Brought to you by [Christopher Dowson](https://christopherdowson.studio/)
# SHA512TwigFilter
