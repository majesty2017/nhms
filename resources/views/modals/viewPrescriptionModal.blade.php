<!-- Modal -->
<div class="modal fade" id="viewPrescriptionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Prescription Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="" id="prescription_id">

                <div class="form-group">
                    <label for="">Doctor</label>
                    <input type="text" name="" id="prescription_doctor" readonly>
                </div>

                <div class="form-group">
                    <label for="">Patient</label>
                    <input type="text" name="" id="prescription_patient" readonly>
                </div>

                <div class="form-group">
                    <label for="">Case History</label>
                    <input type="text" name="" id="case_history" readonly>
                </div>

                <div class="form-group">
                    <label for="">Medication</label>
                    <input type="text" name="" id="medication" readonly>
                </div>

                <div class="form-group">
                    <label for="">Medication From Pharmacy</label>
                    <input type="text" name="" id="medication_from_pharmacist" readonly>
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" name="" id="description" readonly>
                </div>

                <div class="form-group">
                    <label for="">Updated At</label>
                    <input type="text" name="" id="updated_at" readonly>
                </div>
            </div>
        </div>
    </div>
</div>
