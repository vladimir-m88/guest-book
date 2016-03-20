<h2>Сообщение</h2>
<table class="table">
    <tr>
        <th>ID</th>
        <td><?php echo $model['id'] ?></td>
    </tr>
    <tr>
        <th>Имя пользователя</th>
        <td><?php echo $model['user_name'] ?></td>
    </tr>
    <tr>
        <th>E-mail</th>
        <td><?php echo $model['email'] ?></td>
    </tr>
    <tr>
        <th>Сайт пользователя</th>
        <td><?php echo $model['homepage'] ?></td>
    </tr>
    <tr>
        <th>Текст сообщения</th>
        <td><?php echo $model['text'] ?></td>
    </tr>
    <tr>
        <th>IP</th>
        <td><?php echo $model['IP'] ?></td>
    </tr>
    <tr>
        <th>Browser</th>
        <td><?php echo $model['browser'] ?></td>
    </tr>
</table>