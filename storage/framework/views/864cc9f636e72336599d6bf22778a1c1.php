<!DOCTYPE html >
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        table, th, td {
            border: 1px solid black;
            border: 2px solid black;
            border-radius: 10px;
            background-color: DodgerBlue;
        }
        th, td {
            background-color: #F0FFFF;
            text-align: center;
        }
    </style>
</head>
<body>
<table style="width:100%">
    <thead>
    <tr>
        <th witdh = 10%>ID</th>
        <th>Product name</th>
        <th>Code</th>
        <th>Description</th>
        <th>Price</th>
        <th>Count of items</th>
        <th>Image</th>
        <th>Category ID</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $view; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($row->id); ?></td>
            <td><?php echo e($row->product_name); ?></td>
            <td><?php echo e($row->code); ?></td>
            <td text-align: left><?php echo e($row->description); ?></td>
            <td><?php echo e($row->price); ?></td>
            <td><?php echo e($row->number_items); ?></td>
            <td><img src= <?php echo e($row->url_img); ?> style="width:64px;height:64px;"></td>
            <td><?php echo e($row->category_id); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
    <?php echo e($view->links()); ?>

</body>
</html><?php /**PATH /home/miet/apps/u8201773-lab2/resources/views/products.blade.php ENDPATH**/ ?>