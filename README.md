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

# Testing
This is the code repository for qmatt.com
Prounanced 'matt' the q is silent.

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



# RMHL
git config --global user.email "thirdshiftvideo@gmail.com" 
https://appdividend.com/2017/08/20/laravel-5-5-tutorial-example/
https://drive.google.com/drive/u/2/folders/1IPQX19WMrochKa60g1s2WoO4w89l01H9
https://laravel.com/docs/5.5/controllers
https://github.com/0mj/FPR/commits/master
http://127.0.0.1:8000/brackets/create   whoops..
https://git-scm.com/docs/git-config#FILES
https://www.icloud.com/#


# turn debugging on
config/app.php
    'debug' => env('APP_DEBUG', true),