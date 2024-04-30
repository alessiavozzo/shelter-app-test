<?php

function checkValidEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
};

function checkValidPassword($pw)
{
    $password_pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
    return preg_match($password_pattern, $pw);
};
