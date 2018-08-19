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
                createdBy as `Created By`, 
                createdDate as `Date Created`, 
                requester as Requester, 
                requesterPhone as Phone, 
                isCustomer as `Customer?`, 
                isResolved as `Resolved?`,
                resolvedDate as `Date Resolved`
            from tickets;
        ";
        return query($sql);
    }
}