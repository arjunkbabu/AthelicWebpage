SELECT *
FROM `STUDENT`
WHERE `phone` =9645211571
ORDER BY `STUDENT`.`CHEST` ASC



SELECT `EVENT`.`event_name` , `STUDENT`.`name`
FROM `EVENT` , `STUDENT`
WHERE `event_id`
IN (

SELECT `event_id`
FROM `REGISTRATION`
WHERE `roll` LIKE 'am.ar.u313bca025'
)