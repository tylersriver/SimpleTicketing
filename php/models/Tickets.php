<?php

class Tickets extends SimpleORM
{
    protected static $table = 'tickets';
    protected static $key = 'ticketId';

    public static function AllTickets()
    {
        $sql = " select
                ticketId as ID, 
                title as Title, 
                description as Description, 
                CONCAT(u.firstName, ' ', u.lastName) as `Created By`, 
                createdDate as `Date Created`, 
                requester as Requester, 
                requesterPhone as Phone, 
                requesterEmail as Email,
                if(isCustomer=1, 'Yes', 'No') as `Customer?`, 
                if(isResolved=1, 'Yes', 'No') as `Resolved?`,
                resolvedDate as `Date Resolved`
            from tickets t
                inner join user u
                    on t.createdBy = u.userId;
        ";
        return query($sql);
    }
}