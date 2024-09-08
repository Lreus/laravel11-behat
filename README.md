# Laravel-behat

---

## What is this ? 

A first attempt to get a Laravel project along with behat test framework.

### Steps to make this on your own

- Create a new laravel 11.x project with composer.
- require [soulcodex/laravel-behat](https://github.com/soulcodex/laravel-behat) package with option `--with-dependencies`
- implement a new `behat.yml` file according to
  [package's documentation](https://github.com/soulcodex/laravel-behat/blob/main/README.md)
  - suites.{suite-name}.paths defines .feature files localization
  - suites.{suite-name}.contexts array define Context classes used to resolve .feature files.
- copy laravel original `.env` file into a new `.env.behat` file or any name provided to the property 
`default.extensions.Soulcodex\Behat.kernel.environment_path` in `behat.yml` file.

- support of French language is native in both phpstorm and behat, just write `# language: fr` at the top of your
.feature file
- use command `./vendor/bin/behat --story-syntax --lang=fr` to get french cucumber syntax.
