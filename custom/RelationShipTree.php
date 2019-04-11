<?php
/**
 * Created by PhpStorm.
 * User: Sai
 * Date: 2019-03-22
 * Time: 14:51
 */
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="SHORTCUT ICON" href="themes/SuiteP/images/sugar_icon.ico">
    <title> Relationship Tree </title>
    <style>
        body{
            background-color: #f6f6f6;
        }
        .node circle {
            fill: #fff;
            stroke: steelblue;
            stroke-width: 3px;
        }

        .node text { font: 12px sans-serif; }

        .link {
            fill: none;
            stroke: #ccc;
            stroke-width: 2px;

        }

    </style>

</head>

<body>

<!-- load the d3.js library -->
<script src="http://d3js.org/d3.v3.min.js"></script>
<script src="custom/include/js/relationship-tree.js"></script>
</body>
</html>
