<<<<<<< HEAD
=======
# Login credentials
username-> ale
password-> 123


Please use PHPmyAdmin to create the local database, it will not display properly without it. 
Use the file endAssignment.sql  to autogenerate it
username root
password secret123





>>>>>>> a0a093702f681dfd2b5a05f4976886f684e177d6
# Docker template for PHP projects
This repository provides a starting template for PHP application development.

It contains:
* NGINX webserver
* PHP FastCGI Process Manager with PDO MySQL support
* MariaDB (GPL MySQL fork)
* PHPMyAdmin

## Installation

1. Install Docker Desktop on Windows or Mac, or Docker Engine on Linux.
1. Clone the project

## Usage

In a terminal, run:
```bash
docker-compose up
```

NGINX will now serve files in the app/public folder. Visit localhost in your browser to check.
PHPMyAdmin is accessible on localhost:8080

If you want to stop the containers, press Ctrl+C. 
Or run:
```bash
docker-compose down
```