npm install chromedriver
./node_modules/.bin/chromedriver --port=8643 --url-base=wd/hub &
composer install --no-dev
cd $TRAVIS_BUILD_DIR/html
chmod -R 777 sites/default
touch sites/default/settings.local.php
./../vendor/bin/drush site-install social --verbose --yes --db-url=mysql://root@127.0.0.1/test
./../vendor/bin/drush sql-cli < ../sanitized.db
cd $TRAVIS_BUILD_DIR
composer build
composer build
cd html
./../vendor/bin/drush cr
./../vendor/bin/drush runserver http://127.0.0.1:8888 &
cd $TRAVIS_BUILD_DIR
composer install
./vendor/bin/wait-for-listen 8888
./vendor/bin/wait-for-listen 8643 127.0.0.1
curl localhost:8888
