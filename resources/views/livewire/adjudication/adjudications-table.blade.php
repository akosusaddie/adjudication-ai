<div>
   <div class="table-responsive">
    <table id="adjudications-table" class="table datatable table-striped table-hover">
        <thead>
            <tr>
                <th></th>
                <th>Disease</th>
                <th>ICD_10 Code</th>
                <th>Search Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($diseases as $disease)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $disease->disease_name }}</td>
                <td>{{ $disease->icd_10_code }}</td>
                <td>{{ $disease->disease_search_type }}</td>
                <td>
                    <a title="View Adjudication Rule Details" href="{{ route('show-adjudication', $disease->disease_id) }}" ><i class="bi bi-eye text-success"></i></a>
                    <a title="Edit Adjudication Rule" href="{{ route('edit-adjudication', $disease->disease_id) }}"><i class="bi bi-pen text-primary"></i></a>
                    <a title="Delete Adjudication Rule"  wire:click.prevent="deleteRecord('{{ $disease->disease_id }}', 'adjudication')"><i class="bi bi-trash text-danger"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
   </div>
   @push('scripts')
<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('recordDeleted', function () {
            Swal.fire({
                icon: 'success',
                title: 'Record deleted successfully.',
                showConfirmButton: false,
                timer: 2000
            });
        });

        Livewire.on('confirmDelete', function (recordId, recordType) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You are about to delete this record.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emit('deleteRecord', recordId, recordType);
                }
            });
        });
    });
</script>
@endpush



</div>
