<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
    <body>
    <?php echo $this->extend('layouts/default'); ?>
    <?php echo $this->section('content'); ?>
    <ul>
    <?php foreach($tasks as $task):?>
    <li>
    <?php echo $task->name;?>
    </li>
    <?php endforeach;?>
    </ul>
    <?php echo $this->section('content') ?>
<!-- isi content disini -->
    <?php echo $this->endSection(); ?>


    </body>
</html>
