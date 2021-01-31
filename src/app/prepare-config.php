#!/bin/sh

sed -e "s/define('\([A-Z_]\+\)', [^)]\+/define('\1', getenv('\1')/" \
	< config.php-dist > config.docker.php

cat config.php-config.d >> config.docker.php
