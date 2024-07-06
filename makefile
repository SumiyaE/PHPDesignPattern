test:
	docker-compose exec php bash -c "/var/www/html/vendor/bin/phpunit --colors=always Test/"

