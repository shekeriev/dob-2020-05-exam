# dob-2020-05-exam
A set of three Docker containters each with a dedicated role - php, mariadb, and nginx. Togehter they form a simple web application.

For a successful completion you have to implement the folllowing steps:
 - (re)build the images;
 - (re)run the containers;
 - mount the /site component where applicable;

Please note that:
 - each container should be named after the following rule - **dob-role**, where role is *php*, *mariadb*, or *nginx*;
 - mysql password is expected to be **Exam-2020-05**;
 - nginx is set to listen on port **80**;
 - php files are expected to be in the **/site** folder of both nginx and php containers;
 - nginx container should be started after php;
