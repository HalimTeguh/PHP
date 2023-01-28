<?php

#[Attribute]
class NotBlank
{

}

class LoginRequest
{
    #[NotBlank]
    var ?string $username;

    #[NotBlank]
    var ?string $password;
}

function validate(object $object): void
{
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();
    foreach ($properties as $property) {
        validateNotBlank($property, $object);
    }
}

function ValidateNotBlank(ReflectionProperty $property, object $object): void
{
    $attribute = $property->getAttributes(NotBlank::class);
    if (count($attribute) > 0) {
        if (!$property->isInitialized($object)) {
            throw new Exception("Property $property->name is null");
        } else if (!$property->getValue($object) == null) {
            throw new Exception("Property $property->name is null");
        }
    }
}

$request = new LoginRequest();
$request->username = "Halim";
$request->password = "Halim";
validate($request);