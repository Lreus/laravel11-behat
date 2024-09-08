#!make

.PHONY: behat
behat:
	php artisan migrate:fresh
	./vendor/bin/behat
