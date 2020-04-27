<?php

declare(strict_types=1);
//------------------------------------------------------------- flattenArray
function flattenArray(array $nested_arrays): void
{
    foreach ($nested_arrays as $key => $value) {
        if (gettype($value) !== 'array') {
            echo ('<pre>' . var_export($key, true) . ' => '
                . var_export($value, true) . '</pre>');
        } else {
            flattenArray($value);
        }
    }
}

//--------------------------------------------------------- prettyPrintArray
function prettyPrintArray(array $nested_arrays): void
{
    foreach ($nested_arrays as $key => $value) {
        if (gettype($value) !== 'array') {
            echo ('<li class="dump">' . $key . ' : '
                . $value . '</li>');
        } else {
            echo ('<ul class="dump">' . $key);
            prettyPrintArray($value);
            echo ('</ul>');
        }
    }
}
//---------------------------------------------------------------- dumpArray
function dumpArray(array $nested_arrays): void
{
    foreach ($nested_arrays as $key => $value) {
        switch (gettype($value)) {
            case 'array':
                /* ignore same level recursion */
                if ($nested_arrays !== $value) {
                    echo ('<details><summary style="color : tomato;'
                        . 'font-weight : bold;">'
                        . $key . '<span style="color : steelblue;'
                        . 'font-weight : 100;"> ('
                        . count($value) . ')</span>'
                        . '</summary><ul style="font-size: 0.75rem;'
                        . 'background-color: ghostwhite">');
                    dumpArray($value);
                    echo ('</ul></details>');
                }
                break;
            case 'object':
                echo ('<details><summary style="color : tomato;'
                    . 'font-weight : bold;">'
                    . $key . '<span style="color : steelblue;'
                    . 'font-weight : 100;"> ('
                    . gettype($value) . ')</span>'
                    . '</summary><ul style="font-size: 0.75rem;'
                    . 'background-color: ghostwhite">'
                    . '<li style="margin-left: 2rem;color: teal;'
                    . 'background-color: white">'
                    . '<span style="color : steelblue;font-weight : bold;">'
                    . 'object</span> : '
                    . '<pre>' . var_export($value, true)
                    . '</pre></li></ul></details>');
                break;
            case 'callable':
            case 'iterable':
            case 'resource':
                /* not supported yet */
                break;
            default:
                /* scalar and NULL */
                echo ('<li style="margin-left: 2rem;color: teal;'
                    . 'background-color: white">'
                    . '<span style="color : steelblue;font-weight : bold;">'
                    . $key . '</span> : '
                    . ($value ?? '<span style="font-weight : bold;'
                    . 'color : violet">NULL<span/>') 
                    . '</li>');
                break;
        }
    }

    // echo 'is $GLOBALS an object ? ' . var_export(is_object($GLOBALS), true);
    // echo '<pre style="margin-left: 2rem;">' . var_export($GLOBALS, true) . '</pre>';
    // echo '<pre>' . var_dump($GLOBALS) . '</pre>';

    // function dumpArray(array $nested_arrays): void
    // {
    //     foreach ($nested_arrays as $key => $value) {
    //         if (gettype($value) !== 'array') {
    //             echo ('<li style="margin-left: 2rem;color: teal; background-color: white">'
    //                 . '<span style="color : steelblue;font-weight : bold;">'
    //                 . $key . '</span> : '
    //                 . $value . '</li>');
    //         } else {
    //             /* ignore same level recursion */
    //             if ($nested_arrays !== $value) {
    //                 echo ('<details><summary style="color : tomato; font-weight : bold;">'
    //                     . $key . '<span style="color : steelblue;font-weight : 100;"> ('
    //                     . count($value) . ')</span>'
    //                     . '</summary><ul style="font-size: 0.75rem; background-color: ghostwhite">');
    //                 dumpArray($value);
    //                 echo ('</ul></details>');
    //             }
    //         }
    //     }
}
