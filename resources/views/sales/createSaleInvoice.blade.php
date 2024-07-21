@extends('layouts.dashboard')
@section('content')
<div class="well_N">
    <section class="create_sale_invoice">
        <div class="container-fluid">
        <form id="saleOrderForm" method="POST" action="{{ route('saleorders.store') }}">
                {{@csrf_field()}}
                <div class="row">
                    <div class="col-lg-12 p-i0">
                        <div class="head-box border-line">
                            <h4 class="fs-28 medium">Create Sale Invoice</h4>
                            <button type='button' class="btn btn-primary" onclick="addTicket()">Add Ticket</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="accordion">
                        <div id='ticketContainer'>

                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-3">Save</button>

            </form>
        </div>
    </section>
</div>


<script>
        let ticketCount = 0; // Initialize the ticket count
        let Counter = 1; // Initialize the counter for row sections

        function addTicket() {
            ticketCount++;
            const ticketId = `ticket${ticketCount}`;
            const ticketHtml = `
                <div class="accordion-item" id="${ticketId}">
                    <button class="acc-btn" type="button" aria-expanded="true">
                        <span class="accordion-title">Ticket Booking (Ticket ${ticketCount})</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <div class="row form-box border-line">
                            <div class="col-lg-3">
                                <h6 class="fs-16 semi-bold">Customer Details</h6>
                            </div>
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label">Inv. Date</label>
                                            <input type="date" class="form-control" name="tickets[${ticketCount}][inv_date]">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label">Customer Name</label>
                                            <input type="text" class="form-control" name="tickets[${ticketCount}][customer_name]">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label">Adj. Date</label>
                                            <input type="date" class="form-control" name="tickets[${ticketCount}][adj_date]">
                                        </div>
                                    </div>
                                    <div class="col-lg-3"></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label">Inv. No.</label>
                                            <input type="number" class="form-control" name="tickets[${ticketCount}][inv_no]">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label">SPO</label>
                                            <input type="text" class="form-control" name="tickets[${ticketCount}][spo]">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Remarks</label>
                                            <input type="text" class="form-control" name="tickets[${ticketCount}][remarks]">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-box border-line">
                            <div class="col-lg-3">
                                <h6 class="fs-16 semi-bold">Ticket Details</h6>
                            </div>
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label">Supplier</label>
                                            <select class="form-select" name="tickets[${ticketCount}][supplier]" aria-label="Default select example">
                                                <option selected>Select Supplier</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label">Pax</label>
                                            <input type="number" class="form-control" name="tickets[${ticketCount}][pax]">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label">Pax Type</label>
                                            <select class="form-select" name="tickets[${ticketCount}][pax_type]" aria-label="Default select example">
                                                <option selected>Select Pax Type</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label">PNR</label>
                                            <input type="number" class="form-control" name="tickets[${ticketCount}][pnr]">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label">Ticket No</label>
                                            <input type="number" class="form-control" name="tickets[${ticketCount}][ticket_no]">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label">Airline</label>
                                            <input type="text" class="form-control" name="tickets[${ticketCount}][airline]">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="right pt-20 pb-30">
                                            <button type="button" class="btn btn-primary" onclick="AddMoreDetails('${ticketId}')">+ Add Rows</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-12" id="AppnedHtml_${ticketId}">
                                        <table class="table sale-table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">City</th>
                                                    <th scope="col">FI.No</th>
                                                    <th scope="col">CI</th>
                                                    <th scope="col">Dep. Date</th>
                                                    <th scope="col">Dep. Time</th>
                                                    <th scope="col">Arr. Time</th>
                                                    <th scope="col">Fare Basis</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="text" class="form-control" name="tickets[${ticketCount}][details][0][city]"></td>
                                                    <td><input type="text" class="form-control" name="tickets[${ticketCount}][details][0][fi_no]"></td>
                                                    <td><input type="text" class="form-control" name="tickets[${ticketCount}][details][0][ci]"></td>
                                                    <td><input type="date" class="form-control" name="tickets[${ticketCount}][details][0][dep_date]"></td>
                                                    <td><input type="time" class="form-control" name="tickets[${ticketCount}][details][0][dep_time]"></td>
                                                    <td><input type="time" class="form-control" name="tickets[${ticketCount}][details][0][arr_time]"></td>
                                                    <td><input type="text" class="form-control" name="tickets[${ticketCount}][details][0][fare_basis]"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 pt-30">
                                <h6 class="fs-16 semi-bold">Conjunction Ticket</h6>
                            </div>
                            <div class="col-lg-9 pt-30" id="appendrow_${ticketId}">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">Inv. No.</label>
                                            <input type="number" class="form-control" name="tickets[${ticketCount}][conjunction][0][inv_no]">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">Inv. No.</label>
                                            <input type="number" class="form-control" name="tickets[${ticketCount}][conjunction][1][inv_no]">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="diswrp value_form2 pb-20">
                                            <button type="button" class="btn btn-danger" onclick="removeRowSection('${ticketId}', ${Counter})">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-danger" onclick="removeTicket('${ticketId}')">Remove Ticket</button>
                    </div>
                </div>
            `;

            const ticketContainer = document.getElementById('ticketContainer');
            const div = document.createElement('div');
            div.innerHTML = ticketHtml;
            ticketContainer.appendChild(div);

            // Increment counter for rows within this ticket
            Counter++;
        }


        function AddMoreDetails(ticketId) {
            const ticketElement = document.getElementById(`AppnedHtml_${ticketId}`);
            ticketElement.insertAdjacentHTML('beforeend', `
                <div class="col-lg-12 p-i0" id="RemoveRows_${ticketId}_${Counter}">
                    <table class="table sale-table">
                        <thead>
                            <tr>
                                <th scope="col">City</th>
                                <th scope="col">FI.No</th>
                                <th scope="col">CI</th>
                                <th scope="col">Dep. Date</th>
                                <th scope="col">Dep. Time</th>
                                <th scope="col">Arr. Time</th>
                                <th scope="col">Fare Basis</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="diswrp value_form2 pb-20">
                        <button type="button" class="btn btn-danger" onclick="RemoveSection('${ticketId}', ${Counter})"> 
                            <i class="fa fa-trash-o" aria-hidden="true"></i> 
                        </button>
                    </div>
                </div>
            `);

            // Increment counter for next row
            Counter++;

            // Initialize select2 on new elements (if applicable)
            $('.item_id').select2();
            $('.category').select2();

            // Call functions as needed
            get_all_currenecy();
            calculation_amount();
        }

        function RemoveSection(ticketId, rowId) {
            const element = document.getElementById(`RemoveRows_${ticketId}_${rowId}`);
            if (element) {
                element.parentNode.removeChild(element);
            }
            // Decrement counter (optional, if needed)
            calculation_amount();
        }

        function removeTicket(ticketId) {
            const ticketElement = document.getElementById(ticketId);
            if (ticketElement) {
                ticketElement.parentNode.removeChild(ticketElement);
            }
        }

        function removeRowSection(ticketId, rowId) {
            const rowElement = document.getElementById(`removeRowSection_${ticketId}_${rowId}`);
            if (rowElement) {
                rowElement.parentNode.removeChild(rowElement);
            }
            // Decrement counter (optional, if needed)
            calculation_amount();
        }

        // Dummy functions for example
        function get_all_currenecy() {
            console.log('Getting all currencies...');
        }

        function calculation_amount() {
            console.log('Calculating amount...');
        }
    </script>


@endsection