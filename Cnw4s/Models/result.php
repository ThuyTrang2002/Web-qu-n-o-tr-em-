<?php
$result = $this->conn->query($query);

if ($result === false) {
    // Xử lý lỗi truy vấn
    echo "Lỗi truy vấn SQL: " . $this->conn->error;
} else {
    $data = array();
    
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

?>
