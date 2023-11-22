<!-- validation tanpa menggunakna reflection -->
<?php
class ValidateUtil
{
    static function validate(LoginRequest $request)
    {
        if(!isset($request->username)){
            throw new ValidationException("Username is null");
        }else if(!isset($request->password)){
            throw new ValidationException("Password is null");
        }
    }

    static function validateReflection($request)
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach($properties as $property){
            if(!$property->isInitialized($request)){
                throw new ValidationException("$property->name is not set");
            }else if(is_null("$property->name is null")){
                throw new ValidationException("$property->name is null");
            }
        }
    }
}