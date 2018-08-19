<?php

class TicketsViewModel
{
    public static function ticketsTable()
    {
        $tickets = Tickets::AllTickets();

        $table = new SimpleTable('tickets');
        $table->setTableClasses([
            BootStrapTableClasses::Hover,
            BootStrapTableClasses::Small,
            BootStrapTableClasses::Striped
        ]);
        $table->setHasIndex(false);
        $table->setData($tickets);
        return $table->display(true);
    }
}