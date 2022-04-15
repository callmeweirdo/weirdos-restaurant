<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
        <base href="/public" />

    @include('admin.admincss')
  </head>
  <body>

      <!-- partial:partials/_sidebar.html -->

      <div class="container-scroller">
          @include('admin.navbar')



      <!-- partial -->

        <div class="container">
            <div class="row">
                <div class="col-md-12 my-5">
                    <form action="{{ url('updatefood', $food->id ) }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="input-group mb-2">
                    <input type="text" class="form-control bg-gray-400 text-white" placeholder="title" name="title" value="{{ $food->title }}" >
                    <span class="input-group-text" >Food Title</span>
                </div>
                <div class="input-group mb-2">
                    <input type="number" class="form-control bg-gray-400 text-white" placeholder="price" name="price" value="{{ $food->price }}" >
                    <span class="input-group-text" >Food Price</span>
                </div>

                <div class="">
                    <label for="">food image</label>
                    <img src="/foodimages/{{ $food->image }}" class="img-fluid img-thumbnail my-2 mx-auto d-block rounded-md " style="height:200px;width:200px; " alt="">
                </div>

                <div class="">
                    <span  class="btn btn-secondary mb-3" ><input name="image" type="file" class="form-control hidden bg-gray-400 text-white" value="{{ $food->image }}" ></span>
                </div>
                <textarea name="description" class="form-control text-white h-10 mb-3 ">{{ $food->description }}</textarea>

                <input type="submit" value="Save" class="btn btn-secondary p-3 rounded-md  btn-block align-center ">

            </form>
                </div>
            </div>

        </div>

      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.adminjs')
  </body>
</html>
