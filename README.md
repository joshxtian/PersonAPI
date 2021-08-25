## About PersonAPI
PersonAPI is simple CRUD API, which can store very basic person info
such as first name, last name, hobby, and age.

## Purpose
PersonAPI is a school activity, only for academic purposes

## Usage 

### Get List of Students
`GET` request to `/student` route

Response will be an array of person objects

### Create a Student
`POST` request to `/student` route

Request body: 
{
  "lname": <string>,
  "fname": <string>,
  "age": <int>,
  "hobby": <string>
}

### Get Student By ID 
`GET` request to `/student/{id}` route

Response will be a person object


### Update a Student
`PUT` request to `/student/{id}` route

Request body: 
{
  "lname": <string>,
  "fname": <string>,
  "age": <int>,
  "hobby": <string>
}

Response will be a MODIFIED person object

### Delete a Student
`Delete` request to `/student/{id}` route

