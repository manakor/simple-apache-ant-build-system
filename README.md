# Apache Ant Deploys builder #
Simple build system for web sites

**[Apache Ant](http://ant.apache.org/ "The Apache Ant project") Deploys builder**
helps Frontend developers compress their CSS and JavaScript (soon also HTML)
files into professional package, ready for deploy on production environment. 
Moreover, **it automatically updates deployed project version on each build**,
making sure your users get latest files loaded into their browsers once a new
project version is released.

Builder contains customized Ant build script,
[YUI Compressor](http://developer.yahoo.com/yui/compressor/, "YUI Compressor")
with its CSS minifier and
[JSLint](http://www.jslint.com/, "JSLint - The JavaScript Code Quality Tool") - JavaScript code quality tool.


## When to use? ##
Normally, only large projects teams, such as Google, Yahoo, Facebook, Twitter,
[Thrives](http://thrives.us/, "Thrives"), Flickr etc prepares automatic
deployments and separates their development code from production one. They do it
to achieve maintainability and easy debugging while developing.

Usually in development mode, JavaScript and CSS code is easily readable and
understandable, maybe even stored in multiple files. However, when in production
mode, it's packaged and compressed, which gives code security and additional
performance. Large teams cares about it very much.

**Apache Ant Deploys Builder** gives a very easy way for any developer to learn
how to compress JavaScript and CSS files into professional deployment package
ready for production environment. Even working on small websites.

> ***So, if you wish to deliver your Frontend code professionally, trying to achieve the best performance and speed your users deserved, Apache Ant Deploys Builder is there for you!***


## Environment needed ##
Currently builder is ready for **PHP based projects**, however I am looking
forward to your contribution to expand it for Java based projects as well.

[Apache Ant](http://ant.apache.org/ "The Apache Ant project") is needed to be
installed, as it's going to perform stripping, packaging and compressing tasks.


## How to use ##
Normally, professional teams, try as much as possible to separate Backend code
from Frontend, keeping JavaScript, CSS and, quite often, even HTML[1] files
aside from PHP source code. The sample PHP project included into the builder 
does so as well - we are professionals, aren't we?!
Root ``assets/`` directory holds 2 sub-directories, where development and 
production Frontend resources are kept separated. Production part is updated
automatically on every new build, however ``development/`` folder is the one,
where working source code is actually kept: project JavaScript files are saved
in ``assets/development/scripts/`` folder and CSS ones - in 
``assets/development/styles``, accordingly.

As well, project has its root ``core.php`` file, which holds all basic
configurations needed to make separation between development and production
versions. When in production, just put *`DEVELOPMENT`* constant to ``false``
and latest deploy source files from ``assets/production/`` folder will be
loaded.

> [1] When HTML is kept separated from Backend source code, usually it's made
through templating frameworks.

### Making deploys ###
When development came to a "ready" stage, it's time to make a production build
of your JavaScript, CSS files.
Build script ``assets/development/build/build.xml`` file holds all the basic 
Apache Ant tasks, executed in predefined order and explained with comprehensive
comments.

Ready?!

First, open terminal (on Mac) and navigate to your project
``assets/development/build`` folder:

```bash
cd /workspace/apache-ant-deploys-builder/assets/development/build/
```

Run Ant execution command:
```bash
ant build
```



Building will start immediately. And in a moment, Ant is going to finish
processing with a message ''BUILD SUCCESSFUL''. Means, actually, your project 
Frontend build is ready to be deployed on production environment.

### Deploying to production environment ###
* Make sure, *`DEVEVELOPMENT`* constant is set to false in your root
``core.php`` file;
* Copy all your local root files and folders into production server, expect
``assets/development/`` folder — it's not a good practice to publish your 
development source code on production server.

**That's it! Professional production deploy is ready.** And your users doesn't
need to clear browser cache, because the deploy will be loaded as a new version.
Check root ``index.php`` file for more information on JavaScript and CSS files
loading when *`DEVELOPMENT`* constant is set to false in root ``core.php`` file.


## Try, play, join ##
Fork! Try it, make some errors in build process, learn 
[Apache Ant](http://ant.apache.org/ "The Apache Ant project"), solve build
errors, make a couple of success builds, deploy to production server several
times, investigate ``build/macros.xml`` to see how build libraries are
included, ask some questions, add more libraries, you might think, could be 
interesting for people, create some Ant tasks in ``build/build.xml``, polish
them, contribute your updates…

**Anyone and everyone is welcome to contribute!**


## Useful to have a look ##
* [Using Apache Ant: Writing a Simple Buildfile](http://ant.apache.org/manual/using.html)
* [The build script of HTML5 Boilerplate](http://html5boilerplate.com/docs/Build-script/)
* [Automated Optimization with HTML5 Boilerplate Build](http://net.tutsplus.com/tutorials/html-css-techniques/automated-optimization-with-html5-boilerplate-build/)


## TODOS ##
Planning to include HTML code cleaning tasks.


## Credits ##
* Author: Nik Sumeiko, [http://manakor.org](http://manakor.org, "Manakor labs with Nik Sumeiko")
* ``build/macros.xml`` initial developer: [Eric Brechemier](http://eric.brechemier.name, "Eric Brechemier")