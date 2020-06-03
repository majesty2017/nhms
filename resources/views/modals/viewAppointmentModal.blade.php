<!-- Modal -->
<div class="modal fade" id="viewAppointmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Appointment Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="" id="appointment_id">

                <div class="form-group">
                    <label for="">Doctor</label>
                    <input type="text" name="" id="appointment_doctor" readonly>
                </div>

                <div class="form-group">
                    <label for="">Patient</label>
                    <input type="text" name="" id="appointment_patient" readonly>
                </div>

                <div class="form-group">
                    <label for="">Appointment Date</label>
                    <input type="text" name="" id="appointment_date" readonly>
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" name="" id="appointment_description" readonly>
                </div>

                <div class="form-group">
                    <label for="">Created At</label>
                    <input type="text" name="" id="created_at" readonly>
                </div>

                <div class="form-group">
                    <label for="">Updated At</label>
                    <input type="text" name="" id="updated_at" readonly>
                </div>
            </div>
        </div>
    </div>
</div>
