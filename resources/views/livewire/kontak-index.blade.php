<div>

    @if (session()->has('Sukses'))
        <div class="alert alert-success">
            {{ session('Sukses') }}
        </div>
    @endif


    @if ($statusUpdate)
        <livewire:kontak-update></livewire:kontak-update>
    @else
        <livewire:kontak-create></livewire:kontak-create>
    @endif


    <hr>

    <div class="row">
        <div class="col">
            <select wire:model="paginate" name="" class="form-control w-auto">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
            </select>
        </div>
        <div class="col mb-4">
            <input wire:model="search" type="text" class="form-control" name="search" placeholder="Search...">
        </div>
    </div>


    <div class="row">

        <div class="table-responsive">
            <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Phone</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kontaks as $kontak)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kontak->name }}</td>
                            <td>{{ $kontak->contact }}</td>
                            <td>
                                <button wire:click="getKontak({{ $kontak->id }})"
                                    class="btn btn-sm btn-info text-white">Edit</button>
                                <button wire:click="destroy({{ $kontak->id }})"
                                    class="btn btn-sm btn-danger text-white">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $kontaks->links() }}
        </div>
    </div>
</div>
