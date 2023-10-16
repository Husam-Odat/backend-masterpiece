@extends('Dash.Master')

@section('Title')
    Edit servicess
@endsection

@section('content')
    <div class="content">

        <div class="main">

            <section class="signup">
                <!-- <img src="images/signup-bg.jpg" alt=""> -->
                <div class="container" style="margin:auto">
                    <div class="signup-content">
                        <form method="post" action="{{ route('services.update', $data['id']) }}" enctype="multipart/form-data"
                            id="signup-form" class="signup-form">
                            @method('PUT')
                            @csrf
                            <h2 class="form-title mb-4"
                                style="color: rgb(10, 10, 105); text-align: center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                                Update services</h2>
                            <div class="form-group">
                                <input type="text" value="{{ $data->name }}" class="form-input" name="name"
                                    id="name" placeholder="name" />
                                <span style="color:red">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span><br><br>

                            </div>
                            <div class="form-group">
                                <input type="text" value="{{ $data->description }}" class="form-input" name="description"
                                    id="description" placeholder="description" />
                                <span style="color:red">
                                    @error('description')
                                        {{ $message }}
                                    @enderror
                                </span><br><br>

                            </div>
                            <div class="form-group">
                                <input type="text" value="{{ $data->SKU }}" class="form-input" name='SKU'
                                    id='SKU' placeholder='SKU' />
                                <span style="color:red">
                                    @error('SKU')
                                        {{ $message }}
                                    @enderror
                                </span><br><br>

                            </div>
                            <div class="form-group">
                                <input type="text" value="{{ $data->categoryId }}" class="form-input" name="categoryId"
                                    id="categoryId" placeholder="categoryId" />
                                <span style="color:red">
                                    @error('categoryId')
                                        {{ $message }}
                                    @enderror
                                </span><br><br>

                            </div>
                            <div class="form-group">
                                <input type="text" value="{{ $data->inventoryId }}" class="form-input" name="inventoryId"
                                    id="inventoryId" placeholder="inventoryId" />
                                <span style="color:red">
                                    @error('inventoryId')
                                        {{ $message }}
                                    @enderror
                                </span><br><br>

                            </div>
                            <div class="form-group">
                                <input type="text" value="{{ $data->discountId }}" class="form-input" name="discountId"
                                    id="name" placeholder="discountId" />
                                <span style="color:red">
                                    @error('discountId')
                                        {{ $message }}
                                    @enderror
                                </span><br><br>

                            </div>
                            <div class="form-group">
                                <input type="text" value="{{ $data->price }}" class="form-input" name="price"
                                    placeholder="price" />
                                <span style="color:red">
                                    @error('price')
                                        {{ $message }}
                                    @enderror
                                </span><br><br>

                            </div>


                            {{-- <div class="form-group">	
                            <input type="text" class="form-input" name="password" id="password" placeholder="price"/>
                           
                        </div> --}}
                            {{-- <div class="form-group">
                            <input type="file" class="form-input" name="image" id="image" accept="image/*">
                        </div> --}}

                            <div class="form-group">
                                <input name="img" value="/images/{{ $data->img }}" type="file"
                                    class="form-control white-input" id="inputPrice">
                                <img src="/images/{{ $data->img }}" width="200px" class="mt-4">
                                <span style="color:red">
                                    @error('img')
                                        {{ $message }}
                                    @enderror
                                </span><br><br>

                            </div>
                            <div class="form-group">
                                <input name="img1" value="/images/{{ $data->img1 }}" type="file"
                                    class="form-control white-input" id="inputPrice">
                                <img src="/images/{{ $data->img1 }}" width="200px" class="mt-4">
                                <span style="color:red">
                                    @error('img1')
                                        {{ $message }}
                                    @enderror
                                </span><br><br>

                            </div>
                            <div class="form-group">
                                <input name="img2" type="file" class="form-control white-input" id="inputPrice">
                                <img src="/images/{{ $data->img2 }}" width="200px" class="mt-4">
                                <span style="color:red">
                                    @error('img2')
                                        {{ $message }}
                                    @enderror
                                </span><br><br>

                            </div>
                            <div class="form-group">
                                <input name="img3" type="file" class="form-control white-input" id="inputPrice">
                                <img src="/images/{{ $data->img3 }}" width="200px" class="mt-4">
                                <span style="color:red">
                                    @error('img3')
                                        {{ $message }}
                                    @enderror
                                </span><br><br>

                            </div>



                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Update"
                                    style="color: rgb(10, 10, 105);" />
                            </div>



                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
