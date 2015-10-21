<?php 
require 'vendor/autoload.php';

use Payroll\Employee\Employee;
use Payroll\FeeService\EmployeeLoanService;
use Payroll\FeeService\IgssService;
use Payroll\FeeService\IsrService;
use Payroll\PayrollService\ContractPayrollService;
use Payroll\PayrollService\RegularPayrollService;

$employees[] = new Employee(1, 'Jon Snow', 6000, 'contract');
$employees[] = new Employee(2, 'Tyrion Lannister', 12000, 'regular');
$employees[] = new Employee(3, 'Arya Stark', 8000, 'contract');
$employees[] = new Employee(4, 'Daenerys Targaryen', 20000, 'regular');

$payroll = [];
foreach ($employees as $employee) {
    switch ($employee->type()) {
        case 'contract':
            $payrollService = new ContractPayrollService(
                new IsrService, 
                new EmployeeLoanService);
            break;
        
        default:
            $payrollService = new RegularPayrollService(
                new IsrService,
                new IgssService,
                new EmployeeLoanService);
            break;
    }

    $payroll[$employee->name] = $payrollService->salary($employee);
}

print_r(var_dump($payroll));

