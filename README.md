# Drupal Norge Open Social

[![Build Status](https://travis-ci.org/drupalnorge/drupalnorge-social.svg?branch=master)](https://travis-ci.org/drupalnorge/drupalnorge-social)

## Installation

There is three different ways based on your development environment.

If you want a database dump, here is one: [https://drupalnorge.no/sanitized.db](https://drupalnorge.no/sanitized.db)

### a) Your own development environment

1. Clone this repository. For example with: `git clone git@github.com:drupalnorge/drupalnorge-social.git`

2. `cd` into the repository root. Install the composer dependencies. For example with: `composer install`

3. Install drupal. You can do this however you want. One way is to use drush: `drush site-install --db-url=mysql://USER:PASS@HOST/DATABASE`



### b) Using *Lando* as a development environment

We have a ready configuration file for _[Lando development environment](https://docs.devwithlando.io)_ for you. However, you can change the configuration `.lando.yml`-file you want.

1. Clone this repository. For example with: `git clone git@github.com:drupalnorge/drupalnorge-social.git`

2. `cd` into the repository root and start the development environment by `lando start`.
_(NOTE: The configuration file has already included a step automatic such as `composer install` right after starting the development environment)_

3. Install drupal. You can do this however you want. One way is to use drush: `lando drush site-install --db-url=mysql://USER:PASS@HOST/DATABASE`



### c) Using *DDEV* as a development environment

We have a ready configuration file for _[DDEV development environment](https://ddev.readthedocs.io)_ for you. However, you can change the configuration `.ddev/.config.yaml`-file you want.

1. Clone this repository. For example with: `git clone git@github.com:drupalnorge/drupalnorge-social.git`

2. `cd` into the repository root and start the development environment by `ddev start`.
_(NOTE: The configuration file has already included a step automatic such as `composer install` right after starting the development environment)_

3. Install drupal. You can do this however you want. One way is to use drush: `ddev exec drush site-install --db-url=mysql://USER:PASS@HOST/DATABASE`

## Upgrading open social

Refer to this guide: [https://www.drupal.org/docs/8/distributions/open-social/installing-and-updating](https://www.drupal.org/docs/8/distributions/open-social/installing-and-updating)

## Running tests locally

- Install chromedriver with npm. If you do not have npm, install it together with nodejs. To install chromedriver inside of the project root, just run this command: `npm install chromedriver`
- Create a file called behat.yml in the project root. It should contain the following:

```yml
imports:
  # This tells behat to use all defaults, except the ones we override.
  - 'behat.yml.dist'
default:
  extensions:
    Behat\MinkExtension:
      # Set this to whatever your project is available at, locally.
      base_url: http://drupalnorge.localhost/
      selenium2:
        wd_host: http://localhost:8643/wd/hub
```

If you also want to watch the tests run on your computer, you can uncomment the line about headless in behat.yml.dist, like so (do not commit this change):

```diff
-              - "--headless"
+              #- "--headless"
```

Now we want to start chromedriver. You can do this in one terminal window, and start the tests in another:

```
./node_modules/.bin/chromedriver --port=8643 --url-base=wd/hub
```

Next step is to run the tests. In another terminal window, run the folloing command, in the project root:

```
composer test
```
