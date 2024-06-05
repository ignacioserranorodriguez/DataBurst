<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'api_genid' => [['id'], ['_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/.well-known/genid']], [], [], []],
    'api_errors' => [['status'], ['_controller' => 'api_platform.action.not_exposed', 'status' => '500'], ['status' => '\\d+'], [['variable', '/', '\\d+', 'status', true], ['text', '/api/errors']], [], [], []],
    'api_validation_errors' => [['id'], ['_controller' => 'api_platform.action.not_exposed'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '[^.]+', '_format' => 'jsonld'], [['variable', '.', 'jsonld', '_format', true], ['variable', '/', '[^.]+', 'shortName', true], ['text', '/api/contexts']], [], [], []],
    '_api_validation_errors_problem' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    '_api_validation_errors_hydra' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    '_api_validation_errors_jsonapi' => [['id'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/validation_errors']], [], [], []],
    '_api_/elementos/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Elemento', '_api_operation_name' => '_api_/elementos/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/elementos']], [], [], []],
    '_api_/elementos{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Elemento', '_api_operation_name' => '_api_/elementos{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/elementos']], [], [], []],
    '_api_/elementos{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Elemento', '_api_operation_name' => '_api_/elementos{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/elementos']], [], [], []],
    '_api_/elementos/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Elemento', '_api_operation_name' => '_api_/elementos/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/elementos']], [], [], []],
    '_api_/elementos/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Elemento', '_api_operation_name' => '_api_/elementos/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/elementos']], [], [], []],
    '_api_/elementos/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Elemento', '_api_operation_name' => '_api_/elementos/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/elementos']], [], [], []],
    '_api_/listas/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Lista', '_api_operation_name' => '_api_/listas/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/listas']], [], [], []],
    '_api_/listas{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Lista', '_api_operation_name' => '_api_/listas{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/listas']], [], [], []],
    '_api_/listas{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Lista', '_api_operation_name' => '_api_/listas{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/listas']], [], [], []],
    '_api_/listas/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Lista', '_api_operation_name' => '_api_/listas/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/listas']], [], [], []],
    '_api_/listas/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Lista', '_api_operation_name' => '_api_/listas/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/listas']], [], [], []],
    '_api_/listas/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Lista', '_api_operation_name' => '_api_/listas/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/listas']], [], [], []],
    '_api_/usuarios/{id}{._format}_get' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Usuario', '_api_operation_name' => '_api_/usuarios/{id}{._format}_get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/usuarios']], [], [], []],
    '_api_/usuarios{._format}_get_collection' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Usuario', '_api_operation_name' => '_api_/usuarios{._format}_get_collection'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/usuarios']], [], [], []],
    '_api_/usuarios{._format}_post' => [['_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Usuario', '_api_operation_name' => '_api_/usuarios{._format}_post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/usuarios']], [], [], []],
    '_api_/usuarios/{id}{._format}_put' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Usuario', '_api_operation_name' => '_api_/usuarios/{id}{._format}_put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/usuarios']], [], [], []],
    '_api_/usuarios/{id}{._format}_patch' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Usuario', '_api_operation_name' => '_api_/usuarios/{id}{._format}_patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/usuarios']], [], [], []],
    '_api_/usuarios/{id}{._format}_delete' => [['id', '_format'], ['_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Usuario', '_api_operation_name' => '_api_/usuarios/{id}{._format}_delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/usuarios']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];
