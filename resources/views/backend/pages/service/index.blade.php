@extends('backend.layout.master')

@push('meta-title')
        Dashboard | Service Section
@endpush

@push('add-css')
     <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
@endpush


@section('body-content')

 <div class="row">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Service Table</h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_Modal">Add Service</button>
        </div>


        <div class="card-body">
          <div class="table-responsive text-nowrap">
            <table class="table table-bordered" id="serviceTables">
              <thead>
                <tr>
                  <th>#SL.</th>
                  <th>Image</th>
                  <th>Category</th>
                  <th>Title</th>
                  <th>Ratings</th>
                  <th>Whatsapp</th>
                  <th>Pricing Add</th>
                  <th>Projects Add</th>
                  <th>Service Info Add</th>
                  <th>status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>

              </tbody>

            </table>
          </div>
        </div>
    </div>
 </div>


    {{-- Create Service --}}
    <div class="modal fade" id="create_Modal" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel3">Create New Service</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="createForm" enctype="multipart/form-data">
                    @csrf

                        <div class="row">
                            <div class="col mb-3">
                                <label for="title" class="form-label">Service Title</label>
                                <input type="text" id="title" name="title" class="form-control" placeholder="Service Title">
                            </div>

                            <div class="col mb-3">
                                <label for="service_img" class="form-label">Service Image</label>
                                <input class="form-control" type="file" name="service_img" id="service_img">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label for="ratings" class="form-label">Ratings</label>
                                <input type="text" id="ratings" name="ratings" class="form-control" placeholder="ratings">
                            </div>

                            <div class="col mb-3">
                                <label for="whatsapp" class="form-label">Whatsapp Number</label>
                                <input type="text" id="whatsapp" name="whatsapp" class="form-control" placeholder="Whatsapp Number">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label for="Banner_img" class="form-label">Banner Image</label>
                                <input class="form-control" type="file" name="Banner_img" id="Banner_img">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label for="status" class="form-label">Choose Category</label>
                                <select class="form-select" id="category_id" name="category_id">
                                    <option value="">Choose Category</option>
                                    @forelse($categories as $category)
                                        <option value="{{$category->id}}">{{$category->cat_name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                            <div class="col mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status">
                                    <option selected="" disabled value="">Open this select menu</option>
                                    <option value="1">Active</option>
                                    <option value="2">Deactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label for="meta_title" class="form-label">Meta Title</label>
                                <input type="text" id="meta_title" name="meta_title" class="form-control" placeholder="Meta Title.......">
                            </div>

                            <div class="col mb-3">
                                <label for="meta_img" class="form-label">Meta Image</label>
                                <input class="form-control" type="file" name="meta_img" id="meta_img">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label for="meta_description" class="form-label">Meta Description</label>
                                <textarea class="form-control" name="meta_description" id="meta_description" placeholder=""></textarea>
                            </div>

                            <div class="col mb-3">
                                <label for="meta_keyword" class="form-label">Meta Keywords</label>
                                <textarea class="form-control" name="meta_keyword" id="meta_keyword" placeholder=""></textarea>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="short_desc" class="mb-2">Short Description <span
                                    class="text-danger">*</span></label>
                            <textarea id="short_desc" class="form-control" rows="5" name="short_desc" placeholder="Write Here....."></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="long_desc" class="mb-2">Long Description <span
                                    class="text-danger">*</span></label>
                            <textarea id="long_desc" class="form-control" name="long_desc" placeholder="Write Here....." hidden></textarea>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                </form>
            </div>
        </div>
        </div>
    </div>


     {{-- Update Service --}}
    <div class="modal fade" id="editModal" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Update Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="updateForm" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

                    <input type="text" id="up_id" name="id" hidden>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="up_title" class="form-label">Service Title</label>
                            <input type="text" id="up_title" name="title" class="form-control" placeholder="Service Title">
                        </div>

                        <div class="col mb-3">
                            <label for="service_img" class="form-label">Service Image</label>
                            <input class="form-control" type="file" name="service_img" id="service_img">

                            <div id="imageShow"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="up_ratings" class="form-label">Ratings</label>
                            <input type="text" id="up_ratings" name="ratings" class="form-control" placeholder="ratings">
                        </div>

                        <div class="col mb-3">
                            <label for="up_whatsapp" class="form-label">Whatsapp Number</label>
                            <input type="text" id="up_whatsapp" name="whatsapp" class="form-control" placeholder="Whatsapp Number">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="Banner_img" class="form-label">Banner Image</label>
                            <input class="form-control" type="file" name="Banner_img" id="Banner_img">
                        </div>

                        <div id="bannerShow"></div>
                    </div>

                    <div class="row">
                            <div class="col mb-3">
                                <label for="status" class="form-label">Choose Category</label>
                                <select class="form-select" id="up_category_id" name="category_id">
                                    <option value="">Choose Category</option>
                                    @forelse($categories as $category)
                                        <option value="{{$category->id}}">{{$category->cat_name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        <div class="col mb-3">
                            <label for="up_status" class="form-label">Status</label>
                            <select class="form-select" id="up_status" name="status">
                                <option selected="" disabled value="">Open this select menu</option>
                                <option value="1">Active</option>
                                <option value="2">Deactive</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="up_short_desc" class="mb-2">Short Description <span
                                class="text-danger">*</span></label>
                        <textarea id="up_short_desc" class="form-control" rows="5" name="short_desc" placeholder="Write Here....."></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="up_long_desc" class="mb-2">Long Description <span
                                class="text-danger">*</span></label>
                        <textarea id="up_long_desc" class="form-control" name="long_desc" placeholder="Write Here....."></textarea>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="up_meta_title" class="form-label">Meta Title</label>
                            <input type="text" id="up_meta_title" name="meta_title" class="form-control" placeholder="Meta Title.......">
                        </div>

                        <div class="col mb-3">
                            <label for="meta_img" class="form-label">Meta Image</label>
                            <input class="form-control" type="file" name="meta_img" id="meta_img">

                            <div id="metaShow"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="up_meta_description" class="form-label">Meta Description</label>
                            <textarea class="form-control" name="meta_description" id="up_meta_description" placeholder=""></textarea>
                        </div>

                        <div class="col mb-3">
                            <label for="up_meta_keyword" class="form-label">Meta Keywords</label>
                            <textarea class="form-control" name="meta_keyword" id="up_meta_keyword" placeholder=""></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>

@endsection



@push('custom-script')

 <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

 <script src="{{ asset('https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js')}}"></script>

 <script>
     ClassicEditor
         .create(document.querySelector('#long_desc'))
         .then(newEditor => {
             jReq = newEditor;
         })
         .catch(error => {
             console.error(error);
     });


     // Create CKEditor instance on page load
    let editorInstance;
        ClassicEditor
            .create(document.querySelector('#up_long_desc'))
            .then(editor => {
                editorInstance = editor;
            })
            .catch(error => {
                console.error(error);
            });
 </script>

 <script>

     $(document).ready(function(){

        // show all data
        let serviceTables = $('#serviceTables').DataTable({
            order: [
                [0, 'asc']
            ],
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.get-service') }}",
            // pageLength: 30,

            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'service_img',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'categories.cat_name'
                },
                {
                    data: 'title'
                },
                {
                    data: 'ratings'
                },
                {
                    data: 'whatsapp'
                },
                {
                    data: 'pricing_add',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'project_add',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'service_info',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'status',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'action',
                    orderable: false,
                    searchable: false
                }
            ]
        });


        //  Status updates
        $(document).on('click', '#status', function () {
            var id = $(this).data('id');
            var status = $(this).data('status');

            // console.log(id, status);

            $.ajax({
                type: "POST",
                url: "{{ route('admin.service.status') }}",
                data: {
                    // '_token': token,
                    id: id,
                    status: status
                },
                success: function (res) {
                    serviceTables.ajax.reload();

                    if (res.status == 1) {
                        swal.fire(
                        {
                            title: 'Status Changed to Active',
                            icon: 'success'
                        })
                    } else {
                        swal.fire(
                        {
                            title: 'Status Changed to Inactive',
                            icon: 'success'
                        })
                    }
                },
                error: function (err) {
                    console.log(err);
                }

            })
        })


        // Create Service
        $('#createForm').submit(function (e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('admin.service.store') }}",
                data: formData,
                processData: false,  // Prevent jQuery from processing the data
                contentType: false,  // Prevent jQuery from setting contentType
                success: function (res) {
                    // console.log(res);
                    if (res.status === true) {
                        $('#create_Modal').modal('hide');
                        $('#createForm')[0].reset();
                        serviceTables.ajax.reload();

                        swal.fire({
                            title: "Success",
                            text: `${res.message}`,
                            icon: "success"
                        })
                    }
                },
                error: function (err) {
                    console.error('Error:', err);
                    swal.fire({
                        title: "Failed",
                        text: "Something Went Wrong !",
                        icon: "error"
                    })
                }
            });
        })


        // Edit Service
        $(document).on("click", '#editButton', function (e) {
            let id = $(this).attr('data-id');
            console.log(id);

            $.ajax({
                type: 'GET',
                // headers: {
                //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                // },
                url: "{{ url('admin/service') }}/" + id + "/edit",
                processData: false,  // Prevent jQuery from processing the data
                contentType: false,  // Prevent jQuery from setting contentType
                success: function (res) {
                    let data = res.success;
                    // console.log(data)

                    $('#up_id').val(data.id);
                    $('#up_title').val(data.title);
                    $('#up_category_id').val(data.category_id);
                    $('#imageShow').html('');
                    $('#imageShow').append(`
                    <img src={{ asset("`+ data.service_img +`") }} alt="" style="width: 75px;">
                    `);
                    $('#bannerShow').html('');
                    $('#bannerShow').append(`
                    <img src={{ asset("`+ data.Banner_img +`") }} alt="" style="width: 75px;">
                    `);
                    $('#up_ratings').val(data.ratings);
                    $('#up_whatsapp').val(data.whatsapp);
                    $('#up_short_desc').val(data.short_desc);
                    $('#up_status').val(data.status);
                    $('#metaShow').html('');
                    $('#metaShow').append(`
                        <img src={{ asset("`+ data.meta_img +`") }} alt="" style="width: 75px;">
                    `);
                    $('#up_meta_title').val(data.meta_title);
                    $('#up_meta_description').val(data.meta_description);
                    $('#up_meta_keyword').val(data.meta_keyword);

                    // Update CKEditor content
                    editorInstance.setData(data.long_desc ?? "");
                    $('#up_long_desc').attr('hidden', true); // Hide it again if needed

                },
                error: function (error) {
                    console.log('error');
                }

            });
        })


        // Update Service
        $("#updateForm").submit(function (e) {
            e.preventDefault();

            let id = $('#up_id').val();
            let formData = new FormData(this);

            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('admin/service') }}/" + id,
                data: formData,
                processData: false,  // Prevent jQuery from processing the data
                contentType: false,  // Prevent jQuery from setting contentType
                success: function (res) {

                    swal.fire({
                        title: "Success",
                        text: "Service Edited",
                        icon: "success"
                    })

                    $('#editModal').modal('hide');
                    $('#updateForm')[0].reset();
                    serviceTables.ajax.reload();
                },
                error: function (err) {
                    console.error('Error:', err);
                    swal.fire({
                        title: "Failed",
                        text: "Something Went Wrong !",
                        icon: "error"
                    })
                }
            });

        });


        // Delete Service
        $(document).on("click", "#deleteBtn", function () {
            let id = $(this).data('id')

            swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this !",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, delete it!"
            })
            .then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',

                        url: "{{ url('admin/service') }}/" + id,
                        data: {
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        },
                        success: function (res) {
                            Swal.fire({
                                title: "Deleted!",
                                text: `${res.message}`,
                                icon: "success"
                            });

                            serviceTables.ajax.reload();
                        },
                        error: function (err) {
                            console.log('error')
                        }
                    })

                } else {
                    swal.fire('Your Data is Safe');
                }

            })
        })

    });

 </script>

@endpush
