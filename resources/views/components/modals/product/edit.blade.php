<form id="editForm">
    <div class="modal" tabindex="-1" role="dialog" id="editModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Produk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <label for="name">Nama</label>
                    <input type="text" name="name" id="name" class="form-control">
                </label>
            </div>
            <div class="form-group">
                <label for="editProductCategory">Kategori Produk</label>
                <select name="product_category_id" id="editProductCategory" class="form-control">
                    <option value="" selected disabled>Pilih Kategori</option>
                    @foreach($productCategories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </label>
            </div>
            <div class="form-group">
                <label for="price">harga</label>
                    <input type="text" id="price" class="form-control price" name="price">
                </label>
            </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" id="editSubmit">Save changes</button>
          </div>
        </div>
      </div>
    </div>
</form>
