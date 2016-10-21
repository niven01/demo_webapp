# demo_webapp

appspec.yml overview

```
version: 0.0
os: linux
files:
   - source: /app
     destination: /var/www/html
permissions:
   - object: /var/www/html
     pattern: "**"
     owner: apache
     group: apache
     mode: 755
     type:
       - file
hooks:
  BeforeInstall:
    - location:  scripts/beforeinstall.sh
  AfterInstall:
    - location: scripts/restartapache.sh
```    
    
## version

This section specifies the version of the AppSpec file. Do not change this value. It is required. Currently the only allowed value is 0.0. It is reserved by AWS CodeDeploy for future use.

## os

This section specifies theoperating system value of the instance to which you will deploy. It is required. The following values can be specified:

* linux – The instance is an Amazon Linux, Ubuntu Server, or RHEL instance.
* windows – The instance is a Windows Server instance.
files

This section specifies the names of files that should be copied to the instance during the deployment's Install event. For more information, see AppSpec 'files' Section. (http://docs.aws.amazon.com/codedeploy/latest/userguide/app-spec-ref-files.html)

## permissions

This section specifies how special permissions, if any, should be applied to the files in the files section as they are being copied over to the instance. This section applies to Amazon Linux, Ubuntu Server, and Red Hat Enterprise Linux (RHEL) instances only.

For more information see, AppSpec 'permissions' Section. (http://docs.aws.amazon.com/codedeploy/latest/userguide/app-spec-ref-permissions.html)

## hooks

This section specifies scripts to run at specific deployment lifecycle events during the deployment.

* BeforeInstall – You can use this deployment lifecycle event for preinstall tasks, such as decrypting files and creating a backup of the current version.
* AfterInstall – You can use this deployment lifecycle event for tasks such as configuring your application or changing file permissions.
For more information, see AppSpec 'hooks' Section.(http://docs.aws.amazon.com/codedeploy/latest/userguide/app-spec-ref-hooks.html)
