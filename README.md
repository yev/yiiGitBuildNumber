yiiGitBuildNumber
=================

The component for Yii framework to retrieve the build information (last commit id and commit time).

This is a very simple component that uses internally the git cmd functions.

The idea of writing this component comes from my Java experience with very popular plugin [maven-build-number](http://mojo.codehaus.org/buildnumber-maven-plugin/ "Maven-Build-Number-Plugin").

So after making some [improvements](http://yevgen-fr.blogspot.com/2012/02/my-first-open-source-commitment-git.html) 
for existing maven plugin I decided to make something similar for the PHP/Yii world. 
I think that the little usefull and effortless tricks like this one, can make you application more proffessional.


The screenshot below demonstrates what does this component:
![git build number git](https://raw.github.com/yev/yiiGitBuildNumber/master/img/yii%20Build%20number%20Exemple.jpg)

Installation instructions
-------------------

Copy the  *GitBuildNumberComponent.php* file to your webapp   */protected/components/* folder.
  `wget https://github.com/yev/yiiGitBuildNumber/blob/master/src/GitBuildNumberComponent.php`
  
Configuration instruction
-------------------

After downloading and installing the component into right place you have to tell yii framework about tne new component:

1. Edit your webapp/protected/config/main.php file
2. And add the following somewhere in the *components* section - `'git'=>array(
            'class'=>'GitBuildNumberComponent',
        )`



Using
-------------------

![how to call the component](https://raw.github.com/yev/yiiGitBuildNumber/master/img/BuildNumberCallExemple.jpg)

Requirements
-------------------

The component has been tested on Yii 1.1.12 and PHP 5.4.

