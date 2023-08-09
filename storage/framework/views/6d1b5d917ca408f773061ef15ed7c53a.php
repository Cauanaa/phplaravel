<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem Aluno</title>
    <style>
        th, td {
            padding: 4px 12px;
        }
    </style>
</head>
<body>
    <a href="<?php echo e(route('aluno.create')); ?>">Cadastrar</a><br>
    <table border="1" style="border-collapse: collapse">
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>CPF</th>
          <th>Data de Nascimento</th>
          <th>Email</th>
          <th>Telefone</th>
        </tr>
        <?php $__currentLoopData = $alunos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->nome); ?></td>
                <td><?php echo e($item->cpf); ?></td>
                <td><?php echo e($item->data_nascimento); ?></td>
                <td><?php echo e($item->email); ?></td>
                <td><?php echo e($item->telefone); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
</body>
</html>
<?php /**PATH C:\Users\ADM\Downloads\pweb2_laravel_2023_2-main\pweb2_laravel_2023_2-main\resources\views//aluno/list.blade.php ENDPATH**/ ?>