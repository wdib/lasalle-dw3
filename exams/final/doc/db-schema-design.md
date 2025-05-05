# New database schema design

## General

- Database name: college
- Text columns should have a maximum length of 254
- ID columns can have a maximum length of 11
- Description columns probably need to be longer so let's use 1000 as their maximum length
- Any timestamp fields can have the data type timestamp

## Student table

| id | first_name | last_name | email | password |

## Course table

| id | name | description | available_slots |

## Registration table

| id | student_id | course_id | created_date |