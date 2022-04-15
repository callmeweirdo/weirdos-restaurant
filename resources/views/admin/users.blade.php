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

      <!-- partial:partials/_sidebar.html -->

      <div class="container-scroller">
          @include('admin.navbar')



      <!-- partial -->

      <div class="container mt-5 mx-5 ">
          <div class="table-responsive container">
        <table class="table">
          <thead>
            <tr>
              <th>
                <div class="form-check form-check-muted m-0">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                  </label>
                </div>
              </th>
              <th> Client Name </th>
              <th> Email </th>

              <th> Action </th>
            </tr>
          </thead>
          <tbody>
              @foreach ($users as $user )
                  <tr>
              <td>
                <div class="form-check form-check-muted m-0">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                  </label>
                </div>
              </td>
              <td>
                <span class="ps-2">{{ $user->name }}</span>
              </td>
              <td> {{ $user->email }} </td>

              <td>
                  @if ($user->usertype == "0")
                      <a style="text-decoration: none" type="buttton" href="{{ url('deleteuser',  $user->id ) }}" class="badge badge-outline-danger">Delete</a>
                  @else
                    <div class="badge badge-outline-danger">Not Allowed</div>
                  @endif
              </td>
            </tr>
              @endforeach


          </tbody>
        </table>
      </div>
      </div>


      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.adminjs')
  </body>
</html>
