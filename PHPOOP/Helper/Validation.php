<?php

function validateLoginRequest(LoginRequest $request)
{
    if (!isset($request->username)) {
        throw new ValidationExeption("Username is null");
    } else if (!isset($request->password)) {
        throw new ValidationExeption("Password is null");
    } else if (trim($request->username) == "") {
        throw new Exception("Username is Empty");
    } else if (trim($request->password) == "") {
        throw new Exception("Password is Empty");
    }
}