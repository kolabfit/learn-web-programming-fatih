<?php

class Employee
{

    public $id;
    public $name;
    public $position;
    public $salary;
    Public function __construct($id,$name,$position,$salary){
        $this->id=$id;
        $this->name= $name ;
        $this->position =  $position;
        $this -> salary =$salary;}
    
    private $employees = [];


    // Menambahkan karyawan baru
    public function create($name, $position, $salary)
    {
        $employee = [
            'name' => $name,
            'position' => $position,
            'salary' => $salary
        ];

        $this->employees[] = $employee;
    }

    // Membaca daftar karyawan
    public function read()
    {
        return $this->employees;
    }

    // Mengupdate data karyawan
    public function update($id, $name, $position, $salary)
    {
        if (isset($this->employees[$id])) {
            $this->employees[$id]['name'] = $name;
            $this->employees[$id]['position'] = $position;
            $this->employees[$id]['salary'] = $salary;
            return true;
        }
        return false;
    }

    // Menghapus karyawan
    public function delete($id)
    {
        if (isset($this->employees[$id])) {
            unset($this->employees[$id]);
            $this->employees = array_values($this->employees); // Mengatur ulang indeks array
            return true;
        }
        return false;
    }
}

// instansiasi
$employeeSystem = new Employee();

// Menambahkan karyawan
$employeeSystem->create('John Cena', 'Manager', 50000);
$employeeSystem->create('Jim Smith', 'Designer', 40000);
$employeeSystem->create('mr.muh', 'project manager', 60000);


// Membaca daftar karyawan
$employees = $employeeSystem->read();
foreach ($employees as $key => $employee) {
    echo "ID: $key, Name: " . $employee['name'] . ", Position: " . $employee['position'] . ", Salary: $" . $employee['salary'] . "<br>";
}

echo "<br>";

// Mengupdate data karyawan (misalnya, ID 0 adalah John Cena)
$employeeSystem->update(0, 'mr.wall', 'Senior Manager', 55000);

// Menghapus karyawan (misalnya, ID 1 adalah Jim Smith)
$employeeSystem->delete(2);

// Membaca daftar karyawan setelah perubahan
$employees = $employeeSystem->read();
foreach ($employees as $key => $employee) {
    echo "ID: $key, Name: " . $employee['name'] . ", Position: " . $employee['position'] . ", Salary: $" . $employee['salary'] . "<br>";
    echo $employee->id;
}



?>