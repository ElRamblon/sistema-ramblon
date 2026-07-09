<?php
session_start();
if($_SESSION['rol']=='adm'){
    echo json_encode(["status" => true]);

}else{
    echo json_encode(["status" => false])
}