<?php
    ini_set('display_errors', '1');
    $ura = isset($_POST['uri']) ? " - совпадает с юридическим " :"";
    $ust = isset($_POST['ustav']) ? " устава " : "";
    $pol = isset($_POST['polozhenie']) ? " положения " : "";

    $content = "
    Семинар: {$_POST['seminar']} \n\n
    1. Организация: {$_POST['org-name']} \n
        Название организации (краткое): {$_POST['org-short']} \n
        ИНН: {$_POST['inn']} \n
        КПП: {$_POST['kpp']} \n\n
        Почтовый адрес: {$_POST['zip-code']}, {$_POST['region']}, {$_POST['city']}, {$_POST['street']}, {$_POST['home']}" .  $ura . " \n\n
    2. Руководитель (для оформления договора): {$_POST['fio']} \n
        Должность: {$_POST['post']} \n
        Руководитель действует<br /> на основании: " .  $ust  . $pol . "\n
    3. Количество участников семинара: {$_POST['amount']} \n
    4. Контактные лицо: {$_POST['contact-name']} \n
        Должность: {$_POST['contact-post']} \n
        email: {$_POST['contact-email']} \n
        Телефон: {$_POST['contact-phone']} \n
    5. Комментарий: {$_POST['comment']} \n
        

    // SERIALIZE //

    ".print_r($_POST);

    $to = "thedamaxstudio@gmail.com";
    $subject = "GLOBAL TENDER. Заявка";
    $headers = "From: <zayavka@global-tender.ru>\r\nContent-type: text/plain; charset=utf-8 \r\n";
    
    if (mail ($to, $subject, $content, $headers) ) {
        echo "Ваша заявка принята. С вами свяжется наш специалист в ближайшее время. <a href='/'>На главную</a>";
    }
?>