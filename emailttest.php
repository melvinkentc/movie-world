<?php
if (mail('melvinkentc@gmail.com', 'Test Email', 'This is a test email from PHP mail() function.')) {
    echo 'Mail sent successfully';
} else {
    echo 'Mail sending failed';
}