Twig Inflection Bundle
======================

[![Build Status](https://img.shields.io/travis/EmanueleMinotto/TwigInflectionBundle.svg?style=flat)](https://travis-ci.org/EmanueleMinotto/TwigInflectionBundle)
[![SensioLabs Insight](https://img.shields.io/sensiolabs/i/d99569d7-c180-4ecb-951b-dc94d4a51e55.svg?style=flat)](https://insight.sensiolabs.com/projects/d99569d7-c180-4ecb-951b-dc94d4a51e55)
[![Coverage Status](https://img.shields.io/coveralls/EmanueleMinotto/TwigInflectionBundle.svg?style=flat)](https://coveralls.io/r/EmanueleMinotto/TwigInflectionBundle)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/EmanueleMinotto/TwigInflectionBundle.svg?style=flat)](https://scrutinizer-ci.com/g/EmanueleMinotto/TwigInflectionBundle/)

Symfony 2 Bundle for [davedevelopment/twig-inflection](https://github.com/davedevelopment/twig-inflection).

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require emanueleminotto/twig-inflection-bundle
```

This command requires you to have [Composer](https://getcomposer.org/) installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding the following line in the `app/AppKernel.php`
file of your project:

```php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new EmanueleMinotto\TwigInflectionBundle\TwigInflectionBundle(),
        );
    }
}
```

Usage
-----

**pluralize**

```twig
{{ "chicken"|pluralize }}

=> chickens

{{ rows.length }} {{ "row"|pluralize(rows.length) }}

=> 1 row
=> 2 rows

{{ users.length }} {{ "person"|pluralize(users.length, "users") }}

=> 1 person
=> 2 users
```

**singularize**

The opposite of pluralize, working in the same manner

```twig
{{ "chickens"|singularize }}

=> chicken
```

License
-------

This bundle is under the MIT license. See the complete license in the bundle:

    Resources/meta/LICENSE
