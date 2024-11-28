{{-- start row  --}}
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Basic example</h4>
                <p class="card-title-desc">For basic styling—light padding and
                    only horizontal dividers—add the base class <code>.table</code> to any
                    <code>&lt;table&gt;</code>.
                </p>
                <div class="table-responsive">
                    <table class="table mb-0">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $item)
                                <livewire:admin.components.pengguna-table-row :key="$item->id" :$item
                                    :iteration="$loop->iteration">
                                @empty
                                    <tr>
                                        <td colspan="4"></td>
                                    </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
{{-- end row --}}
