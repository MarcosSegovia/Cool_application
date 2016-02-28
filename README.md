#Cool Application

An application to prove the awesomeness of the [Coolframework](https://github.com/MarcosSegovia/Coolframework)

##Installation

- Just clone this repo and create a database like explained in [Database Configuration](#database-configuration)

- Composer Install to automatically install **Coolframework** and all its dependencies

#Explanation

As every component of the framework is built as a service, we have to provided the configuration they need through the **Container**

##Container Definition

The container has to be declared in the Front Controller, as is is needed to provided the rest of the components.

`$cool_container = new \Coolframework\Component\Injector\CoolContainer($parser, ROOTPATH . '/app/services', 'PROD');`

When cloning the repository you will see that, in this case the container definitions are under: `/app/services`
but you could define it differently and define it your own.

##Routing Definition

You have to declare an yml file like provided in this example AND declared the completely path in the container when 
declaring the Routing Component

Here, there is an example of the declaration:

```yaml
    routing:
        class: Coolframework\Component\Routing\Routing
        arguments:
          - "@yml_parser"
          - "/var/www/html/Cool_application/app/routing/routing.yml"
        public: false
```


##Database Configuration

Launchs the following query inside Mysql:

```sql
CREATE DATABASE IF NOT EXISTS cool_example 
CHARACTER SET utf8 
COLLATE utf8_general_ci;

USE cool_example;

CREATE TABLE IF NOT EXISTS User (
  id INT NOT NULL AUTO_INCREMENT,
  email VARCHAR(80) NOT NULL,
  name VARCHAR(50) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE INDEX (email)
) ENGINE=INNODB;
```