@push('javascript')
    window.livewire.on('TaskCreated', () => {
        swal({
            title: 'Good job!',
            text: 'Task Created!',
            icon: 'success',
            buttons: false,
            timer: 2500,
        });
    });
@endpush

<div class="content">
    <div class="title m-b-md">
        <form wire:submit.prevent="store">
            <input type="text" wire:model="newTask" autofocus>
        </form>
    </div>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
</div>
