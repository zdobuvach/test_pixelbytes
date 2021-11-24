TYPE=VIEW
query=select `testYii`.`article`.`id` AS `id`,`testYii`.`article`.`section_id` AS `section_id`,`testYii`.`section`.`name` AS `section_name`,`testYii`.`article`.`title` AS `title`,`testYii`.`article`.`created` AS `created` from (`testYii`.`article` join `testYii`.`section` on(`testYii`.`section`.`id` = `testYii`.`article`.`section_id`))
md5=fddd4c1b2262bff4e95230bfcd52b4a6
updatable=1
algorithm=0
definer_user=root
definer_host=%
suid=2
with_check_option=0
timestamp=2021-11-24 16:38:15
create-version=2
source=select\n    `article`.`id` AS `id`,\n    `article`.`section_id` AS `section_id`,\n    `section`.`name` AS `section_name`,\n    `article`.`title` AS `title`,\n    `article`.`created` AS `created`\nfrom\n    (`article`\njoin `section` ON `section`.`id` = `article`.`section_id`)
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `testYii`.`article`.`id` AS `id`,`testYii`.`article`.`section_id` AS `section_id`,`testYii`.`section`.`name` AS `section_name`,`testYii`.`article`.`title` AS `title`,`testYii`.`article`.`created` AS `created` from (`testYii`.`article` join `testYii`.`section` on(`testYii`.`section`.`id` = `testYii`.`article`.`section_id`))
mariadb-version=100604
