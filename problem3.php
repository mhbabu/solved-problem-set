<?php

function calculatePayroll(array $employees): int {
    $totalPayroll = 0;
    foreach ($employees as $employee) {
        $regularHours = min($employee['hours_worked'], 40);
        $overtimeHours = max($employee['hours_worked'] - 40, 0);
        $totalPayroll += ($regularHours * $employee['hourly_rate']) + ($overtimeHours * $employee['hourly_rate'] * 1.5);
    }
    return $totalPayroll;
}

$employees = [
    ['name' => 'Alice', 'hourly_rate' => 20, 'hours_worked' => 45],
    ['name' => 'Bob', 'hourly_rate' => 15, 'hours_worked' => 38]
];

echo calculatePayroll($employees);

