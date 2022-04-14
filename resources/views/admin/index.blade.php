<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    @include('admin.admincss')
  </head>
  <body>
      <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->

      @include('admin.navbar')

      <!-- partial -->

      <!-- page-body-wrapper ends -->

    </div>
    <!-- container-scroller -->
    @include('admin.adminjs')
  </body>
</html>
