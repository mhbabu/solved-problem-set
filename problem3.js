
function calculatePayroll(employees) {
    let totalPayroll = 0;
    for (let employee of employees) {
        let regularHours = Math.min(employee.hours_worked, 40);
        let overtimeHours = Math.max(employee.hours_worked - 40, 0);
        totalPayroll += (regularHours * employee.hourly_rate) + (overtimeHours * employee.hourly_rate * 1.5);
    }
    return totalPayroll;
}


let employees = [
    { name: 'Alice', hourly_rate: 20, hours_worked: 45 },
    { name: 'Bob', hourly_rate: 15, hours_worked: 38 }
];

console.log(calculatePayroll(employees));
