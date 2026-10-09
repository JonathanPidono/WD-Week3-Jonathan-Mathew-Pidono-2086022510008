<?php

include("model.php");
session_start(); 

if (!isset($_SESSION['employeelist'])) {
    $_SESSION['employeelist'] = array();
} else {

}

function createEmployee(){
    $employee = new Model_Employee();
    $employee->nama = $_POST['inputNama'];
    $employee->jabatan = $_POST['inputJabatan'];
    $employee->usia = $_POST['inputUsia'];
    array_push($_SESSION['employeelist'], $employee);
}

function deleteEmployee($employeeIndex){
    unset($_SESSION['employeelist'][$employeeIndex]);
}
function getAllEmployee(){ 
    return $_SESSION['employeelist'];
}

if (isset($_POST['button_submit'])){
    createEmployee();
    header("Location:view.php");
}

if (isset($_GET['deleteID'])){
    deleteEmployee($_GET['deleteID']);
    header("Location:view.php");
}
?>