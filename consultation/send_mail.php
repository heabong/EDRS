<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'];
    $phone   = $_POST['phone'];
    $email   = $_POST['email'];
    $date    = $_POST['date'];
    $time    = $_POST['time'];
    $message = $_POST['message'];

    $to      = "youraddress@example.com"; // 실제 받을 이메일 주소
    $subject = "온라인 상담 예약 신청";
    $body    = "이름: $name\n연락처: $phone\n이메일: $email\n상담 날짜: $date\n상담 시간: $time\n상담 내용:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "예약 신청이 정상적으로 접수되었습니다.";
    } else {
        echo "메일 전송에 실패했습니다. 서버 설정을 확인하세요.";
    }
}
?>