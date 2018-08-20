<?php

class TicketsController
{
    function insert()
    {
        $temp = '';
        Tickets::Add([
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'createdBy' => $_POST['createdBy'],
            'requester' => $_POST['requester'],
            'requesterPhone' => $_POST['phone'],
            'requesterEmail' => $_POST['email'],
            'isCustomer' => isset($_POST['isCustomer']) ? $_POST['isCustomer'] : 0,
            'isResolved' => isset($_POST['isResolved']) ? $_POST['isResolved'] : 0
        ]);
        call('pages', 'overview');
    }
}