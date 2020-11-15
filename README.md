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
- [x] Xdebug on/off switch
- [x] PHP CodeSniffer
- [x] NodeJS/NPM
- [x] Asset packagist
- [x] Patch handling
- [ ] Drupal.org CLI
- [ ] Rector
- [ ] Admin Toolbar
- [ ] Module Filter
- [ ] Devel
- [ ] PHPUnit
- [ ] Behat
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

## Customizations

The following changes could be made to adapt to your project needs.

### Node with Composer

This is useful for themes where front-end builds with Node.js require Composer.

```
# .lando.yml
  node:
    # Provide nodejs via a PHP container.
    # Provides Composer for use with Pattern Lab themes.
    #type: php:7.3
    #via: cli
    #build_as_root:
    #  - curl -sL https://deb.nodesource.com/setup_12.x | bash -
    #  - apt-get install -y nodejs
    #run_as_root:
    #  - "npm install -g grunt-cli -y"
```
