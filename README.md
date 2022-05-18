# Setup App Locally
`composer global require laravel/installer`
laravel new projectname (creates new laravel project)

`composer install`

`php artisan serve`
look at notes on ~~dad pc~~.


#PUSH TEST 
https://hub.docker.com/r/library/mysql/

# Friends of Pong

Alive @ http://qmatt.com
Alive @ http://friends-of-pong.herokuapp.com/
Alive @ https://friends-of-pong-staging.herokuapp.com

# Heroku Local
https://devcenter.heroku.com/articles/heroku-local

# Testing
This is the code repository for qmatt.com
Pronounced 'matt' the q is silent. 

# Heroku 
https://devcenter.heroku.com/
https://devcenter.heroku.com/articles/heroku-cli

# Heroku Jaws
https://devcenter.heroku.com/articles/jawsdb
Access admin panel: https://dashboard.heroku.com/apps/friends-of-pong

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
git config --global user.email "[email]@gmail.com" 
https://appdividend.com/2017/08/20/laravel-5-5-tutorial-example/
https://drive.google.com/drive/u/2/folders/1IPQX19WMrochKa60g1s2WoO4w89l01H9
https://laravel.com/docs/5.5/controllers
https://github.com/0mj/FPR/commits/master
http://127.0.0.1:8000/brackets/create   whoops..
https://git-scm.com/docs/git-config#FILES
https://www.icloud.com/#
laravel and react https://youtu.be/1RPTCjnv7X8

laravel and react  https://laravel.com/docs/5.8/frontend
`php artisan preset react`



#configure ES6 with Laravel React using babel
https://bit.ly/2WHGbnn
https://eslint.org/docs/user-guide/configuring
https://www.npmjs.com/package/eslint-plugin-react-hooks
https://reactjs.org/docs/hooks-rules.html

# RMHL  Invalid request (Unsupported SSL request)
NOT a 'real' webserver: https://www.php.net/manual/en/features.commandline.webserver.php


# TRY RESETING
FULL RESET:
rm -rf node_modules
rm package-lock.json yarn.lock
npm cache clear --force
npm install

# turn debugging on
config/app.php
    'debug' => env('APP_DEBUG', true),




