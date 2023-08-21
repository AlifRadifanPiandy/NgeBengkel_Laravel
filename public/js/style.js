// Change Element of Pricing Table Repair
function changeElement(selectElement) {
  var selectedOption = selectElement.options[selectElement.selectedIndex];
  var vehicleType = "";
  var transmission = "";
  var licensePlate = "";
  if (selectedOption.tagName.toLowerCase() === 'option') {
    vehicleType = selectedOption.getAttribute('data-vehicle');
    transmission = selectedOption.getAttribute('data-transmission');
    licensePlate = selectedOption.getAttribute('data-license-plate');
  }
  var element = document.getElementById("pricingTable");
  var modalElement = document.getElementById("modalRepair");
  modalElement.querySelector("#vehicle_type").value = vehicleType;
  modalElement.querySelector("#transmission").value = transmission;
  modalElement.querySelector("#license_plate").value = licensePlate;
  if (vehicleType == "car" && transmission == "manual") {
    element.innerHTML = `
            <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3" id="card-header" data-target="card-header1">
                      <h4 >Reguler</h4>
                    </div>
                    <div class="card-body">
                      <h3 class="card-title mt-3">Rp 550.000</h3>
                      <div class="d-flex mt-3">
                      <input type="radio" name="package" id="package1" value="550000" required/>
                      <p class="text-success m-0" style="display: none;"><i class="fa fa-check"></i> Terpilih</p>
                      <label for="package1" class="ms-auto" >
                        <a class="fs-18 pointer btn btn-primary text-white">Choose</a>
                      </label>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3" id="card-header" data-target="card-header2">
                      <h4>Medium</h4>
                    </div>
                    <div class="card-body">
                      <h3 class="card-title mt-3">Rp 850.000</h3>
                      <div class="d-flex mt-3">
                      <input type="radio" name="package" id="package2" value="850000" required/>
                      <p class="text-success m-0" style="display: none;"><i class="fa fa-check"></i> Terpilih</p>
                      <label for="package2" class="ms-auto" >
                        <a class="fs-18 pointer btn btn-primary text-white">Choose</a>
                      </label>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3" id="card-header" data-target="card-header3">
                      <h4>Advance</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mt-3">Rp 1.250.000</h3>
                        <div class="d-flex mt-3">
                        <input type="radio" name="package" id="package3" value="1250000" required/>
                        <p class="text-success m-0" style="display: none;"><i class="fa fa-check"></i> Terpilih</p>
                        <label for="package3" class="ms-auto" >
                          <a class="fs-18 pointer btn btn-primary text-white">Choose</a>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
            `;
  } else if (vehicleType == "car" && transmission == "automatic") {
    element.innerHTML = `
            <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3" id="card-header" data-target="card-header4">
                      <h4 >Reguler</h4>
                    </div>
                    <div class="card-body">
                      <h3 class="card-title mt-3">Rp 650.000</h3>
                      <div class="d-flex mt-3">
                      <input type="radio" name="package" id="package1" value="650000" required/>
                      <p class="text-success m-0" style="display: none;"><i class="fa fa-check"></i> Terpilih</p>
                      <label for="package1" class="ms-auto" >
                        <a class="fs-18 pointer btn btn-primary text-white">Choose</a>
                      </label>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3" id="card-header" data-target="card-header5">
                      <h4>Medium</h4>
                    </div>
                    <div class="card-body">
                      <h3 class="card-title mt-3">Rp 950.000</h3>
                      <div class="d-flex mt-3">
                      <input type="radio" name="package" id="package2" value="950000" required/>
                      <p class="text-success m-0" style="display: none;"><i class="fa fa-check"></i> Terpilih</p>
                      <label for="package2" class="ms-auto" >
                        <a class="fs-18 pointer btn btn-primary text-white">Choose</a>
                      </label>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3 " id="card-header" data-target="card-header6">
                      <h4>Advance</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mt-3">Rp 1.350.000</h3>
                        <div class="d-flex mt-3">
                        <input type="radio" name="package" id="package3" value="1350000" required/>
                        <p class="text-success m-0" style="display: none;"><i class="fa fa-check"></i> Terpilih</p>
                        <label for="package3" class="ms-auto" >
                          <a class="fs-18 pointer btn btn-primary text-white">Choose</a>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
            `;
  } else if (vehicleType == "motorcycle" && transmission == "manual") {
    element.innerHTML = `
            <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3" id="card-header" data-target="card-header7">
                      <h4 >Reguler</h4>
                    </div>
                    <div class="card-body">
                      <h3 class="card-title mt-3">Rp 120.000</h3>
                      <div class="d-flex mt-3">
                      <input type="radio" name="package" id="package1" value="120000" required/>
                      <p class="text-success m-0" style="display: none;"><i class="fa fa-check"></i> Terpilih</p>
                      <label for="package1" class="ms-auto" >
                        <a class="fs-18 pointer btn btn-primary text-white">Choose</a>
                      </label>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3" id="card-header" data-target="card-header8">
                      <h4>Medium</h4>
                    </div>
                    <div class="card-body">
                      <h3 class="card-title mt-3">Rp 220.000</h3>
                      <div class="d-flex mt-3">
                      <input type="radio" name="package" id="package2" value="220000" required/>
                      <p class="text-success m-0" style="display: none;"><i class="fa fa-check"></i> Terpilih</p>
                      <label for="package2" class="ms-auto" >
                        <a class="fs-18 pointer btn btn-primary text-white">Choose</a>
                      </label>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3 " id="card-header" data-target="card-header9">
                      <h4>Advance</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mt-3">Rp 320.000</h3>
                        <div class="d-flex mt-3">
                        <input type="radio" name="package" id="package3" value="320000" required/>
                        <p class="text-success m-0" style="display: none;"><i class="fa fa-check"></i> Terpilih</p>
                        <label for="package3" class="ms-auto" >
                          <a class="fs-18 pointer btn btn-primary text-white">Choose</a>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
            `;
  } else if (vehicleType == "motorcycle" && transmission == "automatic") {
    element.innerHTML = `
            <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3" id="card-header" data-target="card-header10">
                      <h4 >Reguler</h4>
                    </div>
                    <div class="card-body">
                      <h3 class="card-title mt-3">Rp 150.000</h3>
                      <div class="d-flex mt-3">
                      <input type="radio" name="package" id="package1" value="150000" required/>
                      <p class="text-success m-0" style="display: none;"><i class="fa fa-check"></i> Terpilih</p>
                      <label for="package1" class="ms-auto" >
                        <a class="fs-18 pointer btn btn-primary text-white">Choose</a>
                      </label>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3" id="card-header" data-target="card-header11">
                      <h4>Medium</h4>
                    </div>
                    <div class="card-body">
                      <h3 class="card-title mt-3">Rp 250.000</h3>
                      <div class="d-flex mt-3">
                      <input type="radio" name="package" id="package2" value="250000" required/>
                      <p class="text-success m-0" style="display: none;"><i class="fa fa-check"></i> Terpilih</p>
                      <label for="package2" class="ms-auto" >
                        <a class="fs-18 pointer btn btn-primary text-white">Choose</a>
                      </label>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3 " id="card-header" data-target="card-header12">
                      <h4>Advance</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mt-3">Rp 350.000</h3>
                        <div class="d-flex mt-3">
                        <input type="radio" name="package" id="package3" value="350000" required/>
                        <p class="text-success m-0" style="display: none;"><i class="fa fa-check"></i> Terpilih</p>
                        <label for="package3" class="ms-auto" >
                          <a class="fs-18 pointer btn btn-primary text-white">Choose</a>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
            `;
  }

}

// Change Element of Pricing Table Wash
function changeElementWash(selectElement) {
  var selectedOption = selectElement.options[selectElement.selectedIndex];
  var vehicleType = "";
  var transmission = "";
  var licensePlate = "";
  if (selectedOption.tagName.toLowerCase() == "option") {
    vehicleType = selectedOption.getAttribute("data-vehicle");
    transmission = selectedOption.getAttribute("data-transmission");
    licensePlate = selectedOption.getAttribute("data-license-plate");
  }
  var element = document.getElementById("pricingTableWash");
  var modalElement = document.getElementById("modalWash");
  modalElement.querySelector("#vehicle_type").value = vehicleType;
  modalElement.querySelector("#transmission").value = transmission;
  modalElement.querySelector("#license_plate").value = licensePlate;
  if (vehicleType == "car") {
    element.innerHTML = `
        <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3" id="card-header" data-target="card-header13">
            <h4>Reguler</h4>
          </div>
          <label class="card-body" for="package1">
            <h3 class="card-title mt-3">Rp 50.000</h3>
            <div class="d-flex mt-3">
            <input type="radio" name="package" id="package1" value="50000" required/>
            <p class="text-success m-0" style="display: none;"><i class="fa fa-check"></i> Terpilih</p>
            <label for="package1" class="ms-auto" >
              <a class="fs-18 pointer btn btn-primary text-white">Choose</a>
            </label>
          </div>
          </label>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3" id="card-header" data-target="card-header14">
            <h4>Premium</h4>
          </div>
          <label class="card-body" for="package2">
            <h3 class="card-title mt-3">Rp 100.000</h3>
            <div class="d-flex mt-3">
            <input type="radio" name="package" id="package2" value="100000"  required/>
            <p class="text-success m-0" style="display: none;"><i class="fa fa-check"></i> Terpilih</p>
            <label for="package2" class="ms-auto" >
              <a class=" fs-18 pointer btn btn-primary text-white">Choose</a>
            </label>
          </div>
          </label>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3" id="card-header" data-target="card-header15">
            <h4>Detailing</h4>
          </div>
          <label class="card-body" for="package3">
            <h3 class="card-title mt-3">Rp 500.000</h3>
            <div class="d-flex mt-3">
            <input type="radio" name="package" id="package3" value="500000"  required/>
            <p class="text-success m-0" style="display: none;"><i class="fa fa-check"></i> Terpilih</p>
            <label for="package3" class="ms-auto" >
              <a class=" fs-11 pointer btn btn-primary text-white">Choose</a>
            </label>
          </div>
          </label>
        </div>
      </div>
            `;
  }
  else if (vehicleType == "motorcycle") {
    element.innerHTML = `
            <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3" id="card-header" data-target="card-header16">
                      <h4 >Reguler</h4>
                    </div>
                    <div class="card-body">
                      <h3 class="card-title mt-3">Rp 20.000</h3>
                      <div class="d-flex mt-3">
                     <input type="radio" name="package" id="package1" value="20000" required/>
                    <p class="text-success m-0" style="display: none;"><i class="fa fa-check"></i> Terpilih</p>
                    <label for="package1" class="ms-auto" >
                    <a class="fs-18 pointer btn btn-primary text-white">Choose</a>
                   </label>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3" id="card-header" data-target="card-header17">
                      <h4>Premium</h4>
                    </div>
                    <div class="card-body">
                      <h3 class="card-title mt-3">Rp 50.000</h3>
                      <div class="d-flex mt-3">
            <input type="radio" name="package" id="package2" value="50000" required/>
            <p class="text-success m-0" style="display: none;"><i class="fa fa-check"></i> Terpilih</p>
            <label for="package2" class="ms-auto" >
              <a class="fs-18 pointer btn btn-primary text-white">Choose</a>
            </label>
          </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3 " id="card-header" data-target="card-header18">
                      <h4>Detailing</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title mt-3">Rp 150.000</h3>
                        <div class="d-flex mt-3">
                        <input type="radio" name="package" id="package3" value="150000" required/>
                        <p class="text-success m-0" style="display: none;"><i class="fa fa-check"></i> Terpilih</p>
                        <label for="package3" class="ms-auto" >
                          <a class="fs-18 pointer btn btn-primary text-white">Choose</a>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
            `;
  }
}

// Change Data Modal Edit Vehicle
document.querySelector('#modalEditVehicle').addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget // Button that triggered the modal
  var vehicleId = button.getAttribute('data-id')
  var editForm = document.querySelector('#editForm')
  var vehicleName = button.getAttribute('data-name')
  var vehicleType = button.getAttribute('data-type')
  var vehicleTransmission = button.getAttribute('data-transmission')
  var vehicleLicensePlate = button.getAttribute('data-license-plate')
  editForm.action = "/vehicle/" + vehicleId
  var modal = this
  modal.querySelector('#vehicleName').value = vehicleName;


  var vehicleTypeSelect = vehicleType == "car" ? "1" : "2";
  var transmissionSelect = vehicleTransmission == "manual" ? "1" : "2";
  var vehicleTypeOption = modal.querySelector('#vehicleType option[value="' + vehicleTypeSelect + '"]');
  vehicleTypeOption.selected = true;
  var vehicleTransmissionOption = modal.querySelector('#vehicleTransmission option[value="' + transmissionSelect + '"]');
  vehicleTransmissionOption.selected = true;
  modal.querySelector('#vehicleLicensePlate').value = vehicleLicensePlate
})


// Change Data Modal Edit Spareparts
document.querySelector('#modalEditSparepart').addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget // Button that triggered the modal
  var sparepartId = button.getAttribute('data-id')
  var editForm = document.querySelector('#editFormSparepart')
  var sparepartName = button.getAttribute('data-name')
  var category = button.getAttribute('data-category')
  var sparepartPrice = button.getAttribute('data-price')
  editForm.action = "/sparepart/" + sparepartId

  var modal = this

  modal.querySelector('#nameEdit').value = sparepartName;
  console.log(sparepartName);
  modal.querySelector('#categoryEdit').value = category;
  modal.querySelector('#priceEdit').value = sparepartPrice;
})

// Change Data Modal Edit Booking
document.querySelector('#modalEditBooking').addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget // Button that triggered the modal
  var bookingId = button.getAttribute('data-id')
  var editForm = document.querySelector('#editFormBooking')
  var bookingStatus = button.getAttribute('data-status')
  editForm.action = "/booking/" + bookingId
  var modal = this
  var bookingStatusSelect = bookingStatus == "stand_by" ? "1" : "on_process" ? "2" : "3";
  var bookingStatusOption = modal.querySelector('#statusEdit option[value="' + bookingStatusSelect + '"]');
  bookingStatusOption.selected = true;
})



// Dropdown
$(document).ready(function () {
  $('.dropdown-toggle').dropdown();
});