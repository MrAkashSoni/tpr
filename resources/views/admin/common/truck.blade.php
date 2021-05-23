<div class="form-row">
  <input type="hidden" value="-1">
  <div class="form-group col-md-3">
    <label for="trucktype">Truck Type</label>
    <input type="text" class="form-control" id="trucktype" placeholder="Type">
  </div>
  <div class="form-group col-md-3">
    <label for="truckstyle">Truck Style</label>
    <input type="text" class="form-control" id="truckstyle" placeholder="Style">
  </div>
  <div class="form-group col-md-2">
    <label for="truckcategory">Truck Category</label>
    <input type="text" class="form-control" id="truckcategory" placeholder="Category">
  </div>
  <div class="form-group col-md-2">
    <label for="trucksize">Truck Size</label>
    <input type="text" class="form-control" id="trucksize" placeholder="Feet">
  </div>
  <div class="form-group col-md-2">
    <label for="truckcapacity">Truck Capacity</label>
    <input type="text" class="form-control" id="truckcapacity" placeholder="Ton">
  </div>
  <button id="addtrucktodatabase" class="btn btn-primary">Submit</button>
</div>
<div class="modal fade" id="truckmodal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Please make following changes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body m-3">
        <div id="truckmodalcontent" class="mb-0">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
