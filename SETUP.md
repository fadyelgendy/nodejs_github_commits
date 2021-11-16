# Setting Up
- clone project:
`git clone https://github.com/fadyelgendy/nodejs_github_commits.git`
- `cd` to your project folder
- to install the project dependancies run: 
  `composer install`
- create the database used in this project, if you want to create it with commant line run this:
  `php bin/console doctrine:database:create <name>` replace the <name> with the actual name of the database.
- set up database connection in your `.env` file:
  `DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=mariadb-10.5.8`
  remember to replace `db_user` `db_password` `127.0.0.1:3306` `db_name` with yours.
- Configure , if you need, the request url , data limits and number of pages with these steps:
  - in `.env` update :
    - `REQUEST_URL`
    - `REQUEST_PER_PAGE`
    - `REQUEST_PAGE`
  - and in `config\services.yaml` under `parameters`, if you want to add more, set:
    - `request.url: '%env(REQUEST_URL)%'`
    - `request.per_page: '%env(REQUEST_PER_PAGE)%'`
    - `request.page: '%env(REQUEST_PAGE)%'` 
- Run the development server:
  - you may need to install syfony binary to be able to run the following commands, from here [Symfony](https://symfony.com/download), after downloading and installing it, run:
  `symfony server:ca:install` => server TLS certificate 
  `symfony server:start` => start sever
- Now from you browser navigate to: `127.0.0.1:8000` to check the app.

### that's all 