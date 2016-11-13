# Drupal Norge Open Social

## Installation

Clone this repository. For example with:

`git clone git@github.com:eiriksm/drupalnorge-social.git`

If you want a database dump, here is one: (drupalnorge-social.e-o.no/sanitized.sql)[http://drupalnorge-social.e-o.no/sanitized.sql]

`cd` into the repository root. Install the composer dependencies. For example with:

`composer install`

Install drupal. You can do this however you want. One way is to use drush:

`drush site-install --db-url=mysql://USER:PASS@HOST/DATABASE`
