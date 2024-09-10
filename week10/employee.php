<?php

    class Employee {
        private $conn;
        private $table_name = "restapi_6606021421012";

        public function __construct($conn) {
            $this->conn = $conn;
        }

        public function getAllEmployees() {
            $stmt = $this->conn->prepare("SELECT * FROM $this->table_name");
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

        public function getEmployeesById($id) {
            $stmt = $this->conn->prepare("SELECT * FROM $this->table_name WHERE id =?");
            $stmt->execute([$id]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

        public function createEmployee($data) {
            $name = $data['name'];
            $email = $data['email'];
            
            $stmt = $this->conn->prepare("INSERT INTO $this->table_name (emp_name, emp_email) VALUES (:emp_name,:emp_email)");
            $stmt->bindParam(':emp_name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':emp_email', $email, PDO::PARAM_STR);
            $result = $stmt->execute();
            return ($result ? true : false);
        }

        public function updateEmployee($id, $data) {
            $name = $data['name'];
            $email = $data['email'];
            
            $stmt = $this->conn->prepare("UPDATE $this->table_name SET emp_name =:name, emp_email =:email WHERE id =:id");
            $stmt->bindParam(':emp_name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':emp_email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $result = $stmt->execute();
            return ($result? true : false);
        }

        public function deleteEmployee($id) {
            $stmt = $this->conn->prepare("DELETE FROM $this->table_name WHERE id =:id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $result = $stmt->execute();
            return ($result? true : false);
        }
    }

?>