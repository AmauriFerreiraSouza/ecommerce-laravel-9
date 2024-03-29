<div>

    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exempleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Excluir Categoria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="destroyCategory">

                    <div class="modal-body">
                        <p>Tem certeza que deseja excluir essa categoria.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Sim</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin">

            @if (session('message'))
                <div class="alert alert-success"> {{ session('message') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>
                        Category
                        <a href="{{ url('admin/category/create') }}"
                            class="btn btn-primary btn-smal text-white float-end">Add Category</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td> {{ $category->id }}</td>
                                    <td> {{ $category->name }}</td>
                                    <td> {{ $category->status == 1 ? 'Hidden' : 'Visible' }}</td>
                                    <td>
                                        <a href="{{ url('/admin/category/' . $category->id . '/edit') }}"
                                            class="btn btn-success">EDIT</a>
                                        <a href="#" wire:click="deleteCategory({{$category->id}})" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">DELETE</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
