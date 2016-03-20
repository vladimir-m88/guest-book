<h2>Сообщение</h2>
<table class="table">
    <tr>
        <th><?php echo $model->getAttributeLabel('id'); ?></th>
        <td><?php echo $model['id'] ?></td>
    </tr>
    <tr>
        <th><?php echo $model->getAttributeLabel('user_name'); ?></th>
        <td><?php echo $model['user_name'] ?></td>
    </tr>
    <tr>
        <th><?php echo $model->getAttributeLabel('email'); ?></th>
        <td><?php echo $model['email'] ?></td>
    </tr>
    <tr>
        <th><?php echo $model->getAttributeLabel('homepage'); ?></th>
        <td><?php echo $model['homepage'] ?></td>
    </tr>
    <tr>
        <th><?php echo $model->getAttributeLabel('text'); ?></th>
        <td><?php echo $model['text'] ?></td>
    </tr>
    <tr>
        <th><?php echo $model->getAttributeLabel('public_date'); ?></th>
        <td><?php echo $model['public_date'] ?></td>
    </tr>
    <tr>
        <th><?php echo $model->getAttributeLabel('IP'); ?></th>
        <td><?php echo $model['IP'] ?></td>
    </tr>
    <tr>
        <th><?php echo $model->getAttributeLabel('browser'); ?></th>
        <td><?php echo $model['browser'] ?></td>
    </tr>
</table>