<?php

require __DIR__.'/vendor/autoload.php';

use Ds\Deque;


$graph = [];
$graph["you"] = ["alice", "bob", "claire"];
$graph["bob"] = ["anuj", "peggy"];
$graph["alice"] = ["peggy"];
$graph["claire"] = ["thom", "johny"];
$graph["anuj"] = [];
$graph["peggy"] = ["you"];
$graph["thom"] = [];
$graph["jonny"] = [];



function searchJohnyDeque($name, $graph)
{
    $deque = new Deque();

    foreach ($graph[$name] as $item) {
        $deque->push($item);
    }

    $checked = [];

    while (!$deque->isEmpty()) {
        $person = $deque->shift();

        if (!in_array($person, $checked)) {
            if ($person === 'johny') {
                return true;
            } else {
                $checked[] = $person;
                foreach ($graph[$person] as $item) {
                    $deque->push($item);
                }

            }

        }

    }
    return false;
}


function searchJohnyArray($name, $graph)
{
    $array = [];

    $array += $graph[$name] ;

    $checked = [];

    while (count($array)) {
        $person = array_shift($array);

        if (!in_array($person, $checked)) {
            if ($person === 'johny') {
                return true;
            } else {
                $checked[] = $person;

                $array += $graph[$person];

            }
        }

    }
    return false;
}


var_dump(searchJohnyDeque('bob', $graph));

var_dump(searchJohnyArray('you', $graph));

