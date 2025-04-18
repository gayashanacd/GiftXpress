@section('edit_form')
<div class="card mb-4">
  <div class="card-header">
    Edit Product
  </div>
  <div class="card-body">
    @if($errors->any())
    <ul class="alert alert-danger list-unstyled">
      @foreach($errors->all() as $error)
      <li>- {{ $error }}</li>
      @endforeach
    </ul>
    @endif

    <form method="POST" action="{{ route('admin.product.update', ['id'=> $viewData['product']->getId()]) }}"
      enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="row">
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-form-label">Name:</label>
            <div class="col-lg-10">
              <input name="name" value="{{ $viewData['product']->getName() }}" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-form-label">Price:</label>
            <div class="col-lg-10">
              <input name="price" value="{{ $viewData['product']->getPrice() }}" type="number" step="0.01" class="form-control">
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-form-label">Amount:</label>
            <div class="col-lg-10">
              <input name="amount" value="{{ $viewData['product']->getAmount() }}" type="number" class="form-control">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-form-label">Currency:</label>
            <div class="col-lg-10">
              <input name="currency" value="{{ $viewData['product']->getCurrency() }}" type="text" class="form-control">
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-form-label">Brand:</label>
            <div class="col-lg-10">
              <input name="brand" value="{{ $viewData['product']->getBrand() }}" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-form-label">Category:</label>
            <div class="col-lg-10">
              <input name="category" value="{{ $viewData['product']->getCategory() }}" type="text" class="form-control">
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-form-label">Available Stock:</label>
            <div class="col-lg-10">
              <input name="available_stock" value="{{ $viewData['product']->getAvailableStock() }}" type="number" class="form-control">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-form-label">Is Active:</label>
            <div class="col-lg-10">
              <select name="is_active" class="form-select">
                <option value="1" {{ $viewData['product']->getIsActive() ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$viewData['product']->getIsActive() ? 'selected' : '' }}>No</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <div class="mb-3 row">
        <label class="col-lg-2 col-form-label">Image:</label>
        <div class="col-lg-10">
          <input class="form-control" type="file" name="image">
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Description:</label>
        <textarea class="form-control" name="description" rows="3">{{ $viewData['product']->getDescription() }}</textarea>
      </div>

      <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
  </div>
</div>
@endsection
