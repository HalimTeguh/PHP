<?php

class ValidationUtil
{
    static function validate(LoginRequest $request)
    {
        if (!isset($request->username)) {
            throw new ValidationExeption("Username is null");
        } else if (!isset($request->password)) {
            throw new ValidationExeption("Password is null");
        }
    }

    static function valicdateReflection($request)
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $properties) {
            if (!$properties->isInitialized($request)) {
                throw new ValidationExeption("$properties->name is not set");
            } else if (is_null($properties->getValue($request))) {
                throw new ValidationExeption("$properties->name is null");
            }
        }
    }
}