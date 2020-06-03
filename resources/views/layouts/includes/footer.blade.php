<footer class="main-footer">
    <strong>Copyright &copy; 2019-{{ date('Y') }} <a href="">Nkwanta Municipal Hospital</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0-pre
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ URL::asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ URL::asset('assets/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ URL::asset('assets/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ URL::asset('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ URL::asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ URL::asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ URL::asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ URL::asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('assets/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL::asset('assets/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('assets/dist/js/demo.js')}}"></script>
<!-- DataTables -->
<script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $("#datatables").DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, 'All'],
            ],
            "responsive": true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search Records",
            },
        });

        // Role
        $('.viewRoleModal').on('click', function () {
            $('#viewRoleModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#role_id').val(data[0]);
            $('#role_name').val(data[1]);
            $('#role_description').val(data[2]);
            $('#status').val(data[3]);
            $('#created_at').val(data[4]);
            $('#updated_at').val(data[5]);
        });

        $('.editRoleModal').on('click', function () {
            $('#editRoleModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#update_role_id').val(data[0]);
            $('#update_role_name').val(data[1]);
            $('#update_role_status').val(data[1]);
            $('#update_role_description').val(data[2]);
            $('#update_role_status').val(data[3]);
        });

        $('.deleteRoleModal').on('click', function () {
            $('#deleteRoleModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#delete_role_id').val(data[0]);
        });

        // Category
        $('.viewCategoryModal').on('click', function () {
            $('#viewCategoryModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#category_id').val(data[0]);
            $('#category_name').val(data[1]);
            $('#category_description').val(data[2]);
            $('#created_at').val(data[3]);
            $('#updated_at').val(data[4]);
        });

        $('.editCategoryModal').on('click', function () {
            $('#editCategoryModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#update_category_id').val(data[0]);
            $('#update_category_name').val(data[1]);
            $('#update_category_description').val(data[2]);
        });

        $('.deleteCategoryModal').on('click', function () {
            $('#deleteCategoryModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#delete_category_id').val(data[0]);
        });

        // User
        $('.viewUserModal').on('click', function () {
            $('#viewUserModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#user_id').val(data[0]);
            $('#user_name').val(data[2]);
            $('#user_role').val(data[3]);
            $('#user_department').val(data[4]);
            $('#user_phone').val(data[5]);
            $('#status').val(data[6]);
            $('#updated_at').val(data[7]);
        });

        $('.editUserModal').on('click', function () {
            $('#editUserModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('.td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#update_user_id').val(data[0]);
            // $('#image').val(data[1]);
            $('#update_name').val(data[1]);
            $('#update_role').val(data[2]);
            $('#update_category').val(data[3]);
            $('#update_phone').val(data[4]);
            $('#update_user_status').val(data[5]);
        });

        $('.deleteUserModal').on('click', function () {
            $('#deleteUserModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#delete_user_id').val(data[0]);
        });

        // Patient
        $('.viewPatientModal').on('click', function () {
            $('#viewPatientModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#id').val(data[0]);
            $('#patient_id').val(data[1]);
            $('#patient_name').val(data[2]);
            $('#patient_hometown').val(data[3]);
            $('#patient_phone').val(data[4]);
            $('#patient_gender').val(data[5]);
            $('#patient_marital_status').val(data[6]);
            $('#updated_at').val(data[7]);
        });

        $('.editPatientModal').on('click', function () {
            $('#editPatientModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#update_patient_id').val(data[0]);
            $('#name').val(data[2]);
            $('#home_town').val(data[3]);
            $('#phone').val(data[4]);
            $('#gender').val(data[5]);
        });

        $('.deletePatientModal').on('click', function () {
            $('#deletePatientModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#delete_patient_id').val(data[0]);
        });


        // Appointment
        $('.viewAppointmentModal').on('click', function () {
            $('#viewAppointmentModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#appointment_id').val(data[0]);
            $('#appointment_doctor').val(data[1]);
            $('#appointment_patient').val(data[2]);
            $('#appointment_date').val(data[3]);
            $('#appointment_description').val(data[4]);
            $('#created_at').val(data[5]);
            $('#updated_at').val(data[6]);
        });

        $('.editAppointmentModal').on('click', function () {
            $('#editAppointmentModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#update_appointment_id').val(data[0]);
            $('#update_doctor').val(data[1]);
            $('#update_patient').val(data[2]);
            $('#update_appointment_date').val(data[3]);
            $('#description').val(data[4]);
        });

        $('.deleteAppointmentModal').on('click', function () {
            $('#deleteAppointmentModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#delete_appointment_id').val(data[0]);
        });

        // Bed
        $('.viewBedModal').on('click', function () {
            $('#viewBedModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#bed_id').val(data[0]);
            $('#bed_number').val(data[1]);
            $('#bed_type').val(data[2]);
            $('#bed_description').val(data[3]);
            $('#status').val(data[4]);
            $('#created_at').val(data[5]);
            $('#updated_at').val(data[6]);
        });

        $('.editBedModal').on('click', function () {
            $('#editBedModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#update_bed_id').val(data[0]);
            $('#update_bed_number').val(data[1]);
            $('#update_bed_type').val(data[2]);
            $('#update_description').val(data[3]);
            $('#update_status').val(data[4]);
        });

        $('.deleteBedModal').on('click', function () {
            $('#deleteBedModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#delete_bed_id').val(data[0]);
        });

        // Bed Allotment
        $('.viewBedAllotmentModal').on('click', function () {
            $('#viewBedAllotmentModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#bed_allotment_id').val(data[0]);
            $('#bed_allotment_bed').val(data[1]);
            $('#bed_allotment_patient').val(data[2]);
            $('#bed_allotment_date').val(data[3]);
            $('#bed_discharge_date').val(data[4]);
            $('#bed_allotment_status').val(data[5]);
            $('#bed_allotment_updated_at').val(data[6]);
        });

        $('.editBedAllotmentModal').on('click', function () {
            $('#editBedAllotmentModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#update_bed_allotment_id').val(data[0]);
            $('#update_allotment_bed').val(data[1]);
            $('#update_allotment_patient').val(data[2]);
            $('#update_allotment_date').val(data[3]);
            $('#update_discharge_date').val(data[4]);
            // $('#update_allotment_status').val(data[5]);
        });

        $('.deleteBedAllotmentModal').on('click', function () {
            $('#deleteBedAllotmentModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#delete_bed_allotment_id').val(data[0]);
        });

        // Blood Group
        $('.viewBloodGroupModal').on('click', function () {
            $('#viewBloodGroupModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#blood_group_id').val(data[0]);
            $('#blood_group').val(data[1]);
            $('#status').val(data[2]);
            $('#created_at').val(data[3]);
            $('#updated_at').val(data[4]);
        });

        $('.editBloodGroupModal').on('click', function () {
            $('#editBloodGroupModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#update_blood_group_id').val(data[0]);
            $('#update_blood_group').val(data[1]);
        });

        $('.deleteBloodGroupModal').on('click', function () {
            $('#deleteBloodGroupModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#delete_blood_group_id').val(data[0]);
        });

        // Medicine Category Group
        $('.viewMedicineCategoryModal').on('click', function () {
            $('#viewMedicineCategoryModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#med_category_id').val(data[0]);
            $('#med_category').val(data[1]);
            $('#med_category_description').val(data[2]);
            $('#created_at').val(data[3]);
            $('#updated_at').val(data[4]);
        });

        $('.editMedicineCategoryModal').on('click', function () {
            $('#editMedicineCategoryModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#update_med_cat_id').val(data[0]);
            $('#update_med_cat').val(data[1]);
            $('#update_description').val(data[2]);
        });

        $('.deleteMedicineCategoryModal').on('click', function () {
            $('#deleteMedicineCategoryModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#delete_med_cate_id').val(data[0]);
        });

        // Medicine
        $('.viewMedicineModal').on('click', function () {
            $('#viewMedicineModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#med_id').val(data[0]);
            $('#med_name').val(data[1]);
            $('#med_category').val(data[2]);
            $('#med_price').val(data[3]);
            $('#med_manufacturer').val(data[4]);
            $('#med_quantity').val(data[5]);
            $('#med_status').val(data[6]);
            // $('#created_at').val(data[7]);
            $('#updated_at').val(data[7]);
        });

        $('.editMedicineModal').on('click', function () {
            $('#editMedicineModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#update_med_id').val(data[0]);
            $('#update_med_name').val(data[1]);
            $('#update_med_category').val(data[2]);
            $('#update_price').val(data[3]);
            $('#update_manufacturer').val(data[4]);
            $('#update_quantity').val(data[5]);
        });

        $('.deleteMedicineModal').on('click', function () {
            $('#deleteMedicineModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#delete_med_id').val(data[0]);
        });

        // Blood Donor
        $('.viewBloodDonorModal').on('click', function () {
            $('#viewBloodDonorModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#donor_id').val(data[0]);
            $('#donor_name').val(data[1]);
            $('#donor_blood_group').val(data[2]);
            $('#donor_gender').val(data[3]);
            $('#donor_age').val(data[4]);
            $('#donor_phone').val(data[5]);
            $('#donor_status').val(data[6]);
            $('#updated_at').val(data[7]);
        });

        $('.editBloodDonorModal').on('click', function () {
            $('#editBloodDonorModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#update_donor_id').val(data[0]);
            $('#name').val(data[1]);
            $('#age').val(data[4]);
            $('#phone').val(data[5]);
        });

        $('.deleteBloodDonorModal').on('click', function () {
            $('#deleteBloodDonorModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#delete_donor_id').val(data[0]);
        });

        // Payment
        $('.viewPaymentModal').on('click', function () {
            $('#viewPaymentModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#payment_id').val(data[0]);
            $('#patient_id').val(data[1]);
            $('#title').val(data[2]);
            $('#trans_id').val(data[3]);
            $('#method').val(data[4]);
            $('#amount').val(data[5]);
            $('#payment_status').val(data[6]);
            $('#updated_at').val(data[7]);
        });

        $('.editPaymentModal').on('click', function () {
            $('#editPaymentModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#update_payment_id').val(data[0]);
            $('#update_title').val(data[2]);
            $('#update_amount').val(data[5]);
        });

        $('.deletePaymentModal').on('click', function () {
            $('#deletePaymentModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#delete_payment_id').val(data[0]);
        });

        // Prescription
        $('.viewPrescriptionModal').on('click', function () {
            $('#viewPrescriptionModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#prescription_id').val(data[0]);
            $('#prescription_doctor').val(data[1]);
            $('#prescription_patient').val(data[2]);
            $('#case_history').val(data[3]);
            $('#medication').val(data[4]);
            $('#medication_from_pharmacist').val(data[5]);
            $('#description').val(data[6]);
            $('#updated_at').val(data[7]);
        });

        $('.editPrescriptionModal').on('click', function () {
            $('#editPrescriptionModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#update_prescription_id').val(data[0]);
            $('#update_history').val(data[3]);
            $('#update_medication').val(data[4]);
            $('#update_medication_from_pharmacist').val(data[5]);
            $('#update_description').val(data[6]);
        });

        $('.deletePrescriptionModal').on('click', function () {
            $('#deletePrescriptionModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#delete_prescription_id').val(data[0]);
        });

        // Report
        $('.viewReportModal').on('click', function () {
            $('#viewReportModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#report_id').val(data[0]);
            $('#report_doctor').val(data[1]);
            $('#report_type').val(data[2]);
            $('#report_patient').val(data[3]);
            $('#report_description').val(data[4]);
            $('#created_at').val(data[5]);
            $('#updated_at').val(data[6]);
        });

        $('.editReportModal').on('click', function () {
            $('#editReportModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#update_report_id').val(data[0]);
            $('#update_type').val(data[2]);
            $('#description').val(data[4]);
        });

        $('.deleteReportModal').on('click', function () {
            $('#deleteReportModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#delete_report_id').val(data[0]);
        });

        // Invoice
        $('.viewInvoiceModal').on('click', function () {
            $('#viewInvoiceModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#invoice_id').val(data[0]);
            $('#invoice_patient').val(data[1]);
            $('#invoice_type').val(data[2]);
            $('#invoice_description').val(data[3]);
            $('#invoice_amount').val(data[4]);
            $('#invoice_status').val(data[5]);
            $('#created_at').val(data[6]);
            $('#updated_at').val(data[7]);
        });

        $('.editInvoiceModal').on('click', function () {
            $('#editInvoiceModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#update_invoice_id').val(data[0]);
            $('#update_type').val(data[2]);
            $('#update_description').val(data[3]);
            $('#update_amount').val(data[4]);
        });

        $('.deleteInvoiceModal').on('click', function () {
            $('#deleteInvoiceModal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children('#td').map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#delete_invoice_id').val(data[0]);
        });

    });
</script>
</body>
</html>
