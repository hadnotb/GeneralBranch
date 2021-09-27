<?php
use App\Framework\UserSession;


// const $firstname = UserSession::getFirstname();
UserSession::logout();
header('Location: ' . buildUrl('login'));
exit;
