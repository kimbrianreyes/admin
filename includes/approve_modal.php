<!-- Approve -->
<div class="modal fade" id="edit">
    <!-- Changed ID to 'approve' -->
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Approve Item Request</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="approve_order.php">
                    <input type="hidden" id="order_id" name="order_id">

                    <div class="form-group">
                        <label for="item_id" class="col-sm-3 control-label">Item ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="item_id" name="item_id" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="item_name" class="col-sm-3 control-label">Item Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="item_name" name="item_name" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="quantity" class="col-sm-3 control-label">Quantity</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="quantity" name="quantity" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="total_price" class="col-sm-3 control-label">Total Price</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="total_price" name="total_price" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="remarks" class="col-sm-3 control-label">Remarks</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="remarks" name="remarks"
                                placeholder="Enter remarks"></textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="approve"><i
                        class="fa fa-check-square-o"></i> Approve</button>
                </form>
            </div>
        </div>
    </div>
</div>



<script>
$(function() {
    // When the approve button is clicked
    $('.edit').click(function(e) {
        e.preventDefault();

        // Get the data attributes from the clicked button
        var order_id = $(this).data('order_id'); // Ensure you're using correct attribute names
        var item_id = $(this).data('item_id');
        var item_name = $(this).data('item_name');
        var quantity = $(this).data('quantity');
        var total_price = $(this).data('total_price');

        // Use AJAX if needed or just populate modal fields directly
        // For now, just populate modal fields with data attributes
        $('#approve').modal('show');
        $('#order_id').val(order_id);
        $('#item_id').val(item_id);
        $('#item_name').val(item_name);
        $('#quantity').val(quantity);
        $('#total_price').val(total_price);
    });
});
</script>