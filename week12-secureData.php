<?php

    $host = "localhost";
    $dbname = "school";
    $username = "root";
    $password = "";

     try{
        $pdo = new pdo(
        "mysql: host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
        );

        $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
        );

        $name = 'สโรชา เหมนวล';
       $sql ="
       SELECT * FROM students WHERE name = ?
       "; 

       $stmt = $pdo->prepare($sql);

        $stmt->execute([$name]);

       $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

       echo "นักศึกษาชื่อ " . $name . " มีข้อมูลดังนี้<br>";
       echo "ID: " . $students['id'] . "<br>";

    }catch(PDOException $e){
        echo "เกิดข้อผิดพลาด: " . $e->getMessage();
    }

?>