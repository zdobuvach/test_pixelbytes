# test_pixelbytes

## task

Please supply the PHP script which will work accordingly to the below requirement.
The solution should be tested and optimised in terms of efficiency.
In the attachment, you can find the resultset.csv file containing data of titles of articles with sections.
Based on this file please create a MySQL database with a proper structure which you find as most appropriate.
Once done please import data from resultset.csv file into your database.
PHP script should take 10 latest articles from your database but with the assumption that each article should belong to a different section.
The list of 10 records should be displayed on the frontend in a responsive layout.
Please supply all files related to the backend, frontend and database.
We reserve the right to refuse the answer re the proper solution of the above task.

## solution

### run servers

docker-compose up -d  --build

### entrance to console Yii

docker-compose exec web sh

### run import resultset.csv

yii csvimport/import

### run tests

 ./vendor/bin/codecept run

### run webpage 10 latest articles

http://localhost:808/arsec/index - seems to be working incorrectly

## done

### db tables

testYii.article, testYii.section

### db view

testYii.arsec

### Yii

#### import resultset.csv

src/basic/commands/CsvimportController.php

#### controllers

src/basic/controllers/ArsecController.php

#### models

src/basic/models/Article.php
src/basic/models/Section.php
src/basic/models/Arsec.php

#### tests

src/basic/tests/unit/models/ArsecTest.php

src/basic/tests/acceptance/Last10Cest.php