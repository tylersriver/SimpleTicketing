<div class="modal fade bd-example-modal-lg" id="newTicketModal" tabindex="-1" role="dialog" aria-labelledby="newTicketModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Ticket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="newTicket" action="?controller=tickets&action=insert" method='POST'>
                    <div class="form-group">
                        <label for="title" class="col-form-label">Title:</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Description:</label>
                        <textarea class="form-control" name="description" id="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="requester" class="col-form-label">Requester:</label>
                        <input type="text" class="form-control" id="requester" name="requester"/>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-form-label">Phone:</label>
                        <input type="phone" class="form-control" id="phone" name="phone"/>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email"/>
                    </div>
                    <div class="form-check form-check-inline">    
                        <label class="form-check-label" for="isCustomer">Customer? &nbsp;</label>
                        <input class="form-check-input" type="checkbox" id="isCustomer" name="isCustomer" value="1">
                    </div>
                    <div class="form-check form-check-inline">  
                        <label class="form-check-label" for="isResolved">Resolved? &nbsp;</label>
                        <input class="form-check-input" type="checkbox" id="isResolved" name="isResolved" value="1">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" onClick="$('#newTicket').submit()">Report Ticket</button>
            </div>
        </div>
    </div>
</div>