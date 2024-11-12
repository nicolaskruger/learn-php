<?php

/*
 * Complete the 'biggerIsGreater' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING w as parameter.
 */

class Node
{
    public string $value;
    public ?Node $left;
    public ?Node $right;

    public function __construct($value)
    {
        $this->value = $value;
        $this->left = null;
        $this->right = null;
    }
}

class BinaryTree
{
    public ?Node $root;

    public function __construct()
    {
        $this->root = null;
    }

    // Insert a new node in the binary tree
    public function insert(string $value)
    {
        $newNode = new Node($value);
        if ($this->root === null) {
            $this->root = $newNode;
        } else {
            $this->insertNode($this->root, $newNode);
        }
    }
    private function insertNode(Node $node, $newNode)
    {
        if ($newNode->value < $node->value) {
            if ($node->left === null) {
                $node->left = $newNode;
            } else {
                $this->insertNode($node->left, $newNode);
            }
        } else {
            if ($node->right === null) {
                $node->right = $newNode;
            } else {
                $this->insertNode($node->right, $newNode);
            }
        }
    }
    private function findGreatNode(string $val, Node $node) {
        if($val < $node->value)
            return $node->value;
        else {
            if($node->right == null)
                return "no answer";
            return $this->findGreatNode($val, $node->right);
        }

    }

    public function findGreat(string $val){
        return $this->findGreatNode($val, $this->root);
    }
}

function biggerIsGreater(string $w)
{
    // Write your code here
    if(strlen($w) == 1) return "no answer";
    $tree = new BinaryTree();
    $tree->insert($w[strlen($w) - 1]);
    $swap_char = "";
    $swap_index = 0;
    for ($i= strlen($w) - 2; $i >= 0; $i--)  { 
        # code...
        $swap_char = $tree->findGreat($w[$i]);
        if($swap_char!= "no answer"){
            $swap_index = $i;
            break;
        }
        if ($i == 0 && $swap_char == "no answer") {
            print("last char ". $swap_char);
            return "no answer";
        }
        $tree->insert($w[$i]);
    }

    $oneLetter = true;

    $sub = substr($w, $swap_index);

    $split = str_split($sub);

    $filter = array_filter($split, function (string $val) use (&$oneLetter, &$swap_char) {
        if ($oneLetter && $val == $swap_char) {
            $oneLetter = false;
            return false;
        }
        return true;
    });

    sort($filter);

    $end = join("", $filter);

    return substr($w, 0, $swap_index)."".$swap_char."".$end; 

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$T = intval(trim(fgets(STDIN)));

for ($T_itr = 0; $T_itr < $T; $T_itr++) {
    $w = rtrim(fgets(STDIN), "\r\n");

    $result = biggerIsGreater($w);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
