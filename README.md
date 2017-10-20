Vagrant Wordpress
============

forked from https://github.com/mattandersen/vagrant-lamp

Want to test a new web app but don't want to affect your current Apache / MySQL / PHP system?
Applications like MAMP are great, but they don't make it easy to maintain multiple, separate
web roots.

If you find yourself needing quick to configure web stack, but also one that is customizable try this Vagrant project

Vagrant allows for Virtual Machines to be quickly setup, and easy to use.

And this project aims to make it very easy to spinup a complete LAMP stack in a matter of minutes.

Requirements
------------
* VirtualBox <http://www.virtualbox.org>
* Vagrant <http://www.vagrantup.com>
* Git <http://git-scm.com/>

Usage
-----

### Startup

1. `git clone https://github.com/amitmtrn/vagrant-wordpress.git`
2. From the command-line:
```
$ cd vagrant-wordpress
$ vagrant up
```
That is pretty simple.

### Connecting

#### Apache
The Apache server is available at <http://192.168.33.11/>

#### MySQL
Externally the MySQL server is available at 192.168.33.11/3306 as usual.
Username: root
Password: root

Technical Details
-----------------
* Ubuntu 14.04 64-bit
* Apache 2.4
* PHP 5.5
* MySQL 5.5
* XDebug
* PHPUnit 4.8
* Composer
* phpmyadmin

We are using the base Ubuntu 14.04 box from Vagrant. If you don't already have it downloaded
the Vagrantfile has been configured to do it for you. This only has to be done once
for each account on your host computer.

The web root is located in the project directory at `src/` and you can install your files there

And like any other vagrant file you have SSH access with
```
$ vagrant ssh
```

##### Wordpress

username: admin
password: admin
