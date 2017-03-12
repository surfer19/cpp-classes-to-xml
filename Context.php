<?php

/**
 * Created by PhpStorm.
 * User: majko
 * Date: 10.3.17
 * Time: 19:29
 */
class Context
{
    /*private $class_name = '';
    // variable or method scope - class A { public: ... }
    private $scope = '';*/
    // TODO

    // DECLARATIONS
    /*private $prefix = '';
    private $data_type = '';
    private $declaration_id = '';
    private $is_void = False;
    private $parameters = array();*/
    // remember argument that we parse

    // TODO - we dont know that we parsing variable or method declaration
    //

    function __construct(){
        $this->class_name = '';
        $this->scope = '';
        $this->prefix = '';
        $this->data_type = '';
        $this->declaration_id = '';
        $this->method_decl_id = '';
        $this->method_return_type ='';
        //$this->actual_method_reference = new ;
        $this->is_void = False;
        $this->parameters = array();
    }

    public function getIsVoid(){
        if ($this->is_void == True){
            return True;
        }
        return False;
    }
    public function setVoid(){
        $this->is_void = True;
    }

    public function clearScope(){
        $this->scope = '';
    }
    public function clearPrefix(){
        $this->prefix = '';
    }

    public function setClassName($class_name){
        $this->class_name = $class_name;
    }
    public function getClassName(){
        return $this->class_name;
    }

    public function setScope($scope){
        $this->scope = $scope;
    }
    public function getScope(){
        return $this->scope;
    }

    public function setDataType($type){
        $this->data_type = $type;
    }
    public function getDataType(){
        return $this->data_type;
    }

    public function setDeclarationId($id){
        $this->declaration_id = $id;
    }
    public function getDeclarationId(){
        return $this->declaration_id;
    }

    public function setPrefix($pref){
        $this->prefix = $pref;
    }

    public function getPrefix(){
        return $this->prefix;
    }

    public function setMethodDeclId($id){
        $this->method_decl_id = $id;
    }
    public function getMethodDeclId(){
        return $this->method_decl_id;
    }

    public function setReturnType($ret_type){
        $this->method_return_type = $ret_type;
    }
    public function getReturnType(){
        return $this->method_return_type;
    }

    public function pushParameter($parameter){
        array_push($this->parameters, $parameter);
    }

    public function printContext(){
        echo "--------------------" .PHP_EOL;
        echo "CONTEXT" .PHP_EOL;
        echo "class name      : ". $this->class_name .PHP_EOL;
        echo "scope           : ". $this->scope.PHP_EOL;
        echo "decl prefix     : ". $this->prefix.PHP_EOL;
        echo "decl id         : ". $this->declaration_id.PHP_EOL;
    }
}

class ContextParameter
{
    function __construct(){
        $this->data_type = '';
        $this->var_id = '';
        $this->is_void = False;
    }

    public function setDataType($type){
        $this->data_type = $type;
    }
    public function setVarId($id){
        $this->var_id = $id;
    }
    public function setVoidTrue(){
        $this->is_void = True;
    }
}