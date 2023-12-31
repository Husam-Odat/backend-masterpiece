@extends('Dash.Master')

 @section('Title')
 disegory
 @endsection

 @section('content')



                


                <div class="container-xl">
                <div class="table-responsive">
                <div class="table-wrapper">
                        {{-- @if(session('cancel'))
    <div class="alert alert-danger">
        {{ session('cancel') }}
    </div>
@endif --}}
                            @if(Session::has('deleted'))
                            <script>
        Swal.fire("Message", "{{ Session::get('deleted') }}", 'warning', {
        showConfirmButton: true,
        confirmButtonText: "OK",
    });
</script>
                        
            
                            @elseif(Session::has('success'))
 <script>
    Swal.fire("Message", "{{ Session::get('success') }}", 'success', {
        showConfirmButton: true,
        confirmButtonText: "OK",
    });
</script>

@elseif(session('cancel'))

        <script>
            // Display a SweetAlert message
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('cancel') }}',
            });
        </script>

                        @endif

                            <div class="d-flex justify-content-end ">
                                <a href="{{route('discount.create')}}" class="btn py-2 px-lg-4 mb-2 rounded-0 d-none d-lg-block form-submit" style="border-radius: 10px; width: 120px; color: rgb(10, 10, 105);">Add<i class="fa fa-plus  ms-2" ></i></a>
                            </div>
                            <table class="table">
    
                                <thead>
                                    <tr >
                                        <th style="color: rgb(9, 9, 66);">id</th>
                                        <th style="color: rgb(9, 9, 66);">Image</th>
                                        <th style="color: rgb(9, 9, 66);">Name</th>						
                                        <th style="color: rgb(9, 9, 66);">Description</th>
                                        <th style="color: rgb(9, 9, 66);">discountPercent</th>
                                        <th style="color: rgb(9, 9, 66);">active</th>
                                        <th style="color: rgb(9, 9, 66);">Action</th>
                                        <th style="color: rgb(9, 9, 66);">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($alldis as  $alldis)
                                    <tr>
                                        <td>{{ $alldis->id}}</td>
                                        <td><a href="#"><img src="/images/{{ $alldis->img }}" width="100px" height="100px" alt="Avatar"></a></td>              
                                        <td>{{ $alldis->name}}</td>
                                        <td>
                                            <div class="description-preview">
                                                {{ substr($alldis->description, 0, 100) }} <!-- Display first 50 characters -->
                                                @if (strlen($alldis->description) > 100)
                                                <span class="show-more" onclick="showFullDescription(this)"><a href="{{ route('discount.show', $alldis->id) }}" class="show-more">...Show more</a>
                                                </span>
                                                <span class="full-description">{{ substr($alldis->description, 100) }}</span> <!-- Hidden by default -->
                                                @endif
                                            </div>
                                        </td>
                                        <td>{{ $alldis->discountPercent}}</td>
                                        <td>{{ $alldis->active}}</td>
                                        <td>
                                            <div style="display: grid; grid-template-columns: auto auto;">
                                          <button class="btn me-2 update-btn"><a href="{{ route('discount.edit',$alldis->id) }}" class="settings" title="Settings" data-toggle="tooltip" ><i class="fa fa-edit " style="color: rgb(9, 9, 77);  font-size: 18px"></i></a> </button>
                                            <form id="delete-form-{{ $alldis->id }}" method="POST" action="{{ route('discount.destroy', $alldis->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button  type="submit" class="btn btn-danger delete-button" data-delete-id="{{ $alldis->id }}">
                                                    <i class="fa fa-trash text-white" style="font-size: 17px"></i>
                                                </button> 
                                            </form>
                                            </div>
                                        </td>
                                      
    
                                            <!-- <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="fas fa-cog"></i></a>
                                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash-alt"></i></a>   -->
                                      
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                         
                        </div>
                    </div>
                </div>


                <script>
                    function showFullDescription(element) {
                        // Toggle visibility of full description
                        const descriptionPreview = element.parentElement.querySelector('.description-preview');
                        const fullDescription = descriptionPreview.querySelector('.full-description');
                        fullDescription.style.display = 'block';
                
                        // Hide "Show more" button
                        element.style.display = 'none';
                    }
                </script>
                
                <style>
                    .full-description {
                        display: none; /* Hide full description by default */
                    }
                
                    .show-more {
                        color: blue;
                        cursor: pointer;
                    }
                </style>         
                
 @endsection