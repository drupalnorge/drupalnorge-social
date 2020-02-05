alias l="ls -lha"
alias lt="ls -ltha"

# Shortcuts paths
alias ..="cd .."
alias home="cd  /var/www/html"
alias goweb="cd /var/www/html/web"
alias gomodules="cd /var/www/html/web/modules/custom"
alias goprofiles="cd /var/www/html/web/themes/custom"
alias gosites="cd /var/www/html/web/sites/default"
alias gothemes="cd /var/www/html/web/themes/custom"

# Git related
alias gitreset0="git reset --hard && git clean -ffdx"

# PHPCS
alias drupalcs="/var/www/html/vendor/bin/phpcs --standard=Drupal --extensions='php,module,inc,install,test,profile,theme,css,info,txt,md'"
alias drupalcsp="/var/www/html/vendor/bin/phpcs --standard=DrupalPractice --extensions='php,module,inc,install,test,profile,theme,css,info,txt,md'"
alias drupalcbf="/var/www/html/vendor/bin/phpcbf --standard=Drupal --extensions='php,module,inc,install,test,profile,theme,css,info,txt,md'"
