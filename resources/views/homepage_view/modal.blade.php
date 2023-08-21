{{-- Modal Edit Vehicle --}}
<div class="modal fade" id="modalEditVehicle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Vehicle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="editForm" name="editForm">
                    @csrf
                    @method('PUT')
                    <label for="name"><b>Name</b></label>
                    <input type="text" name="vehicleName" id="vehicleName" class="form-control mt-2">
                    <label for="name" class="mt-2"><b>Vehicle Type</b></label>
                    <select name="vehicleType" id="vehicleType" class="form-select mt-2">
                        <option value="1">Car</option>
                        <option value="2">Motorcycle</option>
                    </select>
                    <label for="name" class="mt-2"><b>Transmission</b></label>
                    <select name="vehicleTransmission" id="vehicleTransmission" class="form-select mt-2">
                        <option value="1">Manual</option>
                        <option value="2">Automatic</option>
                    </select>
                    <label for="name" class="mt-2"><b>License Number Plate</b></label>
                    <input type="text" name="vehicleLicensePlate" id="vehicleLicensePlate" class="form-control mt-2">

            </div>
            <div class="modal-footer">

                <button type="submit" class="btn btn-primary">Edit</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal Edit Booking --}}
<div class="modal fade" id="modalEditBooking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="editFormBooking" name="editFormBooking">
                    @csrf
                    @method('PUT')
                    <label for="name"><b>Status</b></label>
                    <select name="statusEdit" id="statusEdit" class="form-select mt-2">
                        <option value="1">Stand By</option>
                        <option value="2">On Process</option>
                        <option value="3">Done</option>
                    </select>
                    <button type="submit" class="btn btn-primary mt-2">Edit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal Edit Sparepart --}}
<div class="modal fade" id="modalEditSparepart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Sparepart</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="editFormSparepart">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name Sparepart</label>
                        <input type="text" class="form-control" id="nameEdit" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category Sparepart</label>
                        <input type="text" class="form-control" id="categoryEdit" name="category">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price Sparepart</label>
                        <input type="text" class="form-control" id="priceEdit" name="price">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
