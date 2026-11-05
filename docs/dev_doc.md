# Development documentation

## Make a new endpoint

```bash
php artisan make:model Employee --migration --controller --api --seed
```

### Columns of table

Edit the ''database/migrations/somedate_create_employees_table.php'' file.

For example:

```php
$table->increments('id');
$table->string('name');
$table->string('city')->nullable();
$table->integer('salary')->nullable();
$table->integer('positionId')->nullable();
$table->timestamps();
```

Refresh tables:

```bash
php artisan migrate:refresh
```

### Model

Add $fillable variable to model.

_app/Models/Foo.php_:

```php
protected $fillable = ['name', 'city', 'salary'];
```

### Controller editing

```php
//...
use App\Models\Employee;
//...

public function index()
{
    $employees = Employee::all();
    return response()->json([
       'success' => true,
       'data' => $employees
    ]);
}

public function store(Request $request)
{
    $employee = Employee::create($request->all());
    return response()->json([
      'success' => true,
      'data' => $employee
    ]);
}

public function show($id)
{
    $employee = Employee::find($id);
    return response()->json([
        'success' => true,
        'data' => $employee
    ]);
}

public function update(Request $request, $id)
{
    $employee = Employee::find($id);
    $employee->update($request->all());
    return response()->json([
        'success' => true,
        'data' => $employee
    ]);
}

public function destroy($id)
{
    $employee = Employee::destroy($id);
    $employee->delete();
    return response()->json([
        'success' => true,
        'data' => $employee
    ]);
}
```

### Routing

```php
use App\Http\Controllers\EmployeeController;

//...

Route::get('employees', [EmployeeController::class, 'index']);
Route::post('employees', [EmployeeController::class, 'store']);
Route::get('employees/{id}', [EmployeeController::class, 'show']);
Route::put('employees/{id}', [EmployeeController::class, 'update']);
Route::delete('employees/{id}', [EmployeeController::class, 'destroy']);
```

### Seeder

Edit the seeder file:

_database/seeders/EmployeeSeeder.php_:

```php
//...
use App\Models\Employee;

//...

    public function run(): void
    {
        Employee::create([
            'name' => 'Erős István',
            'city' => 'Szeged',
            'salary' => 395,
            'positionId' => 1
        ]);
        Employee::create([
            'name' => 'Balogh János',
            'city' => 'Szeged',
            'salary' => 392,
            'positionId' => 2
        ]);
        Employee::create([
            'name' => 'Kiss Péter',
            'city' => 'Szeged',
            'salary' => 390,
            'positionId' => 3
        ]);
    }
```

Register the seeder:

```php
    public function run(): void
    {
        $this->call([
            EmployeeSeeder::class
        ]);
    }
```
