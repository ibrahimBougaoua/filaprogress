# The Progress Management Package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ibrahim-bougaoua/filaprogress.svg?style=flat-square)](https://packagist.org/packages/ibrahim-bougaoua/filaprogress)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ibrahim-bougaoua/filaprogress/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ibrahim-bougaoua/filaprogress/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ibrahim-bougaoua/filaprogress/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ibrahim-bougaoua/filaprogress/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ibrahim-bougaoua/filaprogress.svg?style=flat-square)](https://packagist.org/packages/ibrahim-bougaoua/filaprogress)

The Progress Management Package for FilamentPHP provides a flexible and easy-to-use solution for tracking and visualizing progress within Filament admin panels. It includes custom Filament components for displaying linear and circular progress indicators directly in your admin interface. This package is designed to seamlessly integrate with Filament's existing tools, offering dynamic and customizable progress bars and circles to represent task completion, project milestones, or any metric that requires visual progress tracking. Perfect for enhancing the user experience in admin dashboards with intuitive, real-time progress displays.

## Installation

You can install the package via composer:

```bash
composer require ibrahim-bougaoua/filaprogress
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filaprogress-views"
```

## Usage

```php
// For infolist
return $infolist
    ->schema([
        CircleProgressEntry::make('circle')
            ->getStateUsing(function ($record) {
                $total = $record->items()->count();
                $progress = $record->countPaidItems();
                return [
                    'total' => $total,
                    'progress' => $progress,
                ];
            })
            ->hideProgressValue(true),
        ProgressBarEntry::make('bar')
            ->getStateUsing(function ($record) {
                $total = $record->items()->count();
                $progress = $record->countPaidItems();
                return [
                    'total' => $total,
                    'progress' => $progress,
                ];
            })
            ->hideProgressValue(true),

// For table
return $table
    ->columns([
        CircleProgress::make('circle')
            ->getStateUsing(function ($record) {
                $total = $record->items()->count();
                $progress = $record->countPaidItems();
                return [
                    'total' => $total,
                    'progress' => $progress,
                ];
            })
            ->hideProgressValue(true),
        ProgressBar::make('bar')
            ->getStateUsing(function ($record) {
                $total = $record->items()->count();
                $progress = $record->countPaidItems();
                return [
                    'total' => $total,
                    'progress' => $progress,
                ];
            })
            ->hideProgressValue(true),
```

## Testing

```bash
composer test
```

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ibrahim Bougaoua](https://github.com/Ibrahim Bougaoua)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
