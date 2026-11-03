# Endpoints

* /api/employees

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

### Update a employee

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

### Delete a star

Endpoint:

* /api/employees/:id
