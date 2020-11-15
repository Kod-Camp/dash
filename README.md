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
- [x] Drush
- [x] Drupal Console
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
composer create-project kod-camp/dash:dev-master my-project --remove-vcs
cd my-project
```

Change the project name in `.lando.yml`

```
lando start
```
