yiiGitBuildNumber
=================

The component for Yii framework to retrieve the build information (last commit id and commit time)

![git build number git](https://raw.github.com/yev/yiiGitBuildNumber/master/img/yii%20Build%20number%20Exemple.jpg)

Installation instructions
-------------------

Copy the  *GitBuildNumberComponent.php* file to your webapp   */protected/components/* folder.
  wget 
  
Configuration instruction
-------------------

After downloading and installing the component into right place you have to tell yii framework about tne new component:

1. Edit your webapp/protected/config/main.php file
2. And add the following somewhere in the *components* section - 'git'=>array(
            'class'=>'GitBuildNumberComponent',
        ),



Using
-------------------

![how to call the component](https://raw.github.com/yev/yiiGitBuildNumber/master/img/BuildNumberCallExemple.jpg)
