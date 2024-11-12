<?php

function greet(){

    $hello = "hello world!";

    $array_hello = str_split($hello);
    $i = 0;

    $dict_hello = array_reduce($array_hello, function ($dict, $key) use (&$i) {
        $dict[$key] = [...$dict[$key] ?? [], $i++];
        return $dict;
    }, []);

    $result = array_reduce(array_keys($dict_hello), function ($word, $key) use (&$dict_hello) {
        $indexes =  $dict_hello[$key];
        foreach ($indexes as $index) {
            $word[$index] = $key;
        }
        return $word;
    }, "");

    return $result;
}