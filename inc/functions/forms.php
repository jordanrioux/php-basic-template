<?php

function getFormField($fieldName) {
    if (isset($_POST[$fieldName])) {
        return $_POST[$fieldName];
    }
    if (isset($_GET[$fieldName])) {
        return $_GET[$fieldName];
    }
    return "";
}

function getCheckedAttribute($fieldName) {
    if (!empty(getFormField($fieldName))) { 
        return "checked";
    } 
    return "";
}

// Quick example, please rework it :-)
function getFormValidationCssClass($fieldName, $valid) {
    if (!isset($_POST[$fieldName])) { 
        return "";
    }
    if ($valid) {
        return "is-valid";
    }
    return "is-invalid";
}