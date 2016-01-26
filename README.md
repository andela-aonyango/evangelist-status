### evangelist-status

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A package which allows the user to request the evangelist status of a developer based on the number of public repos.

### Install

Via Composer

``` bash
$ composer require andela-aonyango/evangelist-status
```

### Usage

``` php
$status = new EvangelistStatus("andela-aonyango");

print $status->getStatus();
```

### Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

### Testing

``` bash
$ composer test
```

### Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

### Security

If you discover any security related issues, please email andrew.onyango@andela.com instead of using the issue tracker.

### Credits

- [andela-aonyango][link-author]
- [All Contributors][link-contributors]

### License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/andela-aonyango/evangelist-status.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/andela-aonyango/evangelist-status/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/andela-aonyango/evangelist-status.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/andela-aonyango/evangelist-status.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/andela-aonyango/evangelist-status.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/andela-aonyango/evangelist-status
[link-travis]: https://travis-ci.org/andela-aonyango/evangelist-status
[link-scrutinizer]: https://scrutinizer-ci.com/g/andela-aonyango/evangelist-status/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/andela-aonyango/evangelist-status
[link-downloads]: https://packagist.org/packages/andela-aonyango/evangelist-status
[link-author]: https://github.com/andela-aonyango
[link-contributors]: ../../contributors
