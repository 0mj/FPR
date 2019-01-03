# Setup App Locally
`composer global require laravel/installer`
laravel new projectname (creates new laravel project)

`composer install`

`php artisan serve`
look at notes on dad pc.



https://hub.docker.com/r/library/mysql/

# Friends of Pong

Alive @ http://qmatt.com
Alive @ http://friends-of-pong.herokuapp.com/
Alive @ https://friends-of-pong-staging.herokuapp.com

# Heroku Local
https://devcenter.heroku.com/articles/heroku-local

# Heroku 
https://devcenter.heroku.com/
https://devcenter.heroku.com/articles/heroku-cli

# Heroku Jaws
https://devcenter.heroku.com/articles/jawsdb

# Heroku CLI
`heroku config -s | grep JAWSDB_URL >>.env`


# Heroku / Docker
https://devcenter.heroku.com/articles/container-registry-and-runtime
https://devcenter.heroku.com/articles/build-docker-images-heroku-yml

# Dockery mj
https://hub.docker.com/u/mmjondock

# Docker mysql 
https://hub.docker.com/_/mysql
cd "C:\Users\MattJamison\Documents\Kitematic\mysql\var\lib\mysql"
		docker swarm init
		docker stack deploy -c stack.yml mysql

		docker swarm leave --force


# Issues
When viewing the secure site (https) in Chrome it does not render styling.
Remove 's' from https and reload and styling works.




