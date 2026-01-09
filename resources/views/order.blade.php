<x-app-layout>
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Form</div>
                    <div class="card-body">
                        <form action="{{ route('createInvoice') }}" method="POST">
                            @csrf
                            <div class="col-auto my-1">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Concert Type</label>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="selectedOption">
                                    <option selected>Choose...</option>
                                    @foreach($concerts as $concert)
                                        <option value="{{ $concert->id }}", data-type = "{{ $concert->concert_type }}", data-price = "{{ $concert->price }}" 
                                            @if($concert->availability == 0) 
                                                disabled 
                                            @endif
                                        >
                                            {{ $concert->concert_type }}
                                            @if($concert->availability == 0) 
                                                - Sold Out 
                                            @endif
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <input type="number" name="concert_id" id="concert_id">
                            <input type="text" name="item_name" id="item_name">
                            <input type="number" name="price" id="price">

                            <div class="form-group my-3">
                                <label for="">Qty</label>
                                <input type="number" class="form-control" name="qty" id="qty">
                            </div>

                            @error('availability')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="form-group my-3">
                                <label for="">Grand total</label>
                                <input type="number" class="form-control" name="grand_total" id="grand_total">
                            </div>

                            <div class="form-group my-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No Transaction</th>
                            <th>Item Name</th>
                            <th>Status Payment</th>
                            <th>Grand Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $index => $item)
                            <tr>
                                <td>{{ $item->no_transaction }}</td>
                                <td>{{ $item->item_name }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->grand_total }}</td>
                                <td>
                                    <a href="{{ $item->invoice_url }}" target="_blank" class="btn btn-info btn-sm">
                                        Pay!
                                    </a>

                                    <button class="btn btn-success btn-sm my-2" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $index }}">
                                        Show invoice
                                    </button>
                                </td>
                            </tr>

                            <!-- Modal Show Invoice -->
                            <div class="modal fade" id="exampleModal{{ $index }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $index }}"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel{{ $index }}">
                                                Payment : {{ $item->no_transaction }}
                                            </h1>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="{{ $item->invoice_url }}" height="450px" width="100%"></iframe>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" id="closeModal" class="btn btn-secondary"
                                                data-bs-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <!-- Modal Show Invoice -->
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</x-app-layout>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>

<script>
    $(document).on('keyup mouseup', '#qty', function () {
        var price = $('#price').val()
        var qty = $('#qty').val()
        var grandTotal = price * qty
        $('#grand_total').val(grandTotal)
    });

    $(document).ready(function () {
        $('#inlineFormCustomSelect').change(function () {
            var selectedOption = $(this).find('option:selected')    
        
            $('#concert_id').val(selectedOption.val())
            $('#item_name').val(selectedOption.data('type'))
            $('#price').val(selectedOption.data('price'))
            
        });
    });

    $(document).on('click', '#closeModal', function() {
        setTimeout(() => {
            location.reload()
        }, 3000);
    });
</script>
