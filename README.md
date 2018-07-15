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

2. `cd` into the repository root. Install the composer dependencies. For example with: `lando composer install`

3. Install drupal. You can do this however you want. One way is to use drush: `lando drush site-install --db-url=mysql://USER:PASS@HOST/DATABASE`



### c) Using *DDEV* as a development environment

We have a ready configuration file for _[DDEV development environment](https://ddev.readthedocs.io)_ for you. However, you can change the configuration `.ddev/.config.yaml`-file you want.

1. Clone this repository. For example with: `git clone git@github.com:drupalnorge/drupalnorge-social.git`

2. `cd` into the repository root. Install the composer dependencies. For example with: `lando composer install`

3. Install drupal. You can do this however you want. One way is to use drush: `ddev exec drush site-install --db-url=mysql://USER:PASS@HOST/DATABASE`



## Upgrading open social

Refer to this guide: [https://www.drupal.org/docs/8/distributions/open-social/installing-and-updating](https://www.drupal.org/docs/8/distributions/open-social/installing-and-updating)
