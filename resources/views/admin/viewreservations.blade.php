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

        <div class="container">
            <div class="row">

                <div class="col-md-12 m-5 " >
                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <tr>
                            <th> Gues Name </th>
                            <th> Email </th>
                            <th> Phone </th>
                            <th> Guests</th>
                            <th> Message</th>
                            <th> Date</th>
                            <th> Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $reservation )
                            <tr>

                                <td> {{ $reservation->name }} </td>

                                <td>
                                    {{ $reservation->email }}
                                </td>
                                <td>{{ $reservation->phone }}</td>
                                <td> {{ $reservation->guest }}</td>
                                <td> {{ $reservation->message }}</td>
                                <td> {{ $reservation->date }}</td>
                                <td> {{ $reservation->time }}</td>
                                <td>
                                <a style="text-decoration: none" type="buttton" href="{{ url('editfood', $reservation->id ) }}" class="badge badge-outline-secondary">Edit</a>
                                 <a style="text-decoration: none" type="buttton" href="{{ url('deletefood', $reservation->id ) }}" class="badge badge-outline-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.adminjs')
  </body>
</html>
