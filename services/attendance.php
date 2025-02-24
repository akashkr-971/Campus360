<?php
$pageTitle = 'Attendance';
ob_start();
?>

<div class="service-content">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="display-4 fw-bold">Attendance</h1>
            <div class="divider d-flex align-items-center justify-content-center mb-4">
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
                <div class="mx-3"><i class="bi bi-calendar-check text-primary"></i></div>
                <div class="line bg-primary" style="width: 50px; height: 3px;"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <button class="btn btn-outline-primary" id="prevMonth"><i class="bi bi-chevron-left"></i> Previous</button>
                            <h3 class="mb-0" id="currentMonth">February 2025</h3>
                            <button class="btn btn-outline-primary" id="nextMonth">Next <i class="bi bi-chevron-right"></i></button>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>Date</th>
                                        <th>9:30 - 10:30<br><small class="text-muted">IMCA501</small></th>
                                        <th>10:30 - 11:30<br><small class="text-muted">IMCA502</small></th>
                                        <th>11:45 - 12:45<br><small class="text-muted">IMCA503</small></th>
                                        <th>1:45 - 2:45<br><small class="text-muted">IMCA504</small></th>
                                        <th>2:45 - 3:45<br><small class="text-muted">IMCA505</small></th>
                                    </tr>
                                </thead>
                                <tbody id="attendanceBody">
                                    <!-- Will be filled by JavaScript -->
                                </tbody>
                            </table>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h5 class="mb-3">Subjects</h5>
                                <div class="d-flex flex-column gap-2">
                                    <div class="subject-box">
                                        <span class="subject-code">MCA501</span>
                                        <span class="subject-name">Data Mining</span>
                                        <span class="attendance-percent">85%</span>
                                    </div>
                                    <div class="subject-box">
                                        <span class="subject-code">MCA502</span>
                                        <span class="subject-name">Data Structure</span>
                                        <span class="attendance-percent">90%</span>
                                    </div>
                                    <div class="subject-box">
                                        <span class="subject-code">MCA503</span>
                                        <span class="subject-name">Cryptography</span>
                                        <span class="attendance-percent">88%</span>
                                    </div>
                                    <div class="subject-box">
                                        <span class="subject-code">MCA504</span>
                                        <span class="subject-name">Algorithm and Design</span>
                                        <span class="attendance-percent">92%</span>
                                    </div>
                                    <div class="subject-box">
                                        <span class="subject-code">MCA505</span>
                                        <span class="subject-name">Linux Programming</span>
                                        <span class="attendance-percent">87%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mb-3">Status Legend</h5>
                                <div class="d-flex flex-column gap-2">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2" style="width: 20px; height: 20px; background-color: #d4edda; border: 1px solid #c3e6cb;"></div>
                                        <span>Present</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2" style="width: 20px; height: 20px; background-color: #f8d7da; border: 1px solid #f5c6cb;"></div>
                                        <span>Absent</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2" style="width: 20px; height: 20px; background-color: #f8f9fa; border: 1px solid #dee2e6;"></div>
                                        <span>No Class / Weekend</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.table th {
    font-weight: 600;
    text-align: center;
    vertical-align: middle;
}

.table td {
    text-align: center;
    height: 50px;
    transition: all 0.2s;
}

.present {
    background-color: #d4edda !important;
    border-color: #c3e6cb !important;
}

.absent {
    background-color: #f8d7da !important;
    border-color: #f5c6cb !important;
}

.weekend {
    background-color: #f8f9fa;
    color: #6c757d;
}

.subject-box {
    display: flex;
    align-items: center;
    padding: 10px;
    background-color: #f8f9fa;
    border-radius: 6px;
    margin-bottom: 5px;
}

.subject-code {
    font-weight: 600;
    min-width: 80px;
}

.subject-name {
    flex-grow: 1;
    margin: 0 15px;
}

.attendance-percent {
    font-weight: 600;
    color: #198754;
}

.card {
    border-radius: 10px;
}

.table-responsive {
    border-radius: 8px;
    overflow: hidden;
}

.table-bordered {
    border: 1px solid #dee2e6;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    let currentDate = new Date('2025-02-25');

    // Attendance data for February 2025 (till Wednesday)
    const attendanceData = {
        '2025-02': {
            '01': generateRandomAttendance(false), // Weekend
            '02': generateRandomAttendance(false), // Weekend
            '03': generateRandomAttendance(true),
            '04': generateRandomAttendance(true),
            '05': generateRandomAttendance(true),
            '06': generateRandomAttendance(true),
            '07': generateRandomAttendance(true),
            '08': generateRandomAttendance(false), // Weekend
            '09': generateRandomAttendance(false), // Weekend
            '10': generateRandomAttendance(true),
            '11': generateRandomAttendance(true),
            '12': generateRandomAttendance(true),
            '13': generateRandomAttendance(true),
            '14': generateRandomAttendance(true),
            '15': generateRandomAttendance(false), // Weekend
            '16': generateRandomAttendance(false), // Weekend
            '17': generateRandomAttendance(true),
            '18': generateRandomAttendance(true),
            '19': generateRandomAttendance(true),
            '20': generateRandomAttendance(true),
            '21': generateRandomAttendance(true),
            '22': generateRandomAttendance(false), // Weekend
            '23': generateRandomAttendance(false), // Weekend
            '24': generateRandomAttendance(true),
            '25': generateRandomAttendance(true),
            '26': generateRandomAttendance(true)
        }
    };

    function generateRandomAttendance(isWeekday) {
        if (!isWeekday) return Array(5).fill(null);
        return Array(5).fill(null).map(() => Math.random() > 0.2);
    }

    function updateCalendar() {
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();
        const firstDay = new Date(year, month, 1);
        const lastDay = new Date(year, month + 1, 0);
        
        document.getElementById('currentMonth').textContent = `${months[month]} ${year}`;
        
        const tbody = document.getElementById('attendanceBody');
        tbody.innerHTML = '';
        
        for (let day = 1; day <= lastDay.getDate(); day++) {
            const date = new Date(year, month, day);
            const dayOfWeek = date.getDay();
            
            if (dayOfWeek === 0 || dayOfWeek === 6) continue; // Skip weekends
            
            const row = document.createElement('tr');
            
            // Date cell
            const dateCell = document.createElement('td');
            dateCell.className = 'fw-bold';
            dateCell.textContent = `${months[month]} ${day}`;
            row.appendChild(dateCell);
            
            // Get attendance data for this date
            const monthStr = `${year}-${String(month + 1).padStart(2, '0')}`;
            const dayAttendance = attendanceData[monthStr]?.[String(day).padStart(2, '0')] || Array(5).fill(null);
            
            // Add attendance cells
            dayAttendance.forEach((status, index) => {
                const cell = document.createElement('td');
                if (status === true) {
                    cell.classList.add('present');
                    cell.innerHTML = '<i class="bi bi-check-lg"></i>';
                } else if (status === false) {
                    cell.classList.add('absent');
                    cell.innerHTML = '<i class="bi bi-x-lg"></i>';
                } else if (date > new Date('2025-02-26')) {
                    cell.classList.add('future');
                }
                row.appendChild(cell);
            });
            
            tbody.appendChild(row);
        }

        // Disable next month button if we're in current month
        const nextMonthBtn = document.getElementById('nextMonth');
        if (month === currentDate.getMonth() && year === currentDate.getFullYear()) {
            nextMonthBtn.disabled = true;
        } else {
            nextMonthBtn.disabled = false;
        }
    }

    // Event listeners for month navigation
    document.getElementById('prevMonth').addEventListener('click', function() {
        currentDate.setMonth(currentDate.getMonth() - 1);
        updateCalendar();
    });

    document.getElementById('nextMonth').addEventListener('click', function() {
        currentDate.setMonth(currentDate.getMonth() + 1);
        updateCalendar();
    });

    // Initial calendar render
    updateCalendar();
});
</script>

<?php
$content = ob_get_clean();
include $_SERVER['DOCUMENT_ROOT'] . '/Campus360/includes/layout.php';
?>
