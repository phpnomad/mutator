# phpnomad/mutator

[![Latest Version](https://img.shields.io/packagist/v/phpnomad/mutator.svg)](https://packagist.org/packages/phpnomad/mutator)
[![Total Downloads](https://img.shields.io/packagist/dt/phpnomad/mutator.svg)](https://packagist.org/packages/phpnomad/mutator)
[![PHP Version](https://img.shields.io/packagist/php-v/phpnomad/mutator.svg)](https://packagist.org/packages/phpnomad/mutator)
[![License](https://img.shields.io/packagist/l/phpnomad/mutator.svg)](https://packagist.org/packages/phpnomad/mutator)

`phpnomad/mutator` provides interfaces and a trait for structured data transformation. Instead of scattering one-off transformation helpers across your codebase, you define mutators that follow a consistent contract and route input through them via adapters. The package has no runtime dependencies and is used by other PHPNomad packages, including `phpnomad/loader`, to handle transformation steps in a testable, composable way.

## Installation

```bash
composer require phpnomad/mutator
```

## Overview

The package exports five interfaces and one trait:

- `Mutator` is the stateful transformation contract. An implementation holds input in its own state and exposes a single `mutate(): void` call that produces a result internally.
- `MutatorHandler` is the functional counterpart. Its `mutate(...$args)` takes arguments and returns a result directly, with no instance state to manage.
- `MutationAdapter` handles bidirectional conversion between raw data and `Mutator` instances, keeping data marshaling separate from transformation logic.
- `MutationStrategy` attaches handler factories to named actions, enabling dynamic dispatch and deferred instantiation through a `callable():MutatorHandler` getter.
- `HasMutations` lets an object advertise the mutations it supports via `getMutations(): array`, which is useful when you want capabilities to be discoverable at runtime.
- `CanMutateFromAdapter` is a trait that runs the full convert, mutate, convert workflow in a single `mutate(...$args)` call on any class that holds a `MutationAdapter` property.

## Documentation

Full package documentation, including individual interface references and the adapter workflow walkthrough, lives at [phpnomad.com](https://phpnomad.com).

## License

MIT. See [LICENSE.txt](LICENSE.txt).
