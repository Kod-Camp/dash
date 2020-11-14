# Dash

An opinionated project template to spin up Drupal projects in a dash.

## What is Dash?

A way for first-time or veteran code-sprinters to launch a Drupal instance
quickly.

### What's included

A dash of this and that to make the season bright. We've included everything you
need to Sprint in a contrib lounge or start an enterprise-level Drupal project.

- [x] Drupal core
- [x] Gitignore
- [x] Lando config
- [ ] Drush
- [ ] Drupal Console
- [ ] Behat
- [ ] PHPUnit
- [ ] PHP CodeSniffer
- [ ] NodeJS/NPM with Composer
- [ ] Xdebug on/off switch
- [ ] Asset packagist
- [ ] Patch handling
- [ ] Drupal.org CLI
- [ ] Rector
- [ ] Admin Toolbar
- [ ] Module Filter
- [ ] Devel
- [ ] Dotenv

## Requirements

Lando

## Quick Start

Use Composer to create a new project using the desired starter template, with
the latest version:

```
composer create-project kod-camp/dash my-project
```

For a specific version, use kod-camp/dash:8.8.0. See [Packagist](https://packagist.org/packages/kod-camp/dash) for all available versions, or use the shell with `composer show kod-camp/dash --all`.

### Recommended

No need to install Composer to your machine. Use Lando

```
mkdir my-project
cd my-project
lando init --source cwd --name my-project --recipe drupal9 --webroot web
lando composer create-project kod-camp/dash
mv -f ./dash/.[!.]* ./dash/* ./
rmdir dash/
lando rebuild -y
```
