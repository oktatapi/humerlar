# Endpoints

* /api/employees
* /api/positions
* /api/projects
* /api/employee-projects

* /api/register
* /api/login
* /api/logout

## Employees

All endpoint have a /api prefix.

| Endpoint | Method | Auth | Description |
| - | - | - | - |
| /employees | GET | no | Get all employees |
| /employees | POST | no | Create employee |
| /employees/:id | PUT | no | Update a employee |
| /employees/:id | DELETE | no | Delete a employee |

### Create new employee

JSON example:

```json
{
    "name": "Erős István",
    "city": "Szeged",
    "salary": 395,
    "positionId": 1
}
```

### Update an employee

Endpoint:

* /api/employees/:id

JSON content example:

```json
{
    "name": "Erős István",
    "city": "Szeged",
    "salary": 395,
    "positionId": 1
}
```

### Delete an employee

Endpoint:

* /api/employees/:id

## Register endpoint

Send a new user data:

```json
{
    "name": "Foo",
    "email": "foo@bar.lan"
    "password: "secret",
    "password_confirmation": "secret"
}
```

## Positions

All endpoint have a /api prefix.

| Endpoint | Method | Auth | Description |
| - | - | - | - |
| /positions | GET | no | Get all positions |
| /positions | POST | no | Create position |
| /positions/:id | PUT | no | Update a position |
| /positions/:id | DELETE | no | Delete a position |

### Create new position

Endpoint:

* /api/positions

JSON example:

```json
{
    "name": "Erős István",
    "city": "Szeged",
    "salary": 395,
    "positionId": 1
}
```

### Update a position

Endpoint:

* /api/positions/:id

JSON content example:

```json
{
    "name": "developer",
}
```

### Delete a position

Endpoint:

* /api/positions/:id

## Projects

All endpoint have a /api prefix.

| Endpoint | Method | Auth | Description |
| - | - | - | - |
| /projects | GET | no | Get all projects |
| /projects | POST | no | Create project |
| /projects/:id | PUT | no | Update a project |
| /projects/:id | DELETE | no | Delete a project |

### Create new project

JSON example:

```json
{
    "name": "Tambura",
    "description": "A software",
    "startDate": "2026-11-05"
}
```

### Update a project

Endpoint:

* /api/projects/:id

JSON content example:

```json
{
    "name": "Tambura",
    "description": "A software",
    "startDate": "2026-11-05"
}
```

### Delete a project

Endpoint:

* /api/projects/:id

## Employee-projects endpoint

| Endpoint | Method | Auth | Description |
| - | - | - | - |
| /employee-projects | GET | no | Get all all employee-projects |
| /employee-projects | POST | no | Associate employee to project |
| /employee-projects/:empId/:projId | DELETE | no | Delete a project from an employee |

### List all employee-projects

* /api/employee-projects

### Associate employee to project

* /api/employee-projects

```json
{
    "projectId": 1,
    "employeeId": 1
}
```

### Disassociate employee from project

* /api/employee-projects/:empId/:projId

## Login endpoint

* /api/login

Send to login user data:

```json
{
    "name": "Foo",
    "password: "secret"
}
```

## Logout endpoint

* /api/logout

Send to logout user data:

```json
{
    "name": "Foo"
}
```
