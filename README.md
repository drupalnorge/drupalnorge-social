# Drupal Norge Open Social

[![Build Status](https://travis-ci.org/drupalnorge/drupalnorge-social.svg?branch=master)](https://travis-ci.org/drupalnorge/drupalnorge-social)

## Installation

Clone this repository. For example with:

`git clone git@github.com:drupalnorge/drupalnorge-social.git`

If you want a database dump, here is one: [https://drupalnorge.no/sanitized.db](https://drupalnorge.no/sanitized.db)

`cd` into the repository root. Install the composer dependencies. For example with:

`composer install`

Install drupal. You can do this however you want. One way is to use drush:

`drush site-install --db-url=mysql://USER:PASS@HOST/DATABASE`
