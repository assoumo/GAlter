#!/bin/sh
cd `dirname $0`
 ROOT_PATH=`pwd`
 java -Xms256M -Xmx1024M -cp $ROOT_PATH/../lib/advancedPersistentLookupLib-1.0.jar:$ROOT_PATH/../lib/commons-collections-3.2.jar:$ROOT_PATH/../lib/dom4j-1.6.1.jar:$ROOT_PATH/../lib/jboss-serialization.jar:$ROOT_PATH/../lib/log4j-1.2.15.jar:$ROOT_PATH/../lib/mysql-connector-java-5.1.30-bin.jar:$ROOT_PATH/../lib/trove.jar:$ROOT_PATH:$ROOT_PATH/../lib/systemRoutines.jar::$ROOT_PATH/../lib/userRoutines.jar::.:$ROOT_PATH/passageannee_0_1.jar: projetdemo.passageannee_0_1.passageannee --context=Default "$@" 