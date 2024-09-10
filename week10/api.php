<?php
header("Content-Type: application/json");
include_once 'db.php';  // ไฟล์สำหรับเชื่อมต่อฐานข้อมูล
include_once 'employee.php';

$employee = new Employee($conn);

// ตรวจสอบว่า request method เป็นอะไร
$method = $_SERVER['REQUEST_METHOD'];

// ดึงข้อมูลจาก URL สำหรับใช้เป็นพารามิเตอร์
$uri = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$id = isset($uri[4]) ? (int) $uri[4] : null;

// จัดการกับคำขอ
switch ($method) {
    case 'POST':
        if ($uri[3] === 'employee') {
            $data = json_decode(file_get_contents("php://input"), true);
            if ($employee->createEmployee($data)) {
                echo json_encode(['message' => 'Employee created successfully']);
            } else {
                http_response_code(500);
                echo json_encode(['message' => 'Failed to create employee']);
            }
        }
        break;

    case 'GET':
        if ($uri[3] === 'employees') {
            $result = $employee->getAllEmployees();
            echo json_encode($result);
        } elseif ($uri[3] === 'employee' && $id) {
            $result = $employee->getEmployeesById($id);
            if ($result) {
                echo json_encode($result);
            } else {
                http_response_code(404);
                echo json_encode(['message' => 'Employee not found']);
            }
        }
        break;

    case 'PUT':
        if ($uri[3] === 'employee' && $id) {
            $data = json_decode(file_get_contents("php://input"), true);
            if ($employee->updateEmployee($id, $data)) {
                echo json_encode(['message' => 'Employee updated successfully']);
            } else {
                http_response_code(500);
                echo json_encode(['message' => 'Failed to update employee']);
            }
        }
        break;

    case 'DELETE':
        if ($uri[3] === 'employee' && $id) {
            if ($employee->deleteEmployee($id)) {
                echo json_encode(['message' => 'Employee deleted successfully']);
            } else {
                http_response_code(500);
                echo json_encode(['message' => 'Failed to delete employee']);
            }
        }
        break;

    default:
        http_response_code(405);
        echo json_encode(['message' => 'Method Not Allowed']);
        break;
}
?>
