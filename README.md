# HTTP Adapters

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Style CI][ico-styleci]][link-styleci]
[![Code Coverage][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A collection of HTTP adapters for API wrappers.

## Install

Via Composer

```bash
$ composer require pxgamer/http-adapters
```

## Usage

This package contains an [`HttpAdapter`](src/HttpAdapter.php) interface that can be implemented for consistent usage.

Adapters will be created for Guzzle, Curl, etc. in future.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

```bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) and [CODE_OF_CONDUCT](.github/CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email security@pxgamer.xyz instead of using the issue tracker.

## Credits

- [pxgamer][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/pxgamer/http-adapters.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pxgamer/http-adapters/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/213879392/shield
[ico-code-quality]: https://img.shields.io/codecov/c/github/pxgamer/http-adapters.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pxgamer/http-adapters.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pxgamer/http-adapters
[link-travis]: https://travis-ci.com/pxgamer/http-adapters
[link-styleci]: https://styleci.io/repos/213879392
[link-code-quality]: https://codecov.io/gh/pxgamer/http-adapters
[link-downloads]: https://packagist.org/packages/pxgamer/http-adapters
[link-author]: https://github.com/pxgamer
[link-contributors]: ../../contributors
