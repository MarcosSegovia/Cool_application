#Cool Application

An application to prove the awesomeness of the [Coolframework](https://github.com/MarcosSegovia/Coolframework)

##Installation

Just clone this repo and create a database like explained in [Database Configuration](#Database-Configuration)

#Explanation

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

Create the following Database in your Mysql System:

```sql
CREATE DATABASE cool_example 
CHARACTER SET utf8 
COLLATE utf8_general_ci;

CREATE TABLE User (
  id INT NOT NULL AUTO_INCREMENT,
  email VARCHAR(80) NOT NULL,
  name VARCHAR(50) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE INDEX (email)
) ENGINE=INNODB;
```