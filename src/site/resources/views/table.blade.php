<x-livewire-tables::table.cell>
    {{ ($row->id) }}
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    {{ ($row->fullname) }}
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    {{ ($row->email) }}
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    {{ ($row->phone) }}
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    {{ ($row->education_level) }}
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    {{ ($row->field) }}
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    {{ ($row->matricule) }}
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    @if($row->is_usthb)
        <strong style="color: #9fe0a3;">Yes</strong>
    @else
        <strong style="color: #ed6d7a;">No</strong>
    @endif
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    @if($row->is_member)
        <strong style="color: #9fe0a3;">Yes</strong>
    @else
        <strong style="color: #ed6d7a;">No</strong>
    @endif
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    @if($row->accepted)
        <strong style="color: #9fe0a3;">Yes</strong>
        <hr/>
        <button class="btn btn-outline-danger" wire:click="reject({{$row->id}})">Reject</button>
    @else
        <strong style="color: #ed6d7a;">No</strong>
        <hr/>
        <button class="btn btn-outline-success" wire:click="accept({{$row->id}})">Accept</button>
    @endif
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    {{$row->scanned_times}}
</x-livewire-tables::table.cell>
<x-livewire-tables::table.cell>
    {{$row->created_at}}
    <button class="btn btn-outline-danger" wire:click="delete({{$row->id}})">Delete</button>
</x-livewire-tables::table.cell>